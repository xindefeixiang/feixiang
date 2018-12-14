<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=emulateIE7" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="../../admin/css/style.css" />
    <link rel="stylesheet" type="text/css" href="../../admin/css/WdatePicker.css" />
    <link rel="stylesheet" type="text/css" href="../../admin/css/skin_/form.css" />
    <link href="../../admin/umeditor/themes/default/_../../admin/css/umeditor.css" type="text/css" rel="stylesheet">
    <script type="text/javascript" src="../../admin/js/jquery.js"></script>
    <script type="text/javascript" src="../../admin/js/global.js"></script>
    <script type="text/javascript" src="../../admin/js/jquery.select.js"></script>
    <script type="text/javascript" src="../../admin/js/WdatePicker.js"></script>
    <script type="text/javascript">
        window.UMEDITOR_HOME_URL = '../../admin/umeditor/';  // 请换成绝对路径
    </script>
    <script type="text/javascript" src="../../admin/js/umeditor.config.js"></script>
    <script type="text/javascript" src="../../admin/js/editor_api.js"></script>
    <script type="text/javascript" src="../../admin/umeditor/lang/zh-cn/zh-cn.js"></script>
    <title>基础信息</title>
</head>

<body>
<div id="container">
    <div id="hd">
    </div>
    <form action="Paperadd" method="post" enctype="multipart/form-data">
    <div id="bd">
        <div id="main">
            <h2 class="subfild">
                <span>基本信息</span>
            </h2>
            <div class="subfild-content base-info">
                <div class="kv-item ue-clear">
                    <label><span class="impInfo">*</span>试卷名称</label>
                    <div class="kv-item-content">
                        <input type="text" placeholder="试卷名称" name="paper_name" />
                    </div>
                    <span class="kv-item-tip">标题字数限制在35个字符</span>
                </div>
                <div class="kv-item ue-clear time">
                    <label><span class="impInfo">*</span>发布时间</label>
                    <div class="kv-item-content">
                        <input type="text" placeholder="文章标题" name="add_time" onfocus="WdatePicker({dateFmt:'yyyy-MM-dd HH:mm:ss'})" />
                        <i class="time-icon"></i>
                    </div>
                    <span class="kv-item-tip error">这是一个错误信息</span>
                </div>

                <div class="kv-item ue-clear">
                    <label>出卷老师</label>
                    <div class="kv-item-content">
                        <select name="teacher_id">
                           <?php foreach ($teacher_id as $v){?>
                               <option value="<?php echo $v['id']?>"><?php echo $v['name']?></option>
                            <?php }?>
                        </select>
                    </div>
                    <span class="kv-item-tip success">成功信息</span>
                </div>

                <div class="kv-item ue-clear">
                    <label>是否审核</label>
                    <div class="kv-item-content">
                    	<span class="choose">
                            <span class="checkboxouter">
                                <input type="radio" name="status" value="1"/>
                                <span class="radio" ></span>
                            </span>
                            <span class="text">是</span>
                        </span>
                        <span class="choose">
                            <span class="checkboxouter">
                                <input type="radio" name="status" value="0"/>
                                <span class="radio"></span>
                            </span>
                            <span class="text">否</span>
                        </span>

                    </div>
                    <span class="kv-item-tip">标题字数限制在35个字符</span>
                </div>

            </div>
            <input type="hidden" name="_method" value="POST">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="buttons">
                <input class="button" type="submit" value="添加" />
            </div>
        </div>
    </div>
    </form>
</div>
</body>

<script type="text/javascript">
    $('select').select();
    showRemind('input[type=text],textarea','color5');
    UM.getEditor('content');
</script>
</html>
