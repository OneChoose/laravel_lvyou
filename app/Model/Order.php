<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

/**
 * 订单
 * @package App\Model
 */
class Order extends Model
{
    protected $table = 'order';

    /**
     * 保存基础订单信息
     * @param $order  订单号
     * @param $type      订单类型：客房1,娱乐2,活动3
     * @param $pay_type  支付方式：到店支付1,线上支付2,支付宝3,微信4
     * @param $total_money 总金额
     * @return mixed
     */
    public static function saveOrder($order,$type,$pay_type,$total_money){
        $order_model = new self;
        $order_model->order = $order;
        $order_model->type = $type;
        $order_model->order_time = time();
        $order_model->is_pay = 1;
        $order_model->pay_type = $pay_type;
        $order_model->total_money = $total_money;
        $order_model->created_at = date('Y-m-d H:i:s');
        $rs = $order_model->save();
        if($rs){
            return $order_model->id;
        }else{
            return false;
        }
    }

}
