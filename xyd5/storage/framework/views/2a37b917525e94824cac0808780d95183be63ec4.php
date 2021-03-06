<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1" >
    <title>个人信息- 慕学在线网</title>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('index/css/reset.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('index/css/animate.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('index/css/style.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('index/js/plugins/queryCity/css/cityLayout.css')); ?>">

    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('index/css/lq.datetimepick.css')); ?>"/>



    <script src="<?php echo e(asset('index/js/jquery.min.js')); ?>" type="text/javascript"></script>
    <script src="<?php echo e(asset('index/js/jquery-migrate-1.2.1.min.js')); ?>" type="text/javascript"></script>

</head>
<body>
<section class="headerwrap headerwrap2">
    <header>
        <div  class="header2 header">
            <div class="top">
                <div class="wp">
                    <div class="fl"><p>服务电话：<b>33333333</b></p></div>
                    <!--登录后跳转-->


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
                    <a href="usercenter_message">
                        <div class="msg-num"><span id="MsgNum">0</span></div>
                    </a>


                </div>
            </div>

            <div class="middle">
                <div class="wp">
                    <a href="index"><img class="fl" src="<?php echo e(asset('index/images/logo2.png')); ?>"/></a>
                    <h1>我的慕学网</h1>
                </div>
            </div>
        </div>
    </header>
</section>



<!--crumbs start-->

<section>
    <div class="wp">
        <ul  class="crumbs">
            <li><a href="index">首页</a>></li>
            <li><a href="/user/home/">个人中心</a>></li>
            <li>个人信息</li>
        </ul>
    </div>
</section>

<section>
    <div class="wp list personal_list">
        <div class="left">
            <ul>
                <li class="active2 tiao"><a href="usercenter_info">个人资料</a></li>
                <li class="tiao"><a href="usercenter_mycourse">我的课程</a></li>
                <li class="tiao"><a href="usercenter_fav_course">我的收藏</a></li>
                <li class="tiao">
                    <a href="usercenter_message" style="position: relative;">
                        我的消息
                    </a>
                </li>
            </ul>
        </div>


        <div class="right">
            <div class="personal_des ">
                <div class="head" style="border:1px solid #eaeaea;">
                    <h1>个人信息</h1>
                </div>
                <div class="inforcon">
                    <div class="left" style="width:242px;">
                        <iframe id='frameFile' name='frameFile' style='display: none;'></iframe>
                        <form class="clearfix" id="jsAvatarForm" enctype="multipart/form-data" autocomplete="off" method="post" action="" target='frameFile'>
                            <label class="changearea" for="avatarUp">
                            <span id="avatardiv" class="pic">
                                <img width="100" height="100" class="js-img-show" id="avatarShow" src="<?php echo e(asset('index/media/image/2016/12/default_big_14.png')); ?>"/>
                            </span>
                                <span class="fl upload-inp-box" style="margin-left:70px;">
                                <span class="button btn-green btn-w100" id="jsAvatarBtn">修改头像</span>
                                <input type="file" name="image" id="avatarUp" class="js-img-up"/>
                            </span>
                            </label>
                            <input type='hidden' name='csrfmiddlewaretoken' value='799Y6iPeEDNSGvrTu3noBrO4MBLv6enY' />
                        </form>
                        <div style="border-top:1px solid #eaeaea;margin-top:30px;">
                            <a class="button btn-green btn-w100" id="jsUserResetPwd" style="margin:80px auto;width:100px;">修改密码</a>
                        </div>
                    </div>
                    <form class="perinform" id="jsEditUserForm" autocomplete="off" action="save" method="post">
                        <ul class="right">
                            <li>昵&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;称：
                                <input type="text" name="nick_name" id="nick_name" value="<?php echo $data->nick;?>" maxlength="10">
                                <i class="error-tips"></i>
                            </li>
                            <li>生&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;日：
                                <input type="text" id="birth_day" name="birday" value="<?php echo $data->birthday;?>" readonly="readonly"/>
                                <i class="error-tips"></i>
                            </li>
                            <li>性&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;别：
                                <?php if($data->sex == '女'): ?>
                                <label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio"  name="gender" value="男" >男</label>
                                <label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="gender" value="女" checked="checked">女</label>
                                <?php elseif($data->sex == '男'): ?>
                                <label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio"  name="gender" value="男" checked="checked">男</label>
                                <label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="gender" value="女">女</label>
                                <?php elseif($data->sex == ''): ?>
                                <label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio"  name="gender" value="男" >男</label>
                                <label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="gender" value="女">女</label>
                                <?php endif; ?>
                            </li>
                            <li class="p_infor_city">地&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;址：
                                <input type="text" name="address" id="address" placeholder="请输入你的地址" value="<?php echo $data->address;?>" maxlength="10">
                                <i class="error-tips"></i>
                            </li>
                            <li>手&nbsp;&nbsp;机&nbsp;&nbsp;号：
                                <input type="text" name="mobile" id="mobile" placeholder="请输入你的手机号码" value="<?php echo $data->phonenumber;?>" maxlength="10">
                            </li>
                            <li>邮&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;箱：
                                <input class="borderno" type="text" name="email" readonly="readonly" value="<?php echo $data->email;?>"/>
                                <span class="green changeemai_btn">[修改]</span>
                            </li>
                            <li class="button heibtn">
                                <input type="hidden" name="id" value="<?php echo $data->id?>">
                                <input type="hidden" name="_token" value="<?php echo csrf_token();?>">
                                <!-- <input type="submit" id="jsEditUserBtn" value="保存"> -->
                                <input type="submit" value="保存">
                            </li>
                        </ul>
                        <input type='hidden' name='csrfmiddlewaretoken' value='799Y6iPeEDNSGvrTu3noBrO4MBLv6enY' />
                    </form>
                </div>
            </div>
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

<div class="dialog" id="jsDialog">
    <div class="successbox dialogbox" id="jsSuccessTips">
        <h1>成功提交</h1>
        <div class="close jsCloseDialog"><img src="<?php echo e(asset('index/images/dig_close.png')); ?>"/></div>
        <div class="cont">
            <h2>您的需求提交成功！</h2>
            <p></p>
        </div>
    </div>
    <!--提示弹出框-->
    <div class="bidtips dialogbox promptbox" id="jsComfirmDialig">
        <h1>确认提交</h1>
        <div class="close jsCloseDialog"><img src="<?php echo e(asset('index/images/dig_close.png')); ?>"/></div>
        <div class="cont">
            <h2>您确认提交吗？</h2>
            <dd class="autoTxtCount">
                <div class="button">
                    <input type="button" class="fl half-btn" value="确定" id="jsComfirmBtn"/>
                    <span class="fr half-btn jsCloseDialog">取消</span>
                </div>
            </dd>
        </div>
    </div>
    <div class="resetpwdbox dialogbox" id="jsResetDialog">
        <h1>修改密码</h1>
        <div class="close jsCloseDialog"><img src="<?php echo e(asset('index/images/dig_close.png')); ?>"/></div>
        <div class="cont">
            <form id="jsResetPwdForm" autocomplete="off" action="" method="post">
                <div class="box">
                    <span class="word2" >新&nbsp;&nbsp;密&nbsp;&nbsp;码</span>
                    <input type="password" id="pwd" name="password1" placeholder="6-20位非中文字符"/>
                </div>
                <div class="box">
                    <span class="word2" >确定密码</span>
                    <input type="password" id="repwd" name="password2" placeholder="6-20位非中文字符"/>
                </div>
                <div class="error btns" id="jsResetPwdTips"></div>
                <div class="button">
                    <input type="hidden" name="id" value="<?php echo $data->id?>">
                    <input type="hidden" name="_token" value="<?php echo csrf_token();?>">
                    <input id="jsResetPwdBtn" type="button" value="提交" />
                </div>
                <input type='hidden' name='csrfmiddlewaretoken' value='DaP7IUKm9FA9nELA9YUlYYWpyIDdCiIP' />
                <input type='hidden' name='csrfmiddlewaretoken' value='799Y6iPeEDNSGvrTu3noBrO4MBLv6enY' />
            </form>
        </div>
    </div>
    <div class="dialogbox changeemai1 changephone" id="jsChangeEmailDialog">
        <h1>修改邮箱</h1>
        <div class="close jsCloseDialog"><img src="<?php echo e(asset('index/images/dig_close.png')); ?>"/></div>
        <p>请输入新的邮箱地址</p>
        <form id="jsChangeEmailForm" autocomplete="off">
            <div class="box">
                <input class="fl change_email" name="email" id="jsChangeEmail" type="text" placeholder="输入重新绑定的邮箱地址">
            </div>
            <div class="box">
                <input class="fl email_code" type="text" id="jsChangeEmailCode" name="code" placeholder="输入邮箱验证码">
                <input class="getcode getting" type="button" id="jsChangeEmailCodeBtn" value="获取验证码">
            </div>
            <div class="error btns change_email_tips" id="jsChangeEmailTips" >请输入...</div>
            <div class="button">
                <input class="changeemai_btn" id="jsChangeEmailBtn" type="button" value="完成"/>
            </div>
            <input type='hidden' name='csrfmiddlewaretoken' value='DaP7IUKm9FA9nELA9YUlYYWpyIDdCiIP' />
            <input type='hidden' name='csrfmiddlewaretoken' value='799Y6iPeEDNSGvrTu3noBrO4MBLv6enY' />
            <input type="hidden" name="_token" value="<?php echo csrf_token();?>">
            <input type="hidden" name="id" value="<?php echo $data->id?>">
        </form>
    </div>

    <div  class="noactivebox dialogbox" id="jsUnactiveForm" >
        <h1>邮件验证提示</h1>
        <div class="close jsCloseDialog"><img src="<?php echo e(asset('index/images/dig_close.png')); ?>"/></div>
        <div class="center">
            <img src="<?php echo e(asset('index/images/send.png')); ?>"/>
            <p>我们已经向您的邮箱<span class="green" id="jsEmailToActive">12@13.com</span>发送了邮件，<br/>为保证您的账号安全，请及时验证邮箱</p>
            <p class="a"><a class="btn" id="jsGoToEmail" target="_blank" href="http://mail.qq.com">去邮箱验证</a></p>
            <p class="zy_success upmove"></p>
            <p style="display: none;" class="sendE2">没收到，您可以查看您的垃圾邮件和被过滤邮件，也可以再次发送验证邮件（<span class="c5c">60s</span>）</p>
            <p class="sendE">没收到，您可以查看您的垃圾邮件和被过滤邮件，<br/>也可以<span class="c5c green" id="jsSenEmailAgin" style="cursor: pointer;">再次发送验证邮件</span></p>
        </div>
    </div>
    <div class="resetpassbox dialogbox" id="jsSetNewPwd">
        <h1>重新设置密码</h1>
        <div class="close jsCloseDialog"><img src="<?php echo e(asset('index/images/dig_close.png')); ?>"/></div>
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
            <input type='hidden' name='csrfmiddlewaretoken' value='DaP7IUKm9FA9nELA9YUlYYWpyIDdCiIP' />
        </form>
    </div>
    <div class="forgetbox dialogbox">
        <h1>忘记密码</h1>
        <div class="close jsCloseDialog"><img src="<?php echo e(asset('index/images/dig_close.png')); ?>"/></div>
        <div class="cont">
            <form id="jsFindPwdForm" autocomplete="off">
                <input type='hidden' name='csrfmiddlewaretoken' value='DaP7IUKm9FA9nELA9YUlYYWpyIDdCiIP' />
                <div class="box">
                    <span class="word2" >账&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;号</span>
                    <input type="text" id="account" name="account" placeholder="手机/邮箱"/>
                </div>
                <div class="box">
                    <span class="word3">验证码</span>
                    <input autocomplete="off" class="form-control-captcha find-password-captcha" id="find-password-captcha_1" name="captcha_f_1" placeholder="请输入验证码" type="text" /> <input class="form-control-captcha find-password-captcha" id="find-password-captcha_0" name="captcha_f_0" placeholder="请输入验证码" type="hidden" value="5f3c00e47fb1be12d2fd15b9a860711597721b3f" /> &nbsp;<img src="/captcha/image/5f3c00e47fb1be12d2fd15b9a860711597721b3f/" alt="captcha" class="captcha" />
                </div>
                <div class="error btns" id="jsForgetTips"></div><!--忘记密码错误-->
                <div class="button">
                    <input type="hidden" name="sms_type" value="1">
                    <input id="jsFindPwdBtn" type="button" value="提交" />
                </div>
            </form>
        </div>
    </div>
</div>
<div class="bg" id="dialogBg"></div>


<script src="<?php echo e(asset('index/js/selectUi.js')); ?>" type='text/javascript'></script>
<script type="text/javascript" src="<?php echo e(asset('index/js/plugins/laydate/laydate.js')); ?>"></script>
<script src="<?php echo e(asset('index/js/plugins/layer/layer.js')); ?>"></script>
<script src="<?php echo e(asset('index/js/plugins/queryCity/js/public.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('index/js/unslider.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('index/js/plugins/jquery.scrollLoading.js')); ?>"  type="text/javascript"></script>
<script src="<?php echo e(asset('index/js/validateDialog.js')); ?>"  type="text/javascript"></script>
<script src="<?php echo e(asset('index/js/deco-common.js')); ?>"  type="text/javascript"></script>

<script src="<?php echo e(asset('index/js/plugins/jquery.upload.js')); ?>" type='text/javascript'></script>
<script src="<?php echo e(asset('index/js/validate.js')); ?>" type="text/javascript"></script>
<!-- <script src="<?php echo e(asset('index/js/deco-user.js')); ?>"></script>
 -->
<script type="text/javascript">
        //个人资料头像
    $('.js-img-up').uploadPreview({ Img: ".js-img-show", Width: 94, Height: 94 ,Callback:function(){
        $('#jsAvatarForm').submit();
    }});


$(".tiao").click(function(){
    $(this).parent().attr("class","active2");
})

  $('#jsChangeEmailCodeBtn').on('click', function(){
        sendCodeChangeEmail($(this));
    });
      function sendCodeChangeEmail($btn){
        var email=$('#jsChangeEmail').val();
    var verify = verifyDialogSubmit(
        [
          {id: '#jsChangeEmail', tips: Dml.Msg.epMail, errorTips: Dml.Msg.erMail, regName: 'email', require: true}
        ]
    );
    if(!verify){
       return;
    }
    $.ajax({
        cache: false,
        type: "get",
        dataType:'json',
        url:"sendemail_code",
        data:$('#jsChangeEmailForm').serialize(),
        // data:{email:email},
        beforeSend:function(XMLHttpRequest){
            $btn.val("发送中...");
            $btn.attr('disabled',true);
        },
        success: function(data){
            console.log(data)
            if(data.email){
                Dml.fun.showValidateError($('#jsChangeEmail'), data.email);
            }else if(data.status == 'success'){
                Dml.fun.showErrorTips($('#jsChangeEmailTips'), "邮箱验证码已发送");
            }else if(data.status == 'failure'){
                 Dml.fun.showValidateError($('#jsChangeEmail'), "邮箱验证码发送失败");
            }else if(data.status == 'success'){
            }
        },
        complete: function(XMLHttpRequest){
            $btn.val("获取验证码");
            $btn.removeAttr("disabled");
        }
    });

}
    $('.changeemai_btn').click(function(){
        Dml.fun.showDialog('#jsChangeEmailDialog', '#jsChangePhoneTips' ,'jsChangeEmailTips');
    });

 $('#jsChangeEmailBtn').on('click', function(){
        changeEmailSubmit($(this));
    });
function changeEmailSubmit($btn){
var verify = verifyDialogSubmit(
        [
          {id: '#jsChangeEmail', tips: Dml.Msg.epMail, errorTips: Dml.Msg.erMail, regName: 'email', require: true},
        ]
    );
    if(!verify){
       return;
    }
    $.ajax({
        cache: false,
        type: 'post',
        dataType:'json',
        url:"update_email",
        data:$('#jsChangeEmailForm').serialize(),
        beforeSend:function(XMLHttpRequest){
            $btn.val("发送中...");
            $btn.attr('disabled',true);
            $("#jsChangeEmailTips").html("验证中...").show(500);
        },
        success: function(data) {
            console.log(data);
            if(data.email){
                Dml.fun.showValidateError($('#jsChangeEmail'), data.email);
            }else if(data.status == "success"){
                Dml.fun.showErrorTips($('#jsChangePhoneTips'), "邮箱信息更新成功");
                setTimeout(function(){location.reload();},1000);
            }else{
                 Dml.fun.showValidateError($('#jsChangeEmail'), "邮箱信息更新失败");
            }
        },
        complete: function(XMLHttpRequest){
            $btn.val("完成");
            $btn.removeAttr("disabled");
        }
    });
}

//修改密码
   $('#jsUserResetPwd').on('click', function(){
        Dml.fun.showDialog('#jsResetDialog', '#jsResetPwdTips');
    });
$('#jsResetPwdBtn').click(function(){
        $.ajax({
            cache: false,
            type: "POST",
            dataType:'json',
            url:"resetpwd",
            data:$('#jsResetPwdForm').serialize(),
            async: true,
            success: function(data) {
                if(data.password1){
                    Dml.fun.showValidateError($("#pwd"), data.password1);
                }else if(data.password2){
                    Dml.fun.showValidateError($("#repwd"), data.password2);
                }else if(data.status == "success"){
                    Dml.fun.showTipsDialog({
                        title:'提交成功',
                        h2:'修改密码成功，请重新登录!',
                    });
                    Dml.fun.winReload();
                    location='login'
                }else if(data.msg){
                    Dml.fun.showValidateError($("#pwd"), data.msg);
                    Dml.fun.showValidateError($("#repwd"), data.msg);
                }
            }
        });
    });

    $('.jsDeleteFav_course').on('click', function(){
        var _this = $(this),
            favid = _this.attr('data-favid');
        alert(favid)
        $.ajax({
            cache: false,
            type: "POST",
            url: "/org/add_fav/",
            data: {
                fav_type: 1,
                fav_id: favid,
                csrfmiddlewaretoken: '799Y6iPeEDNSGvrTu3noBrO4MBLv6enY'
            },
            async: true,
            success: function(data) {
                Dml.fun.winReload();
            }
        });
    });

    $('.jsDeleteFav_teacher').on('click', function(){
        var _this = $(this),
            favid = _this.attr('data-favid');
        $.ajax({
            cache: false,
            type: "POST",
            url: "/org/add_fav/",
            data: {
                fav_type: 3,
                fav_id: favid,
                csrfmiddlewaretoken: '799Y6iPeEDNSGvrTu3noBrO4MBLv6enY'
            },
            async: true,
            success: function(data) {
                Dml.fun.winReload();
            }
        });
    });


    $('.jsDeleteFav_org').on('click', function(){
        var _this = $(this),
            favid = _this.attr('data-favid');
        $.ajax({
            cache: false,
            type: "POST",
            url: "/org/add_fav/",
            data: {
                fav_type: 2,
                fav_id: favid,
                csrfmiddlewaretoken: '799Y6iPeEDNSGvrTu3noBrO4MBLv6enY'
            },
            async: true,
            success: function(data) {
                Dml.fun.winReload();
            }
        });
    });
</script>


<script>
    var shareUrl = '',
        shareText = '',
        shareDesc = '',
        shareComment = '';
    $(function () {
        $(".bdsharebuttonbox a").mouseover(function () {
            var type = $(this).attr('data-cmd'),
                $parent = $(this).parent('.bdsharebuttonbox'),
                fxurl = $parent.attr('data-url'),
                fxtext = $parent.attr('data-text'),
                fxdesc = $parent.attr('data-desc'),
                fxcomment = $parent.attr('data-comment');
            switch (type){
                case 'tsina':
                case 'tqq':
                case 'renren':
                    shareUrl = fxurl;
                    shareText = fxdesc;
                    shareDesc = '';
                    shareComment = '';
                    break;
                default :
                    shareUrl = fxurl;
                    shareText = fxtext;
                    shareDesc = fxdesc;
                    shareComment = fxcomment;
                    break;
            }
        });
    });
    function SetShareUrl(cmd, config) {
        if (shareUrl) {
            config.bdUrl = "" + shareUrl;
        }
        if(shareText){
            config.bdText = shareText;
        }
        if(shareDesc){
            config.bdDesc = shareDesc;
        }
        if(shareComment){
            config.bdComment = shareComment;
        }

        return config;
    }
    window._bd_share_config = {
        "common": {
            "onBeforeClick":SetShareUrl,
            "bdPic":"",
            "bdMini":"2",
            "searchPic":"1",
            "bdMiniList":false
        },
        "share": {
            "bdSize":"16"
        }
    };
    with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com../api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];
</script>
</body>
</html>
