<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Validator;

class UploadImgController extends Controller
{
    public function ajax(Request $request)
    {
        $file = $request->file('file');
        if ($file) {
            if ($file->isValid()) {

                $path     = sprintf("/data/upload/images/%s/%s/%s/", date('Y', time()), date('m', time()),
                    date('d', time()));
                $filePath = base_path('public' . $path);
                $originalName = $file->getClientOriginalName();
                $ext = $file->guessExtension();
                $fileName     = sha1($originalName . microtime(true) * 20) . '.' . $ext;

                $file->move($filePath, $fileName);
                echo json_encode(array("error"=>"0","pic"=>$path.$fileName,"name"=>$fileName));
                exit;
            }
        }
        echo json_encode(array("error"=>"上传有误，清检查服务器配置！"));
    }
}
