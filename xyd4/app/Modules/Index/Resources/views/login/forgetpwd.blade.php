<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1" >
    <title>慕学网首页</title>
    <link rel="stylesheet" type="text/css" href="{{asset('index/css/reset.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('index/css/login.css')}}">
</head>
<body>
<!--提示弹出框-->
<div class="successbox dialogbox" id="jsSuccessTips">
    <h1>成功提交</h1>
    <div class="close jsCloseDialog"><img src="{{asset('index/images/dig_close.png')}}"/></div>
    <div class="cont">
        <h2>您的需求提交成功！</h2>
        <p></p>
    </div>
</div>
<div class="resetpassbox dialogbox" id="jsSetNewPwd">
    <h1>重新设置密码</h1>
    <div class="close jsCloseDialog"><img src="{{asset('index/images/dig_close.png')}}"/></div>
    <p class="green">请输入新密码</p>
    <form id="jsSetNewPwdForm">
        <div class="box">
            <span class="word2">密&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;码</span>
            <input type="password" name="password" id="jsResetPwd" placeholder="请输入新密码"/>
        </div>
        <div class="box">
            <span class="word2">确&nbsp;认&nbsp;密&nbsp;码</span>
            <input type="password" name="password2" id="jsResetPwd2" placeholder="请再次输入新密码"/>
        </div>
        <div class="box">
            <span class="word2">验&nbsp;&nbsp;证&nbsp;&nbsp;码</span>
            <input type="text" name="code" id="jsResetCode" placeholder="请输入手机验证码"/>
        </div>
        <div class="error btns" id="jsSetNewPwdTips"></div>
        <div class="button">
            <input type="hidden" name="mobile" id="jsInpResetMobil" />
            <input id="jsSetNewPwdBtn" type="button" value="提交" />
        </div>
        <input type='hidden' name='csrfmiddlewaretoken' value='mymQDzHWl2REXIfPMg2mJaLqDfaS1sD5' />
    </form>
</div>
<div class="bg" id="dialogBg"></div>
<header>
    <div class="c-box fff-box">
        <div class="wp header-box">
            <p class="fl hd-tips">慕学网，在线学习平台！</p>
            <ul class="fr hd-bar">
                <li>服务电话：<span>33333333</span></li>
                <li><a href="login">[登录]</a></li>
                <li class="active"><a href="/forgetpwd/">[忘记密码]</a></li>
            </ul>
        </div>
    </div>
</header>
<section>
    <div class="c-box bg-box">
        <div class="login-box clearfix">
            <div class="hd-login clearfix">
                <a class="index-logo" href="index"></a>
                <h1>忘记密码</h1>
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
                <h2>忘记密码</h2>
                <form id="jsFindPwdForm" method="post" action="forgetpwd" autocomplete="off">
                    <input type='hidden' name='csrfmiddlewaretoken' value='mymQDzHWl2REXIfPMg2mJaLqDfaS1sD5' />
                    <div class="form-group marb20 ">
                        <label>帐&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;号</label>
                        <input type="text" id="account" name="email" value="None" placeholder="邮箱" />
                    </div>
                    <div class="form-group captcha1 marb38">
                        <label>验&nbsp;证&nbsp;码</label>
                        <img src="/captcha/image/997454dc58799e806f18d21eac296581a8c6ef02/" alt="captcha" class="captcha" /> <input id="id_captcha_0" name="captcha_0" type="hidden" value="997454dc58799e806f18d21eac296581a8c6ef02" /> <input autocomplete="off" id="id_captcha_1" name="captcha_1" type="text" />
                    </div>
                    <div class="error btns" id="jsForgetTips"></div>
                    <input type="hidden" name="sms_type" value="1">
                    <input class="btn btn-green" id="jsFindPwdBtn" type="submit" value="提交" />
                    <p class="form-p" style="bottom:40px;">您还可以<a href="login"> [直接登录]</a></p>
                    <input type='hidden' name='csrfmiddlewaretoken' value='5I2SlleZJOMUX9QbwYLUIAOshdrdpRcy' />
                </form>
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
