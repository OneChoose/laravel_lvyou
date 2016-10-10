<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\Link;
use App\Model\Site;
use App\Model\SitePay;
use Illuminate\Http\Request;
use Validator;

class SiteController extends Controller
{

    public function index()
    {
        $web_seo = Site::where('name', 'web_seo')->firstOrFail();
        $web_name = Site::where('name', 'web_name')->firstOrFail();
        $web_keyword = Site::where('name', 'web_keyword')->firstOrFail();
        $web_description = Site::where('name', 'web_description')->firstOrFail();

        $site = [
            'web_seo' => $web_seo['value'],
            'web_name' => $web_name['value'],
            'web_keyword' => $web_keyword['value'],
            'web_description' => $web_description['value'],
        ];

        return view('admin/site/index', ['site' => $site]);
    }

    /**
     * 修改基本设置信息
     * @param Request $request
     * @return $this|\Illuminate\Http\RedirectResponse
     */
    public function base(Request $request)
    {
        foreach ($request->site as $k => $v) {
            \DB::table('site')->where('name', $k)->update(['value' => $v]);
        }
        return redirect()->to('/admin/site/index');
    }

    /**
     * 儿童价格
     * @param Request $request
     * @return $this|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function children_bed_price(Request $request)
    {
        $site = Site::where('name', '=', 'children_bed_price')->firstOrFail();

        if ($request->name) {
            $validator = Validator::make(
                $request->except(['_token']),
                [
                    'name' => 'required|numeric',
                ],
                [
                    'name.required' => '参数不能为空',
                    'name.numeric' => '参数必须是数字',
                ]
            );
            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator);
            }

            $site->value = $request->name;
            $site->save();
        }

        return view('admin/site/children_bed_price', ['site' => $site]);
    }

    /**
     * 支付设置列表
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function pay()
    {
        $sitePay = SitePay::orderBy('id', 'desc')->paginate(15);;

        return view('admin/site/pay', ['sitePay' => $sitePay]);
    }

    /**
     * 支付设置编辑
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function editPay($id)
    {
        $sitePay = SitePay::findOrFail($id);
        return view('admin/site/editPay', ['sitePay' => $sitePay]);
    }

    public function updatePay(Request $request)
    {
        $validator = Validator::make(
            $request->except(['_token']),
            [
                'partner_id' => 'required',
                'seller_id' => 'required',
                'key' => 'required',
            ],
            [
                'partner_id.required' => '身份者id不能为空',
                'seller_id.required' => '账号id不能为空',
                'key.required' => '安全检验码不能为空',
            ]
        );
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }
        $sitePay = SitePay::findOrFail($request->id);
        $sitePay->partner_id = $request->input('partner_id');
        $sitePay->seller_id = $request->input('seller_id');
        $sitePay->key = $request->input('key');
        $result = $sitePay->save();
        if ($result) {
            return redirect()->to('/admin/site/pay');
        } else {
            return redirect()->back();
        }
    }

    /**
     * 优惠设置
     */
    public function discount(){

    }

    /**
     * 友情链接
     */
    public function link(){
        $link = Link::all();
        return view('admin/link/index', ['link' => $link]);
    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function linkDelete($id)
    {
        Link::find($id)->delete();
        return redirect()->to('/admin/site/link');
    }

    /**
     * 新增友情链接
     */
    public function linkAdd()
    {
        return view('admin/link/add');
    }

    public function linkSave(Request $request)
    {
        $link = new Link();
        $link->webname = $request->get('webname');
        $link->linkurl = $request->get('linkurl');
        $link->orderid = $request->get('orderid');
        $link->checkinfo = $request->get('checkinfo');
        $link->nofollow = $request->get('nofollow');
        $link->save();
        return redirect()->to('/admin/site/link');
    }

    public function linkEdit($id)
    {
        $link = Link::find($id);
        return view('/admin/link/edit', ['link' => $link]);
    }

    public function linkUpdate($id, Request $request)
    {
        $link = Link::find($id);
        $link->webname = $request->get('webname');
        $link->linkurl = $request->get('linkurl');
        $link->orderid = $request->get('orderid');
        $link->checkinfo = $request->get('checkinfo');
        $link->nofollow = $request->get('nofollow');
        $link->save();
        return redirect()->to('/admin/site/link');
    }

}
