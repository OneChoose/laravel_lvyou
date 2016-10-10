<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\Active;
use Illuminate\Http\Request;
use Validator;

class ActiveController extends Controller
{

    public function index()
    {
        $active = Active::orderBy('id', 'desc')->paginate(15);
        return view('admin/active/index', ['active' => $active]);
    }

    public function add()
    {
        return view('admin/active/add');
    }

    public function save(Request $request)
    {
        $validator = Validator::make(
            $request->except(['_token']),
            [
                'name' => 'required',
                'price' => 'required|numeric',
            ],
            [
                'name.required' => '名称不能为空',
                'price.required' => '价格不能为空',
                'price.numeric' => '价格不是数字',
            ]
        );
        if ($validator->fails()) {
            return redirect('/admin/active/add')->withErrors($validator);
        }
        $file_pics = '';
        $img = '';
        if ($request->file_pics) {
            $file_pics = implode(",", $request->file_pics);
            $img = $request->file_pics[0];
        }
        $active = new Active();
        $active->name = $request->name;
        $active->price = $request->price;
        $active->description = $request->description;
        $active->img = $img;
        $active->pictures = $file_pics;
        $active->content = $request->input('content');
        $active->created_at = $request->input('posttime');
        $result = $active->save();
        if ($result) {
            return redirect()->to('/admin/active/index');
        } else {
            return redirect()->back();
        }
    }

    public function edit($id)
    {
        $active = Active::findOrFail($id);
        return view('admin/active/edit', ['active' => $active]);
    }

    public function update(Request $request)
    {
        $validator = Validator::make(
            $request->except(['_token']),
            [
                'name' => 'required',
                'price' => 'required|numeric',
                'id' => 'required|numeric',
            ],
            [
                'name.required' => '名称不能为空',
                'price.required' => '价格不能为空',
                'price.numeric' => '价格不是数字',
            ]
        );
        if ($validator->fails()) {
            return redirect("/admin/active/" .$request->id ."/edit")->withErrors($validator);
        }

        $active = Active::findOrFail($request->id);

        if ($request->file_pics) {
            $active->img = $request->file_pics[0];
            $active->pictures = implode(",", $request->file_pics);
        }

        $active->name = $request->name;
        $active->description = $request->description;
        $active->price = $request->price;

        $active->content = $request->input('content');
        $active->created_at = $request->input('posttime');
        $result = $active->save();
        if ($result) {
            return redirect()->to('/admin/active/index');
        } else {
            return redirect()->back();
        }
    }

    public function delete($id)
    {
        Active::findOrFail($id)->delete();
        return redirect()->to('/admin/active/index');
    }

}
