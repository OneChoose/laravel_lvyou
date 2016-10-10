<?php

namespace App\Http\Controllers\Admin;

use App\Model\Admin;
use App\Model\Menu;
use App\Model\Role;
use App\Model\RoleMenu;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class IndexController extends Controller
{
    public function addManager(){
        $role = Role::orderBy('id', 'desc')->get();
        return view('admin/index/addManager',['role' => $role]);
    }

    public function saveManagers(Request $request)
    {
        $validator = \Validator::make(
            $request->except(['_token']),
            [
                'name' => 'required',
                'email' => 'required|unique:admin,email|email',
                'role_id' => 'required',
                'password' => 'required',
            ],
            [
                'name.required' => '用户名不能为空',
                'email.required' => '登录邮箱不能为空',
                'email.unique' => '登录邮箱已存在',
                'email.email' => '请输入正确的邮箱',
                'role_id.required' => '角色不能为空',
                'password.required' => '密码不能为空',
            ]
        );
        if($validator->fails()){
            return redirect()->back()->withErrors($validator);
        }
        $manager = new Admin();
        $manager->name = $request->get('name');
        $manager->email = $request->get('email');
        $manager->role_id = $request->get('role_id');
        $manager->created_at = date("Y-m-d H:i:s");
        $manager->updated_at = date("Y-m-d H:i:s");
        $manager->password = md5($request->get('password'));
        $result = $manager->save();
        if ($result) {
            return redirect()->to('/admin/index');
        } else {
            return redirect()->back();
        }
    }

    public function index(Request $request)
    {
        $admin = Admin::orderBy('id', 'desc');

        if ($request->get('name')) {
            $admin->where('name', '=', $request->get('name'));
        }
        $admin= $admin->paginate(15);
        return view('admin/index/index', ['admin' => $admin]);
    }
    public function show($id)
    {
        return $id;
    }

    public function updateManager($id)
    {
        $manager = Admin::whereId($id)->first();
        $role = Role::orderBy('id', 'desc')->get();
        return view('admin/index/updateManager', ['manager' => $manager,'role' => $role]);
    }

    public function saveManager(Request $request, $id)
    {
        $validator = \Validator::make(
            $request->except(['_token']),
            [
                'name' => 'required',
                'password' => 'required',
                'role_id' => 'required',
            ]
        );
        if($validator->fails()){
            return redirect()->back()->withErrors($validator);
        }
        $manager = Admin::whereId($id)->first();
        $manager->name = $request->get('name');
        $manager->role_id = $request->get('role_id');
        $manager->updated_at = date("Y-m-d H:i:s");
        $manager->password = md5($request->get('password'));
        $result = $manager->save();
        if ($result) {
            return redirect()->to('/admin/index');
        } else {
            return redirect()->back();
        }
    }

    public function deleteManager($id){
        Admin::findOrFail($id)->delete();
        return redirect()->to('/admin/index');
    }
    
    public function role(){
        $role = Role::orderBy('id', 'desc')->paginate(15);
        return view('admin/index/role', ['role' => $role]);
    }

    public function addRole(){
        return view('admin/index/addRole');
    }

    public function saveRole(Request $request){
        $validator = \Validator::make(
            $request->except(['_token']),
            [
                'role_name' => 'required|unique:role,role_name|',
            ],
            [
                'role_name.required' => '角色名不能为空',
                'role_name.unique' => '角色名已存在',
            ]
        );
        if($validator->fails()){
            return redirect()->back()->withErrors($validator);
        }
        $role = new Role();
        $role->role_name = $request->get('role_name');
        $role->role_desc = $request->get('role_desc');
        $role->created_at = date('Y-m-d H:i:s');
        $role->updated_at = date('Y-m-d H:i:s');
        $rs = $role->save();
        if($rs){
            return redirect()->to('/admin/role');
        }else {
            return redirect()->back();
        }
    }

    public function showRole($id){
        $role = Role::whereId($id)->first();
        return view('admin/index/showRole', ['role' => $role]);
    }

    public function updateRole(Request $request){
        $validator = \Validator::make(
            $request->except(['_token']),
            [
                'role_name' => 'required|unique:role,role_name|',
            ],
            [
                'role_name.required' => '角色名不能为空',
                'role_name.unique' => '角色名已存在',
            ]
        );
        if($validator->fails()){
            return redirect()->back()->withErrors($validator);
        }
        $role = Role::whereId($request->get('id'))->first();
        $role->role_name = $request->get('role_name');
        $role->role_desc = $request->get('role_desc');
        $role->updated_at = date('Y-m-d H:i:s');
        $rs = $role->save();
        if($rs){
            return redirect()->to('/admin/role');
        }else {
            return redirect()->back();
        }
    }

    public function deleteRole($id){
        try{
            \DB::beginTransaction();
            //删除角色
            Role::findOrFail($id)->delete();
            //删除角色下的管理员
            Admin::where('role_id','=',$id)->delete();
            //删除角色拥有的权限
            RoleMenu::where('role_id','=',$id)->delete();
            \DB::commit();
            return redirect()->to('/admin/role');
        }catch (\Exception $e){
            \DB::rollBack();
            return redirect()->back();
        }
    }

    public function roleMenu($id){
        $role = Role::whereId($id)->first();
        $menu = Menu::orderBy('id', 'desc')->get();
        $roleMenu = RoleMenu::where('role_id','=',$id)->pluck('menu_id')->toArray();
        return view('admin/index/roleMenu', ['menu' => $menu,'role' => $role,'roleMenu' => $roleMenu,'role_id' => $id]);
    }

    public function saveRoleMenu(Request $request){
        $menu_id = $request->get('menu_id');
        try{
            \DB::beginTransaction();
            RoleMenu::where('role_id','=',$request->get('role_id'))->delete();
            foreach ($menu_id as $k => $v){
                $roleMenu = new RoleMenu();
                $roleMenu->role_id = $request->get('role_id');
                $roleMenu->menu_id = $v;
                $roleMenu->created_at = date('Y-m-d H:i:s');
                $roleMenu->updated_at = date('Y-m-d H:i:s');
                $roleMenu->save();
            }
            \DB::commit();
            return redirect()->to('/admin/roleMenu/'.$request->get('role_id'));
        }catch (\Exception $e){
            \DB::rollBack();
            return redirect()->back();
        }



    }
}