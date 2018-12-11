<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1" >
    <title>公开课视频信息 - 慕学在线网</title>
    <link rel="stylesheet" type="text/css" href="{{asset('index/css/reset.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('index/css/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('index/css/style.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('index/css/muke/base.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('index/css/muke/common-less.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('index/css/muke/course/learn-less.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('index/css/aui.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('index/css/mooc.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('index/css/muke/course/common-less.css')}}">

    <script src="{{asset('index/js/jquery.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('index/js/jquery-migrate-1.2.1.min.js')}}" type="text/javascript"></script>

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
        <div class="crumbs">
            <ul>
                <li><a href="index">首页</a>></li>
                <li><a href="course_list">公开课程</a>></li>
                <li><a href="course_detail">课程详情</a>></li>
                <li>章节信息</li>
            </ul>
        </div>
    </div>
</section>


<div id="main">
    <div class="course-infos">
        <div class="w pr">
            <div style="height: 15px" class="path">
            </div>
            <div class="hd">
                <h2 class="l">django与vuejs实战项目2</h2>
            </div>
            <div class="statics clearfix">
                <div class="static-item ">
                    <span class="meta-value"><strong>高级</strong></span>
                    <span class="meta">难度</span>
                    <em></em>
                </div>
                <div class="static-item static-time">
                    <span class="meta-value">0分钟</span>
                    <span class="meta">时长</span>
                    <em></em>
                </div>
                <div class="static-item">
                    <span class="meta-value"><strong>13</strong></span>
                    <span class="meta">学习人数</span>
                    <em></em>
                </div>
            </div>
        </div>
    </div>
    <div class="course-info-main clearfix w has-progress">

        <div class="info-bar clearfix">
            <div class="content-wrap clearfix">
                <div class="content">
                    <div class="mod-tab-menu">
                        <ul class="course-menu clearfix">
                            <li><a class="ui-tabs-active active" id="learnOn"  href="course_video"><span>章节</span></a></li>
                            <li><a id="commentOn" class="" href="course_comment"><span>评论</span></a></li>
                        </ul>
                    </div>
                    <div id="notice" class="clearfix">
                        <div class="l"> <strong>课程公告:</strong> <a  href="javascript:void(0)">Spring的文档以及相关的jar文件已上传</a> </div>
                    </div>

                    <div class="mod-chapters">

                        <div class="chapter chapter-active" >
                            <h3>
                                <strong><i class="state-expand"></i>第一章 基础知识</strong>
                            </h3>
                            <ul class="video">

                                <li>
                                    <a target="_blank" href='/video/3662' class="J-media-item studyvideo">1.1 hello world (0)
                                        <i class="study-state"></i>
                                    </a>
                                </li>

                                <li>
                                    <a target="_blank" href='/video/3662' class="J-media-item studyvideo">1.2 基本概念 (0)
                                        <i class="study-state"></i>
                                    </a>
                                </li>

                                <li>
                                    <a target="_blank" href='/video/3662' class="J-media-item studyvideo">django settings.py 配置 (0)
                                        <i class="study-state"></i>
                                    </a>
                                </li>

                            </ul>
                        </div>

                        <div class="chapter chapter-active" >
                            <h3>
                                <strong><i class="state-expand"></i>第二章 进阶开发</strong>
                            </h3>
                            <ul class="video">

                                <li>
                                    <a target="_blank" href='/video/3662' class="J-media-item studyvideo">2.1 test (0)
                                        <i class="study-state"></i>
                                    </a>
                                </li>

                                <li>
                                    <a target="_blank" href='/video/3662' class="J-media-item studyvideo">2.2 test2 (0)
                                        <i class="study-state"></i>
                                    </a>
                                </li>

                            </ul>
                        </div>

                        <div class="chapter chapter-active" >
                            <h3>
                                <strong><i class="state-expand"></i>第三章 需求分析和数据库设计</strong>
                            </h3>
                            <ul class="video">

                                <li>
                                    <a target="_blank" href='/video/3662' class="J-media-item studyvideo">3.1 django app设计 (0)
                                        <i class="study-state"></i>
                                    </a>
                                </li>

                                <li>
                                    <a target="_blank" href='/video/3662' class="J-media-item studyvideo">3.2 django model设计 (0)
                                        <i class="study-state"></i>
                                    </a>
                                </li>

                                <li>
                                    <a target="_blank" href='/video/3662' class="J-media-item studyvideo">3.3 django users models设计 (0)
                                        <i class="study-state"></i>
                                    </a>
                                </li>

                                <li>
                                    <a target="_blank" href='/video/3662' class="J-media-item studyvideo">3.4 django course models设计 (0)
                                        <i class="study-state"></i>
                                    </a>
                                </li>

                                <li>
                                    <a target="_blank" href='/video/3662' class="J-media-item studyvideo">3.5 organization models设计 (0)
                                        <i class="study-state"></i>
                                    </a>
                                </li>

                            </ul>
                        </div>

                        <div class="chapter chapter-active" >
                            <h3>
                                <strong><i class="state-expand"></i>第四章 django基础知识回顾</strong>
                            </h3>
                            <ul class="video">

                                <li>
                                    <a target="_blank" href='/video/3662' class="J-media-item studyvideo">4.1 django settings配置 (0)
                                        <i class="study-state"></i>
                                    </a>
                                </li>

                                <li>
                                    <a target="_blank" href='/video/3662' class="J-media-item studyvideo">4.2 models设计 (20)
                                        <i class="study-state"></i>
                                    </a>
                                </li>

                            </ul>
                        </div>

                        <div class="chapter chapter-active" >
                            <h3>
                                <strong><i class="state-expand"></i>第五章 通过xadmin搭建后台管理系统</strong>
                            </h3>
                            <ul class="video">

                                <li>
                                    <a target="_blank" href='/video/3662' class="J-media-item studyvideo">5.1 django admin讲解 (10)
                                        <i class="study-state"></i>
                                    </a>
                                </li>

                                <li>
                                    <a target="_blank" href='/video/3662' class="J-media-item studyvideo">5.2 xadmin的安装和注册 (0)
                                        <i class="study-state"></i>
                                    </a>
                                </li>

                            </ul>
                        </div>

                    </div>

                </div>
                <div class="aside r">
                    <div class="bd">

                        <div class="box mb40">
                            <h4>资料下载</h4>
                            <ul class="downlist">

                                <li>
                                    <span ><i class="aui-iconfont aui-icon-file"></i>&nbsp;&nbsp;前端页面</span>
                                    <a href="{{asset('index/media/course/resource/2016/11/media.zip')}}" class="downcode" target="_blank" download="" data-id="274" title="">下载</a>
                                </li>

                            </ul>
                        </div>
                        <div class="box mb40">
                            <h4>讲师提示</h4>
                            <div class="teacher-info">
                                <a href="/u/315464/courses?sort=publish" target="_blank">
                                    <img src='{{asset('index/media/teacher/2016/11/aobama_CXWwMef.png')}}' width='80' height='80' />
                                </a>
                                <span class="tit">
          <a href="/u/315464/courses?sort=publish" target="_blank">bobby</a>
        </span>
                                <span class="job">xxx</span>
                            </div>
                            <div class="course-info-tip">
                                <dl class="first">
                                    <dt>课程须知</dt>
                                    <dd class="autowrap">python基础你需要有</dd>
                                </dl>
                                <dl>
                                    <dt>老师告诉你能学到什么？</dt>
                                    <dd class="autowrap">django的进阶开发</dd>
                                </dl>
                            </div>
                        </div>


                        <div class="cp-other-learned  js-comp-tabs">
                            <div class="cp-header clearfix">
                                <h2 class="cp-tit l">该课的同学还学过</h2>
                            </div>
                            <div class="cp-body">
                                <div class="cp-tab-pannel js-comp-tab-pannel" data-pannel="course" style="display: block">
                                    <!-- img 200 x 112 -->
                                    <ul class="other-list">

                                        <li class="curr">
                                            <a href="course_detail" target="_blank">
                                                <img src="{{asset('index/media/courses/2016/11/540e57300001d6d906000338-240-135_n0L8vbw.jpg')}}" alt="django与vuejs实战项目2">
                                                <span class="name autowrap">django与vuejs实战项目2</span>
                                            </a>
                                        </li>

                                        <li class="curr">
                                            <a href="course_detail" target="_blank">
                                                <img src="{{asset('index/media/courses/2016/12/python面向对象.jpg')}}" alt="python面向对象">
                                                <span class="name autowrap">python面向对象</span>
                                            </a>
                                        </li>

                                        <li class="curr">
                                            <a href="course_detail" target="_blank">
                                                <img src="{{asset('index/media/courses/2016/12/python文件处理.jpg')}}" alt="python文件处理">
                                                <span class="name autowrap">python文件处理</span>
                                            </a>
                                        </li>

                                        <li class="curr">
                                            <a href="course_detail" target="_blank">
                                                <img src="{{asset('index/media/courses/2016/11/mysql.jpg')}}" alt="django入门">
                                                <span class="name autowrap">django入门</span>
                                            </a>
                                        </li>

                                        <li class="curr">
                                            <a href="course_detail" target="_blank">
                                                <img src="{{asset('index/media/courses/2016/12/mysql.jpg')}}" alt="xadmin进阶开发">
                                                <span class="name autowrap">xadmin进阶开发</span>
                                            </a>
                                        </li>

                                    </ul>
                                </div>
                                <div class="cp-tab-pannel js-comp-tab-pannel" data-pannel="plan">
                                    <ul class="other-list">
                                        <li class="curr">
                                            <a href="/course/programdetail/pid/31?src=sug" target="_blank">
                                                <img src="http://img.mukewang.com/56551e6700018b0c09600720-240-135.jpg" alt="Java工程师">
                                                <span class="name autowrap">Java工程师</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>    </div>
            </div>
            <div class="clear"></div>

        </div>

    </div>
</div>

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