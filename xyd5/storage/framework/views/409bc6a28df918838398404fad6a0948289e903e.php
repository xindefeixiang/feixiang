<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>DouPHP 管理中心 - 网站管理员 </title>
    <meta name="Copyright" content="Douco Design." />
    <link href="../../admin/css/public.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="../../admin/js/jquery.min.js"></script>
    <script type="text/javascript" src="../../admin/js/global.js"></script>
</head>
<body>
<!-- 当前位置 -->
<div id="manager" class="mainBox" style="height:auto!important;height:550px;min-height:550px;">
    <h3><a href="teacheradd" class="actionBtn">学生添加</a>学生列表</h3>
    <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
        <tr>
            <th width="30" align="center">用户名</th>
            <th align="center">学生姓名</th>
            <th align="center">性别</th>
            <th align="center">年龄</th>
            <th align="center">头像</th>
            <th align="center">选择的机构</th>
            <th align="center">选择的课程</th>
            <th align="center">操作</th>
        </tr>
        <?php foreach($data['data'] as $key=>$value){ ?>
        <tr>
            <td align="center"><?= $value['user_name'] ?></td>
            <td align="center"><?= $value['student_name'] ?></td>
            <td align="center"><?= $value['student_sex'] ?></td>
            <td align="center"><?= $value['student_age'] ?></td>
            <td align="center"><img src="../../<?= $value['student_img'] ?>" width="100px" height="100px"></td>
            <td align="center"><?= $value['argan_name'] ?></td>
            <td align="center"><?= $value['class_name'] ?></td>
            <td align="center">
                <a href="studentup?id=<?= $value['id'] ?>">编辑</a> |
                <a href="studentdel?id=<?= $value['id'] ?>">删除</a>
            </td>
        </tr>
        <?php } ?>
    </table>
    <div align="center">
    <a href="<?php echo e($data['first_page_url']); ?>">第一页</a>
    <a href="<?php echo e($data['prev_page_url']); ?>">上一页</a>
    <a href="<?php echo e($data['next_page_url']); ?>">下一页</a>
    <a href="<?php echo e($data['last_page_url']); ?>">最后一页</a>
    </div>
</div>
</body>
</html>