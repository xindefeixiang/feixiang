<?php

namespace App\Modules\Admin\Http\Controllers;

use App\Modules\Admin\Entities\Model\Permission;
use App\Modules\Admin\Entities\Model\Role;
use HuangYi\Rbac\Managers\RoleManager;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class RoleController extends Controller
{
    use ValidatesRequests;
    /**
     * 角色列表
     * @return Response
     */
    public function rolelist(){
        $model = new Role();
        $res = $model::all()->toArray();
        $roleshow = '';
        foreach ($res as $k => $v){
            $roleshow .= '[';
            foreach ($v as $k1 => $v1){
                $roleshow .= '"'.$v1.'",';
            }
            $roleshow .= "[{label:'设置权限',width: 250,onclick:function(){
            location.href = 'roleupdate?id={$v['id']}'
       }}]],";
        }
        $roleshow = '['.$roleshow.']';
        return view('admin::user.roleshow',['roleshow'=>$roleshow]);
    }
    /*
     * 角色编辑列表
     * */
    public function roleupdate(Request $request){
        $validatedData = $this->validate($request,[
            'id' => 'required|Integer',
        ],[
            'id.required' => '现在还不能修改',
            'id.Integer'  =>  '现在还不能修改'
        ]);

        //赋值角色id
        $role_id = $request->id;
        $role_model = new Role();
        $role_res = $role_model::find($role_id)->toArray();
        //根据角色id获取权限id
        $permission_res = DB::table('role_permission')->where(['role_id'=>$role_id])->get()->toArray();
        $permission_model = new Permission();
        if (empty($permission_res)){
            $permission_id = [];
        }else{
            $per_id = [];
            foreach ($permission_res as $k => $v){
                $per_id[] = $v->permission_id;
            }
            $permission_info = $permission_model::all()->whereIn('id',$per_id)->toArray();
            foreach ($permission_info as $k => $v){
                $permission_id[] = $v['id'];
            }
        }
        //获取所有的权限
        $permission_all = $permission_model::all()->toArray();
        return view('admin::user.roleupdate',['role'=>$role_res,'permission'=>$permission_all,'permission_id'=>$permission_id]);
    }
    /*
     * 角色数据更新
     * */
    public function roleupdatedata(Request $request){
        $validatedData = $this->validate($request,[
            'roleid' => 'required|Integer',
            'permissionid' => 'required|array'
        ],[
            'roleid.required' => '用户不能为空',
            'permissionid.required' => '角色不能为空',
            'roleid.Integer'  =>  '用户类型有问题',
            'permissionid.array'  =>  '角色必须为数组',
        ]);
        //删除掉该用户的所有角色
        $del_res = DB::table('role_permission')->where(['role_id'=>$request->roleid])->delete();
        //在重新绑定用户
        $roleManager = new RoleManager();
        $res = $roleManager->attachPermissions($request->roleid,$request->permissionid);
        if ($res){
            return redirect('admin/rolelist');
        }else{
            return redirect('admin/rolelist');
        }
    }
}
