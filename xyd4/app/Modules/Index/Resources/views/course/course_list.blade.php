<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1" >
    <title>公开课列表 - 慕学在线网</title>
    <link rel="stylesheet" type="text/css" href="{{asset('index/css/reset.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('index/css/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('index/css/style.css')}}">
    <link rel="stylesheet" href="text/css" href="{{asset('index/css/page.css')}}">
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


                    <div class="personal">
                        <dl class="user fr">
                            <dd>bobby<img class="down fr" src="{{asset('index/images/top_down.png')}}"/></dd>
                            <dt><img width="20" height="20" src="{{asset('index/media/image/2016/12/default_big_14.png')}}"/></dt>
                        </dl>
                        <div class="userdetail">
                            <dl>
                                <dt><img width="80" height="80" src="{{asset('index/media/image/2016/12/default_big_14.png')}}"/></dt>
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
                    <a href="usercenter_message">
                        <div class="msg-num"> <span id="MsgNum">0</span></div>
                    </a>



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
            </div>


            <nav>
                <div class="nav">
                    <div class="wp">
                        <ul>
                            <li ><a href="index">首页</a></li>
                            <li class="active">
                                <a href="course_list">
                                    公开课<img class="hot" src="{{asset('index/images/nav_hot.png')}}">
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

<section>
    <div class="wp">
        <ul  class="crumbs">
            <li><a href="index">首页</a>></li>
            <li>公开课</li>
        </ul>
    </div>
</section>


<section>
    <div class="wp">
        <div class="list" style="margin-top:0;">
            <div class="left layout">
                <div class="head">
                    <ul class="tab_header">
                        <li class="active"><a href="?sort=">最新 </a></li>
                        <li ><a href="?sort=hot">最热门</a></li>
                        <li ><a href="?sort=students">参与人数</a></li>
                    </ul>
                </div>
                <div id="inWindow">
                    <div class="tab_cont " id="content">
                        <div class="group_list">
                            <?php foreach($data as $v){?>
                            <div class="box">
                                <a href="course_detail">
                                    <img width="280" height="350" class="scrollLoading" src="<?php echo $v->img?>"/>
                                </a>
                                <div class="des">
                                    <a href="course_detail">
                                        <h2><?php echo $v->name?></h2>
                                    </a>
                                    <span class="fl">时长：<i class="key">30</i></span>
                                    <span class="fr">学习人数：2&nbsp;&nbsp;</span>
                                </div>
                                <div class="bottom">
                                    <a href="course_detail"><span class="fl">来自慕课网</span></a>
                                    <span class="star fr  notlogin
                                        " data-favid="15">
                                        1
                                    </span>
                                </div>
                            </div>
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
                </div>
            </div>
            <div class="right layout">
                <div class="head">热门课程推荐</div>
                <div class="group_recommend">

                    <dl>
                        <dt>
                            <a target="_blank" href="">
                                <img width="240" height="220" class="scrollLoading" src="{{asset('index/media/courses/2016/11/540e57300001d6d906000338-240-135_n0L8vbw.jpg')}}"/>
                            </a>
                        </dt>
                        <dd>
                            <a target="_blank" href=""><h2> django与vuejs实战项目2</h2></a>
                            <span class="fl">难度：<i class="key">高级</i></span>
                        </dd>
                    </dl>

                    <dl>
                        <dt>
                            <a target="_blank" href="">
                                <img width="240" height="220" class="scrollLoading" src="{{asset('index/media/courses/2016/12/python面向对象.jpg')}}"/>
                            </a>
                        </dt>
                        <dd>
                            <a target="_blank" href=""><h2> python面向对象</h2></a>
                            <span class="fl">难度：<i class="key">中级</i></span>
                        </dd>
                    </dl>

                    <dl>
                        <dt>
                            <a target="_blank" href="">
                                <img width="240" height="220" class="scrollLoading" src="{{asset('index/media/courses/2016/12/python文件处理.jpg')}}"/>
                            </a>
                        </dt>
                        <dd>
                            <a target="_blank" href=""><h2> python文件处理</h2></a>
                            <span class="fl">难度：<i class="key">中级</i></span>
                        </dd>
                    </dl>



                </div>
            </div>
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
