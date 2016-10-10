<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\GoodsType;
use Illuminate\Http\Request;
use Validator;


class GoodsTypeController extends Controller
{
    public function index()
    {
        $goods_type = GoodsType::all();
        return view('admin/goods_type/index', ['goods_type' => $goods_type]);
    }

    public function add()
    {
        $goods_type = GoodsType::all();
        return view('admin/goods_type/add', ['goods_type' => $goods_type]);
    }

    public function save(Request $request)
    {
        $validator = Validator::make(
            $request->except(['_token']),
            [
                'name' => 'required',
                'parent' => 'required',
            ],
            [
                'name.required' => '名称不能为空',
                'parent.required' => '类型不能为空',
            ]
        );
        if($validator->fails()){
            return redirect('/admin/goods_type/add')->withErrors($validator);
        }

        $file = $request->file('picurl');

        $goods_type = new GoodsType();

        if ($file) {
            if ($file->isValid()) {

                $path     = sprintf("/data/upload/images/%s/%s/%s/", date('Y', time()), date('m', time()),
                    date('d', time()));
                $filePath = base_path('public' . $path);
                $originalName = $file->getClientOriginalName();
                $ext = $file->guessExtension();
                $fileName     = sha1($originalName . microtime(true) * 20) . '.' . $ext;

                $file->move($filePath, $fileName);
                $goods_type->picurl = $path.$fileName;
            }
        }

        $goods_type->name = $request->name;
        $goods_type->parent_id = $request->parent;
        $goods_type->linkurl = $request->linkurl;
        $goods_type->sort = $request->sort;
        $goods_type->checkinfo = $request->checkinfo;
        $result = $goods_type->save();
        if ($result) {
            return redirect()->to('/admin/goods_type/index');
        } else {
            return redirect()->back();
        }
    }

    public function edit($id)
    {
        $goods_type = GoodsType::where('id', '=', $id)->firstOrFail();
        $goods_types = GoodsType::all();
        return view('admin/goods_type/edit', ['goods_type' => $goods_type, 'goods_types' => $goods_types]);
    }

    public function update(Request $request)
    {
        $validator = Validator::make(
            $request->except(['_token']),
            [
                'name' => 'required',
                'parent' => 'required',
                'id' => 'required'
            ],
            [
                'name.required' => '名称不能为空',
                'parent.required' => '类型不能为空',
            ]
        );
        if($validator->fails()){
            return redirect('/admin/goods_type/add')->withErrors($validator);
        }

        $file = $request->file('picurl');

        $id = $request->id;
        $goods_type = GoodsType::findOrFail($id);

        if ($file) {
            if ($file->isValid()) {

                $path     = sprintf("/data/upload/images/%s/%s/%s/", date('Y', time()), date('m', time()),
                    date('d', time()));
                $filePath = base_path('public' . $path);
                $originalName = $file->getClientOriginalName();
                $ext = $file->guessExtension();
                $fileName     = sha1($originalName . microtime(true) * 20) . '.' . $ext;

                $file->move($filePath, $fileName);
                $goods_type->picurl = $path.$fileName;
            }
        }

        $goods_type->name = $request->name;
        $goods_type->parent_id = $request->parent;
        $goods_type->linkurl = $request->linkurl;
        $goods_type->sort = $request->sort;
        $goods_type->checkinfo = $request->checkinfo;
        $result = $goods_type->save();
        if ($result) {
            return redirect()->to('/admin/goods_type/index');
        } else {
            return redirect()->back();
        }
    }

    public function delete($id)
    {
        GoodsType::findOrFail($id)->delete();
        return redirect()->to('/admin/goods_type/index');
    }

}
