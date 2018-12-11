<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1" >
    <title>讲师详情 - 慕学在线网</title>
    <link rel="stylesheet" type="text/css" href="{{asset('index/css/reset.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('index/css/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('index/css/style.css')}}">

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
            <li><a href="teachers_list">授课讲师</a>></li>
            <li>讲师详情</li>
        </ul>
    </div>
</section>


<section>
    <div class="wp butler-detail-box butler-diaryd-box clearfix">
        <div class="fl list">
            <div class="butler_detail_list clearfix">
                <div class="brief">
                    <dl class="des">
                        <dt>
                            <div class="picpic">
                                <img width="100" height="100" src="{{asset('index/media/teacher/2016/11/aobama_CXWwMef.png')}}"/>
                            </div>
                            <div class="btn">
                                <span class="fl btn1 collectionbtn" id="jsLeftBtn">
                                     收藏
                                </span>
                                <span class="fr btn2 shareBtn bdsharebuttonbox"
                                      data-text="授课教师-李老师-慕学网"
                                      data-desc="我在#慕课网#发现了"
                                      data-comment="李老师，工作年限：5年；学历：本科；所在公司：阿里巴巴&nbsp;；经典案例：django入门和深入；flask入门"
                                      data-url="/diary/hk_detail/10/">
                                    <span class="fl">分享</span>
                                    <a href="#" class="bds_more" data-cmd="more"></a>
                                </span>
                            </div>
                        </dt>
                        <dd>
                            <a href="/diary/hk_detail/10/">
                                <h1>bobby<span class="key picbig">金牌讲师</span></h1>
                            </a>
                            <ul class="cont">
                                <li>工作年限：<span>5年</span></li>
                                <li>就职公司：<span>xxx</span></li>
                                <li>工作职位：<span>xxx&nbsp;</span></li>
                                <li>教学特点：<span>xxx</span></li>
                            </ul>
                        </dd>
                    </dl>
                </div>
            </div>
            <div class="butler_detail_cont clearfix">
                <div class="left layout">
                    <div class="head">
                        <ul class="tab_header">
                            <li class="active"><a href="/diary/hk_detail/10/">全部课程</a> </li>
                        </ul>
                    </div>
                    <div class="companycenter">
                        <div class="group_list brief">

                            <div class="module1_5 box">
                                <a href="course_detail">
                                    <img width="214" height="190" class="scrollLoading" src="{{asset('index/media/courses/2016/11/540e57300001d6d906000338-240-135_n0L8vbw.jpg')}}"/>
                                </a>
                                <div class="des">
                                    <a href="course_detail"><h2>django与vuejs实战项目2</h2></a>
                                    <span class="fl">时长：<i class="key">0</i></span>
                                    <span class="fr">学习人数：13</span>
                                </div>
                                <div class="bottom">
                                    <span class="fl">北京大学</span>
                                    <span class="star fr  notlogin" data-favid="15">0</span>
                                </div>
                            </div>

                            <div class="module1_5 box">
                                <a href="course_detail">
                                    <img width="214" height="190" class="scrollLoading" src="{{asset('index/media/courses/2016/12/mysql.jpg')}}"/>
                                </a>
                                <div class="des">
                                    <a href="course_detail"><h2>xadmin进阶开发</h2></a>
                                    <span class="fl">时长：<i class="key">30</i></span>
                                    <span class="fr">学习人数：2</span>
                                </div>
                                <div class="bottom">
                                    <span class="fl">慕课网</span>
                                    <span class="star fr  notlogin" data-favid="15">1</span>
                                </div>
                            </div>


                        </div>
                    </div>
                    <!--<div class="pageturn">-->
                    <!--<ul class="pagelist">-->
                    <!--<li class="active"><a href="?page=1">1</a></li>-->
                    <!--</ul>-->
                    <!--</div>-->
                </div>
            </div>
        </div>
        <div class="fr list">
            <div class="butler_detail_list">
                <div class="right butler-company-box">
                    <div class="head">
                        <h1>慕课网</h1>
                        <p>知名高校，权威教学</p>
                    </div>
                    <div class="pic">
                        <a href="org_detail_homepage">
                            <img width="150" height="80" src="{{asset('index/media/org/2016/11/imooc.png')}}"/>
                        </a>
                    </div>
                    <a href="org_detail_homepage">
                        <h2 class="center">慕课网</h2>
                    </a>
                    <p class="center tell">地址：北京市</p>
                    <a class="btn" id="jsRightBtn">收藏</a>
                </div>
            </div>
            <div class="butler_detail_cont">
                <div class="butler_list_box">
                    <div class="right layout">
                        <div class="head">讲师排行榜</div>

                        <dl class="des">
                            <span class="num fl">1</span>
                            <a href="/org/teacher/detail/1/">
                                <dt>
                                    <img width="50" height="50" class="scrollLoading" src="{{asset('index/media/teacher/2016/11/aobama_CXWwMef.png')}}"/>
                                </dt>
                            </a>
                            <dd>
                                <a href="/org/teacher/detail/1/">
                                    <h1 title="bobby">bobby</h1>
                                </a>
                                <p>工作年限：<span>5年</span></p>
                            </dd>
                        </dl>

                        <dl class="des">
                            <span class="num fl">1</span>
                            <a href="/org/teacher/detail/2/">
                                <dt>
                                    <img width="50" height="50" class="scrollLoading" src="{{asset('index/media/teacher/2016/11/aobama.png')}}"/>
                                </dt>
                            </a>
                            <dd>
                                <a href="/org/teacher/detail/2/">
                                    <h1 title="还是bobby">还是bobby</h1>
                                </a>
                                <p>工作年限：<span>5年</span></p>
                            </dd>
                        </dl>


                    </div>
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
<script src="{{asset('index/js/deco-common.js)}}" type='text/javascript'></script>
<script type="text/javascript" src="{{asset('index/js/plugins/laydate/laydate.js')}}"></script>
<script src="{{asset('index/js/plugins/layer/layer.js')}}"></script>
<script src="{{asset('index/js/plugins/queryCity/js/public.js')}}" type="text/javascript"></script>
<script src="{{asset('index/js/unslider.js')}}" type="text/javascript"></script>
<script src="{{asset('index/js/plugins/jquery.scrollLoading.js')}}"  type="text/javascript"></script>
<script src="{{asset('index/js/deco-common.js')}}"  type="text/javascript"></script>

<script type="text/javascript">
    //收藏分享
    function add_fav(current_elem, fav_id, fav_type){
        $.ajax({
            cache: false,
            type: "POST",
            url:"/org/add_fav/",
            data:{'fav_id':fav_id, 'fav_type':fav_type},
            async: true,
            beforeSend:function(xhr, settings){
                xhr.setRequestHeader("X-CSRFToken", "5I2SlleZJOMUX9QbwYLUIAOshdrdpRcy");
            },
            success: function(data) {
                if(data.status == 'fail'){
                    if(data.msg == '用户未登录'){
                        window.location.href="login";
                    }else{
                        alert(data.msg)
                    }

                }else if(data.status == 'success'){
                    current_elem.text(data.msg)
                }
            },
        });
    }

    $('#jsLeftBtn').on('click', function(){
        add_fav($(this), 1, 3);
    });

    $('#jsRightBtn').on('click', function(){
        add_fav($(this), 1, 2);
    });


</script>


</body>
</html>