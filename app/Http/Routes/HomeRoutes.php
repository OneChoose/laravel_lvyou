<?php

// home前台
Route::get('/',['uses'=>'Home\IndexController@index','as'=>'home.index']); // 首页
Route::get('/company',['uses'=>'Home\IndexController@company','as'=>'home.company']); // 公司简介
Route::get('/feiyi',['uses'=>'Home\IndexController@feiyi','as'=>'home.feiyi']); // 非遗文化
Route::get('/contact',['uses'=>'Home\IndexController@contact','as'=>'home.contact']); // 联系我们
Route::get('/work',['uses'=>'Home\IndexController@work','as'=>'home.work']); // 工作机会
Route::get('/question',['uses'=>'Home\IndexController@question','as'=>'home.question']); // 常见问题
Route::get('/link',['uses'=>'Home\IndexController@link','as'=>'home.link']); // 友情链接
Route::get('privacy',['uses'=>'Home\IndexController@privacy','as'=>'home.privacy']); // 隐私声明

Route::get('/new',['uses'=>'Home\NewController@index','as'=>'home.new.index']); //新闻中心
Route::get('/new/detail/{id}',['uses'=>'Home\NewController@detail','as'=>'home.new.detail']); //新闻详细

Route::get('/travel',['uses'=>'Home\IndexController@travel','as'=>'home.index.travel']); //旅游
Route::get('/travelDetail/{id}',['uses'=>'Home\IndexController@travelDetail','as'=>'home.index.travelDetail']); //旅游



//客房中心
Route::get('room/index',['uses'=>'Home\RoomController@index','as'=>'home.room.index']);
Route::get('room/search/{type}',['uses'=>'Home\RoomController@search','as'=>'home.room.search']);
Route::get('room/roomInfo/{id}',['uses'=>'Home\RoomController@roomInfo','as'=>'home.room.roomInfo']);
Route::post('room/orderRoom',['uses'=>'Home\RoomController@orderRoom','as'=>'home.room.orderRoom']);
Route::post('room/roomMoney',['uses'=>'Home\RoomController@roomMoney','as'=>'home.room.roomMoney']);
Route::post('room/pay',['uses'=>'Home\RoomController@pay','as'=>'home.room.pay']);
Route::get('room/onlinePayInfo/{id}',['uses'=>'Home\RoomController@onlinePayInfo','as'=>'home.room.onlinePayInfo']);
Route::any('room/searchRoom',['uses'=>'Home\RoomController@searchRoom','as'=>'home.room.searchRoom']);
Route::get('room/detail/{id}',['uses'=>'Home\RoomController@detail','as'=>'home.room.detail']);
Route::post('room/comment',['uses'=>'Home\RoomController@comment','as'=>'home.room.comment']);

// 餐饮服务
Route::get('eat/index',['uses'=>'Home\EatController@index','as'=>'home.eat.index']);

// 休闲娱乐
Route::get('entertainment/index',['uses'=>'Home\EntertainmentController@index','as'=>'home.entertainment.index']);
Route::get('entertainment/order/{id}',['uses'=>'Home\EntertainmentController@order','as'=>'home.entertainment.order']);
Route::post('entertainment/createOrder',['uses'=>'Home\EntertainmentController@createOrder','as'=>'home.entertainment.createOrder']);
Route::post('entertainment/pay',['uses'=>'Home\EntertainmentController@pay','as'=>'home.entertainment.pay']);

// 促销活动
Route::get('active/index',['uses'=>'Home\ActiveController@index','as'=>'home.active.index']);
Route::get('active/detail/{id}',['uses'=>'Home\ActiveController@detail','as'=>'home.active.detail']);
Route::get('active/order/{id}',['uses'=>'Home\ActiveController@order','as'=>'home.active.order']);
Route::post('active/createOrder',['uses'=>'Home\ActiveController@createOrder','as'=>'home.active.createOrder']);
Route::post('active/pay',['uses'=>'Home\ActiveController@pay','as'=>'home.active.pay']);

// 登录
Route::get('/login',['uses'=>'Home\LoginController@index','as'=>'home.login.index']);
Route::any('/login/save',['uses'=>'Home\LoginController@save','as'=>'home.login.save']);
Route::get('/login/delete',['uses'=>'Home\LoginController@delete','as'=>'home.login.delete']);

//会员
Route::get('/member/personal',['uses'=>'Home\MemberController@personal','as'=>'home.member.personal']);
Route::get('/member/avatar',['uses'=>'Home\MemberController@avatar','as'=>'home.member.avatar']);
Route::get('/member/roomOrder',['uses'=>'Home\MemberController@roomOrder','as'=>'home.member.roomOrder']);
Route::get('/member/activeOrder',['uses'=>'Home\MemberController@activeOrder','as'=>'home.member.activeOrder']);
Route::get('/member/entertainmentOrder',['uses'=>'Home\MemberController@entertainmentOrder','as'=>'home.member.entertainmentOrder']);
Route::post('/member/updateAvatar',['uses'=>'Home\MemberController@updateAvatar','as'=>'home.member.updateAvatar']);
Route::post('/member/updatePersonal',['uses'=>'Home\MemberController@updatePersonal','as'=>'home.member.updatePersonal']);



//支付宝支付处理
Route::get('alipay/pay','Home\AlipayController@pay');
//支付后跳转页面同步
Route::any('alipay/webReturn','Home\AlipayController@webReturn');
//支付后跳转页面异步
Route::any('alipay/webNotify','Home\AlipayController@webNotify');

// 微信支付
Route::get('weixin/pay','Home\WeixinController@pay');
Route::any('weixin/notify','Home\WeixinController@notify');

Route::get('home/excel/export','Home\ExcelController@export');