<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>DouPHP 管理中心 - 分班管理 </title>
    <meta name="Copyright" content="Douco Design." />
    <link href="../../admin/css/public.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="../../admin/js/jquery.min.js"></script>
    <script type="text/javascript" src="../../admin/js/global.js"></script>
    <script type="text/javascript" src="../../admin/js/jquery.autotextarea.js"></script>
    <style>
        .pagination{font-size:14px;}
        .pagination a {text-decoration: none;}
        .pagination .pxofy{float:left;margin-left: 5px;height:25px;*padding-top:1px;}
        .pagination a, .pagination span {display: block;float: left;height:32px;line-height:32px;padding:0 10px;font-family:Arial, Helvetica, sans-serif !important;}
        .pagination .current {cursor:default;border: solid 1px ;}
        .pagination .prev, .pagination .next{/*line-height:22px;*/}

        .pagination a,.pagination span{color: #3399cc;border:1px solid #dddddd;border-left:none;}
        .pagination .current{color:#fff;background:#26a3de;border:1px solid #2396cc;}
        .pagination .current.prev, .pagination .current.next{color:#B9B9B9;border-color:#D3D3D3;background:#fff;}
        .pagination .prev{ border-top-left-radius:3px;border-bottom-left-radius:3px;}
        .pagination .next{ border-top-right-radius:3px;border-bottom-right-radius:3px;}
        .pagination a:first-child{ border-left:1px solid #ddd;}
        .pagination .pxofy{color: #023054;}
    </style>
</head>
<body style="z-index: -1;">
<!-- 当前位置 -->
<div id="manager" class="mainBox" style="height:auto!important;height:550px;min-height:550px;">
    <h3>未分班学生</h3>
    <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
        <tr>
            <th width="30" align="center">ID</th>
            <th align="center">姓名</th>
            <th align="center">所学课程</th>
            <th align="center">分班</th>
        </tr>
        <?php foreach ($data['student'] as $v){?>
        <tr>
            <td width="30" align="center"><?php  echo $v['id']?></td>
            <td align="center"><?php  echo $v['student_name']?></td>
            <td align="center"><?php  echo $v['class_id']?></td>
            <td align="center"><select name="" id="">
                    <option value="">请选择</option>
                    <?php foreach ($data['room'] as $val){?>
                    <option value="<?php echo $val['id']?>"><?php echo $val['room_name']?></option>
                      <?php }?>
                </select>
                <h3><a href="javascript:;" class="actionBtn" >保存</a></h3>
            </td>
        </tr>
        <?php }?>
    </table>
    <script>
        $('.actionBtn').click(function () {

            var room_id = $(this).parents('h3').prev().val()
            var student_id = $(this).parents('td').prev().prev().prev().text();
            if (confirm("你确定提交吗？")) {
                $.get('Cutdo',{room_id:room_id,student_id:student_id},function (data) {
                    if(data==1){
                        window.location.href="Cut"
                    }
                })
            }
            else {
                alert("点击了取消");
            }

        })
    </script>
    <div class="pagination"></div>
</div>
</body>
<script type="text/javascript" src="../../admin/js/jquery.grid.js"></script>
<script type="text/javascript" src="../../admin/js/jquery.pagination.js"></script>
<script>
    $('.pagination').pagination(100,{
        callback: function(page){
            alert(page);
        },
        display_msg: false
    });
</script>
</html>