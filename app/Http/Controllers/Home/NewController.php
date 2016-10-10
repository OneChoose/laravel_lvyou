<?php

namespace App\Http\Controllers\Home;


use App\Http\Controllers\Controller;
use App\Model\Article;

class NewController extends Controller
{
    public function index()
    {
        $article = Article::orderBy('sort', 'asc')->where('state' ,'=', 1)->whereType('2')->where('category_id', 24)->paginate(3);
        return view('/home/new/index', ['article' => $article]);
    }

    public function detail($id)
    {
        $article = Article::orderBy('sort', 'asc')->where('state' ,'=', 1)->whereType('2')->where('category_id', 24)->whereId($id)->first();
        return view('/home/new/detail', ['article' => $article]);
    }

}
