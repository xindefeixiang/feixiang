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
    <h3><a href="class-list" class="actionBtn">课程列表</a>添加课程</h3>
    <form action="class-add" method="post" enctype="multipart/form-data">
        <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
            <tr>
                <td width="90" align="right">课程名称</td>
                <td>
                    <input type="text" name="name" value="" size="80" class="inpMain" />
                </td>
            </tr>
            <tr>
                <td align="right">课程分类</td>
                <td>
                    <select id="s">
                        <option>请选择</option>
                        @foreach ($data as $v)
                            <option value="{{$v->id}}">{{$v->type_name}}</option>
                        @endforeach
                    </select>
                </td>
            </tr>
            <tr>
                <td align="right">课程简介</td>
                <td>
                    <input type="text" name="intro" value="" size="50" class="inpMain" />
                </td>
            </tr>
            <tr>
                <td align="right">课程主图</td>
                <td>
                    <input type="file" name="img" value="" size="50" class="inpMain" />
                </td>
            </tr>
            <tr>
                <td align="right" valign="top">课程详情</td>
                <td>
                    <textarea id="content" name="details" style="width:500px;height:170px;" class="textArea"></textarea>
                </td>
            </tr>
            <tr>
                <td align="right" valign="top">类型标识</td>
                <td>
                    <input type="radio" value="1" name="sign">公开
                    <input type="radio" value="2" name="sign" checked>私有
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input class="btn" type="submit" value="提交" />
                    <input class="btn" type="reset" value="重置" />
                </td>
            </tr>
        </table>
    </form>
</div>
</body>
<script type="text/javascript" src="{{asset('admin/js/jQuery1.7.js') }}"></script>
<script>
    $(document).on('change',"#s",function(){
        var id = $(this).val();
        var obj = $(this);
        if(id == ""){
            obj.nextAll().remove();
            return false
        }
        $.ajax({
            type: "GET",
            url: "class-type-son",
            data: {
                'id':id
            },
            success: function(data){
                console.log(data)
                data = jQuery.parseJSON(data)
                if (data == ""){
                    return false
                }
                var sel = "<select id='s' name='type_id'>";
                sel+="<option>请选择</option>";
                $(data).each(function (key,obj) {
                        sel+="<option value='"+obj.path+"'>"+obj.type_name+"</option>";
                })
                sel+="</select>";
                 obj.nextAll().remove();
                 obj.after(sel);
            }
        });


    })
</script>
</html>