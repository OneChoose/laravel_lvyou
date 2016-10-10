<?php

namespace App\Http\Controllers\Home;


use App\Model\Order;
use App\Model\Weixin\Wxpay;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use \Illuminate\Support\Facades\Log;



class WeixinController extends Controller
{
    use Wxpay;
    public function pay()
    {
//        require_once "../app/Http/WxPaySDK/lib/WxPay.Api.php";
//        require_once "../app/Http/WxPaySDK/example/WxPay.NativePay.php";
//        require_once "../app/Http/WxPaySDK/example/log.php";
//
//
//        $notify = new \NativePay();
//
//        $input = new \WxPayUnifiedOrder();
//
//        $input->SetBody("test");
//        $input->SetAttach("test");
//        $input->SetOut_trade_no('1231231'.date("YmdHis"));
//
//        $input->SetTotal_fee("1");
//        $input->SetTime_start(date("YmdHis"));
//        $input->SetTime_expire(date("YmdHis", time() + 60000));
//        $input->SetGoods_tag("test");
//        $input->SetNotify_url("http://huabang.miaoshare.cn/weixin/notify");
//        $input->SetTrade_type("NATIVE");
//        $input->SetProduct_id("123456789");
//        $result = $notify->GetPayUrl($input);
//
//        $url = $result["code_url"];
//        $url = urlencode($url);
        $url = $this->GoPay();
        echo '<img alt="模式二扫码支付" src="'. $url .'" style="width:150px;height:150px;"/>';
    }

    public function notify()
    {
         //返回的xml
        $xml = file_get_contents("php://input");
        $xmlObj = simplexml_load_string($xml, 'SimpleXMLElement', LIBXML_NOCDATA);
        $xmlArr = json_decode(json_encode($xmlObj), true);

        //file_put_contents('xml.txt', $xml);
//        file_put_contents('xml.txt1', $xmlArr['out_trade_no']);

        $out_trade_no = $xmlArr['out_trade_no']; //订单号
        $total_fee = $xmlArr['total_fee'] / 100; //回调回来的xml文件中金额是以分为单位的
        $result_code = $xmlArr['result_code']; //状态
        if ($result_code == 'SUCCESS') { //数据库操作
        //处理数据库操作 例如修改订单状态 给账户充值等等
            $order = Order::where('order','=', $out_trade_no)->where('total_money','=',$total_fee)->first();
            if($order) {
                //修改订单为：已支付
                $order->is_pay = 2;
                $order->pay_type = 4;
                $order->pay_time = time();
                $rs = $order->save();
                if ($rs) {
                    echo 'SUCCESS'; //返回成功给微信端 一定要带上不然微信会一直回调8次
                    exit;
                }
            }
        }
        //失败
        //echo "支付失败";
        return;
        exit;
    }

}
