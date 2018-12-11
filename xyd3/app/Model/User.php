<?php

namespace App\Model;
use HuangYi\Rbac\RbacTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class User extends Model
{
    use RbacTrait;
    // 学生登录
    public function student_login($data){
        $students = DB::select('select * from teach_user where name = ?',[$data['name']])[0];
        if(!empty($students)){
            if($students->pass == $data['pass']){
                return ['message'=>'登录成功','code'=>2];
            }else{
                return ['message'=>'密码不存在','code'=>1];
            }
        }else{
            return ['message'=>'该用户不存在','code'=>0];
        }
    }
}