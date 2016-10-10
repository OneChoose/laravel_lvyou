<?php

namespace App\Http\Controllers\Home;


use App\Http\Controllers\Controller;
use App\Model\Member;
use Illuminate\Http\Request;
use Session;

class LoginController extends Controller
{
    public function index()
    {
        return view('/home/login/index');
    }

    public function save(Request $request)
    {
        $validator = \Validator::make(
            $request->except(['_token']),
            [
                'phone' => 'required',
                'password' => 'required',
            ]
        );
        if ($validator->fails()) {
            echo '<script language="javascript" type="text/javascript">alert("登录失败！");window.parent.location.href="/";  </script>';
            return;
        }
        $phone = $request->input('phone');
        $password = $request->input('password');

        $member = Member::where('username', $phone)->wherePassword(md5($password))->first();
        if (empty($member)) {
            echo '<script language="javascript" type="text/javascript">alert("登录失败！");window.parent.location.href="/";  </script>';
            return;
        }

        echo '<script language="javascript" type="text/javascript">window.parent.location.href="/";</script>';
        return Session::put(['phone' => $member->username, 'id' => $member->id]);
    }

    public function delete()
    {
        Session::pull('phone');
        Session::pull('id');
        return redirect()->to('/');
    }


}