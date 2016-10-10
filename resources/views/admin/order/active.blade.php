@include('admin.header')
@include('admin.nav')
<!-- Content Start -->
<div class="container-fluid" id="content_box">
    <div class="row">
        <div class="col-xs-2" id="nav_left">
            <div id="side-wigVw4RU" class="list-group">
                <div id="side-wigVw4RU" class="list-group">
                    <a class="list-group-item list-group-item-title">订单管理</a>
                    <a href="/admin/order/index/1" class="list-group-item"><i class="fa fa-list fa-fw"></i>客房订单</a>
                    <a href="/admin/order/index/2" class="list-group-item"><i class="fa fa-list fa-fw"></i>娱乐订单</a>
                    <a href="/admin/order/index/3" class="list-group-item active"><i class="fa fa-list fa-fw"></i>活动订单</a>
                </div>
            </div>
        </div>
        <div class="col-xs-10">
            <ol class="breadcrumb">
                <li>订单管理</li>
                <li class="active">活动订单详情</li>
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
                                <label class="col-xs-2 control-label">活动名称</label>

                                <div class="col-xs-6">
                                    {{ $info->getActive->name }}
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
                                <label class="col-xs-2 control-label">活动价格</label>

                                <div class="col-xs-6">
                                    {{ $info->getActive->price }}
                                </div>

                            </div>
                            <div class="row form-group">
                                <label class="col-xs-2 control-label">数量</label>

                                <div class="col-xs-6">
                                    {{ $info->number }}
                                </div>
                            </div>
                            <div class="row form-group">
                                <label class="col-xs-2 control-label">消费时间</label>

                                <div class="col-xs-6">
                                    {{ $info->get_time }}
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