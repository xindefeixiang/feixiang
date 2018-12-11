<?php

namespace App\Modules\Index\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use App\Modules\Index\Model\User;
class LoginController extends Controller{
    public function login(Request $request){
        if($request->isMethod('post')){
            $name = $request->username;
            $password = $request->password;

            print_r($name);
        }else{
            return view('index::login.login');
        }
    }
    public function register(Request $request){
        if($request->isMethod('post')){
            $model = new User();
            $email = $request->email;
            print_r($model->getEmail($email));
            exit;
            $password = $request->password;
        }else {
            return view('index::login.register');
        }
    }
    public function forgetpwd(){
        return view('index::login.forgetpwd');
    }
}