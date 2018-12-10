<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>DouPHP 管理中心 - 添加广告 </title>
    <meta name="Copyright" content="Douco Design." />
    <link href="../../admin/css/public.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="../../admin/js/jquery.min.js"></script>
    <script type="text/javascript" src="../../admin/js/global.js"></script>
    <script type="text/javascript" src="../../admin/js/jquery.autotextarea.js"></script>
</head>
<body>
<!-- 当前位置 -->
<div class="mainBox" style="height:auto!important;height:550px;min-height:550px;">
    <h3><a href="advertsshow" class="actionBtn">广告列表</a>修改广告信息</h3>
    <form action="advertsupdate" method="post" enctype="multipart/form-data">
        <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
            <tr>
                <td width="90" align="right">广告介绍</td>
                <td>
                    <input type="text" name="adverts_desc" value="{{$data['adverts_desc']}}" size="80" class="inpMain" />
                </td>
            </tr>
            <tr>
                <td align="right">请选择广告类型</td>
                <td>
                    <select id="s" name="advert_type_id">
                        <option value="{{$data['advert_type_id']}}">{{$data['advert_type_name']}}</option>
                        <option>请选择</option>
                        <?php
                        foreach ($advert_type_name as $k=>$v){
                        ?>
                        <option value="<?php echo $v['id']?>"><?php echo $v['name']?></option>
                        <?php
                        }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td align="right">广告图片</td>
                <td>
                    <input type="file" name="image" size="38" class="inpFlie" />
                    <img src="../../{{$data['image']}}" width="100px" height="100px"></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="hidden" name="id" value="{{$data['id']}}}">
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