<?php

namespace App\Http\Controllers\Home;


use App\Http\Controllers\Controller;
use App\Model\Food;

class EatController extends Controller
{
    public function index()
    {
        $food = food::orderBy('id', 'desc');
        if (isset($_GET['index'])) {
            if ($_GET['index'] == 'zy') {
                $type = '华邦';
            } else {
                $type = '非遗';
            }
            $food = $food->where('type', $type);
        }
        $food = $food->paginate(15);
        return view('/home/eat/index', ['food' => $food]);
    }

}
