<?php
/**
 * Created by PhpStorm.
 * User: 雨思呗
 * Date: 2018/11/28
 * Time: 17:58
 */

namespace App\Http\Controllers;

use HuangYi\Rbac\Managers;
use HuangYi\Rbac\Tests\RbacTraitTest;
use Illuminate\Support\Facades\Input;
use App\Model\Users;
use HuangYi\Rbac\RbacTrait;

class RbacController extends Controller{
    /**
     * 权限
     */
    // 创建一个权限
    public function createPermission(){
        $permissionManager = new Managers\PermissionManager();
        $permission = $permissionManager->create([
            'name' => 'Create product',
            'slug' => 'product.create',
            'description' => 'Create a new product.',
        ]);
        if($permission){
            echo "创建成功";
        }else{
            echo "创建失败";
        }
    }
    // 删除一个权限
    public function deletePermission(){
//        $id = Input::get();
        $permissionManager = new Managers\PermissionManager();
        $deleted = $permissionManager->delete($id = 1);
        if($deleted){
            echo "删除权限成功";
        }else{
            echo "删除权限失败";
        }
    }
    // 更新权限
    public function updatePermission(){
//        $data = Input::all();
        $permissionManager = new Managers\PermissionManager();
        $updated = $permissionManager->update($id = 2 , [
            'description' => '杜鑫',
        ]);
        if($updated){
            echo "更新成功";
        }else{
            echo "更新失败";
        }
    }
    // 查询一个权限
    public function findPermission(){
        $id = Input::get();
        $permissionManager = new Managers\PermissionManager();
        $permission = $permissionManager->find($id = 2)->toArray();
        var_dump($permission);
    }
    /**
     * 角色
     */
    // 创建角色
    public function createRole(){
        $roleManager = new Managers\RoleManager();
        $role = $roleManager->create([
            'name' => 'Administrator',
            'slug' => 'admin',
            'description' => 'Can do anything.',
        ]);
        if($role){
            echo "创建角色成功";
        }else{
            echo "创建角失败";
        }
    }
    // 删除角色
    public function deleteRole(){
        $id = Input::get();
        $roleManager = new Managers\RoleManager();
        $deleted = $roleManager->delete($id = 1);
        if($deleted){
            echo "删除成功";
        }else{
            echo "删除失败";
        }
    }
    // 更新角色
    public function updateRole(){
        $roleManager = new Managers\RoleManager();
        $updated = $roleManager->update(1,[
            'description' => 'role 讲师',
        ]);
        if($updated){
            echo "更新成功";
        }else{
            echo "更新失败";
        }
    }
    // 查询角色
    public function findRole(){
        $roleManager = new Managers\RoleManager();
        $role = $roleManager->find($id = 1)->toArray();
        var_dump($role);
    }

    /**
     * 赋权与解绑权限
     */
    // 为角色赋权
    public function roleAttachPermission(){
        $roleManager = new Managers\RoleManager();
        $roleManager->attachPermissions(1,2);
        // $roleManager->attachPermissions(1,[1,2,3]); // 为角色赋多个权限
    }
    // 角色解绑权限
    public function roleDetachPermission(){
        $roleManager = new Managers\RoleManager();
        $roleManager->detachPermissions('1',1);
        // $roleManager->detachPermissions('1',[1,2,3]);// 为角色解绑多个权限
    }
    /**
     * 赋角色与解绑角色
     */
    // 为用户赋角色
    public function usersAttachRole(){
        $users = Users::find(1);
        $users->attachRoles(1); // 绑定一个角色
        $users->attachRoles([1,2,3]); // 绑定多个角色
    }
    // 为用户解绑角色
    public function usersDetachRole(){
        $users = Users::find(1);
        $users->detachRoles(1); // 解绑一个角色
    }
    // 判断用户是否为某个角色
    
}