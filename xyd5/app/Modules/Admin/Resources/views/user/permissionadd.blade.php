<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=emulateIE7" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="../../admin/css/style.css" />
    <link rel="stylesheet" type="text/css" href="../../admin/css/WdatePicker.css" />
    <link rel="stylesheet" type="text/css" href="../../admin/css/skin_/form.css" />
    <link href="{{asset('admin/umeditor/themes/default/_css/umeditor.css')}}" type="text/css" rel="stylesheet">
    <script type="text/javascript" src="../../admin/js/jquery.js"></script>
    <script type="text/javascript" src="../../admin/js/global.js"></script>
    <script type="text/javascript" src="../../admin/js/jquery.select.js"></script>
    <script type="text/javascript" src="../../admin/js/WdatePicker.js"></script>
    <script type="text/javascript">
        window.UMEDITOR_HOME_URL = '../../admin/umeditor/';  // 请换成绝对路径
    </script>
    <script type="text/javascript" src="../../admin/js/umeditor.config.js"></script>
    <script type="text/javascript" src="{{asset('admin/js/editor_api.js')}}"></script>
    <script type="text/javascript" src="../../admin/umeditor/lang/zh-cn/zh-cn.js"></script>
    <title>基础信息</title>
</head>

<body>
<div style="position: absolute;top: 10%;left: 50%;color: red;font-family: 楷体;font-weight: bolder;line-height: 30px">
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <font color="red" style="font-family: 幼圆">{{ $error }}</font><br>
        @endforeach
    @endif
</div>
<div id="container">
    <div id="hd">
    </div>
    <div id="bd">
        <form action="permissionadddata" method="post">
            {{ csrf_field() }}
        <div id="main">
            <h2 class="subfild">
                <span>权限信息</span>
            </h2>
            <div class="subfild-content base-info">
                <div class="kv-item ue-clear">
                    <label><span class="impInfo">*</span>权限名称</label>
                    <div class="kv-item-content">
                        <input type="text" placeholder="权限名称" name="name" />
                    </div>
                    <span class="kv-item-tip">管理名称</span>
                </div>
                <div class="kv-item ue-clear">
                    <label><span class="impInfo">*</span>具体操作</label>
                    <div class="kv-item-content">
                        <input type="text" placeholder="具体操作" name="slug" />
                    </div>
                    <span class="kv-item-tip">管理名称.操作</span>
                </div>
            </div>

            <h2 class="subfild">
                <span>描述</span>
            </h2>

            <div class="subfild-content remarkes-info">
                <div class="kv-item ue-clear">
                    <label><span class="impInfo">*</span>权限描述</label>
                    <div class="kv-item-content">
                        <textarea placeholder="文章内容" name="description" id="content" style="width:800px;height:240px;"></textarea>
                    </div>
                </div>
            </div>

            <div class="buttons">
                <input class="button" type="submit" value="确认修改" />
            </div>
        </div>
        </form>
    </div>
</div>
</body>

<script type="text/javascript">
    $('select').select();
    showRemind('input[type=text],textarea','color5');
    UM.getEditor('content');
</script>
</html>
