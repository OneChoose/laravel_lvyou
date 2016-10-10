<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\Order;
use Illuminate\Http\Request;
use Validator;
use Maatwebsite\Excel\Facades\Excel;


class IncomeController extends Controller
{
    public function index()
    {

        $orderList = Order::where('is_pay', 2)->orderBy('id', 'desc');
        if (isset($_GET['pay_time']) && !empty($_GET['pay_time'])) {
            $pay_time = strtotime($_GET['pay_time']);
            $orderList->where('pay_time','>=', $pay_time);
        }
        if (isset($_GET['pay_time_end']) && !empty($_GET['pay_time_end'])) {
            $pay_time_end = strtotime($_GET['pay_time_end']);
            $orderList->where('pay_time','<=', $pay_time_end);
        }
        if (isset($_GET['order_type']) && !empty($_GET['order_type'])) {
            $order_type = htmlspecialchars($_GET['order_type']);
            $orderList->where('type', $order_type);
        }
        if (isset($_GET['pay_type']) && !empty($_GET['pay_type'])) {
            $pay_type = htmlspecialchars($_GET['pay_type']);
            $orderList->where('pay_type', $pay_type);
        }

        $orderCount = $orderList->sum('total_money');
        $orderList = $orderList->paginate(30);


        return view('admin/income/index', ['orderList' => $orderList, 'orderCount' => $orderCount]);
    }


    //Excel文件导出功能
    public function excelExport(){
        $orderList = Order::select('id', 'order', 'order_time', 'pay_time', 'pay_type', 'type', 'total_money')->where('is_pay', 2)->orderBy('id', 'desc');
        if (isset($_GET['pay_time']) && !empty($_GET['pay_time'])) {
            $pay_time = strtotime($_GET['pay_time']);
            $orderList->where('pay_time','>=', $pay_time);
        }
        if (isset($_GET['pay_time_end']) && !empty($_GET['pay_time_end'])) {
            $pay_time_end = strtotime($_GET['pay_time_end']);
            $orderList->where('pay_time','<=', $pay_time_end);
        }
        if (isset($_GET['order_type']) && !empty($_GET['order_type'])) {
            $order_type = htmlspecialchars($_GET['order_type']);
            $orderList->where('type', $order_type);
        }
        if (isset($_GET['pay_type']) && !empty($_GET['pay_type'])) {
            $pay_type = htmlspecialchars($_GET['pay_type']);
            $orderList->where('pay_type', $pay_type);
        }
        $orderList = $orderList->paginate(30);
        $cellData = $orderList->toArray();
        $cellData = $cellData['data'];

        foreach($cellData as $k=>$v) {
            $cellData[$k]['order_time'] = date('Y-m-d H:i:s', $v['order_time']);
            $cellData[$k]['pay_time'] = date('Y-m-d H:i:s', $v['pay_time']);
            if($v['pay_type'] == 1) {
                $cellData[$k]['pay_type'] = '到店支付';
            }elseif($v['pay_type'] == 2) {
                $cellData[$k]['pay_type'] = '线上支付';
            }elseif($v['pay_type'] == 3) {
                $cellData[$k]['pay_type'] = '支付宝';
            }elseif($v['pay_type'] == 4) {
                $cellData[$k]['pay_type'] = '微信';
            }else {
                $cellData[$k]['pay_type'] = '';
            }
            if($v['type'] == 1) {
                $cellData[$k]['type'] = '客房';
            }elseif($v['type'] == 2) {
                $cellData[$k]['type'] = '娱乐';
            }elseif($v['type'] == 3) {
                $cellData[$k]['type'] = '活动';
            }else {
                $cellData[$k]['type'] = '';
            }
        }
        array_unshift($cellData,['id', '订单号', '下单时间','支付时间', '支付方式', '订单类型', '总金额']);

        Excel::create('订单',function($excel) use ($cellData){
            $excel->sheet('score', function($sheet) use ($cellData){
                $sheet->rows($cellData);
            });
        })->export('xls');
    }

}
