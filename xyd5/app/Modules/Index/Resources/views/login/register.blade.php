<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1" >
    <title>慕学在线注册</title>
    <link rel="stylesheet" type="text/css" href="{{asset('index/css/reset.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('index/css/login.css')}}">

</head>
<body>


<div class="bg" id="dialogBg"></div>
<header>
    <div class="c-box fff-box">
        <div class="wp header-box">
            <p class="fl hd-tips">慕学在线，在线学习平台！</p>
            <ul class="fr hd-bar">
                <li>服务电话：<span>4001008031</span></li>
                <li><a href="login">[登录]</a></li>
                <li class="active"><a href="register">[注册]</a></li>
            </ul>
        </div>
    </div>
</header>
<section>
    <div class="c-box bg-box">
        <div class="login-box clearfix">
            <div class="hd-login clearfix">
                <a class="index-logo" href="index"></a>
                <h1>用户注册</h1>
                <a class="index-font" href="index">回到首页</a>
            </div>
            <div class="fl slide">
                <div class="imgslide">
                    <ul class="imgs">

                        <li><a href=""><img width="483" height="472" src="{{asset('index/images/57a801860001c34b12000460.jpg')}}" /></a></li>

                        <li><a href=""><img width="483" height="472" src="{{asset('index/images/57a801860001c34b12000460.jpg')}}" /></a></li>

                        <li><a href=""><img width="483" height="472" src="{{asset('index/images/57a801860001c34b12000460.jpg')}}" /></a></li>

                    </ul>
                </div>
                <div class="unslider-arrow prev"></div>
                <div class="unslider-arrow next"></div>
            </div>
            <div class="fl form-box">
                <div class="tab">
                    <!--<h2 class="active">手机注册</h2>-->
                    <h2>邮箱注册</h2>
                </div>
                <div class="tab-form">
                    <form id="email_register_form" method="post" action="register" autocomplete="off">
                        <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                        <div class="form-group marb20 ">
                            <label>邮&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;箱</label>
                            <input  type="text" id="id_email" name="email" placeholder="请输入您的邮箱地址" />
                        </div>
                        <div class="form-group marb8 ">
                            <label>密&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;码</label>
                            <input type="password" id="id_password" name="password"   placeholder="请输入6-20位非中文字符密码" />
                        </div>
                        <div class="form-group marb8 captcha1 ">
                            <label>验&nbsp;证&nbsp;码</label>
                            <img src="{{captcha_src()}}" style="cursor: pointer" onclick="this.src='{{captcha_src()}}'+Math.random()">
                            <input autocomplete="off" id="id_captcha_1" name="captcha_1" type="text" />
                        </div>
                        <div class="error btns" id="jsEmailTips"></div>
                        <div class="auto-box marb8">
                        </div>
                        <input class="btn btn-green" id="jsEmailRegBtn" type="submit" value="注册并登录" />
                    </form>
                </div>
                <p class="form-p">已有账号？<a href="login">[立即登录]</a></p>
            </div>
        </div>
    </div>
</section>

<input id="isLogin" type="hidden" value="False"/>
<script src="{{asset('index/js/jquery.min.js')}}" type="text/javascript"></script>
<script src="{{asset('index/js/unslider.js')}}" type="text/javascript"></script>
<script src="{{asset('index/js/validateDialog.js')}}"  type="text/javascript"></script>
<script src="{{asset('index/js/login.js')}}"  type="text/javascript"></script>
</body>
</html>