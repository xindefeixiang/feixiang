<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>DouPHP 管理中心 - 添加班级信息 </title>
    <meta name="Copyright" content="Douco Design." />
    <link href="../../admin/css/public.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="../../admin/js/jquery.min.js"></script>
    <script type="text/javascript" src="../../admin/js/global.js"></script>
    <script type="text/javascript" src="../../admin/js/jquery.autotextarea.js"></script>
</head>
<body>
<!-- 当前位置 -->
<div class="mainBox" style="height:auto!important;height:550px;min-height:550px;">
    <h3><a href="article.html" class="actionBtn">班级列表</a>添加班级信息</h3>
    <form action="roomAdd" method="post" enctype="multipart/form-data">
        <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
            <tr>
                <td align="right">班级号</td>
                <td>
                    <input type="text" name="name" value="" size="50" class="inpMain" />
                </td>
            </tr>
            <tr>
                <td align="right">课程名称</td>
                <td>
                    <select name="class_id">
                        <option value="0" selected>请选择</option>
                        <?php foreach ($class as $v){?>
                        <option value="<?php echo $v['id']?>"><?php echo $v['name']?></option>
                        <?php }?>
                    </select>
                </td>
            </tr>
            <tr>
                <td align="right">开班时间</td>
                <td>
                    <input type="date" name="add_time">
                </td>
            </tr>
            <tr>
                <td align="right">简介</td>
                <td>
                    <input type="text" name="info" value="" size="50" class="inpMain" />
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input name="submit" class="btn" type="submit" value="提交" />
                </td>
            </tr>
        </table>
    </form>
</div>
</body>
</html>