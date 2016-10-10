<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Validator;

class UploadController extends Controller
{
    public function getIndex(Request $request)
    {
        // 获取前端 UEditor 请求参数
        $action = $request->query('action');

        switch ($action) {
            case 'config':
                // 返回配置 json 文件
                return response()->json([
                    'imageActionName'     => 'image',
                    'imageFieldName'      => 'image',
                    'imageMaxSize'        => 2048000,
                    'imageAllowFiles'     => [".png", ".jpg", ".jpeg", ".gif", ".bmp"],
                    'imageCompressEnable' => true,
                    'imageCompressBorder' => 900,
                    'imageInsertAlign'    => 'none',
                    'imageUrlPrefix'      => '',

                ]);
        }

        return response("Error", 404);
    }

    public function postIndex(Request $request)
    {
        // TODO 后期可能会对图片的大小进行一些限制，并做剪裁处理
        $validator = Validator::make($request->all(), [
            'image' => 'required|image|max:2048000',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'state' => $validator->messages()->first('image'),
            ]);
        }

        $path     = sprintf("/data/upload/images/%s/%s/%s", date('Y', time()), date('m', time()),
            date('d', time()));
        $filePath = base_path('public' . $path);

        $file         = $request->file('image');
        $originalName = $file->getClientOriginalName();
        $ext = $file->guessExtension();
        $size = $file->getSize();
        $fileName     = sha1($originalName . microtime(true) * 20) . '.' . $ext;

        $file->move($filePath, $fileName);

        return response()->json(['state'   => 'SUCCESS',
                                 'url'      => $path . '/' . $fileName,
                                 'title'    => $fileName,
                                 'original' => $originalName,
                                 'type'     => $ext,
                                 'size'     => $size,
        ]);
    }

    public function ajax(Request $request)
    {
        return 123;
    }
}
