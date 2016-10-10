<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\Article;
use App\Model\Article_category;
use Illuminate\Http\Request;
use Validator;
use Session;

class SinglePageController extends Controller
{
    public function index()
    {
        $article = Article::orderBy('sort', 'asc')->where('state' ,'=', 1)->whereType('1')->paginate(15);

        return view('admin/single_page/index', ['article' => $article]);
    }

    public function add()
    {
        return view('admin/single_page/add');
    }

    public function save(Request $request){
        $validator = Validator::make(
            $request->except(['_token']),
            [
                'title' => 'required',
                'contents' => 'required',
            ],
            [
                'title.required' => '标题不能为空',
                'contents.required' => '内容不能为空',
            ]
        );
        if($validator->fails()){
            return redirect()->back()->withErrors($validator);
        }
        $admin_id = Session::get('id');

        $article = new Article();
        $article->admin_id = $admin_id;
        $article->type = 1;
        $article->title = $request->get('title');
        $article->checked = $request->get('checked');
        $article->content = $request->get('contents');
        $article->created_at = date('Y-m-d H:i:s');
        $article->updated_at = date('Y-m-d H:i:s');
        $rs = $article->save();
        if($rs){
            return redirect()->to('/admin/single_page/index');
        }else{
            return redirect()->back();
        }
    }

    public function edit($id){
        $article = Article::find($id);
        return view('/admin/single_page/edit',['article' => $article]);
    }

    public function update(Request $request,$id){
        $validator = Validator::make(
            $request->except(['_token']),
            [
                'title' => 'required',
                'contents' => 'required',
            ],
            [
                'title.required' => '标题不能为空',
                'contents.required' => '内容不能为空',
            ]
        );
        if($validator->fails()){
            return redirect()->back()->withErrors($validator);
        }
        $admin_id = Session::get('id');
        $article = Article::find($id);
        $article->category_id = $request->get('category_id');
        $article->admin_id = $admin_id;
        $article->title = $request->get('title');
        $article->checked = $request->get('checked');
        $article->content = $request->get('contents');
        $article->updated_at = date('Y-m-d H:i:s');
        $article->type = 1;
        $rs = $article->save();
        if($rs){
            return redirect()->to('/admin/single_page/index');
        }else{
            return redirect()->back();
        }
    }

    public function delete($id){
        $admin_id = Session::get('id');
        $article = Article::find($id);
        $article->admin_id = $admin_id;
        $article->state = 0;
        $rs = $article->save();
        if($rs){
            return redirect()->to('/admin/single_page/index');
        }else{
            return redirect()->back();
        }
    }
}
