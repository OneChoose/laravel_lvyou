<?php

namespace App\Http\Controllers\Home;


use App\Http\Controllers\Controller;
use App\Model\Active;
use App\Model\ActiveOrder;
use App\Model\Member;
use App\Model\Order;
use App\Model\Weixin\Wxpay;
use App\Tool\Util;
use Illuminate\Http\Request;

class ActiveController extends Controller
{
    use Wxpay;
    public function index()
    {
        $active = Active::orderBy('id', 'asc')->paginate(3);
        return view('/home/active/index', [ 'active' => $active]);
    }

    public function detail($id)
    {
        $active = Active::whereId($id)->first();
        return view('/home/active/detail', [ 'active' => $active]);
    }

    public function order($id)
    {
        $active = Active::whereId($id)->first();
        return view('/home/active/order', [ 'active' => $active]);
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

        $active = Active::whereId($id)->first();
        $price =  $active->price * $number;

        $order_num = Util::getOrderNum();

        try {
            \DB::beginTransaction();
            //保存会员信息
            $member_id = Member::saveMember($name, $phone, '123456');

            $order = new Order();
            $order->order = $order_num;
            $order->member_id = $member_id;
            $order->type = 3;
            $order->order_time = time();
            $order->is_pay = 1;
            $order->total_money = $price;
            $order->save();

            $active_order = new ActiveOrder();
            $active_order->order_id = $order->id;
            $active_order->member_id = $member_id;
            $active_order->name = $name;
            $active_order->phone = $phone;
            $active_order->order = $order_num;
            $active_order->active_id = $id;
            $active_order->number = $number;
            $active_order->get_time = $get_time;
            $active_order->total_money = $price;
            $active_order->save();

            \DB::commit();

        } catch (\Exception $e) {
            \DB::rollBack();
            return redirect()->back();
        }

        return view('/home/active/pay', [ 'active' => $active, 'order' => $order_num]);
    }

    public function pay(Request $request)
    {
        $pay_type = intval($request->get('pay_type'));
        $order = htmlspecialchars($request->get('order'));
        $active_order = ActiveOrder::where('order', '=', $order)->first();

        if (empty($active_order)) {
            return redirect()->back();
        }

        if ($pay_type == 3) {//支付宝
            // 创建支付单。
            $alipay = app('alipay.web');
            $alipay->setOutTradeNo($active_order->order);
            $alipay->setTotalFee($active_order->total_money);
            $alipay->setSubject($active_order->getActive->name);
            $alipay->setBody($active_order->getActive->name);
            $alipay->setQrPayMode('2'); //该设置为可选，添加该参数设置，支持二维码支付。
            // 跳转到支付页面。
            return redirect()->to($alipay->getPayLink());

        } elseif ($pay_type == 4) {//微信
            $title = $active_order->getActive->name;
            $order_no = $active_order->order;
            $totalFee = $active_order->total_money * 100;
            $url = $this->GoPay($title, $title, $order_no, $totalFee, $title);
            echo '<img alt="模式二扫码支付" src="' . $url . '" style="width:150px;height:150px;"/>';
        }

    }
}