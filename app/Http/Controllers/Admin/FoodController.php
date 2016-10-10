<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\Food;
use Illuminate\Http\Request;
use Validator;

class FoodController extends Controller
{

    public function index()
    {
        $food = food::orderBy('id', 'desc')->paginate(15);
        return view('admin/food/index', ['food' => $food]);
    }

    public function add()
    {
        return view('admin/food/add');
    }

    public function save(Request $request)
    {
        $validator = Validator::make(
            $request->except(['_token']),
            [
                'name' => 'required',
                'price' => 'required|numeric',
                'type' => 'required',
            ],
            [
                'name.required' => '名称不能为空',
                'price.required' => '价格不能为空',
                'price.numeric' => '价格不是数字',
                'type.required' => '餐饮类型不能为空',
            ]
        );
        if ($validator->fails()) {
            return redirect('/admin/food/add')->withErrors($validator);
        }
        $file_pics = '';
        $img = '';
        if ($request->file_pics) {
            $file_pics = implode(",", $request->file_pics);
            $img = $request->file_pics[0];
        }
        $food = new Food();
        $food->name = $request->name;
        $food->price = $request->price;
        $food->type = $request->type;
        $food->supply_time = $request->supply_time;
        $food->img = $img;
        $food->pictures = $file_pics;
        $food->content = $request->input('content');
        $food->created_at = $request->input('posttime');
        $result = $food->save();
        if ($result) {
            return redirect()->to('/admin/food/index');
        } else {
            return redirect()->back();
        }
    }

    public function edit($id)
    {
        $food = Food::findOrFail($id);
        return view('admin/food/edit', ['food' => $food]);
    }

    public function update(Request $request)
    {
        $validator = Validator::make(
            $request->except(['_token']),
            [
                'name' => 'required',
                'price' => 'required|numeric',
                'id' => 'required|numeric',
                'type' => 'required',
            ],
            [
                'name.required' => '名称不能为空',
                'price.required' => '价格不能为空',
                'price.numeric' => '价格不是数字',
                'type.required' => '餐饮类型不能为空',
            ]
        );
        if ($validator->fails()) {
            return redirect("/admin/food/" .$request->id ."/edit")->withErrors($validator);
        }

        $food = Food::findOrFail($request->id);

        if ($request->file_pics) {
            $food->img = $request->file_pics[0];
            $food->pictures = implode(",", $request->file_pics);
        }

        $food->name = $request->name;
        $food->price = $request->price;
        $food->type = $request->type;
        $food->supply_time = $request->supply_time;

        $food->content = $request->input('content');
        $food->created_at = $request->input('posttime');
        $result = $food->save();
        if ($result) {
            return redirect()->to('/admin/food/index');
        } else {
            return redirect()->back();
        }
    }

    public function delete($id)
    {
        Food::findOrFail($id)->delete();
        return redirect()->to('/admin/food/index');
    }

}
