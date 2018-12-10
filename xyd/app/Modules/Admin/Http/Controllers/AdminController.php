<?php

namespace App\Modules\Admin\Http\Controllers;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Input;
use App\Modules\Admin\Model\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
class AdminController extends Controller {
    use ValidatesRequests;
    /*
     * 进入登录页面
     * admin::admin.login 登录页面
     * */
    public function index(){
        return view('admin::admin.login');
    }
    /*
     * 登录数据处理
     * @param $data 需要验证的数据
     * */
    public function login(Request $request){
        $this->validate($request,[
           'email' => 'required|email',
            'password' => 'required',
            'code'  => 'required|captcha'
        ],[
            'email.require' => '邮箱不能为空',
            'email.email' => '你的账号应该是一个邮箱',
            'password.required' => '密码不能为空',
            'code.required'  => '验证码不能为空',
            'code.captcha'   =>  '验证码有误'
        ]);
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect('admin/main');
        }
        die('账号或密码不对');
    }
}
