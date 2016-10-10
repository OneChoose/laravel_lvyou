<?php

namespace App\Http\Controllers\Admin;

use App\Model\ActiveOrder;
use App\Model\Entertainment;
use App\Model\EntertainmentOrder;
use App\Model\Order;
use App\Model\RoomOrder;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;


class OrderController extends Controller
{
    public function index($type)
    {
        $type = intval($type);
        if(!in_array($type,[1,2,3])){
            echo "请求错误";
            exit;
        }
        $orderList = Order::where('type','=',$type)->orderBy('id', 'desc')->paginate(15);

        return view('admin/order/index',['list' => $orderList,'type' => $type]);
    }

    public function info($id,$type){
        $id = intval($id);
        $type = intval($type);
        if(!in_array($type,[1,2,3]) || $id <= 0 ){
            echo "请求错误";
            exit;
        }
        if($type == 1){//客房订单
            $orderInfo = RoomOrder::with('roomOrder')->where('order_id','=',$id)->first();
            if(empty($orderInfo)){
                echo "订单不存在";
                exit;
            }
            return view('admin/order/room',['info' => $orderInfo]);
        }elseif($type == 2){//娱乐订单
            $orderInfo = EntertainmentOrder::with('getEntertainment')->where('order_id','=',$id)->first();
            if(empty($orderInfo)){
                echo "订单不存在";
                exit;
            }
            return view('admin/order/entertainment',['info' => $orderInfo]);
        }else{//活动订单
            $orderInfo = ActiveOrder::with('getActive')->where('order_id','=',$id)->first();
            if(empty($orderInfo)){
                echo "订单不存在";
                exit;
            }
            return view('admin/order/active',['info' => $orderInfo]);
        }
    }

    public function delete($id,$type){
        $id = intval($id);
        $type = intval($type);
        if(!in_array($type,[1,2,3]) || $id <= 0 ){
            echo "请求错误";
            exit;
        }
        try{
            \DB::beginTransaction();
            $order_rs = Order::findOrFail($id)->delete();
            if($type == 1){//客房订单
                $rs = RoomOrder::where('order_id','=',$id)->delete();
            }elseif($type == 2){//娱乐订单
                $rs = Entertainment::where('order_id','=',$id)->delete();
            }else{//活动订单
                $rs = ActiveOrder::where('order_id','=',$id)->delete();
            }
            if($order_rs && $rs){
                \DB::commit();
            }else{
                throw new \Exception("error");
            }
        }catch (\Exception $e){
            \DB::rollBack();
            return redirect()->back();
        }
        return redirect()->to('/admin/order/index/'.$type);
    }

    public function pay($id,$type){
        $rs = Order::where('id','=',$id)->update(['is_pay' => 2, 'pay_time' =>time()]);
        if($rs){
            return redirect()->to('/admin/order/index/'.$type);
        }else{
            echo "操作失败，请稍后再试";
            exit;
        }
    }

    // 退货
    public function salesReturn($id,$type) {
        $rs = Order::where('id','=',$id)->update(['is_pay' => 4]);
        if($rs){
            return redirect()->to('/admin/order/index/'.$type);
        }else{
            echo "操作失败，请稍后再试";
            exit;
        }
    }

    //Excel文件导出功能
    public function excelExport($type){

        $type = intval($type);
        if(!in_array($type,[1,2,3])){
            echo "请求错误";
            exit;
        }
        $cellData = Order::select('id', 'order', 'type', 'member_id','order_time','pay_time','is_pay','pay_type','total_money')->where('type','=',$type)->orderBy('id', 'desc')->paginate(15);
        $cellData = $cellData->toArray();
        $cellData = $cellData['data'];
        array_unshift($cellData,['id', '订单号', '客房1,娱乐2,活动3','会员id', '订单创建时间戳', '订单支付时间戳', '是否支付,1是未支付，2是已支付,3退货中，4确认退货','支付方式：到店支付1,线上支付2,支付宝3,微信4','总金额']);
//        $cellData = [
//            ['学号','姓名','成绩'],
//            ['10001','AAAAA','99'],
//            ['10002','BBBBB','92'],
//            ['10003','CCCCC','95'],
//            ['10004','DDDDD','89'],
//            ['10005','EEEEE','96'],
//        ];
        Excel::create('订单',function($excel) use ($cellData){
            $excel->sheet('score', function($sheet) use ($cellData){
                $sheet->rows($cellData);
            });
        })->export('xls');
    }

}