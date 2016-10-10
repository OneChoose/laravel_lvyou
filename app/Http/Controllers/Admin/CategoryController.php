<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\Article;
use App\Model\Article_category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Validator;

class CategoryController extends Controller
{
    public function index()
    {
        $category = Article_category::with('childrenCategory')->orderBy('sort', 'asc')->get();

        return view('admin/category/index', ['category' => $category]);
    }

    public function add()
    {
        $category = Article_category::with('childrenCategory')->get();

        return view('admin/category/add', ['category' => $category]);
    }

    public function save(Request $request)
    {
        $validator = Validator::make(
            $request->except(['_token']),
            [
                'name' => 'required',
                'parent' => 'required',
                'sort' => 'required',
            ]
        );
        if ($validator->fails()) {
            return redirect()->back();
        }
        $category = new Article_category();
        $category->name = $request->name;
        $category->parent_id = $request->parent;
        $category->sort = $request->sort;
        $result = $category->save();
        if ($result) {
            return redirect()->to('/admin/category');
        } else {
            return redirect()->back();
        }
    }

    public function edit($id){
        $category = Article_category::find($id);
        $categoryArr = Article_category::with('childrenCategory')->get();
        return view('/admin/category/edit',['category' => $category,'categoryArr' => $categoryArr]);
    }

    public function update(Request $request,$id){

        $category = Article_category::find($id);
        $category->name = $request->get('name');
        $category->parent_id = $request->get('parent');
        $category->sort = $request->get('sort');
        $result = $category->save();
        if ($result) {
            return redirect()->to('/admin/category');
        } else {
            return redirect()->back();
        }
    }

    public function delete($id,$parent_id){
        if($parent_id == 0){//父级分类
            $categoryArr = Article_category::where('parent_id','=',$id)->orWhere('id','=',$id)->pluck('id');
            try{
                \DB::beginTransaction();
                $rs1 = Article_category::whereIn('id',$categoryArr)->delete();
                //删除文章
                $rs2 = Article::whereIn('category_id',$categoryArr)->update(['state'=>0]);
                \DB::commit();
                if($rs1 && $rs2){
                    return redirect()->to('/admin/category');
                }else{
                    return redirect()->back();
                }
            }catch (\Exception $e){
                \DB::rollBack();
            }
        }elseif ($parent_id > 0){//子级分类
            try{
                \DB::beginTransaction();
                $rs1 = Article_category::where('id','=',$id)->delete();
                //删除文章
                $rs2 = Article::where('category_id','=',$id)->update(['state'=>0]);
                \DB::commit();
                if($rs1 && $rs2){
                    return redirect()->to('/admin/category');
                }else{
                    return redirect()->back();
                }
            }catch (\Exception $e){
                \DB::rollBack();
            }
        }
    }

}
