<?php
/**
 * Created by PhpStorm.
 * User: 雨思呗
 * Date: 2018/11/29
 * Time: 20:46
 */

namespace App\Http\Controllers\Code;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Gregwar\Captcha\CaptchaBuilder;
use Session;

class CodeController extends Controller{
    public function captcha($temp){
        //生成验证码图片的Builder对象，配置相应属性
        $builder = new CaptchaBuilder();
        //可以设置图片宽高及字体
        $builder->build(150,32);
        //获取验证码的内容
        $phrase = $builder->getPhrase();
        //把内容存入session
        Session::flash('milkcaptcha', $phrase); //存储验证码
        ob_clean();
        //生成图片并返回
        return response($builder->output())->header('Content-type','image/jpeg');
    }
}