<?php

namespace App\Http\Controllers\Home;

use App\Model\Order;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use \Illuminate\Support\Facades\Log;



class AlipayController extends Controller
{
    public function pay()
    {
        // 创建支付单。
        $alipay = app('alipay.web');
        $alipay->setOutTradeNo('223q1');
        $alipay->setTotalFee('0.01');
        $alipay->setSubject('goods_name');
        $alipay->setBody('goods_description');

        $alipay->setQrPayMode('2'); //该设置为可选，添加该参数设置，支持二维码支付。

        // 跳转到支付页面。
        return redirect()->to($alipay->getPayLink());
    }
    /**
     * 同步通知
     */
    public function webReturn(Request $request)
    {
// 验证请求。
        if (!app('alipay.web')->verify()) {
            Log::notice('Alipay return query data verification fail.', [
                'data' => Request::getQueryString()
            ]);
            return '失败';
        }

        // 判断通知类型。
        switch (Input::get('trade_status')) {
            case 'TRADE_SUCCESS':
            case 'TRADE_FINISHED':
                // TODO: 支付成功，取得订单号进行其它相关操作。
//                Log::debug('Alipay notify get data verification success.', [
//                    'out_trade_no' => Input::get('out_trade_no'),
//                    'trade_no' => Input::get('trade_no')
//                ]);
                $out_trade_no = Input::get('out_trade_no');
                $order = Order::where('order','=', $out_trade_no)->first();
                if($order) {
                    //修改订单为：已支付
                    $order->is_pay = 2;
                    $order->pay_type = 3;
                    $order->pay_time = time();
                    $rs = $order->save();
                    if ($rs) {
                        echo 'SUCCESS'; //返回成功给微信端 一定要带上不然微信会一直回调8次
                        exit;
                    }
                }
                break;
        }

        return '成功';
    }

    /**
     * 异步通知
     * @return string
     */
    public function webNotify()
    {
        // 验证请求。
        if (! app('alipay.web')->verify()) {
            Log::notice('Alipay notify post data verification fail.', [
                'data' => Request::instance()->getContent()
            ]);
            return 'fail';
        }

        // 判断通知类型。
        switch (Input::get('trade_status')) {
            case 'TRADE_SUCCESS':
            case 'TRADE_FINISHED':
                // TODO: 支付成功，取得订单号进行其它相关操作。
                    $out_trade_no = Input::get('out_trade_no');
                    $order = Order::where('order','=', $out_trade_no)->first();
                    if($order) {
                        //修改订单为：已支付
                        $order->is_pay = 2;
                        $order->pay_type = 3;
                        $order->pay_time = time();
                        $rs = $order->save();
                        if ($rs) {
                            echo 'SUCCESS'; //返回成功给微信端 一定要带上不然微信会一直回调8次
                            exit;
                        }
                    }
                break;
        }

        return 'success';
    }
}
