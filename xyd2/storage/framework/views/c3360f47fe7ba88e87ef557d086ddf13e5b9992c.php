<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>DouPHP 管理中心 - 添加文章 </title>
    <meta name="Copyright" content="Douco Design." />
    <link href="../../admin/css/public.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="../../admin/js/jquery.min.js"></script>
    <script type="text/javascript" src="../../admin/js/global.js"></script>
    <script type="text/javascript" src="../../admin/js/jquery.autotextarea.js"></script>
</head>
<body>
<!-- 当前位置 -->
<div class="mainBox" style="height:auto!important;height:550px;min-height:550px;">
    <h3>添加章节</h3>
    <form action="section-add" id="form" method="post" enctype="multipart/form-data">
        <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
            <input type="hidden" name="class_id" id="class_id" value="<?php echo e($id); ?>">
            <tr>
                <td width="90" align="right">章节编号</td>
                <td>
                    <select name="number" id="number">
                        <?php for($i = 1; $i < 100; $i++): ?>
                            <option value="<?php echo e($i); ?>"><?php echo e($i); ?></option>
                        <?php endfor; ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td width="90" align="right">章节名称</td>
                <td>
                    <input type="text" name="name" id="name" value="" size="80" class="inpMain" />
                </td>
            </tr>
            <tr>
                <td align="right">课程视频</td>
                <td>
                    <input type="file" name="file" id="file" value="" class="inpMain" />上传进度：<span id="span"></span>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="hidden"  name="_token" value="<?php echo e(csrf_token()); ?>">
                    <input class="btn" type="button" value="提交" />
                </td>
            </tr>
        </table>
    </form>
</div>
</body>
<script type="text/javascript" src="<?php echo e(asset('admin/js/jQuery1.7.js')); ?>"></script>
<script src="<?php echo e(asset('admin/layer/layer.js')); ?>"></script>
<script>
    //获取文件
    var file = ''
    //设置参数
    var start = 0;//初始切割位置
    var length = 1024*1024*2;//1024B*1024 = 1MB 分割后每个文件大小
    var end = start + length; //终止分割位置
    var blob; //blob变量存储分割后的文件数据
    var blob_num = 1; //每个文件切片的编号
    var filename = new Date().getTime();
    $(".btn").on("click",function () {
        file = $("#file").get(0).files[0]
        //调用cutFile函数切割函数
        blob = cutFile(file)
        //调用sendFile向后台发送文件
        sendFile(blob, file)
    })
    //切割文件函数
    function cutFile(file) {
        var file_blob=file.slice(start,end)
        //重新设置下次切割文件开始位置
        start=end;
        end = start+length;
        return file_blob;
    }
    //发送文件函数
    function sendFile(blob,file) {
        //定义一个FormDate对象
        var formObj = new FormData()
        formObj.append('number',$("#number").val())
        formObj.append('name',$("#name").val())
        formObj.append('class_id',$("#class_id").val())
        formObj.append('file',blob)
        formObj.append('_token','<?php echo e(csrf_token()); ?>')
        formObj.append('filename',filename+file.name)
        formObj.append('blob_num',blob_num)
        formObj.append('total_blob_num',Math.ceil(file.size/length))
        $.ajax({
            url:'section-file',
            type:'POST',
            data:formObj,
            dataType:'json',
            //必须加下列代码否则出错
            processData:false,
            contentType:false,
            success:function (response) {
                function close() {
                    //当在iframe页面关闭自身时，在iframe页执行以下js脚本
                    var index = parent.layer.getFrameIndex(window.name); //先得到当前iframe层的索引
                    parent.layer.close(index); //再执行关闭
                }
                console.log(response)
                if (response == '1002'){
                    layer.msg('系统出现错误',{'time':1000},function () {
                        setTimeout(close())
                    });
                    return false;
                }else{
                    console.log(parseInt(blob_num/Math.ceil(file.size/length)*100)+'%')
                    $("#span").html(parseInt(blob_num/Math.ceil(file.size/length)*100)+'%')
                    if (start<file.size){
                        var t=setTimeout(function () {
                            blob_num++
                            blob=cutFile(file)
                            sendFile(blob,file)
                        },1000)
                    }else{
                        clearTimeout(t)
                        $("#file").attr('disabled',true)
                        layer.msg('添加成功',{'time':1000},function () {
                            setTimeout(close())
                        });
                    }
                }
            }
        })
    }
</script>
</html>