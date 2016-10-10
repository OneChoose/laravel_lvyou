@include('admin.header')
@include('admin.nav')
<!-- Content Start -->
<div class="container-fluid" id="content_box">
    <div class="row">
        <div class="col-xs-2" id="nav_left">
            <div id="side-wigVw4RU" class="list-group">
                <div id="side-wigVw4RU" class="list-group">
                    <a class="list-group-item list-group-item-title">订单管理</a>
                    <a href="/admin/order/index/1" class="list-group-item active"><i class="fa fa-list fa-fw"></i>客房订单</a>
                    <a href="/admin/order/index/2" class="list-group-item"><i class="fa fa-list fa-fw"></i>娱乐订单</a>
                    <a href="/admin/order/index/3" class="list-group-item"><i class="fa fa-list fa-fw"></i>活动订单</a>
                </div>
            </div>
        </div>
        <div class="col-xs-10">
            <ol class="breadcrumb">
                <li>订单管理</li>
                <li class="active">客房订单详情</li>
            </ol>
            <div class="container-fluid" id="content_box_blank">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="row form-group">
                                <label class="col-xs-2 control-label">订单号</label>

                                <div class="col-xs-6">
                                    {{ $info->order }}
                                </div>
                            </div>
                            <div class="row form-group">
                                <label class="col-xs-2 control-label">客房名称</label>

                                <div class="col-xs-6">
                                    {{ $info->roomOrder->title }}
                                </div>

                            </div>
                            <div class="row form-group">
                                <label class="col-xs-2 control-label">客房类型</label>

                                <div class="col-xs-6">
                                    {{ $info->roomOrder->type }}
                                </div>

                            </div>
                            <div class="row form-group">
                                <label class="col-xs-2 control-label">客房价格</label>

                                <div class="col-xs-6">
                                    {{ $info->roomOrder->price }}
                                </div>
                            </div>
                            <div class="row form-group">
                                <label class="col-xs-2 control-label">姓名</label>

                                <div class="col-xs-6">
                                    {{ $info->name }}
                                </div>
                            </div>
                            <div class="row form-group">
                                <label class="col-xs-2 control-label">电话</label>

                                <div class="col-xs-6">
                                    {{ $info->phone }}
                                </div>
                            </div>
                            <div class="row form-group">
                                <label class="col-xs-2 control-label">入住时间</label>

                                <div class="col-xs-6">
                                    {{ $info->get_time }}
                                </div>
                            </div>
                            <div class="row form-group">
                                <label class="col-xs-2 control-label">退房时间</label>

                                <div class="col-xs-6">
                                    {{ $info->out_time }}
                                </div>
                            </div>
                            <div class="row form-group">
                                <label class="col-xs-2 control-label">最晚到达时间</label>

                                <div class="col-xs-6">
                                    {{ $info->to_time }}
                                </div>
                            </div>
                            <div class="row form-group">
                                <label class="col-xs-2 control-label">客房数量</label>

                                <div class="col-xs-6">
                                    {{ $info->room_amount }}
                                </div>
                            </div>
                            <div class="row form-group">
                                <label class="col-xs-2 control-label">成人数量</label>

                                <div class="col-xs-6">
                                    {{ $info->man_amount }}
                                </div>
                            </div>
                            <div class="row form-group">
                                <label class="col-xs-2 control-label">儿童数量</label>

                                <div class="col-xs-6">
                                    {{ $info->children_amount }}
                                </div>
                            </div>
                            <div class="row form-group">
                                <label class="col-xs-2 control-label">加床数量</label>

                                <div class="col-xs-6">
                                    {{ $info->bed_amount }}
                                </div>
                            </div>
                            <div class="row form-group">
                                <label class="col-xs-2 control-label">房间费</label>

                                <div class="col-xs-6">
                                    {{ $info->room_money }}
                                </div>
                            </div>
                            <div class="row form-group">
                                <label class="col-xs-2 control-label">加床费</label>

                                <div class="col-xs-6">
                                    {{ $info->bed_money }}
                                </div>
                            </div>
                            <div class="row form-group">
                                <label class="col-xs-2 control-label">总金额</label>

                                <div class="col-xs-6">
                                    {{ $info->total_money }}
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>

    </div>
</div>
<!-- Content End -->
<!-- footer -->
@include('admin.footer')