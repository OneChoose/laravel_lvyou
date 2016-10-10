@include('admin.header')
@include('admin.nav')
<script type="text/javascript">
    function deletes(id,type){
        if(confirm('确定删除此订单？')){
            window.location.href= '/admin/order/'+id+'/'+type+'/delete';
        }
    }

    function pay(id,type){
        if(confirm('确定此订单已支付？')){
            window.location.href= '/admin/order/pay/'+id+'/'+type;
        }
    }
    function sales_return(id,type){
        if(confirm('确定退货？')){
            window.location.href= '/admin/order/salesReturn/'+id+'/'+type;
        }
    }
</script>

        <!-- Content Start -->
<div class="container-fluid" id="content_box">
    <div class="row">

        <div class="col-xs-2" id="nav_left">
            <div id="side-wigVw4RU" class="list-group">
                <a class="list-group-item list-group-item-title">订单管理</a>
                <a href="/admin/order/index/1" class="list-group-item {{$type == 1 ? 'active' : ''}}"><i class="fa fa-list fa-fw"></i>客房订单</a>
                <a href="/admin/order/index/2" class="list-group-item {{$type == 2 ? 'active' : ''}}"><i class="fa fa-list fa-fw"></i>娱乐订单</a>
                <a href="/admin/order/index/3" class="list-group-item {{$type == 3 ? 'active' : ''}}"><i class="fa fa-list fa-fw"></i>活动订单</a>
            </div>
        </div>
        <div class="col-xs-10">
            <ol class="breadcrumb">
                <li>订单管理</li>
                <li class="active">订单列表</li>
            </ol>
            <ol class="breadcrumb">
                <li><a href="/admin/order/excelExport/{{ $type }}?page=<?php echo isset($_GET['page']) ? $_GET['page'] : '1'; ?>">EXCL下载</a></li>
            </ol>

            <table class="table table-hover">
                <thead>
                <tr>
                    <th style="width: 60px;">ID</th>
                    <th style="width: 60px;">订单号</th>
                    <th style="width: 60px;">状态</th>
                    <th style="width: 60px;">下单时间</th>
                    <th style="width: 60px;">支付时间</th>
                    <th style="width: 60px;">支付方式</th>
                    <th style="width: 60px;">总金额</th>
                    <th style="width: 200px;">操作</th>
                </tr>
                </thead>
                @forelse($list as $v)
                    <tr>
                        <td>{{ $v->id }}</td>
                        <td>{{ $v->order }}</td>
                        <td><?php if( $v->is_pay == 1 ) { echo '未支付'; }elseif( $v->is_pay == 2) { echo '已支付';}elseif( $v->is_pay == 3) { echo '退货中';}elseif( $v->is_pay == 4){ echo '已退货';}else{ echo '无状态';} ?></td>
                        <td>{{ date('Y-m-d H:i:s',$v->order_time) }}</td>
                        <td>{{ $v->pay_time != 0 ? date('Y-m-d H:i:s',$v->pay_time) : '没支付' }}</td>
                        <td>
                            @if ($v->pay_type == 3)
                                支付宝
                            @elseif ($v->pay_type == 4)
                                微信
                            @elseif ($v->pay_type == 1)
                                到店支付
                            @else

                            @endif
                        </td>
                        <td>{{ $v->total_money }}</td>
                        <td>
                            @if ($v->is_pay == 1)
                                <a href="javascript:void(0)" onclick= "pay({{$v->id}},{{$type}})"> 确认支付</a>
                            @endif
                            @if ($v->is_pay >=2 && $v->is_pay<4)
                                <a href="javascript:void(0)" onclick= "sales_return({{$v->id}},{{$type}})"> 确认退货</a>
                            @endif
                            <a href="{{ url('admin/order/'.$v->id.'/'.$type.'/info') }}" class="edit"> 订单详情</a>
                            <a href="javascript:void(0)" onclick= "deletes({{$v->id}},{{$type}})"> 删除</a>
                        </td>
                    </tr>
                @empty
                    <p>没有内容</p>
                @endforelse
            </table>
            <div class="text-center">
                {!! $list->links() !!}
            </div>
        </div>

    </div>
</div>
<!-- Content End -->
<!-- footer -->
@include('admin.footer')
