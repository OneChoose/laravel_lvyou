<?php

namespace App\Http\Controllers\Home;


use App\Http\Controllers\Controller;
use App\Model\Article;
use App\Tool\Util;

class IndexController extends Controller
{
    public function index()
    {
        $weather = Util::weather();
        $weather = json_decode($weather);
        $date = date('H:i');
        if (isset($_GET['index']) && $_GET['index'] == 'zy') {
            return view('/home/index/index', ['weather' => $weather, 'date' => $date]);
        } else {
            return view('/home/index/hb_index', ['weather' => $weather, 'date' => $date]);
        }
    }

    public function company()
    {
        $article = Article::find(11);
        return view('/home/index/company', ['article' => $article]);
    }

    public function feiyi()
    {
        $article = Article::find(16);
        return view('/home/index/feiyi', ['article' => $article]);
    }

    public function contact()
    {
        $article = Article::find(12);
        return view('/home/index/contact', ['article' => $article]);
    }

    public function work()
    {
        $article = Article::find(19);
        return view('/home/index/work', ['article' => $article]);
    }

    public function travel()
    {
        $article = Article::orderBy('sort', 'asc')->where('state', '=', 1)->whereType('2')->where('category_id', 27)->paginate(3);
        return view('/home/index/travel', ['article' => $article]);
    }

    public function travelDetail($id)
    {
        $article = Article::orderBy('sort', 'asc')->where('state', '=', 1)->whereType('2')->where('category_id', 27)->whereId($id)->first();
        return view('/home/index/travel_detail', ['article' => $article]);
    }

    public function question()
    {
        $article = Article::find(21);
        return view('/home/index/feiyi', ['article' => $article]);
    }

    public function link()
    {
        $article = Article::find(22);
        return view('/home/index/feiyi', ['article' => $article]);
    }

    public function privacy()
    {
        $article = Article::find(23);
        return view('/home/index/feiyi', ['article' => $article]);
    }
}
