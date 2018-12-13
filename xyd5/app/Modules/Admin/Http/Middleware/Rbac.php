<?php

namespace App\Modules\Admin\Http\Middleware;

use App\Modules\Admin\Model\User;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Mockery\Exception;

class Rbac
{
    /**
     * Handle an incoming request.
     *进行rbac权限控制
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        //获取当前用户
        $user_id = Auth::id();
        //获取当前控制器方法信息
        $res = request()->route()->getAction();
        //截取控制器
        $controller = substr($res['controller'],strrpos($res['controller'],'\\')+1,strpos($res['controller'],'@')-strrpos($res['controller'],'\\')-1);
        //截取方法
        $action = substr($res['controller'],strpos($res['controller'],'@')+1);
        //权限判断
//        echo $controller.'.'.$action;die;
        $arr = User::find($user_id);
        $res = $arr->hasPermission($controller.'.'.$action);
        if ($res){
            return $next($request);
        }else{
            abort('404');
        }
    }
}
