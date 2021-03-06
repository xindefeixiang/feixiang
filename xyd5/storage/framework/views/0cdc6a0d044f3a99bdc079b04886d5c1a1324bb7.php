<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=emulateIE7" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="../../admin/css/style.css" />
    <link rel="stylesheet" href="../../admin/css/zTreeStyle/zTreeStyle.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="../../admin/css/skin_/nav.css" />
    <script type="text/javascript" src="../../admin/js/jquery.js"></script>
    <script type="text/javascript" src="../../admin/js/global.js"></script>
    <title>底部内容页</title>
</head>

<body>
<div id="container">
    <div id="bd">
        <div class="sidebar">
            <div class="sidebar-bg"></div>
            <i class="sidebar-hide"></i>
            <h2><a href="javascript:;"><i class="h2-icon" title="切换到树型结构"></i><span>安全管理</span></a></h2>
            <ul class="nav">
                <ul class="subnav" style="display: none">
                <li class="subnav-li current" data-id="1"  href="index" ><a href="javascript:;" class="ue-clear"><i class="subnav-icon"></i><span class="subnav-text">首页</span></a></li>
                </ul>
                
                <?php $__currentLoopData = $pidnot0; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pidnot0_child): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php $flag = 2; ?>
                    <li class="nav-li">
                        <a href="javascript:;" class="ue-clear"><i class="nav-ivon"></i><span class="nav-text"><?php echo e($pidnot0_child['name']); ?></span></a>
                        <ul class="subnav">
                            <?php $__currentLoopData = $permission; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $permission_child): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($permission_child['pid'] == $pidnot0_child['id']): ?>
                            <?php
                                $href = substr($permission_child['slug'],strpos($permission_child['slug'],'.')+1);
                                ?>
                            <li class="subnav-li" data-id="<?=$flag?>"  href="<?=$href?>" ><a href="javascript:;" class="ue-clear"><i class="subnav-icon"></i><span class="subnav-text"><?php echo e($permission_child['name']); ?></span></a></li>
                                <?php endif; ?>
                                    <?php $flag++; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                
                 
                    
                    
                        
                        
                        
                        
                        
                    
                
                
                    
                    
                        
                        
                        
                    
                
                 
                    
                    
                        
                        
                        
                    
                    
                
                    
                    
                        
                        
                        
                    
                
                
                    
                    
                        
                        
                        
                    
                
            </ul>
            <div class="tree-list outwindow">
                <div class="tree ztree"></div>
            </div>
        </div>
        <div class="main">
            <div class="title">
                <i class="sidebar-show"></i>
                <ul class="tab ue-clear">

                </ul>
                <i class="tab-more"></i>
                <i class="tab-close"></i>
            </div>
            <div class="content">
            </div>
        </div>
    </div>
</div>

<div class="more-bab-list">
    <ul></ul>
    <div class="opt-panel-ml"></div>
    <div class="opt-panel-mr"></div>
    <div class="opt-panel-bc"></div>
    <div class="opt-panel-br"></div>
    <div class="opt-panel-bl"></div>
</div>
</body>
<script type="text/javascript" src="../../admin/js/nav.js"></script>
<script type="text/javascript" src="../../admin/js/Menu.js"></script>
<script type="text/javascript" src="../../admin/js/jquery.ztree.core-3.5.js"></script>
<script type="text/javascript">
    var menu = new Menu({
        defaultSelect: $('.nav').find('li[data-id="1"]')
    });

    // 左侧树结构加载
    var setting = {};

    var zNodes =[
        { name:"新闻管理",
            children: [
                { name:"新闻视频管理",icon:'../../admin/img/skin_/leftlist.png'},
                { name:"新闻频道管理",icon:'../../admin/img/skin_/leftlist.png'},
                { name:"地方新闻管理",icon:'../../admin/img/skin_/leftlist.png'}
            ]},
        { name:"用户信息设置", open:true,
            children: [
                { name:"首页", checked:true,icon:'../../admin/img/skin_/leftlist.png'},
                { name:"表单",icon:'../../admin/img/skin_/leftlist.png'},
                { name:"表格",icon:'../../admin/img/skin_/leftlist.png'},
                { name:"自定义设置",icon:'../../admin/img/skin_/leftlist.png'}
            ]},
        { name:"工作安排",
            children: [
                { name:"工作安排",icon:'../../admin/img/skin_/leftlist.png'},
                { name:"安排管理",icon:'../../admin/img/skin_/leftlist.png'},
                { name:"类型选择",icon:'../../admin/img/skin_/leftlist.png'},
                { name:"自定义设置",icon:'../../admin/img/skin_/leftlist.png'}
            ]},
        { name:"数据管理",
            children: [
                { name:"工作安排",icon:'../../admin/img/skin_/leftlist.png'},
                { name:"安排管理",icon:'../../admin/img/skin_/leftlist.png'},
                { name:"类型选择",icon:'../../admin/img/skin_/leftlist.png'},
                { name:"自定义设置",icon:'../../admin/img/skin_/leftlist.png'}
            ]}
    ];

    $.fn.zTree.init($(".tree"), setting, zNodes);


    $('.sidebar h2').click(function(e) {
        $('.tree-list').toggleClass('outwindow');
        $('.nav').toggleClass('outwindow');
    });

    $(document).click(function(e) {
        if(!$(e.target).is('.tab-more')){
            $('.tab-more').removeClass('active');
            $('.more-bab-list').hide();
        }
    });
</script>
</html>