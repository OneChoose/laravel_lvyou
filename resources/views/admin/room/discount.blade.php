@include('admin.header')
@include('admin.nav')

        <!-- Content Start -->
<div class="container-fluid" id="content_box">
    <div class="row">

        <div class="col-xs-2" id="nav_left">
            <div id="side-wigVw4RU" class="list-group">
                <a class="list-group-item list-group-item-title">客房管理</a>
                <a href="/admin/room/add" class="list-group-item"><i class="fa fa-list fa-fw"></i>添加客房</a>
                <a href="/admin/room/index" class="list-group-item"><i class="fa fa-list fa-fw"></i>客房列表</a>
                <a href="/admin/room/discount" class="list-group-item active"><i class="fa fa-list fa-fw"></i>客房满即送</a>
                <a href="/admin/room/comment" class="list-group-item"><i class="fa fa-list fa-fw"></i>房间评论</a>
            </div>
        </div>
        <div class="col-xs-10">
            <ol class="breadcrumb">
                <li>客房管理</li>
                <li class="active">客房满即送</li>
            </ol>
            @if($type == 1)
                <a href="/admin/room/discount_switch" class="btn btn-primary" style="float: left"><i class="fa fa-plus fa-lg"></i>关闭规则</a>
            @else
                <a href="/admin/room/discount_switch" class="btn btn-primary" style="float: left"><i class="fa fa-plus fa-lg"></i>开启规则</a>
            @endif
            <table class="table table-hover">
                <thead>
                <tr>
                    <th style="width: 60px;">ID</th>
                    <th style="width: 120px;">规则名称</th>
                    <th style="width: 120px;">满</th>
                    <th style="width: 120px;">减</th>
                    <th style="width: 200px;">操作</th>
                </tr>
                </thead>
                <tbody>
                @forelse($discount as $v)
                    <tr>
                        <td>{{ $v->id }}</td>
                        <td>{{ $v->name }}</td>
                        <td>{{ $v->full_money }}</td>
                        <td>{{ $v->decrease_money }}</td>
                        <td>
                            <a href="/admin/room/discount_edit/{{ $v->id }}" class="edit"> 修改</a>
                        </td>
                    </tr>
                @empty
                    <p>没有类容</p>
                @endforelse
                </tbody>
            </table>
            <div class="text-center">
            </div>
        </div>

    </div>
</div>
<!-- Content End -->
<!-- footer -->
@include('admin.footer')
