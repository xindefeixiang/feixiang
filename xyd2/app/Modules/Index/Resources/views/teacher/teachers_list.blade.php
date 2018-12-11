<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1" >
    <title>课程讲师 - 慕学在线网</title>
    <link rel="stylesheet" type="text/css" href="{{asset('index/css/reset.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('index/css/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('index/css/style.css')}}">

    <script src="{{asset('index/js/jquery.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('index/js/jquery-migrate-1.2.1.min.js')}}" type="text/javascript"></script>
    <style>
        #pull_right{
            text-align:center;
        }
        .pull-right {
            /*float: left!important;*/
        }
        .pagination {
            display: inline-block;
            padding-left: 0;
            margin: 20px 0;
            border-radius: 4px;
        }
        .pagination > li {
            display: inline;
        }
        .pagination > li > a,
        .pagination > li > span {
            position: relative;
            float: left;
            padding: 6px 12px;
            margin-left: -1px;
            line-height: 1.42857143;
            color: #428bca;
            text-decoration: none;
            background-color: #fff;
            border: 1px solid #ddd;
        }
        .pagination > li:first-child > a,
        .pagination > li:first-child > span {
            margin-left: 0;
            border-top-left-radius: 4px;
            border-bottom-left-radius: 4px;
        }
        .pagination > li:last-child > a,
        .pagination > li:last-child > span {
            border-top-right-radius: 4px;
            border-bottom-right-radius: 4px;
        }
        .pagination > li > a:hover,
        .pagination > li > span:hover,
        .pagination > li > a:focus,
        .pagination > li > span:focus {
            color: #2a6496;
            background-color: #eee;
            border-color: #ddd;
        }
        .pagination > .active > a,
        .pagination > .active > span,
        .pagination > .active > a:hover,
        .pagination > .active > span:hover,
        .pagination > .active > a:focus,
        .pagination > .active > span:focus {
            z-index: 2;
            color: #fff;
            cursor: default;
            background-color: #428bca;
            border-color: #428bca;
        }
        .pagination > .disabled > span,
        .pagination > .disabled > span:hover,
        .pagination > .disabled > span:focus,
        .pagination > .disabled > a,
        .pagination > .disabled > a:hover,
        .pagination > .disabled > a:focus {
            color: #777;
            cursor: not-allowed;
            background-color: #fff;
            border-color: #ddd;
        }
        .clear{
            clear: both;
        }

    </style>
</head>
<body>
<section class="headerwrap ">
    <header>
        <div  class=" header">
            <div class="top">
                <div class="wp">
                    <div class="fl"><p>服务电话：<b>33333333</b></p></div>
                    <!--登录后跳转-->


                    <a style="color:white" class="fr registerbtn" href="register">注册</a>
                    <a style="color:white" class="fr loginbtn" href="login">登录</a>



                </div>
            </div>

            <div class="middle">
                <div class="wp">
                    <a href="index"><img class="fl" src="{{asset('index/images/logo.jpg')}}"/></a>
                    <div class="searchbox fr">
                        <form action="search" method="post">
                            <div class="selectContainer fl">
                                <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                                <select name="search_key" style="color: #00ad29;" id="jsSelectOption">
                                    <option value="open_course">公开课</option>
                                    <option value="teacher">授课教师</option>
                                    <option value="org">授课机构</option>
                                </select>
                            </div>
                            <input id="search_keywords" class="fl" type="text" value="" placeholder="请输入搜索内容" name="search"/>

                            <input type="submit" value="" style="background-image:url('{{asset("index/images/search_btn.png") }}'); width: 40px; height: 38px; margin-top: 0px;
                                    " class="search_btn fr" >
                        </form>
                </div>
            </div>


            <nav>
                <div class="nav">
                    <div class="wp">
                        <ul>
                            <li ><a href="index">首页</a></li>
                            <li >
                                <a href="course_list">
                                    公开课<img class="hot" src="{{asset('index/images/nav_hot.png')}}">
                                </a>
                            </li>
                            <li class="active">
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

<section>
    <div class="wp">
        <ul  class="crumbs">
            <li><a href="index">首页</a>></li>
            <li>课程讲师</li>
        </ul>
    </div>
</section>


<section>
    <div class="wp butler_list_box list">
        <div class='left'>
            <div class="butler_list layout">
                <div class="head">
                    <ul class="fl tab_header">
                        <li class="active"><a href="?sort=">全部</a> </li>
                        <li ><a href="?sort=hot">人气 &#8595;</a></li>
                    </ul>
                    <div class="fr butler-num">共<span class="key">9</span>人&nbsp;&nbsp;&nbsp;</div>
                </div>
                <?php foreach($data as $v){?>
                <dl class="des">
                    <dt>
                        <a href="/org/teacher/detail/1/">
                            <div class="picpic">
                                <img width="100" height="100" class="scrollLoading" src="<?php echo $v->img?>"/>
                            </div>
                        </a>
                        <div class="btn">
                            <div class="fr btn2 bdsharebuttonbox"
                                 data-text="授课教师-奥巴马-慕学在线"
                                 data-desc="我在#慕课网#发现了教师“奥巴马”，对学习中的小伙伴很有帮助，一起来看看吧。"
                                 data-comment="奥巴马金牌讲师，从业年限：5年"
                            >
                                <span class="fl">分享</span>
                                <a href="#" class="bds_more" data-cmd="more"></a>
                            </div>
                        </div>
                    </dt>
                    <dd>
                        <a href="/org/teacher/detail/1/">
                            <h1><?php echo $v->name?><span class="key picbig">金牌讲师</span></h1>
                        </a>
                        <ul class="cont">
                            <li>工作年限：<span><?php echo $v->year?></span></li>
                            <li>工作职位：<span><?php echo $v->post?></span></li>
                            <li>就职公司：<span><?php echo $v->company?>&nbsp;</span></li>
                            <li>年龄：<span><?php echo $v->age?></span></li>
                            <li>教学特点：<span><?php echo $v->trait?></span></li>
                        </ul>
                    </dd>
                    <a class="buy buyservice" href="/org/teacher/detail/1/"><br/>查看<br/>详情</a>
                </dl>
                <?php }?>


            </div>
            <div id="pull_right">
                <div class="pull-right">
                    <?php echo $data->links()?>
                </div>
            </div>
            {{--<div class="pageturn">--}}
                {{--<ul class="pagelist">--}}





                    {{--<li class="active"><a href="?page=1">1</a></li>--}}





                    {{--<li><a href="?page=2" class="page">2</a></li>--}}




                    {{--<li class="long"><a href="?page=2">下一页</a></li>--}}


                {{--</ul>--}}
            {{--</div>--}}
        </div>
        <div class="right layout">
            <div class="head">讲师排行榜</div>

            <dl class="des">
                <span class="num fl">1</span>
                <a href="/diary/hk_detail/6/">
                    <dt>
                        <img width="50" height="50" class="scrollLoading"  src="{{asset('index/media/teacher/2016/11/aobama_CXWwMef.png')}}"/>
                    </dt>
                </a>
                <dd>
                    <a href="/diary/hk_detail/6/">
                        <h1 title="bobby">bobby</h1>
                    </a>
                    <p>工作年限：<span>5年</span></p>
                </dd>
            </dl>

            <dl class="des">
                <span class="num fl">1</span>
                <a href="/diary/hk_detail/6/">
                    <dt>
                        <img width="50" height="50" class="scrollLoading"  src="{{asset('index/media/teacher/2016/11/aobama.png')}}"/>
                    </dt>
                </a>
                <dd>
                    <a href="/diary/hk_detail/6/">
                        <h1 title="还是bobby">还是bobby</h1>
                    </a>
                    <p>工作年限：<span>5年</span></p>
                </dd>
            </dl>


        </div>
    </div>
</section>

<footer>
    <div class="footer">
        <div class="wp">
            <ul class="cont">
                <li class="logo"><a href=""><img src="{{asset('index/images/footlogo.png')}}"/></a></li>
                <li class="code"><img src="{{asset('index/images/code.jpg')}}"/><p class="center">扫描关注微信</p></li>
                <li class="third"><img class="fl" src="{{asset('index/images/tell.png')}}"/><p class="tell">33333333</p><p class="time">周一至周日 9:00-18:00</p></li>
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
<script src="{{asset('index/js/selectUi.js')}}" type='text/javascript'></script>
<script src="{{asset('index/js/deco-common.js')}}" type='text/javascript'></script>
<script type="text/javascript" src="{{asset('index/js/plugins/laydate/laydate.js')}}"></script>
<script src="{{asset('index/js/plugins/layer/layer.js')}}"></script>
<script src="{{asset('index/js/plugins/queryCity/js/public.js')}}" type="text/javascript"></script>
<script src="{{asset('index/js/unslider.js')}}" type="text/javascript"></script>
<script src="{{asset('index/js/plugins/jquery.scrollLoading.js')}}"  type="text/javascript"></script>
<script src="{{asset('index/js/deco-common.js')}}"  type="text/javascript"></script>

</body>
</html>
