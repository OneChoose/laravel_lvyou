<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\Article;
use App\Model\Article_category;
use Illuminate\Http\Request;
use Validator;
use Session;

class ArticleController extends Controller
{
    public function index()
    {
        $article = Article::orderBy('sort', 'asc')->where('state' ,'=', 1)->whereType('2')->paginate(15);

        return view('admin/article/index', ['article' => $article]);
    }

    public function add()
    {
        $category = Article_category::with('childrenCategory')->get();
        return view('admin/article/add', ['category' => $category]);
    }

    public function save(Request $request){
        $validator = Validator::make(
            $request->except(['_token']),
            [
                'title' => 'required',
                'category_id' => 'required',
                'sort' => 'numeric',
                'contents' => 'required',
            ],
            [
                'title.required' => '标题不能为空',
                'category_id.required' => '分类不能为空',
                'sort.numeric' => '排序有误',
                'contents.required' => '内容不能为空',
            ]
        );
        if($validator->fails()){
            return redirect()->back()->withErrors($validator);
        }
        $admin_id = Session::get('id');

        $article = new Article();

        $file = $request->file('picurl');
        if ($file) {
            if ($file->isValid()) {
                $path     = sprintf("/data/upload/images/%s/%s/%s/", date('Y', time()), date('m', time()),
                    date('d', time()));
                $filePath = base_path('public' . $path);
                $originalName = $file->getClientOriginalName();
                $ext = $file->guessExtension();
                $fileName     = sha1($originalName . microtime(true) * 20) . '.' . $ext;

                $file->move($filePath, $fileName);
                $article->img = $path.$fileName;
            }
        }

        $article->category_id = $request->get('category_id');
        $article->admin_id = $admin_id;
        $article->title = $request->get('title');
        $article->keyword = $request->get('keyword');
        $article->description = $request->get('description');
        $article->click = $request->get('click');
        $article->sort = $request->get('sort');
        $article->type = 2;
        $article->checked = $request->get('checked');
        $article->content = $request->get('contents');
        $article->created_at = date('Y-m-d H:i:s');
        $article->updated_at = date('Y-m-d H:i:s');
        $rs = $article->save();
        if($rs){
            return redirect()->to('/admin/article/index');
        }else{
            return redirect()->back();
        }
    }

    public function edit($id){
        $article = Article::find($id);
        $category = Article_category::with('childrenCategory')->get();
        return view('/admin/article/edit',['article' => $article,'category' => $category]);
    }

    public function update(Request $request,$id){
        $validator = Validator::make(
            $request->except(['_token']),
            [
                'title' => 'required',
                'category_id' => 'required',
                'sort' => 'required',
                'contents' => 'required',
            ],
            [
                'title.required' => '标题不能为空',
                'category_id.required' => '分类不能为空',
                'sort.required' => '排序不能为空',
                'contents.required' => '内容不能为空',
            ]
        );
        if($validator->fails()){
            return redirect()->back()->withErrors($validator);
            //return redirect('/admin/article/'.$id.'edit')->withErrors($validator);
        }
        $admin_id = Session::get('id');
        $article = Article::find($id);

        $file = $request->file('picurl');
        if ($file) {
            if ($file->isValid()) {
                $path     = sprintf("/data/upload/images/%s/%s/%s/", date('Y', time()), date('m', time()),
                    date('d', time()));
                $filePath = base_path('public' . $path);
                $originalName = $file->getClientOriginalName();
                $ext = $file->guessExtension();
                $fileName     = sha1($originalName . microtime(true) * 20) . '.' . $ext;

                $file->move($filePath, $fileName);
                $article->img = $path.$fileName;
            }
        }

        $article->category_id = $request->get('category_id');
        $article->admin_id = $admin_id;
        $article->description = $request->get('description');
        $article->title = $request->get('title');
        $article->keyword = $request->get('keyword');
        $article->click = $request->get('click');
        $article->sort = $request->get('sort');
        $article->checked = $request->get('checked');
        $article->content = $request->get('contents');
        $article->updated_at = date('Y-m-d H:i:s');
        $article->type = 2;
        $rs = $article->save();
        if($rs){
            return redirect()->to('/admin/article/index');
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
            return redirect()->to('/admin/article/index');
        }else{
            return redirect()->back();
        }
    }
}
