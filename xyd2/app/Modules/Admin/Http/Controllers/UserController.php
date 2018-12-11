<?php

namespace App\Modules\Admin\Http\Controllers;

use App\Modules\Admin\Entities\Model\Teacher;
use App\Modules\Admin\Entities\Model\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /*
     * 用户列表展示
     */
    public function userlist(){
        //查询教师表
        $model = new User();
        $user_data = $model->userlist();
        $role_data = $this->getrole($user_data); //获取角色id
        $role_name = $this->getrolename($role_data); //获取角色名称
        foreach ($role_data as $k => $v){
            foreach ($role_name as $k1 => $v1){
                if ($v->role_id== $v1->id){
                    $role_data[$k]->role = $v1->name;
                }
            }
        }
        $usershow = '';
        foreach ($user_data as $k => $v){
            foreach ($role_data as $k1 => $v1){
                if ($v1->user_id == $v['id']){
                    $v['rolename'] = $v1->role;
                }
            }
            //获取用户的角色
            $usershow .= '[';
            foreach ($v as $k1 => $v1){
                $usershow .= '"'.$v1.'",';
            }
            $usershow .= 'oper],';
        }
        $usershow = '['.$usershow.']';
        return view('admin::user.usershow',['usershow'=>$usershow]);
    }
    /*
     * 获取角色id
     * */
    public function getrole($data){
        $uid = [];
        foreach ($data as $k => $v){
            $uid[] = $v['id'];
        }
        $role_data = DB::table('user_role')->whereIn("user_id",$uid)->get()->toArray();
        return $role_data;
    }
    /*
     * 获取角色名称
     * */
    public function getrolename($data){
        $roleid = [];
        foreach ($data as $k => $v){
            $roleid[] = $v->role_id;
        }
        $role_data = DB::table('roles')->whereIn("id",$roleid)->get()->toArray();
        return $role_data;
    }
}
