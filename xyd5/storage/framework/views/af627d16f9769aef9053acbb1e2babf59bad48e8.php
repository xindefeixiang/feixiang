<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1" >
    <title>课程机构列表 - 慕学在线网</title>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('index/css/reset.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('index/css/animate.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('index/css/style.css')); ?>">

    <script src="<?php echo e(asset('index/js/jquery.min.js')); ?>" type="text/javascript"></script>
    <script src="<?php echo e(asset('index/js/jquery-migrate-1.2.1.min.js')); ?>" type="text/javascript"></script>

</head>
<body>
<section class="headerwrap ">
    <header>
        <div  class=" header">
            <div class="top">
                <div class="wp">
                    <div class="fl"><p>服务电话：<b>33333333</b></p></div>
                    <!--登录后跳转-->


                    <!-- <a style="color:white" class="fr registerbtn" href="register.html">注册</a> -->
                    <!-- <a style="color:white" class="fr loginbtn" href="login.html">登录</a>  -->

                    <div class="personal">
                        <dl class="user fr">
                            <dd>bobby<img class="down fr" src="<?php echo e(asset('index/images/top_down.png')); ?>"/></dd>
                            <dt><img width="20" height="20" src="<?php echo e(asset('index/media/image/2016/12/default_big_14.png')); ?>"/></dt>
                        </dl>
                        <div class="userdetail">
                            <dl>
                                <dt><img width="80" height="80" src="<?php echo e(asset('index/media/image/2016/12/default_big_14.png')); ?>"/></dt>
                                <dd>
                                    <h2>django</h2>
                                    <p>bobby</p>
                                </dd>
                            </dl>
                            <div class="btn">
                                <a class="personcenter fl" href="usercenter_info">进入个人中心</a>
                                <a class="fr" href="/logout/">退出</a>
                            </div>
                        </div>
                    </div>


                </div>
            </div>

            <div class="middle">
                <div class="wp">
                    <a href="index"><img class="fl" src="<?php echo e(asset('index/images/logo.jpg')); ?>"/></a>
                    <div class="searchbox fr">
                        <form action="search" method="post">
                        <div class="selectContainer fl">
                            <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>"/>
                            <select name="search_key" style="color: #00ad29;" id="jsSelectOption">
                                <option value="open_course">公开课</option>
                                <option value="teacher">授课教师</option>
                                <option value="org">授课机构</option>
                            </select>
                        </div>
                        <input id="search_keywords" class="fl" type="text" value="" placeholder="请输入搜索内容" name="search"/>

                            <input type="submit" value="" style="background-image:url('<?php echo e(asset("index/images/search_btn.png")); ?>'); width: 40px; height: 38px; margin-top: 0px;
                                   " class="search_btn fr" >
                        </form>
                    </div>

                </div>
            </div>


            <nav>
                <div class="nav">
                    <div class="wp">
                        <ul>
                            <li class="active" ><a href="index">首页</a></li>
                            <li >
                                <a href="course_list">
                                    公开课<img class="hot" src="<?php echo e(asset('index/images/nav_hot.png')); ?>">
                                </a>
                            </li>
                            <li >
                                <a href="teachers_list">授课教师</a>
                            </li>
                            <li ><a href="org_list">授课机构</a></li>
                        </ul>
                    </div>
                </div>
            </nav>

        </div>
    </header>
</section>
<!--crumbs start-->



<div class="banner">
    <div class="wp">
        <div class="fl">
            <div class="imgslide">
                <ul class="imgs">
                    <?php foreach($data as $v){?>
                    <li>
                        <a href="<?php echo $v->url?>">
                            <img width="1200" height="478" src="<?php echo $v->image?>" />
                        </a>
                    </li>
                    <?php }?>



                </ul>
            </div>
            <div class="unslider-arrow prev"></div>
            <div class="unslider-arrow next"></div>
        </div>

    </div>


</div>
<!--banner end-->
<!--feature start-->
<section>
    <div class="wp">
        <ul class="feature">
            <li class="feature1">
                <img class="pic" src="<?php echo e(asset('index/images/feature1.png')); ?>"/>
                <p class="center">专业权威</p>
            </li>
            <li class="feature2">
                <img class="pic" src="<?php echo e(asset('index/images/feature2.png')); ?>"/>
                <p class="center">课程最新</p>
            </li>
            <li class="feature3">
                <img class="pic" src="<?php echo e(asset('index/images/feature3.png')); ?>"/>
                <p class="center">名师授课</p>
            </li>
            <li class="feature4">
                <img class="pic" src="<?php echo e(asset('index/images/feature4.png')); ?>"/>
                <p class="center">数据真实</p>
            </li>
        </ul>
    </div>
</section>
<!--feature end-->
<!--module1 start-->
<section>
    <div class="module">
        <div class="wp">
            <h1>公开课程</h1>
            <div class="module1 eachmod">
                <div class="module1_1 left">
                    <img width="228" height="614" src="<?php echo e(asset('index/images/module1_1.jpg')); ?>"/>
                    <p class="fisrt_word">名师授课<br/>专业权威</p>
                    <a class="more" href="course_list">查看更多课程 ></a>
                </div>
                <div class="right group_list">
                    <div class="module1_2 box">
                        <div class="imgslide2">
                            <ul class="imgs">
                                <?php foreach($class as $vc){?>
                                <li>
                                    <a href="course_detail">
                                        <img width="470" height="300" src="<?php echo $vc->img?>" />
                                    </a>
                                </li>
                                <?php }?>


                            </ul>
                        </div>
                        <div class="unslider-arrow2 prev"></div>
                        <div class="unslider-arrow2 next"></div>
                    </div>
                    <?php foreach ($class  as $key=> $vc){?>
                    <div class="module1_<?php echo $key+3?> box">
                        <a href="course_detail">
                            <img width="233" height="190" src="<?php echo $vc->img?>"/>
                        </a>
                        <div class="des">
                            <a href="course_detail">
                                <h2 title="django入门"><?php echo $vc->name?></h2>
                            </a>
                            <span class="fl">难度：<i class="key">初级</i></span>
                            <span class="fr">学习人数：3</span>
                        </div>
                        <div class="bottom">
                            <span class="fl" title="慕课网">慕课网</span>
                            <span class="star fr">0</span>
                        </div>
                    </div>
                    <?php }?>

                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="module greybg">
        <div class="wp">
            <h1>课程机构</h1>
            <div class="module3 eachmod">
                <div class="module3_1 left">
                    <img width="228" height="463" src="<?php echo e(asset('index/images/module3_1.jpg')); ?>"/>
                    <p class="fisrt_word">名校来袭<br/>权威认证</p>
                    <a class="more" href="org_list">查看更多机构 ></a>
                </div>
                <div class="right">
                    <ul>
                        <?php foreach ($org as $vo){?>
                        <li class="">
                            <a href="org_detail_homepage">
                                <div class="company">
                                    <img width="184" height="100" src="<?php echo $vo->logo?>"/>
                                    <div class="score">
                                        <div class="circle">
                                            <h2>全国知名</h2>
                                        </div>
                                    </div>
                                </div>
                                <p><span class="key" title="慕课网"><?php echo $vo->name?></span></p>
                            </a>
                        </li>
                        <?php }?>


                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<footer>
    <div class="footer">
        <div class="wp">
            <ul class="cont">
                <li class="logo"><a href=""><img src="<?php echo e(asset('index/images/footlogo.png')); ?>"/></a></li>
                <li class="code"><img src="<?php echo e(asset('index/images/code.jpg')); ?>"/><p class="center">扫描关注微信</p></li>
                <li class="third"><img class="fl" src="<?php echo e(asset('index/images/tell.png')); ?>"/><p class="tell">33333333</p><p class="time">周一至周日 9:00-18:00</p></li>
            </ul>

        </div>
        <p class="line"></p>
        <div class="wp clear">
            <span class="fl">? 2016 www.projectsedu.com 慕学在线-在线学习交流平台 保留所有权利</span>
            <span class="fr">copyright ? 2016 ICP备案证书号：蜀ICP备xxxxx号-1</span>
        </div>
    </div>
</footer>

<section>
    <ul class="sidebar">
        <li class="qq">
            <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=2023525077&site=qq&menu=yes"></a>
        </li>
        <li class="totop"></li>
    </ul>
</section>
<script src="<?php echo e(asset('index/js/selectUi.js')); ?>" type='text/javascript'></script>
<script src="<?php echo e(asset('index/js/deco-common.js')); ?>" type='text/javascript'></script>
<script type="text/javascript" src="<?php echo e(asset('index/js/plugins/laydate/laydate.js')); ?>"></script>
<script src="<?php echo e(asset('index/js/plugins/layer/layer.js')); ?>"></script>
<script src="<?php echo e(asset('index/js/plugins/queryCity/js/public.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('index/js/unslider.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('index/js/plugins/jquery.scrollLoading.js')); ?>"  type="text/javascript"></script>
<script src="<?php echo e(asset('index/js/deco-common.js')); ?>"  type="text/javascript"></script>

<script type="text/javascript" src="<?php echo e(asset('index/js/index.js')); ?>"></script>

</body>
</html>
