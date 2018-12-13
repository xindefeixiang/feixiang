<?php
/**
 * Created by PhpStorm.
 * User: 雨思呗
 * Date: 2018/12/3
 * Time: 17:54
 */

namespace App\Modules\Admin\Http\Controllers;
use App\Modules\Admin\Entities\Model\Nav;
use HuangYi\Rbac\Managers\PermissionManager;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Routing\Controller;
use App\Modules\Admin\Entities\Model\Permission;
use Illuminate\Http\Request;
use Illuminate\Foundation\Validation\ValidatesRequests;
class PermissionController extends Controller{
    use ValidatesRequests;
    /**
     * 权限列表
     */
    public function permissionlist(){
        $res = Permission::all()->toArray();
        $permissionshow = '';
        foreach ($res as $k => $v){
            $permissionshow .= '[';
            foreach ($v as $k1 => $v1){
                $permissionshow .= '"'.$v1.'",';
            }
            $permissionshow .= 'oper],';
        }
        $permissionshow = '['.$permissionshow.']';
        return view('admin::user.permissionshow',['permissionshow'=>$permissionshow]);
    }
    /*
     * 权限添加页面
     * */
    public function permissionadd(){
        $model = new Nav();
        $pidnot = $model::all()->where("pid","!=","0")->toArray();
        return view('admin::user.permissionadd',['typeid'=>$pidnot]);
    }
    /*
     * 权限数据添加
     * */
    public function permissionadddata(Request $request){
        $validatedData = $this->validate($request,[
            'name' => 'required',
            'slug' => 'required',
            'description' => 'required',
            'typeid' => 'required|Integer',
        ],[
            'name.required' => '权限名不能为空懂吗',
            'slug.required' => '具体权限不能为空懂吗',
            'description.required' => '权限描述不能为空懂吗',
            'typeid.required' => '分类必须得选',
            'typeid.Integer' => '有误',
        ]);
        $typeid = $request->typeid;
        if ($typeid == 0){
            $model = new Nav();
            $model->name = $request->name;
            $model->pid = 4;
            $res = $model->save();
        }else{
            $model = new Permission();
            $model->name = $request->name;
            $model->slug = $request->slug;
            $model->description = $request->description;
            $model->pid = $typeid;
            $res = $model->save();
        }
        if ($res){
            return redirect('permissionlist');
        }else{
            die("添加失败");
        }
    }
    public function haha(){
        $request = new Request();
        $res = $this->validate($request,[
            'name'      =>      'required|string',
            'slug'      =>      'required',
            'description'=>     'required'
        ]);
        var_dump($res);die;
    }
    // 执行权限添加
    public function createPermissionExec(){
        $data = Input::all();
        var_dump($data);
    }
    // 权限删除
    public function delPermission(){

    }
    // 权限更新
    public function upPermission(){

    }
    // 查询一个权限
    public function findPermission(){

    }
    /**
     * 角色
     */
    // 角色列表
    public function roleList(){

    }
    // 角色创建
    public function createRole(){

    }
    // 角色删除
    public function delRole(){

    }
    // 角色更新
    public function upRole(){

    }
    // 角色查询
    public function findRole(){

    }
    /**
     * 赋权与解绑权限
     */
    // 为角色赋权
    public function roleAttachPermission(){

    }
    // 角色解绑权限
    public function roleDetachPermission(){

    }
    /**
     * 用户
     */
    // 用户列表
    public function userList(){

    }
    // 用户创建（注册）
    public function addUser(){

    }
    /**
     * 赋角色与解绑角色
     */
    // 为用户赋角色
    public function usersAttachRole(){

    }
    // 为用户解绑角色
    public function usersDetachRole(){

    }
    // 判断用户是否为某个角色
}