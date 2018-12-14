<?php

namespace App\Modules\Admin\Http\Controllers;

use App\Modules\Admin\Entities\Model\Nav;
use App\Modules\Admin\Entities\Model\Permission;
use App\Modules\Admin\Entities\Model\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class NavController extends Controller
{
    /**
     * 导航栏管理展示
     * 第一步：获取pid不等于0的大导航栏
     * 第二步：获取上面大导航栏里面对应的小导航（权限）
     * 第三步：把当前用户拥有的权限和该权限对应的大导航栏合并
     * 第四五：把没有小导航的打导航删掉（不展示）
     * @return Response
     */
    public function navlist(){
        $model = new Nav();
        //1：获取pid为0的 2：获取不为0的 3：获取具体权限的导航
        $pid0 = $model::all()->toArray();
        $pidnot0 = [];
        foreach ($pid0 as $k => $v){
            foreach ($pid0 as $k1 => $v1){
                if ($v1['pid'] == $v['id']){
                    $pidnot0[] = $v1;
                }
            }
        }
        $model2 = new Permission();
        $permission = $model2::all()->toArray();
        //获取当前用户
        $userid = Auth::id();
        $arr = User::find($userid);
        foreach ($permission as $k => $v){
            $res = $arr->hasPermission($v['slug']);
            if (!$res){
                unset($permission[$k]);
            }
        }
        foreach ($pidnot0 as $k => $v){
            $flag = 0;
            foreach ($permission as $k1 => $v1){
                if ($v['id'] == $v1['pid']){
                    $flag = 1;
                }
            }
            if ($flag == 0){
                unset($pidnot0[$k]);
            }
        }
        return view('admin::main.nav',['pidnot0'=>$pidnot0,'permission'=>$permission]);
    }
}
