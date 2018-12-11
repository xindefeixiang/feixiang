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
    <h3><a href="advertsadd" class="actionBtn">添加广告</a>广告列表</h3>
    <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
        <tr>
            <th width="30" align="center">广告简介</th>
            <th align="center">广告图片</th>
            <th align="center">广告链接</th>
            <th align="center">创建时间</th>
            <th align="center">修改时间</th>
            <th align="center">广告状态</th>
            <th align="center">操作</th>
        </tr>
        <?php foreach($data['data'] as $key=>$value){ ?>
        <tr>
            <td align="center"><?= $value['advert_desc'] ?></td>
            <td align="center"><img src="../../<?= $value['image'] ?>" width="100px" height="100px"></td>
            <td align="center"><?= $value['url'] ?></td>
            <td align="center"><?= $value['created_at'] ?></td>
            <td align="center"><?= $value['updated_at'] ?></td>
            <td align="center"><?= $value['is_status'] ?></td>
            <td align="center">
                <a href="advertsup?id=<?= $value['id'] ?>">编辑</a> |
                <a href="advertsdel?id=<?= $value['id'] ?>">删除</a>
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