<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\ClassicMeeting;
use App\Model\Meeting;
use Illuminate\Http\Request;
use Validator;

class MeetingController extends Controller
{
    public function index()
    {
        return 123;
//        $meeting = Meeting::orderBy('id', 'desc')->paginate(20);
//        return view('admin/meeting/index', ['meeting' => $meeting]);
    }

    public function add()
    {

        return view('admin/meeting/add');
    }

    public function save(Request $request)
    {
        $validator = Validator::make(
            $request->except(['_token']),
            [
                'hotel_type' => 'required',
                'title' => 'required',
                'type' => 'required',
            ],
            [
                'title.required' => '名称不能为空',
                'hotel_type.required' => '名称不能为空',
                'type.required' => '名称不能为空',
            ]
        );
        if ($validator->fails()) {
            return redirect('/admin/meeting/add')->withErrors($validator);
        }

        $file = $request->file('file_pics');
        $meeting = new Meeting();

        if ($file) {
            if ($file->isValid()) {

                $path = sprintf("/data/upload/images/%s/%s/%s/", date('Y', time()), date('m', time()),
                    date('d', time()));
                $filePath = base_path('public' . $path);
                $originalName = $file->getClientOriginalName();
                $ext = $file->guessExtension();
                $fileName = sha1($originalName . microtime(true) * 20) . '.' . $ext;

                $file->move($filePath, $fileName);
                $meeting->img = $path . $fileName;
            }
        }


        $meeting->title = $request->title;
        $meeting->hotel_type = $request->hotel_type;
        $meeting->type = $request->type;
        $meeting->galleryful = $request->galleryful;
        $meeting->location = $request->location;
        $meeting->area = $request->area;
        $meeting->terms = $request->input('terms');
        $meeting->content = $request->input('content');
        $result = $meeting->save();
        if ($result) {
            return redirect()->to('/admin/meeting/index');
        } else {
            return redirect()->back();
        }
    }

    // 修改会议
    public function edit($id)
    {
        $meeting = Meeting::where('id', '=', $id)->firstOrFail();
        return view('admin/meeting/edit', ['meeting' => $meeting]);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make(
            $request->except(['_token']),
            [
                'hotel_type' => 'required',
                'title' => 'required',
                'type' => 'required',
            ],
            [
                'title.required' => '名称不能为空',
                'hotel_type.required' => '名称不能为空',
                'type.required' => '名称不能为空',
            ]
        );
        if ($validator->fails()) {
            return redirect('/admin/meeting/add')->withErrors($validator);
        }

        $file = $request->file('file_pics');
        $meeting = Meeting::findOrFail($id);

        if ($file) {
            if ($file->isValid()) {

                $path = sprintf("/data/upload/images/%s/%s/%s/", date('Y', time()), date('m', time()),
                    date('d', time()));
                $filePath = base_path('public' . $path);
                $originalName = $file->getClientOriginalName();
                $ext = $file->guessExtension();
                $fileName = sha1($originalName . microtime(true) * 20) . '.' . $ext;

                $file->move($filePath, $fileName);
                $meeting->img = $path . $fileName;
            }
        }


        $meeting->title = $request->title;
        $meeting->hotel_type = $request->hotel_type;
        $meeting->type = $request->type;
        $meeting->galleryful = $request->galleryful;
        $meeting->location = $request->location;
        $meeting->area = $request->area;
        $meeting->terms = $request->input('terms');
        $meeting->content = $request->input('content');
        $result = $meeting->save();
        if ($result) {
            return redirect()->to('/admin/meeting/index');
        } else {
            return redirect()->back();
        }
    }
    public function delete($id)
    {
        Meeting::findOrFail($id)->delete();
        return redirect()->to('/admin/meeting/index');
    }

    // 经典会议
    public function classic(){
        return view('admin/meeting/classic');
    }
    public function classicAdd(){
        $meeting = Meeting::where('type', '会议')->get();
        return view('admin/meeting/classic_add', ['meeting' => $meeting]);
    }
    public function classicSave(Request $request){
        $validator = Validator::make(
            $request->except(['_token']),
            [
                'hotel_type' => 'required',
                'title' => 'required',
                'meeting_id' => 'required',
            ],
            [
                'title.required' => '名称不能为空',
                'hotel_type.required' => '名称不能为空',
                'type.required' => '名称不能为空',
            ]
        );
        if ($validator->fails()) {
            return redirect('/admin/meeting/classicAdd')->withErrors($validator);
        }

        $file = $request->file('file_pics');
        $classic = new ClassicMeeting();

        if ($file) {
            if ($file->isValid()) {

                $path = sprintf("/data/upload/images/%s/%s/%s/", date('Y', time()), date('m', time()),
                    date('d', time()));
                $filePath = base_path('public' . $path);
                $originalName = $file->getClientOriginalName();
                $ext = $file->guessExtension();
                $fileName = sha1($originalName . microtime(true) * 20) . '.' . $ext;

                $file->move($filePath, $fileName);
                $classic->img = $path . $fileName;
            }
        }

        $classic->title = $request->title;
        $classic->hotel_type = $request->hotel_type;
        $classic->meeting_id = $request->meeting_id;
        $classic->galleryful = $request->galleryful;
        $classic->content = $request->input('content');
        $result = $classic->save();
        if ($result) {
            return redirect()->to('/admin/meeting/classic');
        } else {
            return redirect()->back();
        }
    }
}