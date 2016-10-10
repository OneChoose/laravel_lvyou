<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\Discount;
use App\Model\Room;
use App\Model\RoomCalendar;
use App\Model\RoomComment;
use App\Model\Site;
use Illuminate\Http\Request;
use Validator;

/**
 * 客房中心
 * @package App\Http\Controllers\Admin
 */
class RoomController extends Controller
{
    public function index()
    {
        $room = Room::orderBy('sort', 'asc')->paginate(15);
        return view('admin/room/index', ['room' => $room]);
    }

    public function add()
    {
        return view('admin/room/add');
    }

    /**
     * @param Request $request
     * @return $this|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function save(Request $request)
    {
        $validator = Validator::make(
            $request->except(['_token']),
            [
                'title' => 'required',
                'type' => 'required',
                'price' => 'required|numeric',
                'surplus_amount' => 'required|numeric',
            ],
            [
                'title.required' => '名称不能为空',
                'type.required' => '类型不能为空',
                'price.required' => '价格不能为空',
                'price.numeric' => '价格必须填数字',
                'surplus_amount.required' => '剩余数量不能为空',
                'surplus_amount.numeric' => '剩余数量必须填数字',
            ]
        );
        if ($validator->fails()) {
            return redirect('/admin/room/add')->withErrors($validator);
        }

        $room = new Room();
        $file_pics = '';
        if ($request->file_pics) {
            $file_pics = implode(",", $request->file_pics);
            $room->picurl = $request->file_pics[0];
        }
        $room->picarr = $file_pics;
        $room->title = $request->title;
        $room->type = $request->type;
        $room->price = $request->price;
        $room->person = $request->person;
        $room->surplus_amount = $request->surplus_amount;
        $room->facility = $request->facility;
        $room->keywords = $request->keywords;
        $room->description = $request->description;
        $room->content = $request->input('content');
        $room->click = $request->input('click');
        $room->sort = $request->input('sort');
        $room->checkinfo = $request->input('checkinfo');
        $room->created_at = $request->input('posttime');

        $result = $room->save();

        $room_id = $room->id;
        $calendar = $request->input('calendar');
        $discount = $request->input('discount');
        $calendar_type = $request->input('calendar_type');

        if ($calendar_type ==1) {
            $this->calendar_one($room_id, $calendar, $discount);
        }elseif($calendar_type ==2) {
            $this->calendar_array($room_id, $calendar, $discount);
        }



        if ($result) {
            return redirect()->to('/admin/room/index');
        } else {
            return redirect()->back();
        }

        return view('admin/room/add');
    }

    public function edit($id)
    {
        $room = Room::where('id', '=', $id)->firstOrFail();
        return view('admin/room/edit', ['room' => $room]);
    }

    public function update(Request $request)
    {
        $validator = Validator::make(
            $request->except(['_token']),
            [
                'title' => 'required',
                'type' => 'required',
                'price' => 'required|numeric',
                'surplus_amount' => 'required|numeric',
            ],
            [
                'title.required' => '名称不能为空',
                'type.required' => '类型不能为空',
                'price.required' => '价格不能为空',
                'price.numeric' => '价格必须填数字',
                'surplus_amount.required' => '剩余数量不能为空',
                'surplus_amount.numeric' => '剩余数量必须填数字',
            ]
        );
        if ($validator->fails()) {
            return redirect('/admin/room/add')->withErrors($validator);
        }

        $id = $request->id;
        $room = Room::findOrFail($id);

        $file_pics = '';
        if ($request->file_pics) {
            $file_pics = implode(",", $request->file_pics);
            $room->picurl = $request->file_pics[0];
        }
        $room->picarr = $file_pics;
        $room->title = $request->title;
        $room->type = $request->type;
        $room->price = $request->price;
        $room->person = $request->person;
        $room->surplus_amount = $request->surplus_amount;
        $room->facility = $request->facility;
        $room->keywords = $request->keywords;
        $room->description = $request->description;
        $room->content = $request->input('content');
        $room->click = $request->input('click');
        $room->sort = $request->input('sort');
        $room->checkinfo = $request->input('checkinfo');
        $room->created_at = $request->input('posttime');

        $result = $room->save();
        if ($result) {
            return redirect()->to('/admin/room/index');
        } else {
            return redirect()->back();
        }
    }

    public function delete($id)
    {
        Room::findOrFail($id)->delete();
        return redirect()->to('/admin/room/index');
    }

    public function discount()
    {
        $discount = Discount::all();
        $site = Site::where('name', 'discount')->first();
        return view('/admin/room/discount', ['discount' => $discount, 'type' => $site->value]);
    }

    public function discount_switch()
    {
        $site = Site::where('name', 'discount')->first();
        if ($site->value == 1) {
            $site->value = 2;
        } else {
            $site->value = 1;
        }
        $site->save();
        return redirect()->to('/admin/room/discount');
    }

    public function discount_edit($id)
    {
        $discount = Discount::where('id', $id)->first();
        return view('/admin/room/discount_edit', ['discount' => $discount]);
    }

    public function discount_update(Request $request)
    {
        $id = $request->input('id');
        $name = $request->input('name');
        $full_money = $request->input('full_money');
        $decrease_money = $request->input('decrease_money');

        $discount = Discount::where('id', $id)->first();
        $discount->name = $name;
        $discount->full_money = $full_money;
        $discount->decrease_money = $decrease_money;
        $discount->save();
        return redirect()->to('/admin/room/discount');
    }

    /**
     * 保存日期打折数据
     * @param Request $request
     */
    public function calendar_date(Request $request)
    {
        $room_id = $request->input('id');
        $calendar = $request->input('calendar');
        $discount = $request->input('discount');

        $room_calendar_first = RoomCalendar::where('room_id', $room_id)->where('calendar', $calendar)->first();

        if ($room_calendar_first) {
            $room_calendar_first->discount = $discount;
            $room_calendar_first->save();
            echo 'success';
            exit;
        } else {
            $room_calendar = new RoomCalendar();
            $room_calendar->room_id = $room_id;
            $room_calendar->discount = $discount;
            $room_calendar->calendar = $calendar;
            $room_calendar->save();
            echo 'success';
            exit;
        }
        echo 'false';
        exit;
    }

    /**
     * 保存日期打折数据
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function calendar_month(Request $request)
    {
        $room_id = $request->input('id');
        $calendar = $request->input('calendar'); // 2016-9-24,2016-9-25,2016-9-26
        $discount = $request->input('discount');

        $calendar = explode(",", $calendar);
        try {
            \DB::beginTransaction();
            for ($i = 0; $i < count($calendar); $i++) {

                RoomCalendar::where('room_id', $room_id)->where('calendar', $calendar[$i])->delete();
                $room_calendar = new RoomCalendar();
                $room_calendar->room_id = $room_id;
                $room_calendar->discount = $discount;
                $room_calendar->calendar = $calendar[$i];
                $room_calendar->save();
                \DB::commit();

            }
        } catch (\Exception $e) {
            \DB::rollBack();
            return redirect()->back();
        }
        echo 'success';exit;
    }

    /**
     * 保存日期打折数据
     * @param Request $request
     */
    public function calendar_one($room_id, $calendar, $discount)
    {
        $room_calendar = new RoomCalendar();
        $room_calendar->room_id = $room_id;
        $room_calendar->discount = $discount;
        $room_calendar->calendar = $calendar;
        $room_calendar->save();
        return true;
    }

    public function calendar_array($room_id, $calendar, $discount)
    {

        $calendar = explode(",", $calendar);
        try {
            \DB::beginTransaction();
            for ($i = 0; $i < count($calendar); $i++) {
                $room_calendar = new RoomCalendar();
                $room_calendar->room_id = $room_id;
                $room_calendar->discount = $discount;
                $room_calendar->calendar = $calendar[$i];
                $room_calendar->save();
                \DB::commit();
            }
        } catch (\Exception $e) {
            \DB::rollBack();
        }
        return true;
    }

    /**
     * 客房评论
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function comment()
    {
        $room_comment = RoomComment::all();
        return view('/admin/room/comment', ['room_comment' => $room_comment]);
    }

    /**
     * 评论显示修改
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function commentDisplay($id)
    {
        $id = intval($id);
        if (!empty($id)) {
            $room_comment = RoomComment::whereId($id)->first();
            if ($room_comment) {
                if ($room_comment->display == 1) {
                    $room_comment->display = 2;
                    $room_comment->save();
                } elseif ($room_comment->display == 2) {
                    $room_comment->display = 1;
                    $room_comment->save();
                }
            }
        }
        return redirect()->to('/admin/room/comment');
    }
}
