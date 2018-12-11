<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>DouPHP 管理中心 - 添加讲师 </title>
    <meta name="Copyright" content="Douco Design." />
    <link href="../../admin/css/public.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="../../admin/js/jquery.min.js"></script>
    <script type="text/javascript" src="../../admin/js/global.js"></script>
    <script type="text/javascript" src="../../admin/js/jquery.autotextarea.js"></script>
</head>
<body>
<!-- 当前位置 -->
<div class="mainBox" style="height:auto!important;height:550px;min-height:550px;">
    <h3><a href="teachershow" class="actionBtn">讲师列表</a>添加讲师</h3>
    <form action="teacherin" method="post" enctype="multipart/form-data">
        <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
            <tr>
                <td width="90" align="right">讲师姓名</td>
                <td>
                    <input type="text" name="name" value="" size="80" class="inpMain" />
                </td>
            </tr>
            <tr>
                <td align="right">请选择机构</td>
                <td>
                    <select id="s" name="argan_id">
                        <option>请选择</option>
                        <?php
                        foreach ($argan as $k=>$v){
                        ?>
                        <option value="<?php echo $v['id']?>"><?php echo $v['name']?></option>
                        <?php
                        }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td align="right">讲师头像</td>
                <td>
                    <input type="file" name="img" size="38" class="inpFlie" />
                    <img src="images/icon_no.png"></td>
            </tr>
            <tr>
                <td align="right">讲师年龄</td>
                <td>
                    <input type="text" name="age" value="" size="50" class="inpMain" />
                </td>
            </tr>
            <tr>
                <td align="right">工作经验</td>
                <td>
                    <input type="text" name="year" value="" size="50" class="inpMain" />
                </td>
            </tr>
            <tr>
                <td align="right">讲师职位</td>
                <td>
                    <input type="text" name="post" value="" size="50" class="inpMain" />
                </td>
            </tr>
            <tr>
                <td align="right">公司</td>
                <td>
                    <input type="text" name="company" value="" size="50" class="inpMain" />
                </td>
            </tr>
            <tr>
                <td align="right" valign="top">讲课特点</td>
                <td>
                    <textarea id="content" name="trait" style="width:780px;height:400px;" class="textArea"></textarea>
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
</html>