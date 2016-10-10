<?php

namespace App\Http\Controllers\Home;


use App\Http\Controllers\Controller;
use App\Model\ActiveOrder;
use App\Model\EntertainmentOrder;
use App\Model\Member;
use App\Model\RoomOrder;
use Illuminate\Http\Request;
use Session;

class MemberController extends Controller
{
    public function personal()
    {
        $id = Session::get('id');
        if(empty($id)){
            return redirect()->to('/');
        }else{
            $member = Member::find($id);
            return view('/home/member/personal',['member' => $member]);
        }
    }

    public function updatePersonal(Request $request){
        $member_id = Session::get('id');
        if(empty($member_id)){
            return redirect()->to('/');
        }
        $member = Member::find($member_id);
        $member->mobile = $request->input('mobile');
        $member->email = $request->input('email');
        $member->username = $request->input('username');
        $member->name = $request->input('name');
        $member->sex = $request->input('sex');
        $member->birth = $request->input('birth');
        $rs = $member->save();
        if(!$rs){
            echo "操作失败";
            exit;
        }
        return redirect()->to('/member/personal');
    }

    public function avatar()
    {
        $member_id = Session::get('id');
        if(empty($member_id)){
            return redirect()->to('/');
        }
        $member = Member::find($member_id);
        return view('/home/member/avatar',['member' => $member]);
    }

    public function updateAvatar(Request $request)
    {
        $member_id = Session::get('id');
        if(empty($member_id)){
            return redirect()->to('/');
        }
        if($request->hasFile('avatar')){
            $file = $request->file('avatar');
            if ($file) {
                if ($file->isValid()) {
                    $path = sprintf("/data/upload/images/%s/%s/%s/", date('Y', time()), date('m', time()),
                        date('d', time()));
                    $filePath = base_path('public' . $path);
                    $originalName = $file->getClientOriginalName();
                    $ext = $file->guessExtension();
                    $fileName = sha1($originalName . microtime(true) * 20) . '.' . $ext;
                    $file->move($filePath, $fileName);
                    Member::where('id','=',$member_id)->update(['avatar' => $path.$fileName]);
                }
            }
        }
        return redirect()->to('/member/avatar');
    }

    public function roomOrder()
    {
        $id = Session::get('id');
        if(empty($id)){
            return redirect()->to('/');
        }
        $orderList = RoomOrder::where('member_id','=',$id)->get();
        return view('/home/member/room_order',['orderList' => $orderList]);
    }

    public function entertainmentOrder()
    {
        $id = Session::get('id');
        if(empty($id)){
            return redirect()->to('/');
        }
        $orderList = EntertainmentOrder::where('member_id','=',$id)->get();
        return view('/home/member/entertainment_order',['orderList' => $orderList]);
    }

    public function activeOrder()
    {
        $id = Session::get('id');
        if(empty($id)){
            return redirect()->to('/');
        }
        $orderList = ActiveOrder::where('member_id','=',$id)->get();
        return view('/home/member/active_order',['orderList' => $orderList]);
    }


}