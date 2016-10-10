@include('admin.header')
@include('admin.nav')
<script type="text/javascript">
    function deletes(id){
        if(confirm('确定删除！')){
            window.location.href= id+'/delete';
        }
    }
</script>

        <!-- Content Start -->
<div class="container-fluid" id="content_box">
    <div class="row">

        <div class="col-xs-2" id="nav_left">
            <div id="side-wigVw4RU" class="list-group">
                <a class="list-group-item list-group-item-title">收益管理</a>
                <a href="/admin/income/index" class="list-group-item active"><i class="fa fa-list fa-fw"></i>收益列表</a>
            </div>
        </div>
        <div class="col-xs-10">
            <ol class="breadcrumb">
                <li>收益管理</li>
                <li class="active">收益列表</li>
            </ol>
            <div class="panel panel-default">
                <div class="panel-body">
                    <form class="form-inline" role="form" action="/admin/income/index" method="get">
                        <div class="form-group">
                            <div class="input-group">
                                <label class="input-group-addon" for="filterUser">支付时间:</label>
                                <input class="form-control" type="text" name="pay_time" id="posttime1" value="">
                            </div>
                            -
                            <input class="form-control" type="text" name="pay_time_end" id="posttime2" value="">
                            <script type="text/javascript" src="/calendar/calendar.js"></script>
                            <link rel="stylesheet" type="text/css" href="/calendar/calendar-blue.css"/>
                            <script type="text/javascript">
                                date = new Date();
                                Calendar.setup({
                                    inputField: "posttime1",
                                    ifFormat: "%Y-%m-%d %H:%M:%S",
                                    showsTime: true,
                                    timeFormat: "24"
                                });
                                Calendar.setup({
                                    inputField: "posttime2",
                                    ifFormat: "%Y-%m-%d %H:%M:%S",
                                    showsTime: true,
                                    timeFormat: "24"
                                });
                            </script>

                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <label class="input-group-addon" for="filterUser">订单类型:</label>
                                <select class="form-control item_link_type" name="order_type">
                                    <option value="">全部</option>
                                    <option value="1">客房</option>
                                    <option value="2">娱乐</option>
                                    <option value="3">活动</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <label class="input-group-addon" for="filterUser">支付方式:</label>
                                <select class="form-control item_link_type" name="pay_type">
                                    <option value="">全部</option>
                                    <option value="1">到店支付</option>
                                    <option value="3">支付宝</option>
                                    <option value="4">微信</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary"><i class="fa fa-filter"></i> 搜 索</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="btn btn-primary" style="float: left"><i class="fa fa-plus fa-lg"></i>
                共收益：{{ $orderCount }} 元</div>
            <div class="btn " style="">
                <a href="/admin/income/excelExport?page=<?php echo isset($_GET['page']) ? $_GET['page'] : '1'; ?>&pay_time=<?php echo isset($_GET['pay_time']) ? $_GET['pay_time'] : ''; ?>&pay_time_end=<?php echo isset($_GET['pay_time_end']) ? $_GET['pay_time_end'] : ''; ?>&order_type=<?php echo isset($_GET['order_type']) ? $_GET['order_type'] : ''; ?>&pay_type=<?php echo isset($_GET['pay_type']) ? $_GET['pay_type'] : ''; ?>">EXCL下载</a></div>

            <table class="table table-hover">
                <thead>
                <tr>
                    <th style="width: 60px;">ID</th>
                    <th style="width: 120px;">订单号</th>
                    <th style="width: 80px;">下单时间</th>
                    <th style="width: 80px;">支付时间</th>
                    <th style="width: 100px;">支付方式</th>
                    <th style="width: 100px;">订单类型</th>
                    <th style="width: 200px;">总金额</th>
                </tr>
                </thead>
                @forelse($orderList as $v)
                    <tr>
                        <td>{{ $v->id }}</td>
                        <td>{{ $v->order }}</td>
                        <td>{{ date('Y-m-d H:i:s', $v->order_time) }}</td>
                        <td>{{ date('Y-m-d H:i:s', $v->pay_time) }}</td>
                        <td><?php  if ($v->pay_type ==1) { echo '到店支付'; }elseif($v->pay_type ==2){ echo '线上支付';}elseif($v->pay_type ==3){ echo '支付宝';}elseif($v->pay_type ==4){ echo '微信';} ?></td>
                        <td><?php if($v->type == 1) {echo '客房';}elseif($v->type == 2){ echo '娱乐';}elseif($v->type == 3){ echo '活动';}?></td>
                        <td>{{ $v->total_money }}</td>
                    </tr>
                @empty
                    <p>没有类容</p>
                @endforelse
            </table>
            <div class="text-center">
                {!! $orderList->links() !!}
            </div>
        </div>

    </div>
</div>
<!-- Content End -->
<!-- footer -->
@include('admin.footer')
