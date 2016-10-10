<?php

// admin后台
Route::get('admin/login',['uses'=>'Admin\LoginController@index','as'=>'admin.login.index']);
Route::post('admin/login/save',['uses'=>'Admin\LoginController@save','as'=>'admin.login.save']);

Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => 'admin.auth'], function()
{
    Route::get('/', function () {
        return redirect()->to('/index');
    });
    // 首页
    Route::get('/index',['uses'=>'IndexController@index','as'=>'admin.index.index']);
    Route::get('/index/updateManager/{id}',['uses'=>'IndexController@updateManager','as'=>'admin.index.updateManager']); // 修改管理密码1
    Route::post('/index/{id}/saveManager',['uses'=>'IndexController@saveManager','as'=>'admin.index.saveManager']); // 修改管理密码2
    Route::get('/role',['uses'=>'IndexController@role','as'=>'admin.index.role']);
    Route::get('/addRole',['uses'=>'IndexController@addRole','as'=>'admin.index.addRole']);
    Route::get('/addManager',['uses'=>'IndexController@addManager','as'=>'admin.index.addManager']);
    Route::post('/saveRole',['uses'=>'IndexController@saveRole','as'=>'admin.index.saveRole']);
    Route::post('/saveManagers',['uses'=>'IndexController@saveManagers','as'=>'admin.index.saveManagers']);
    Route::get('/{id}/deleteManager',['uses'=>'IndexController@deleteManager','as'=>'admin.index.deleteManager']);
    Route::get('/showRole/{id}',['uses'=>'IndexController@showRole','as'=>'admin.index.showRole']);
    Route::post('/updateRole',['uses'=>'IndexController@updateRole','as'=>'admin.index.updateRole']);
    Route::get('/{id}/deleteRole',['uses'=>'IndexController@deleteRole','as'=>'admin.index.deleteRole']);
    Route::get('/roleMenu/{id}',['uses'=>'IndexController@roleMenu','as'=>'admin.index.roleMenu']);
    Route::post('/saveRoleMenu',['uses'=>'IndexController@saveRoleMenu','as'=>'admin.index.saveRoleMenu']);



    // 删除登录session
    Route::get('login/delete',['uses'=>'LoginController@delete','as'=>'admin.login.delete']);

    // 文章内容管理
    Route::get('/article/index',['uses'=>'ArticleController@index','as'=>'admin.article.index']);
    Route::get('/article/add',['uses'=>'ArticleController@add','as'=>'admin.article.add']);
    Route::get('/article/{id}/edit',['uses'=>'ArticleController@edit','as'=>'admin.article.edit']);
    Route::get('/article/{id}/delete',['uses'=>'ArticleController@delete','as'=>'admin.article.delete']);
    Route::post('/article/save',['uses'=>'ArticleController@save','as'=>'admin.article.save']);
    Route::post('/article/{id}/update',['uses'=>'ArticleController@update','as'=>'admin.article.update']);

    // 分类管理
    Route::get('/category',['uses'=>'CategoryController@index','as'=>'admin.category.index']);
    Route::get('/category/add',['uses'=>'CategoryController@add','as'=>'admin.category.add']);
    Route::get('/category/{id}/edit',['uses'=>'CategoryController@edit','as'=>'admin.category.edit']);
    Route::get('/category/{id}/{parent_id}/delete',['uses'=>'CategoryController@delete','as'=>'admin.category.delete']);
    Route::post('/category/save',['uses'=>'CategoryController@save','as'=>'admin.category.save']);
    Route::post('/category/{id}/update',['uses'=>'CategoryController@update','as'=>'admin.category.update']);

    // 单页管理
    Route::get('/single_page/index',['uses'=>'SinglePageController@index','as'=>'admin.singlePage.index']);
    Route::get('/single_page/add',['uses'=>'SinglePageController@add','as'=>'admin.singlePage.add']);
    Route::get('/single_page/{id}/edit',['uses'=>'SinglePageController@edit','as'=>'admin.singlePage.edit']);
    Route::get('/single_page/{id}/delete',['uses'=>'SinglePageController@delete','as'=>'admin.singlePage.delete']);
    Route::post('/single_page/save',['uses'=>'SinglePageController@save','as'=>'admin.singlePage.save']);
    Route::post('/single_page/{id}/update',['uses'=>'SinglePageController@update','as'=>'admin.singlePage.update']);

    // 上传文件
    Route::controller('upload', 'UploadController');
    Route::post('/upload_img/ajax',['uses'=>'UploadImgController@ajax','as'=>'admin.uploadImg.ajax']);

    // 商品管理
    Route::get('/goods/index',['uses'=>'GoodsController@index','as'=>'admin.goods.index']);
    Route::get('/goods/add',['uses'=>'GoodsController@add','as'=>'admin.goods.add']);
    Route::post('/goods/save',['uses'=>'GoodsController@save','as'=>'admin.goods.save']);
    Route::get('/goods/{id}/edit',['uses'=>'GoodsController@edit','as'=>'admin.goods.edit']);
    Route::post('/goods/update',['uses'=>'GoodsController@update','as'=>'admin.goods.update']);
    Route::get('/goods/{id}/delete',['uses'=>'GoodsController@delete','as'=>'admin.goods.delete']);

    // 商品分类
    Route::get('/goods_type/index',['uses'=>'GoodsTypeController@index','as'=>'admin.goods_type.index']);
    Route::get('/goods_type/add',['uses'=>'GoodsTypeController@add','as'=>'admin.goods_type.add']);
    Route::post('/goods_type/save',['uses'=>'GoodsTypeController@save','as'=>'admin.goods_type.save']);
    Route::get('/goods_type/{id}/edit',['uses'=>'GoodsTypeController@edit','as'=>'admin.goods_type.edit']);
    Route::post('/goods_type/update',['uses'=>'GoodsTypeController@update','as'=>'admin.goods_type.update']);
    Route::get('/goods_type/{id}/delete',['uses'=>'GoodsTypeController@delete','as'=>'admin.goods_type.delete']);

    // 会员管理
    Route::get('/member/index',['uses'=>'MemberController@index','as'=>'admin.member.index']);
    Route::get('/member/add',['uses'=>'MemberController@add','as'=>'admin.member.add']);
    Route::post('/member/save',['uses'=>'MemberController@save','as'=>'admin.member.save']);
    Route::get('/member/{id}/edit',['uses'=>'MemberController@edit','as'=>'admin.member.edit']);
    Route::post('/member/update',['uses'=>'MemberController@update','as'=>'admin.member.update']);
    Route::get('/member/{id}/delete',['uses'=>'MemberController@delete','as'=>'admin.member.delete']);

    // 客房中心
    Route::get('/room/index',['uses'=>'RoomController@index','as'=>'admin.room.index']);
    Route::get('/room/add',['uses'=>'RoomController@add','as'=>'admin.room.add']);
    Route::post('/room/save',['uses'=>'RoomController@save','as'=>'admin.room.save']);
    Route::get('/room/{id}/edit',['uses'=>'RoomController@edit','as'=>'admin.room.edit']);
    Route::post('/room/update',['uses'=>'RoomController@update','as'=>'admin.room.update']);
    Route::get('/room/{id}/delete',['uses'=>'RoomController@delete','as'=>'admin.room.delete']);
    Route::get('/room/discount',['uses'=>'RoomController@discount','as'=>'admin.room.discount']); // 客房打折设置
    Route::get('/room/discount_switch',['uses'=>'RoomController@discount_switch','as'=>'admin.room.discount']); // 客房打折设置开关
    Route::get('/room/discount_edit/{id}',['uses'=>'RoomController@discount_edit','as'=>'admin.room.discount_edit']); // 客房打折设置编辑
    Route::post('/room/discount_update',['uses'=>'RoomController@discount_update','as'=>'admin.room.discount_update']); // 客房打折设置编辑
    Route::post('/room/calendar_date',['uses'=>'RoomController@calendar_date','as'=>'admin.room.calendar_date']); // 客房日历打折设置编辑
    Route::post('/room/calendar_month',['uses'=>'RoomController@calendar_month','as'=>'admin.room.calendar_month']); // 客房日历打折设置编辑
    Route::get('/room/comment',['uses'=>'RoomController@comment','as'=>'admin.room.comment']); // 客房评论
    Route::get('/room/commentDisplay/{id}',['uses'=>'RoomController@commentDisplay','as'=>'admin.room.commentDisplay']); // 客房评论

    // 设置
    Route::get('/site/index',['uses'=>'SiteController@index','as'=>'admin.site.index']);
    Route::post('/site/base',['uses'=>'SiteController@base','as'=>'admin.base.index']);
    Route::any('/site/children_bed_price',['uses'=>'SiteController@children_bed_price','as'=>'admin.site.children_bed_price']);
    Route::get('/site/pay',['uses'=>'SiteController@pay','as'=>'admin.site.pay']);
    Route::get('/site/editPay/{id}',['uses'=>'SiteController@editPay','as'=>'admin.site.editPay']);
    Route::put('/site/{id}/updatePay',['uses'=>'SiteController@updatePay','as'=>'admin.site.updatePay']);
    Route::get('/site/discount',['uses'=>'SiteController@discount','as'=>'admin.site.discount']);
    Route::get('/site/link',['uses'=>'SiteController@link','as'=>'admin.site.link']); // 友情链接
    Route::get('/site/{id}/linkDelete',['uses'=>'SiteController@linkDelete','as'=>'admin.site.linkDelete']); // 友情链接删除
    Route::get('/site/{id}/linkEdit',['uses'=>'SiteController@linkEdit','as'=>'admin.site.linkEdit']); // 友情链接修改
    Route::get('/site/linkAdd',['uses'=>'SiteController@linkAdd','as'=>'admin.site.linkAdd']); // 友情链接添加
    Route::post('/site/linkSave',['uses'=>'SiteController@linkSave','as'=>'admin.site.linkSave']); // 保存友情链接添加
    Route::post('/site/{id}/linkUpdate',['uses'=>'SiteController@linkUpdate','as'=>'admin.site.linkUpdate']); // 保存友情链接修改

    // 餐饮管理
    Route::get('/food/index',['uses'=>'FoodController@index','as'=>'admin.food.index']);
    Route::get('/food/add',['uses'=>'FoodController@add','as'=>'admin.food.add']);
    Route::post('/food/save',['uses'=>'FoodController@save','as'=>'admin.food.save']);
    Route::get('/food/{id}/edit',['uses'=>'FoodController@edit','as'=>'admin.food.edit']);
    Route::post('/food/update',['uses'=>'FoodController@update','as'=>'admin.food.update']);
    Route::get('/food/{id}/delete',['uses'=>'FoodController@delete','as'=>'admin.food.delete']);

    // 促销活动
    Route::get('/active/index',['uses'=>'ActiveController@index','as'=>'admin.active.index']);
    Route::get('/active/add',['uses'=>'ActiveController@add','as'=>'admin.active.add']);
    Route::post('/active/save',['uses'=>'ActiveController@save','as'=>'admin.active.save']);
    Route::get('/active/{id}/edit',['uses'=>'ActiveController@edit','as'=>'admin.active.edit']);
    Route::put('/active/update',['uses'=>'ActiveController@update','as'=>'admin.active.update']);
    Route::get('/active/{id}/delete',['uses'=>'ActiveController@delete','as'=>'admin.active.delete']);

    // 休闲娱乐
    Route::get('/entertainment/index',['uses'=>'EntertainmentController@index','as'=>'admin.entertainment.index']);
    Route::get('/entertainment/add',['uses'=>'EntertainmentController@add','as'=>'admin.entertainment.add']);
    Route::post('/entertainment/save',['uses'=>'EntertainmentController@save','as'=>'admin.entertainment.save']);
    Route::get('/entertainment/{id}/edit',['uses'=>'EntertainmentController@edit','as'=>'admin.entertainment.edit']);
    Route::post('/entertainment/update',['uses'=>'EntertainmentController@update','as'=>'admin.entertainment.update']);
    Route::get('/entertainment/{id}/delete',['uses'=>'EntertainmentController@delete','as'=>'admin.entertainment.delete']);

    // 订单
    Route::get('/order/index/{type}',['uses'=>'OrderController@index','as'=>'admin.order.index']);
    Route::get('/order/pay/{id}/{type}',['uses'=>'OrderController@pay','as'=>'admin.order.pay']);
    Route::get('/order/{id}/{type}/info',['uses'=>'OrderController@info','as'=>'admin.order.info']);
    Route::get('/order/{id}/{type}/delete',['uses'=>'OrderController@delete','as'=>'admin.order.delete']);
    Route::get('/order/salesReturn/{id}/{type}',['uses'=>'OrderController@salesReturn','as'=>'admin.order.salesReturn']); //退货
    Route::get('/order/excelExport/{type}',['uses'=>'OrderController@excelExport','as'=>'admin.order.excelExport']); //excl

    // 收益管理
    Route::get('/income/index',['uses'=>'IncomeController@index','as'=>'admin.income.index']); //
    Route::get('/income/excelExport/',['uses'=>'IncomeController@excelExport','as'=>'admin.income.excelExport']); //excl

    // 会议与宴会
    Route::get('/meeting/index',['uses'=>'MeetingController@index','as'=>'admin.meeting.index']); // 会议与宴会
    Route::get('/meeting/add',['uses'=>'MeetingController@add','as'=>'admin.meeting.add']); // 新增会议与宴会
    Route::post('/meeting/save',['uses'=>'MeetingController@save','as'=>'admin.meeting.save']); // 保存会议与宴会
    Route::get('/meeting/{id}/edit',['uses'=>'MeetingController@edit','as'=>'admin.meeting.edit']); // 修改会议与宴会
    Route::post('/meeting/{id}/update',['uses'=>'MeetingController@update','as'=>'admin.meeting.update']); // 修改会议与宴会
    Route::get('/meeting/{id}/delete',['uses'=>'MeetingController@delete','as'=>'admin.meeting.delete']); // 删除会议与宴会

    // 经典会议
    Route::get('/meeting/classic',['uses'=>'MeetingController@classic','as'=>'admin.meeting.classic']); // index
    Route::get('/meeting/classicAdd',['uses'=>'MeetingController@classicAdd','as'=>'admin.meeting.classicAdd']); // 新增
    Route::post('/meeting/classicSave',['uses'=>'MeetingController@classicSave','as'=>'admin.meeting.classicSave']); // 保存
    Route::get('/meeting/{id}/classicEdit',['uses'=>'MeetingController@classicEdit','as'=>'admin.meeting.classicEdit']); // 修改
    Route::post('/meeting/{id}/classicUpdate',['uses'=>'MeetingController@classicUpdate','as'=>'admin.meeting.classicUpdate']); // 修改
    Route::get('/meeting/{id}/classicDelete',['uses'=>'MeetingController@classicDelete','as'=>'admin.meeting.classicDelete']); // 删除


});