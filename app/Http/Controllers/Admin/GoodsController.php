<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\Goods;
use Illuminate\Http\Request;
use App\Model\GoodsType;
use Validator;

/**
 * 商品
 * @package App\Http\Controllers\Admin
 */
class GoodsController extends Controller
{
    public function index()
    {
        $goods = Goods::orderBy('sort', 'asc')->where('delstate', '!=', 'true')->paginate(15);
        return view('admin/goods/index', ['goods' => $goods]);
    }

    public function add()
    {
        $goods_type = GoodsType::all();
        return view('admin/goods/add', ['goods_type' => $goods_type]);
    }

    public function save(Request $request)
    {
        $validator = Validator::make(
            $request->except(['_token']),
            [
                'title' => 'required',
                'parent' => 'required|numeric',
                'marketprice' => 'required|numeric',
                'salesprice' => 'required|numeric',
                'content' => 'required',
                'posttime' => 'date',
            ],
            [
                'title.required' => '商品名称不能为空',
                'parent.required' => '请选择商品分类',
                'parent.numeric' => '商品分类格式不对',
                'marketprice.required' => '市场价不能为空',
                'marketprice.numeric' => '市场价格式不对',
                'salesprice.required' => '销售价不能为空',
                'salesprice.numeric' => '销售价格式不对',
                'content.required' => '内容不能为空',
                'posttime.date' => '日期格式不对',
            ]
        );
        if ($validator->fails()) {
            return redirect('/admin/goods/add')->withErrors($validator);
        }
        $file_pics = '';
        if ($request->file_pics) {
            $file_pics = implode(",",$request->file_pics);
        }
        $goods = new Goods();
        $goods->title = $request->title;
        $goods->typeid = $request->parent;
        $goods->marketprice = $request->marketprice;
        $goods->salesprice = $request->salesprice;
        $goods->housenum = $request->housenum;
        $goods->integral = $request->integral;
        $goods->source = $request->source;
        $goods->author = $request->author;
        $goods->linkurl = $request->linkurl;
        $goods->picarr = $file_pics;
        $goods->keywords = $request->keywords;
        $goods->description = $request->description;
        $goods->content = $request->input('content');
        $goods->sort = $request->sort;
        $goods->click = $request->click;
        $goods->checkinfo = $request->checked;
        $goods->created_at = date("Y-m-d H:i:s");
        $goods->updated_at = $request->posttime;
        $result = $goods->save();
        if ($result) {
            return redirect()->to('/admin/goods/index');
        } else {
            return redirect()->back();
        }
    }

    public function edit($id)
    {
        $goods = Goods::where('id', '=', $id)->firstOrFail();
        $goods_type = GoodsType::all();
        return view('admin/goods/edit', ['goods' => $goods, 'goods_type' => $goods_type]);
    }

    public function update(Request $request)
    {
        $validator = Validator::make(
            $request->except(['_token']),
            [
                'title' => 'required',
                'parent' => 'required|numeric',
                'marketprice' => 'required|numeric',
                'salesprice' => 'required|numeric',
                'content' => 'required',
                'posttime' => 'date',
                'id' => 'numeric',
            ],
            [
                'title.required' => '商品名称不能为空',
                'parent.required' => '请选择商品分类',
                'parent.numeric' => '商品分类格式不对',
                'marketprice.required' => '市场价不能为空',
                'marketprice.numeric' => '市场价格式不对',
                'salesprice.required' => '销售价不能为空',
                'salesprice.numeric' => '销售价格式不对',
                'content.required' => '内容不能为空',
                'posttime.date' => '日期格式不对',
            ]
        );
        if ($validator->fails()) {
            return redirect('/admin/goods/add')->withErrors($validator);
        }
        $file_pics = '';
        if ($request->file_pics) {
            $file_pics = implode(",",$request->file_pics);
        }
        $id = $request->id;
        $goods = Goods::findOrFail($id);
        $goods->title = $request->title;
        $goods->typeid = $request->parent;
        $goods->marketprice = $request->marketprice;
        $goods->salesprice = $request->salesprice;
        $goods->housenum = $request->housenum;
        $goods->integral = $request->integral;
        $goods->source = $request->source;
        $goods->author = $request->author;
        $goods->picarr = $file_pics;
        $goods->linkurl = $request->linkurl;
        $goods->keywords = $request->keywords;
        $goods->description = $request->description;
        $goods->content = $request->input('content');
        $goods->sort = $request->sort;
        $goods->click = $request->click;
        $goods->checkinfo = $request->checkinfo;
        $goods->created_at = date("Y-m-d H:i:s");
        $goods->updated_at = $request->posttime;
        $result = $goods->save();
        if ($result) {
            return redirect()->to('/admin/goods/index');
        } else {
            return redirect()->back();
        }
    }

    public function delete($id)
    {
        Goods::findOrFail($id)->delete();
        return redirect()->to('/admin/goods/index');
    }

}
