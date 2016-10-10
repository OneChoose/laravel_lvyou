<?php

namespace App\Http\Controllers\Home;


use App\Http\Controllers\Controller;
use App\Model\Entertainment;
use App\Model\EntertainmentOrder;
use App\Model\Member;
use App\Model\Order;
use App\Model\Weixin\Wxpay;
use App\Tool\Util;
use Illuminate\Http\Request;

class EntertainmentController extends Controller
{
    use Wxpay;
    public function index()
    {
        $entertainment = Entertainment::orderBy('id', 'desc')->paginate(15);
        return view('/home/entertainment/index', ['entertainment' => $entertainment]);
    }

    public function order($id)
    {
        $entertainment = Entertainment::whereId($id)->first();
        return view('/home/entertainment/order', ['entertainment' => $entertainment]);
    }
    public function createOrder(Request $request)
    {
        $validator = \Validator::make(
            $request->except(['_token']),
            [
                'id' => 'required',
                'get_time' => 'required',
                'number' => 'required',
                'name' => 'required',
                'phone' => 'required',
            ],
            [
            ]
        );
        if ($validator->fails()) {
            return redirect()->back();
        }
        $id = $request->input('id');
        $get_time = $request->input('get_time');
        $number = $request->input('number');
        $name = $request->input('name');
        $phone = $request->input('phone');

        $entertainment = Entertainment::whereId($id)->first();
        $price =  $entertainment->price * $number;

        $order_num = Util::getOrderNum();

        try {
            \DB::beginTransaction();
            //保存会员信息
            $member_id = Member::saveMember($name, $phone, '123456');

            $order = new Order();
            $order->order = $order_num;
            $order->member_id = $member_id;
            $order->type = 2;
            $order->order_time = time();
            $order->is_pay = 1;
            $order->total_money = $price;
            $order->save();

            $entertainment_order = new EntertainmentOrder();
            $entertainment_order->order_id = $order->id;
            $entertainment_order->member_id = $member_id;
            $entertainment_order->name = $name;
            $entertainment_order->phone = $phone;
            $entertainment_order->order = $order_num;
            $entertainment_order->entertainment_id = $id;
            $entertainment_order->number = $number;
            $entertainment_order->get_time = $get_time;
            $entertainment_order->total_money = $price;
            $entertainment_order->save();

            \DB::commit();

        } catch (\Exception $e) {
            \DB::rollBack();
            return redirect()->back();
        }

        return view('/home/entertainment/pay', [ 'entertainment' => $entertainment, 'order' => $order_num]);
    }

    public function pay(Request $request)
    {
        $pay_type = intval($request->get('pay_type'));
        $order = htmlspecialchars($request->get('order'));
        $entertainment_order = EntertainmentOrder::where('order', '=', $order)->first();

        if (empty($entertainment_order)) {
            return redirect()->back();
        }

        if ($pay_type == 3) {//支付宝
            // 创建支付单。
            $alipay = app('alipay.web');
            $alipay->setOutTradeNo($entertainment_order->order);
            $alipay->setTotalFee($entertainment_order->total_money);
            $alipay->setSubject($entertainment_order->getEntertainment->title);
            $alipay->setBody($entertainment_order->getEntertainment->name);
            $alipay->setQrPayMode('2'); //该设置为可选，添加该参数设置，支持二维码支付。
            // 跳转到支付页面。
            return redirect()->to($alipay->getPayLink());

        } elseif ($pay_type == 4) {//微信
            $title = $entertainment_order->getEntertainment->title;
            $order_no = $entertainment_order->order;
            $totalFee = $entertainment_order->total_money * 100;
            $url = $this->GoPay($title, $title, $order_no, $totalFee, $title);
            echo '<img alt="模式二扫码支付" src="' . $url . '" style="width:150px;height:150px;"/>';
        }
    }

}
