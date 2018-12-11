<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1" >
    <title>课程机构列表 - 慕学在线网</title>
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
                            <li >
                                <a href="teachers_list">授课教师</a>
                            </li>
                            <li class="active" ><a href="org_list">授课机构</a></li>
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
            <li>课程机构</li>
        </ul>
    </div>
</section>


<section>
    <div class="wp butler_list_box list">
        <div class='left'>
            <div class="listoptions">
                <ul>
                    <li>
                        <h2>机构类别</h2>
                        <div class="cont">
                            <a href="?city="><span class="active2">全部</span></a>

                            <a href="?ct=pxjg&city="><span class="">培训机构</span></a>

                            <a href="?ct=gx&city="><span class="">高校</span></a>

                            <a href="?ct=gr&city="><span class="">个人</span></a>

                        </div>
                    </li>
                    <li>
                        <h2>所在地区</h2>
                        <div class="more">更多</div>
                        <div class="cont">
                            <a href="?ct="><span class="active2">全部</span></a>

                            <a href="?city=1&ct="><span class="">北京市</span></a>

                            <a href="?city=2&ct="><span class="">上海市</span></a>

                            <a href="?city=3&ct="><span class="">广州市</span></a>

                            <a href="?city=4&ct="><span class="">深圳市</span></a>

                            <a href="?city=5&ct="><span class="">天津市</span></a>

                        </div>
                    </li>
                </ul>
            </div>
            <div class="all">共<span class="key">15</span>家</div>
            <div class="butler_list company list">
                <div class="layout">
                    <div class="head">
                        <ul class="tab_header">
                            <li class="active"><a href="?ct=&city=">全部</a> </li>
                            <li class=""><a href="?sort=students&ct=&city=">学习人数 &#8595;</a></li>
                            <li class=""><a href="?sort=courses&ct=&city=">课程数 &#8595;</a></li>
                        </ul>
                    </div>
                    <?php foreach ($data as $v){?>
                    <dl class="des difdes">
                        <dt>
                            <a href="org_detail_homepage">
                                <img width="200" height="120" class="scrollLoading" data-url="<?php echo $v->logo?>"/>
                            </a>
                        </dt>
                        <dd>
                            <div class="clearfix">
                                <a href="org_detail_homepage">
                                    <h1><?php echo $v->name?></h1>
                                    <div class="pic fl">

                                        <img src="{{asset('index/images/authentication.png')}}"/>

                                        <img src="{{asset('index/images/gold.png')}}"/>

                                    </div>
                                </a>
                            </div>
                            <ul class="cont">
                                <li class="first"><p class="pic9">课程数：<span>1</span></p><p class="c7">学习人数：<span>1000</span></p></li>
                                <li class="c8" style="padding-left:18px;"><?php echo $v->address?></li>
                                <li class="pic10" style="padding-left:18px;">经典课程：

                                    <a href="/diary/19/">c语言基础入门</a>

                                    <a href="/diary/16/">数据库基础</a>

                                </li>
                            </ul>
                        </dd>
                        <div class="buy start_groupbuy jsShowPerfect2" data-id="22"><br/>联系<br/>服务</div>
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





                        {{--<li><a href="?page=3" class="page">3</a></li>--}}




                        {{--<li class="long"><a href="?page=2">下一页</a></li>--}}


                    {{--</ul>--}}
                {{--</div>--}}
            </div>
        </div>
        <div class="right companyright">
            <div class="head">我要学习</div>
            <form class="rightform" id="jsStayForm">
                <div>
                    <img src="{{asset('index/images/rightform1.png')}}"/>
                    <input type="text" name="name" id="companyName" placeholder="名字" maxlength="25" />
                </div>
                <div>
                    <img src="{{asset('index/images/rightform2.png')}}"/>
                    <input type="text" name="mobile" id="companyMobile" placeholder="联系电话"/>
                </div>
                <div>
                    <img src="{{asset('index/images/rightform3.png')}}"/>
                    <input type="text" name="course_name" id="companyAddress" placeholder="课程名" maxlength="50" />
                </div>
                <p class="error company-tips" id="jsCompanyTips"></p>
                <input class="btn" type="text" id="jsStayBtn" value="立即咨询 >" />
                <input type='hidden' name='csrfmiddlewaretoken' value='5I2SlleZJOMUX9QbwYLUIAOshdrdpRcy' />
            </form>
        </div>

        <div class="right companyrank layout">
            <div class="head">授课机构排名</div>


            <dl class="des">
                <dt class="num fl">1</dt>
                <dd>
                    <a href="/company/2/"><h1>慕课网</h1></a>
                    <p>北京市</p>
                </dd>
            </dl>

            <dl class="des">
                <dt class="num fl">2</dt>
                <dd>
                    <a href="/company/2/"><h1>慕课网2</h1></a>
                    <p>深圳市</p>
                </dd>
            </dl>

            <dl class="des">
                <dt class="num fl">3</dt>
                <dd>
                    <a href="/company/2/"><h1>北京大学</h1></a>
                    <p>北京市</p>
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

<script>
    $(function(){
        $('#jsStayBtn').on('click', function(){
            $.ajax({
                cache: false,
                type: "POST",
                url:"/org/add_ask/",
                data:$('#jsStayForm').serialize(),
                async: true,
                success: function(data) {
                    if(data.status == 'success'){
                        $('#jsStayForm')[0].reset();
                        alert("提交成功")
                    }else if(data.status == 'fail'){
                        $('#jsCompanyTips').html(data.msg)
                    }
                },
            });
        });
    })

</script>

</body>
</html>
