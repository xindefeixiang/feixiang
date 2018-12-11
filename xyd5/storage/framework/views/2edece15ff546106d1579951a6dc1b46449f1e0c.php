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
    <script type="text/javascript" src="../../admin/js/WdatePicker.js"></script>
    <link rel="stylesheet" type="text/css" href="../../admin/css/WdatePicker.css" />
</head>
<body>
<!-- 当前位置 -->
<div class="mainBox" style="height:auto!important;height:550px;min-height:550px;" align="center">
    <h3><a href="informationshow" class="actionBtn">我的个人信息</a>添加个人信息</h3>
    <form action="addd" method="post" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
        <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic" >
            <tr>
                <td width="90" align="right">姓名</td>
                <td>
                    <input type="text" name="nickname" value="" size="50" class="inpMain" />
                </td>
            </tr>

            <tr>
                <td align="right">缩略图</td>
                <td>
                    <input type="file" name="img" size="38" class="inpFlie" />
            </tr>

            <tr>
                <td width="90" align="right">时间</td>
                <td>
                    <input name="birthday" value=""   onfocus="WdatePicker({dateFmt:'yyyy-MM-dd HH:mm:ss'})"  />
                </td>
            </tr>

            <tr>
                <td align="right">性别</td>
                <td>
                    <input type="radio" name="sex" value="1"/>男
                    <input type="radio" name="sex" value="0" />女
                </td>
            </tr>
           <tr>
               <td align="right">地址</td>
                <td>
                    <select id="s_province" name="s_province" ></select>  
                    <select id="s_city" name="s_city" ></select>  
                    <select id="s_county" name="s_county"></select>
                    <script class="resources library" src="<?php echo e(asset('admin/js/area.js')); ?>" type="text/javascript"></script>
                    <script type="text/javascript">_init_area();</script>
               <script type="text/javascript">
                   var Gid  = document.getElementById ;
                   var showArea = function(){
                       Gid('show').innerHTML = "<h3>省" + Gid('s_province').value + " - 市" +
                           Gid('s_city').value + " - 县/区" +
                           Gid('s_county').value + "</h3>"
                   }
                   Gid('s_county').setAttribute('onchange','showArea()');
               </script>
                </td>
           </tr>
            <tr>
                <td width="90" align="right">手机号</td>
                <td>
                    <input type="text" name="tel" value="" size="50" class="inpMain" />
                </td>
            </tr>


            <tr><tr>
                <td width="90" align="right">邮箱</td>
                <td>
                    <input type="text" name="email" value="" size="50" class="inpMain" />
                </td>
            </tr>
                <td>
                    <input type="hidden" name="token" value="7e4a88fb" />
                    
                    
                    <input  class="btn" type="submit" value="提交" />
                </td>
            </tr>
        </table>
    </form>
</div>
</body>
</html>
