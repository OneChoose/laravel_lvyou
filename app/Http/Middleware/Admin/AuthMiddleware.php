<?php

namespace App\Http\Middleware\Admin;

use App\Model\Admin;
use App\Model\Menu;
use App\Model\RoleMenu;
use Closure;
use Illuminate\Support\Facades\Config;

class AuthMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (empty(\Session::get('email'))) {
            if ($request->ajax()) {
                return response('Unauthorized.', 401);
            } else {
                return redirect()->guest('admin/login');
            }
        }
        $verify = $this->verifyPermission();
        if($verify){
            return $next($request);
        }else{
            echo "访问权限不足，请联系管理员";
            exit;
        }

    }

    public function verifyPermission(){
        $controllerStr = \Route::current()->getActionName();
        $str = explode('@',$controllerStr);
        $controllerArr = explode('\\',$str[0]);
        $controller = end($controllerArr);
        //访问控制器名
        $controllerName = substr($controller,0,strlen($controller)-10);
        //登录用户信息
        $admin = Admin::find(\Session::get('id'));
        //判断是否在不需要验证权限的列表中
        $verifyNon= $this->verifyNon($controllerName);
        if(!$verifyNon){
            //判断权限
            $menu = Menu::where('menu_name','=',$controllerName)->first();
            if(empty($menu)){
                return false;
            }
            $roleMenu = RoleMenu::where('role_id','=',$admin->role_id)->where('menu_id','=',$menu->id)->first();
            if(empty($roleMenu)){
                return false;
            }
        }
        return true;
    }

    public function verifyNon($controllerName){
        $controllerName = is_string($controllerName) ? strtolower($controllerName) : $controllerName;
        $nonVerifyRight = Config::get('baseconfig.nonVerifyRight') ? Config::get('baseconfig.nonVerifyRight') : [];
        if(in_array($controllerName,$nonVerifyRight)){
            return true;
        }
        return false;
    }
}
