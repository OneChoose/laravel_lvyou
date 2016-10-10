@include('admin.header')
@include('admin.nav')

<!-- Content Start -->
<div class="container-fluid" id="content_box">
    <div class="row">

        <div class="col-xs-2" id="nav_left">
            <div id="side-wigVw4RU" class="list-group">
                <a class="list-group-item list-group-item-title">基本管理</a>
                <a href="/admin/index" class="list-group-item"><i class="fa fa-list fa-fw"></i>管理员管理</a>
                <a href="/admin/site/index" class="list-group-item"><i class="fa fa-list fa-fw"></i>基本配置</a>
                {{--<a href="/admin/site/pay" class="list-group-item active"><i class="fa fa-list fa-fw"></i>支付设置</a>--}}
            </div>
        </div>
        <div class="col-xs-10">
            <ol class="breadcrumb">
                <li>基本管理</li>
                <li class="active">支付设置</li>
            </ol>
            <table class="table table-hover">
                <thead>
                <tr>
                    <th style="width: 60px;">ID</th>
                    <th style="width: 120px;">支付名称</th>
                    <th style="width: 120px;">身份者id</th>
                    <th style="width: 120px;">账号id</th>
                    <th style="width: 120px;">安全检验码</th>
                    <th style="width: 120px;">状态</th>
                    <th style="width: 200px;">操作</th>
                </tr>
                </thead>
                @foreach($sitePay as $v)
                <tr>
                    <td>{{ $v->id }}</td>
                    <td>{{ $v->name }}</td>
                    <td>{{ $v->partner_id }}</td>
                    <td>{{ $v->seller_id }}</td>
                    <td>{{ $v->key }}</td>
                    <td>{{ $v->status == 1 ? '开启' : '关闭' }}</td>
                    <td>
                        <a href="/admin/site/editPay/{{ $v->id }}" class="comment_list"> 修改</a>
                    </td>
                </tr>
                @endforeach
            </table>
            <div class="text-center">
                {!! $sitePay->links() !!}
            </div>
        </div>

    </div>
</div>
<!-- Content End -->
<!-- footer -->
@include('admin.footer')
