<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>DouPHP 管理中心 - 网站管理员 </title>
    <meta name="Copyright" content="Douco Design." />
    <link href="<?php echo e(asset('admin/css/public.css')); ?>" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="<?php echo e(asset('admin/js/jquery.min.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('admin/js/global.js')); ?>"></script>
    <script src="<?php echo e(asset('admin/layer/layer.js')); ?>"></script>
</head>
<body>
    <!-- 当前位置 -->
    <div id="manager" class="mainBox" style="height:auto!important;height:550px;min-height:550px;">
        <h3>章节列表</h3>
        <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
            <tr>
                <th width="30" align="center">编号</th>
                <th align="center">课程章节编号</th>
                <th align="center">课程章节名称</th>
                <th align="center">课程创建时间</th>
                <th align="center">课程视频观看</th>
                <th align="center">操作</th>
            </tr>
            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr align="center">
                    <td><?php echo e($v->id); ?></td>
                    <td><?php echo e($v->number); ?></td>
                    <td><?php echo e($v->name); ?></td>
                    <td><?php echo e($v->created_at); ?></td>
                    <td><a style="color: #00CCFF" href="javascript:void" class="open-video" data-title="<?php echo e($v->number); ?>.<?php echo e($v->name); ?>" data-documents_url="<?php echo e($v->documents_url); ?>">在线查看视频</a></td>
                    <td>删除</td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
     </div>
    <script>
        $(".open-video").on("click",function () {
            var _self = $(this)
            layer.open({
                type: 2,
                title: _self.attr("data-title"),
                area: ['630px', '360px'],
                shade: 0.8,
                closeBtn: 0,
                shadeClose: true,
                content: _self.attr("data-documents_url")
            });
        })

    </script>
</body>
</html>