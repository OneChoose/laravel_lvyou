<?php

namespace App\Model\Weixin;

trait Wxpay {

    /**
     * 微信扫描支付
     * @param string $body 内容
     * @param string $attach 附加
     * @param string $OutTradeOn 订单号
     * @param string $TotalFee 金额，单位分
     * @param string $GoodsTag 商品标示
     * @param string $NotifyUrl 回调地址，注意跟微信网页回调地址必须一致
     * @return string
     */
    public function GoPay($body = 'test', $attach = 'test', $OutTradeOn = '123123', $TotalFee = '1', $GoodsTag = 'test', $NotifyUrl = 'http://huabang.miaoshare.cn/weixin/notify')
    {
        require_once "../app/Http/WxPaySDK/lib/WxPay.Api.php";
        require_once "../app/Http/WxPaySDK/example/WxPay.NativePay.php";
        require_once "../app/Http/WxPaySDK/example/log.php";

        $notify = new \NativePay();
        $input = new \WxPayUnifiedOrder();

        $input->SetBody($body);
        $input->SetAttach($attach);
        $input->SetOut_trade_no($OutTradeOn);
        $input->SetTotal_fee($TotalFee);
        $input->SetTime_start(date("YmdHis"));
        $input->SetTime_expire(date("YmdHis", time() + 60000));
        $input->SetGoods_tag($GoodsTag);
        $input->SetNotify_url($NotifyUrl);
        $input->SetTrade_type("NATIVE");
        $input->SetProduct_id("123456789");
        $result = $notify->GetPayUrl($input);

        $url = $result["code_url"];
        $url = urlencode($url);
        return 'http://huabang.miaoshare.cn/weixinpay/example/qrcode.php?data=' . $url;
    }
}