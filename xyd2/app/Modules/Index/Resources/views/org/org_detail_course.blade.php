<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1" >
    <title>机构课程列表页</title>
    <link rel="stylesheet" type="text/css" href="{{asset('index/css/reset.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('index/css/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('index/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('index/js/plugins/queryCity/css/cityLayout.css')}}">

    <script src="{{asset('index/js/jquery.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('index/js/jquery-migrate-1.2.1.min.js')}}" type="text/javascript"></script>

</head>
<body>
<section class="headerwrap headerwrap2">
    <header>
        <div  class="header2 header">

            <div class="top">
                <div class="wp">
                    <div class="fl">
                        <p>联系方式：<b>3333333333</b></p>
                    </div>
                    <a style="color:white" class="fr registerbtn" href="register">注册</a>
                    <a style="color:white" class="fr loginbtn" href="login">登录</a>
                </div>
            </div>


            <div class="middle companyheader">
                <div class="wp">
                    <img class="fl" style="width: 112px;height: 103px" src="{{asset('index/media/org/2016/11/imooc.png')}}"/>
                    <div class="head fl">
                        <h1>
                            慕课网
                            <img src="{{asset('index/images/authentication.png')}}"/>
                            <img src="{{asset('index/images/gold.png')}}"/>
                        </h1>
                        <p class="fl">
                            <span class="fl" style="margin-top:8px;color:#848484;">推荐指数： </span>
                            <span class="precision company-credit" data-star-scope="5.0"></span>
                            <span class="key">5.0</span>
                        </p>
                    </div>
                    <div class="btn fr collectionbtn  notlogin
                 "data-favid="22" data-fav-type="1">
                        收藏
                    </div>

                </div>
            </div>
        </div>
    </header>
</section>
<section>
    <div class="wp">
        <ul  class="crumbs">
            <li><a href="index">首页</a>></li>
            <li><a href="org_list">课程机构</a>></li>
            <li>机构课程</li>
        </ul>
    </div>
</section>

<section>
    <div class="wp list personal_list comp">
        <div class="left">
            <ul>
                <li class=""><a href="org_detail_homepage">机构首页</a></li>
                <li class="active2"><a href="org_detail_course">机构课程</a></li>
                <li class=""><a href="org_detail_desc">机构介绍</a></li>
                <li class=""><a href="org_detail_teachers">机构讲师</a></li>
            </ul>
        </div>

        <div class="right companycenter layout" >
            <div class="head">
                <h1>机构课程</h1>
            </div>
            <div class="brief group_list">

                <div class="module1_5 box">
                    <a class="comp-img-box" href="course_detail">

                        <img width="214" height="195" src="{{asset('index/media/courses/2016/11/mysql.jpg')}}"/>
                    </a>
                    <div class="des">
                        <a href="course_detail"><h2>django入门</h2></a>
                        <span class="fl">课时：<i class="key">0</i></span>
                        <span class="fr">学习人数：3</span>
                    </div>
                    <div class="bottom">
                        <span class="fl">慕课网</span>
                        <span class="star fr  notlogin
                            " data-favid="13" data-fav-type="4">
                            0
                        </span>
                    </div>
                </div>

                <div class="module1_5 box">
                    <a class="comp-img-box" href="course_detail">

                        <img width="214" height="195" src="{{asset('index/media/courses/2016/11/540e57300001d6d906000338-240-135_mvvGYHL.jpg')}}"/>
                    </a>
                    <div class="des">
                        <a href="course_detail"><h2>django实战项目</h2></a>
                        <span class="fl">课时：<i class="key">0</i></span>
                        <span class="fr">学习人数：0</span>
                    </div>
                    <div class="bottom">
                        <span class="fl">慕课网</span>
                        <span class="star fr  notlogin
                            " data-favid="13" data-fav-type="4">
                            0
                        </span>
                    </div>
                </div>

                <div class="module1_5 box">
                    <a class="comp-img-box" href="course_detail">

                        <img width="214" height="195" src="{{asset('index/media/courses/2016/12/python错误和异常.jpg')}}"/>
                    </a>
                    <div class="des">
                        <a href="course_detail"><h2>python错误和异常</h2></a>
                        <span class="fl">课时：<i class="key">0</i></span>
                        <span class="fr">学习人数：0</span>
                    </div>
                    <div class="bottom">
                        <span class="fl">慕课网</span>
                        <span class="star fr  notlogin
                            " data-favid="13" data-fav-type="4">
                            0
                        </span>
                    </div>
                </div>

                <div class="module1_5 box">
                    <a class="comp-img-box" href="course_detail">

                        <img width="214" height="195" src="{{asset('index/media/courses/2016/12/mysql.jpg')}}"/>
                    </a>
                    <div class="des">
                        <a href="course_detail"><h2>xadmin进阶开发</h2></a>
                        <span class="fl">课时：<i class="key">30</i></span>
                        <span class="fr">学习人数：2</span>
                    </div>
                    <div class="bottom">
                        <span class="fl">慕课网</span>
                        <span class="star fr  notlogin
                            " data-favid="13" data-fav-type="4">
                            1
                        </span>
                    </div>
                </div>


            </div>
            <div class="pageturn">
                <ul class="pagelist">
                    <li class="active"><a href="?page=1">1</a></li>
                </ul>
            </div>
        </div>


</section>
<!--sidebar start-->
<section>
    <ul class="sidebar">
        <li class="qq">
            <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=2023525077&site=qq&menu=yes"></a>
        </li>
        <li class="totop"></li>
    </ul>
</section>
<!--sidebar end-->
<!--header start-->
</div>
<!--弹出省省市-->
<script src="{{asset('index/js/selectUi.js')}}" type='text/javascript'></script>
<script type="text/javascript" src="{{asset('index/js/plugins/laydate/laydate.js')}}"></script>
<script src="{{asset('index/js/plugins/layer/layer.js')}}"></script>
<script src="{{asset('index/js/plugins/queryCity/js/public.js')}}" type="text/javascript"></script>

<script type="text/javascript" src="{{asset('index/js/plugins/jquery.raty.js')}}"></script>
<script type="text/javascript">
    //收藏分享
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

    $('.collectionbtn').on('click', function(){
        add_fav($(this), 1, 2);
    });

    $(function(){
        var $precision = $('.precision'),
            score = $precision.attr('data-star-scope'),
            option =  {
                half		: true,
                path		: "{{asset('index/images')}}",
                precision	: true,
                size		: 24,
                starOff		: 'g_star.png',
                starOn		: 'r_star.png',
                starHalf	: 'h_star.png',
                hints       : ['极差', '差', '一般', '好评', '非常满意'],
                noRatedMsg  : '暂时还未获得评价！',
                readOnly    : true,
                score       : score
            };
        $precision.raty(option);

        $('.jsFavBtn').on('click', function(){
            var type = $(this).attr('data-fav-type');
            if(type == '1'){
                favPraise($(this), 'fav' ,1 , '收藏');

            }else if(type == '3'){
                favPraise($(this), 'fav' ,3 );

            }else if(type == '11'){
                favPraise($(this), 'pra', 1);

            }else if(type == '4'){
                favPraise($(this), 'fav' ,4 );

            }
        });
    })
</script>


<script type="text/javascript">
    $(function() {
        $('.recordbtn1').click(function(){
            $('.recordbox1').show();
        });
        $('.recordbtn2').click(function(){
            $('.recordbox2').show();
        });

        $('.imgslide').unslider({
            speed: 500,               //  The speed to animate each slide (in milliseconds)
            delay: 3000,              //  The delay between slide animations (in milliseconds)
            complete: function() {},  //  A function that gets called after every slide animation
            keys: true,               //  Enable keyboard (left, right) arrow shortcuts
            dots: true,               //  Display dot navigation
            fluid: false              //  Support responsive design. May break non-responsive designs
        });
        var unslider = $('.imgslide').unslider();
        $('.unslider-arrow').click(function() {
            var fn = this.className.split(' ')[1];
            unslider.data('unslider')[fn]();
        });
    });
</script>

</body>
</html>