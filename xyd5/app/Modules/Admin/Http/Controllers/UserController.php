<?php

namespace App\Modules\Admin\Http\Controllers;

use App\Modules\Admin\Entities\Model\Role;
use App\Modules\Admin\Entities\Model\Teacher;
use App\Modules\Admin\Entities\Model\User;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use HuangYi\Rbac\Managers\PermissionManager;
use HuangYi\Rbac\Managers\RoleManager;
use HuangYi\Rbac\Rbac;
use Illuminate\Support\Facades\Auth;
class UserController extends Controller
{
    use ValidatesRequests;
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
            $usershow .= "[{label:'设置角色',width: 250,onclick:function(){
            location.href = 'userupdate?id={$v['id']}'
       }}]],";
        }
        $usershow = '['.$usershow.']';
        return view('admin::user.usershow',['usershow'=>$usershow]);
    }
    /*
     * 用户添加页面
     * */
    public function useradd(){
        return view('admin::user.useradd');
    }
    /*
     * 用户数据 添加
     * */
    public function useradddata(Request $request){
        $validatedData = $this->validate($request,[
            'name' => 'required',
            'slug' => 'required',
            'description' => 'required',
        ],[
            'name.required' => '用户名不能为空懂吗',
            'slug.required' => '具体用户不能为空懂吗',
            'description.required' => '用户描述不能为空懂吗',
        ]);
        $model = new Role();
        $model->name = $request->name;
        $model->slug = $request->slug;
        $model->description = $request->description;
        $res = $model->save();
        if ($res){
            return redirect('uesrshow');
        }else{
            die("添加失败");
        }
    }
    /*
     * 用户信息修改
     * */
    public function userupdate(Request $request){
        $validatedData = $this->validate($request,[
            'id' => 'required|Integer',
        ],[
            'id.required' => '现在还不能修改',
            'id.Integer'  =>  '现在还不能修改'
        ]);
        $id = $request->id;
        $model = new User();
        $role_model = new Role();
        $user_res = $model::find($id)->toArray();
        $role_res = DB::table('user_role')->where(['user_id'=>$user_res['id']])->first();
        if (empty($role_res->role_id)){
            $role_id = '';
        }else{
            $role_info = $role_model::find($role_res->role_id)->toArray();
            $role_id = $role_info['id'];
        }

        $role_all = $role_model::all()->toArray();
        return view('admin::user.userupdate',['user'=>$user_res,'role'=>$role_all,'role_id'=>$role_id]);
    }
    /*
     * 修改数据
     * */
    public function userupdatedata(Request $request){
        $validatedData = $this->validate($request,[
            'userid' => 'required|Integer',
            'roleid' => 'required|array'
        ],[
            'userid.required' => '用户不能为空',
            'roleid.required' => '角色不能为空',
            'userid.Integer'  =>  '用户类型有问题',
            'roleid.array'  =>  '角色必须为数组',
        ]);
        //删除掉该用户的所有角色
        $del_res = DB::table('user_role')->where(['user_id'=>$request->userid])->delete();
        //在重新绑定用户
        $user = User::find($request->userid);
        $res = $user->attachRoles($request->roleid);
        if ($res){
            return redirect('admin/userlist');
        }else{
            return redirect('admin/userlist');
        }
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
