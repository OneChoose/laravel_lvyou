<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\Entertainment;
use Illuminate\Http\Request;
use Validator;

class EntertainmentController extends Controller
{

    public function index()
    {
        $entertainment = Entertainment::orderBy('id', 'desc')->paginate(15);
        return view('admin/entertainment/index', ['entertainment' => $entertainment]);
    }

    public function add()
    {
        return view('admin/entertainment/add');
    }

    public function save(Request $request)
    {
        $validator = Validator::make(
            $request->except(['_token']),
            [
                'title' => 'required',
                'price' => 'required|numeric',
            ],
            [
                'title.required' => '名称不能为空',
                'price.required' => '价格不能为空',
                'price.numeric' => '价格不是数字',
            ]
        );
        if ($validator->fails()) {
            return redirect('/admin/entertainment/add')->withErrors($validator);
        }
        $file_pics = '';
        $img = '';
        if ($request->file_pics) {
            $file_pics = implode(",", $request->file_pics);
            $img = $request->file_pics[0];
        }
        $entertainment = new Entertainment();
        $entertainment->title = $request->title;
        $entertainment->price = $request->price;
        $entertainment->picurl = $img;
        $entertainment->picarr = $file_pics;
        $entertainment->introduction = $request->introduction;
        $entertainment->open_time = $request->input('opentime');
        $entertainment->close_time = $request->input('closetime');
        $entertainment->is_pay = $request->is_pay;
        $result = $entertainment->save();
        if ($result) {
            return redirect()->to('/admin/entertainment/index');
        } else {
            return redirect()->back();
        }
    }

    public function edit($id)
    {
        $entertainment = Entertainment::findOrFail($id);
        return view('admin/entertainment/edit', ['entertainment' => $entertainment]);
    }

    public function update(Request $request)
    {
        $validator = Validator::make(
            $request->except(['_token']),
            [
                'title' => 'required',
                'price' => 'required|numeric',
                'id' => 'required|numeric',
            ],
            [
                'title.required' => '名称不能为空',
                'price.required' => '价格不能为空',
                'price.numeric' => '价格不是数字',
            ]
        );
        if ($validator->fails()) {
            return redirect("/admin/entertainment/" .$request->id ."/edit")->withErrors($validator);
        }

        $entertainment = Entertainment::findOrFail($request->id);

        if ($request->file_pics) {
            $entertainment->picurl = $request->file_pics[0];
            $entertainment->picarr = implode(",", $request->file_pics);
        }

        $entertainment->title = $request->title;
        $entertainment->price = $request->price;
        $entertainment->introduction = $request->introduction;
        $entertainment->open_time = $request->input('opentime');
        $entertainment->close_time = $request->input('closetime');
        $entertainment->is_pay = $request->is_pay;
        $result = $entertainment->save();
        if ($result) {
            return redirect()->to('/admin/entertainment/index');
        } else {
            return redirect()->back();
        }
    }

    public function delete($id)
    {
        Entertainment::findOrFail($id)->delete();
        return redirect()->to('/admin/entertainment/index');
    }

}
