<?php

namespace App\Http\Controllers\Home;

use App\Model\Discount;
use App\Model\Member;
use App\Model\Order;
use App\Model\Room;
use App\Model\RoomCalendar;
use App\Model\RoomComment;
use App\Model\RoomOrder;
use App\Model\Site;
use App\Model\Weixin\Wxpay;
use App\Tool\Util;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Validator;


/**
 * 客房中心
 * @package App\Http\Controllers\Home
 */
class RoomController extends Controller
{
    use Wxpay;

    public function index()
    {
        $room = Room::orderBy('sort', 'asc')->where('checkinfo', '=', 'true');
        if (isset($_GET['index'])) {
            if ($_GET['index'] == 'zy') {
                $type = '华邦';
            } else {
                $type = '非遗';
            }
            $room = $room->whereType($type);
        }
        $room = $room->paginate(100);
        return view('home/room/index', ['room' => $room]);
    }

    public function search($type)
    {
        if ($type != "") {
            $room = Room::orderBy('sort', 'asc')->where('checkinfo', '=', 'true');
            $room = $room->where('type', '=', $type);
        } else {
            $room = Room::orderBy('sort', 'asc')->where('checkinfo', '=', 'true');
        }
        $room = $room->paginate(15);
        return view('home/room/index', ['room' => $room]);
    }

    public function roomInfo($room_id)
    {
        $room = Room::find($room_id);
        return view('home/room/roomInfo', ['room' => $room]);
    }

    public function roomMoney(Request $request)
    {
        $room_amount = $request->get('room_amount') ? $request->get('room_amount') : 0;
        $bed_amount = $request->get('bed_amount') ? $request->get('bed_amount') : 0;
        $get_time = $request->get('get_time') ? $request->get('get_time') : date('Y-m-d');
        $out_time = $request->get('out_time') ? $request->get('out_time') : date('Y-m-d');
        $room_id = $request->get('room_id') ? $request->get('room_id') : 0;
        if ($room_id <= 0) {
            $arr = [
                'status' => 100,
                'message' => '房间选择错误！'
            ];
        } else {
            $money = $this->countMoney($room_id, $room_amount, $bed_amount, $get_time, $out_time);
            $arr = [
                'status' => 10000,
                'total_money' => $money['total_money']
            ];
        }
        return json_encode($arr);
    }

    public function orderRoom(Request $request)
    {
        $validator = Validator::make(
            $request->except(['_token']),
            [
                'room_id' => 'required',
                'get_time' => 'required',
                'out_time' => 'required',
                'to_time' => 'required',
                'room_amount' => 'required|numeric',
                'man_amount' => 'required|numeric',
                'name' => 'required',
                'phone' => 'required',
                'pay_type' => 'required',
            ],
            [
                'room_id.required' => '客房不存在',
                'get_time.required' => '请选择入住时间',
                'out_time.required' => '请选择退房时间',
                'to_time.required' => '请选择最晚到达时间',
                'room_amount.required' => '请填写客房数量',
                'room_amount.numeric' => '客房数量为数字',
                'man_amount.required' => '请填写成人数量',
                'man_amount.numeric' => '成人数量为数字',
                'name.required' => '请填写姓名',
                'phone.required' => '请填写联系电话',
                'pay_type.required' => '请选择支付方式',
            ]
        );
        if ($validator->fails()) {
            return redirect()->back();
        }
        $pay_type = intval($request->get('pay_type'));
        $get_time = $request->get('get_time');
        $out_time = $request->get('out_time');
        if ($out_time < $get_time) {
            echo "退房时间不能小于入住时间！";
            exit;
        }
        $room_id = $request->get('room_id');
        //$total_money = $request->get('total_money');
        $bed_amount = $request->get('bed_amount');

        $room_amount = $request->get('room_amount');
        $room = Room::find($room_id);
        if ($room_amount > $room->surplus_amount) {
            echo "剩余房间不足，请重新预定！";
            exit;
        }
        //费用计算
        $money = $this->countMoney($room_id, $room_amount, $bed_amount, $get_time, $out_time);

        if ($pay_type == 1) {//到店支付
            try {
                \DB::beginTransaction();
                $order = Util::getOrderNum();
                //保存基础订单信息
                $order_id = Order::saveOrder($order, 1, 1, $money['total_money']);
                //保存会员信息
                $member_rs = Member::saveMember($request->get('name'), $request->get('phone'), '123456');
                if (!$order_id || !$member_rs) {
                    throw new \Exception("error");
                } else {
                    //保存订单信息
                    $roomOrder = new RoomOrder();
                    $roomOrder->order_id = $order_id;
                    $roomOrder->order = $order;
                    $roomOrder->room_id = $request->get('room_id');
                    $roomOrder->member_id = $member_rs;
                    $roomOrder->get_time = $get_time;
                    $roomOrder->out_time = $out_time;
                    $roomOrder->to_time = $request->get('to_time');
                    $roomOrder->room_amount = $room_amount;
                    $roomOrder->man_amount = $request->get('man_amount');
                    $roomOrder->children_amount = $request->get('children_amount');
                    $roomOrder->bed_amount = $bed_amount;
                    $roomOrder->name = $request->get('name');
                    $roomOrder->phone = $request->get('phone');
                    $roomOrder->created_at = date('Y-m-d H:i:s');
                    $roomOrder->total_money = $money['total_money'];
                    $roomOrder->room_money = $money['room_money'];
                    $roomOrder->bed_money = $money['bed_money'];
                    $roomOrder->save();
                    //修改客房数量
                    $room->surplus_amount = $room->surplus_amount - $room_amount;
                    $room->save();
                    \DB::commit();
                    return view('home/room/offlinePay', ['money' => $money['total_money']]);
                }
            } catch (\Exception $e) {
                \DB::rollBack();
                return redirect()->back();
            }
        } elseif ($pay_type == 2) {//线上支付
            try {
                \DB::beginTransaction();
                $order = Util::getOrderNum();
                //保存基础订单信息
                $order_id = Order::saveOrder($order, 1, 2, $money['total_money']);
                //保存会员信息
                $member = Member::saveMember($request->get('name'), $request->get('phone'), '123456');
                if (!$order_id || !$member) {
                    \DB::rollBack();
                    return redirect()->back();
                } else {
                    //保存订单信息
                    $roomOrder = new RoomOrder();
                    $roomOrder->order_id = $order_id;
                    $roomOrder->order = $order;
                    $roomOrder->room_id = $request->get('room_id');
                    $roomOrder->member_id = $member;
                    $roomOrder->get_time = $get_time;
                    $roomOrder->out_time = $out_time;
                    $roomOrder->to_time = $request->get('to_time');
                    $roomOrder->room_amount = $room_amount;
                    $roomOrder->man_amount = $request->get('man_amount');
                    $roomOrder->children_amount = $request->get('children_amount');
                    $roomOrder->bed_amount = $bed_amount;
                    $roomOrder->name = $request->get('name');
                    $roomOrder->phone = $request->get('phone');
                    $roomOrder->created_at = date('Y-m-d H:i:s');
                    $roomOrder->total_money = $money['total_money'];
                    $roomOrder->room_money = $money['room_money'];
                    $roomOrder->bed_money = $money['bed_money'];
                    $roomOrder->save();
                    //修改客房数量
                    $room->surplus_amount = $room->surplus_amount - $room_amount;
                    $room->save();
                    \DB::commit();
                    return redirect('room/onlinePayInfo/' . $roomOrder->id);
                }
            } catch (\Exception $e) {
                \DB::rollBack();
                return redirect()->back();
            }
        }
    }

    public function onlinePayInfo($id)
    {
        if ($id <= 0) {
            echo "请求错误";
            exit;
        }
        $room_order = RoomOrder::with('roomOrder')->where('id', '=', $id)->first();
        //查看订单是否存在、支付
        if ($room_order) {
            $order = Order::find($room_order->order_id);
            if ($order) {
                if ($order->is_pay == 2) {
                    echo "订单已支付，请勿重复支付";
                    exit;
                }
            } else {
                echo "订单信息不存在";
                exit;
            }
        } else {
            echo "订单信息不存在";
            exit;
        }
        return view('home/room/onlinePay', ['room_order' => $room_order]);
    }

    public function pay(Request $request)
    {
        $pay_type = intval($request->get('pay_type'));
        $id = intval($request->get('id'));
        $room_order = RoomOrder::with('roomOrder')->where('id', '=', $id)->first();

        if (empty($room_order)) {
            return redirect()->back();
        }

        if ($pay_type == 3) {//支付宝
            // 创建支付单。
            $alipay = app('alipay.web');
            $alipay->setOutTradeNo($room_order->order);
            $alipay->setTotalFee($room_order->total_money);
            $alipay->setSubject($room_order->roomOrder->title);
            $alipay->setBody($room_order->roomOrder->title);
            $alipay->setQrPayMode('2'); //该设置为可选，添加该参数设置，支持二维码支付。
            // 跳转到支付页面。
            return redirect()->to($alipay->getPayLink());

        } elseif ($pay_type == 4) {//微信
            $title = $room_order->roomOrder->title;
            $order_no = $room_order->order;
            $totalFee = $room_order->total_money * 100;
            $url = $this->GoPay($title, $title, $order_no, $totalFee, $title);
            echo '<img alt="模式二扫码支付" src="' . $url . '" style="width:150px;height:150px;"/>';
        }

    }

    public function countMoney($room_id, $room_amount, $bed_amount, $get_time, $out_time)
    {
        $room = Room::find($room_id);
        $site = Site::where('name', '=', 'children_bed_price')->first();
        if ($site) {
            $one_bed_money = $site->value;
        } else {
            $one_bed_money = 0;
        }
        //入住天数
        $start_date = strtotime($get_time);
        $end_date = strtotime($out_time);
        $days = round(($end_date - $start_date) / 86400) > 0 ? round(($end_date - $start_date) / 86400) : 1;
        $room_money = $room->price * $room_amount * $days;//房间费
        $bed_money = $one_bed_money * $bed_amount * $days;//加床费
        $total_money = $room_money + $bed_money;//总金额

        // 计算日期打折
        $calendar_date = date("Y-m-d");
        $room_calendar = RoomCalendar::where('room_id', $room_id)->where('calendar', $calendar_date)->first();

        if (!empty($room_calendar)) {
            if ($room_calendar->discount > 0 && $total_money > 1) {
                $total_money = $total_money * $room_calendar->discount / 100;
            }
        }

//        if ($room->discount > 0) {
//            $total_money = $total_money * $room->discount / 100;
//        }
        $total_money = $this->discountMoney($total_money);
        $arr = [
            'room_money' => $room_money,
            'bed_money' => $bed_money,
            'total_money' => $total_money
        ];
        return $arr;
    }

    /**
     * 计算满减
     */
    public function discountMoney($money)
    {
        $site = Site::where('name', 'discount')->first();
        if ($site->value == 1) {
            $discount = Discount::all()->toArray();
            if ($money >= $discount[2]['full_money']) {
                return $money - $discount[2]['decrease_money'];
            }
            if ($money >= $discount[1]['full_money']) {
                return $money - $discount[1]['decrease_money'];
            }
            if ($money >= $discount[0]['full_money']) {
                return $money - $discount[0]['decrease_money'];
            }
        }
        return $money;
    }

    public function searchRoom(Request $request)
    {
        $room = Room::all();
        $start_time = $request->input('start_time');
        $end_time = $request->input('end_time');
        return view('home/room/search_room', ['start_time' => $start_time, 'end_time' => $end_time, 'room' => $room]);
    }

    public function detail($id)
    {
        $room = Room::whereId($id)->first();
        $room_comment = RoomComment::where('room_id', $id)->where('display', 2)->get();
        return view('/home/room/detail', ['room' => $room, 'room_comment' => $room_comment]);
    }
    public function comment(Request $request)
    {
        $validator = Validator::make(
            $request->except(['_token']),
            [
                'id' => 'required',
                'content' => 'required',
            ],
            [
            ]
        );
        if ($validator->fails()) {
            return redirect()->back();
        }
        $member_id = \Session::get('id');

        $room_comment = new RoomComment();
        $room_comment->room_id = $request->input('id');
        $room_comment->member_id = $member_id;
        $room_comment->content = $request->input('content');;
        $room_comment->save();
        return redirect()->to('room/detail/'. $request->input('id'));
    }
}
