<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\Member;
use Illuminate\Http\Request;
use Validator;
/**
 * 会员
 * @package App\Http\Controllers\Admin
 */
class MemberController extends Controller
{
    public function index()
    {
        $member = Member::orderBy('id', 'asc')->paginate(15);
        return view('admin/member/index', ['member' => $member]);
    }
    public function add()
    {
        return view('admin/member/add');
    }

    public function save(Request $request)
    {
        $validator = Validator::make(
            $request->except(['_token']),
            [
                'username' => 'required',
                'password' => 'required',
            ],
            [
                'username.required' => '用户名不能为空',
                'username.required' => '密码不能为空',
            ]
        );
        if ($validator->fails()) {
            return redirect('/admin/member/add')->withErrors($validator);
        }
        $file = $request->file('avatar');
        $member = new Member();

        if ($file) {
            if ($file->isValid()) {

                $path     = sprintf("/data/upload/images/%s/%s/%s/", date('Y', time()), date('m', time()),
                    date('d', time()));
                $filePath = base_path('public' . $path);
                $originalName = $file->getClientOriginalName();
                $ext = $file->guessExtension();
                $fileName     = sha1($originalName . microtime(true) * 20) . '.' . $ext;

                $file->move($filePath, $fileName);
                $member->avatar = $path.$fileName;
            }
        }

        $member->username = $request->username;
        $member->password = md5($request->password);
        $member->name = $request->name;
        $member->sex = $request->sex;
        $member->mobile = $request->mobile;
        $member->integral = $request->integral;
        $result = $member->save();
        if ($result) {
            return redirect()->to('/admin/member/index');
        } else {
            return redirect()->back();
        }
    }

    public function edit($id)
    {
        $member = Member::where('id', '=', $id)->firstOrFail();
        return view('admin/member/edit', ['member' => $member]);
    }

    public function update(Request $request)
    {
        $validator = Validator::make(
            $request->except(['_token']),
            [
                'username' => 'required',
                'password' => 'required',
            ],
            [
                'username.required' => '用户名不能为空',
                'password.required' => '密码不能为空',
            ]
        );
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }

        $id = $request->id;
        $member = Member::findOrFail($id);

        $file = $request->file('avatar');

        if ($file) {
            if ($file->isValid()) {

                $path     = sprintf("/data/upload/images/%s/%s/%s/", date('Y', time()), date('m', time()),
                    date('d', time()));
                $filePath = base_path('public' . $path);
                $originalName = $file->getClientOriginalName();
                $ext = $file->guessExtension();
                $fileName     = sha1($originalName . microtime(true) * 20) . '.' . $ext;

                $file->move($filePath, $fileName);
                $member->avatar = $path.$fileName;
            }
        }

        $member->username = $request->username;
        $member->password = md5($request->password);
        $member->name = $request->name;
        $member->sex = $request->sex;
        $member->mobile = $request->mobile;
        $member->integral = $request->integral;

        $result = $member->save();
        if ($result) {
            return redirect()->to('/admin/member/index');
        } else {
            return redirect()->back();
        }
    }

    public function delete($id)
    {
        Member::findOrFail($id)->delete();
        return redirect()->to('/admin/member/index');
    }



}
