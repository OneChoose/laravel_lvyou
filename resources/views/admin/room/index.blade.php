@include('admin.header')
@include('admin.nav')

        <!-- Content Start -->
<div class="container-fluid" id="content_box">
    <div class="row">

        <div class="col-xs-2" id="nav_left">
            <div id="side-wigVw4RU" class="list-group">
                <a class="list-group-item list-group-item-title">客房管理</a>
                <a href="/admin/room/add" class="list-group-item"><i class="fa fa-list fa-fw"></i>添加客房</a>
                <a href="/admin/room/index" class="list-group-item active"><i class="fa fa-list fa-fw"></i>客房列表</a>
                <a href="/admin/room/discount" class="list-group-item"><i class="fa fa-list fa-fw"></i>客房满即送</a>
                <a href="/admin/room/comment" class="list-group-item"><i class="fa fa-list fa-fw"></i>房间评论</a>
            </div>
        </div>
        <div class="col-xs-10">
            <ol class="breadcrumb">
                <li>客房管理</li>
                <li class="active">客房列表</li>
            </ol>
            <a href="/admin/room/add" class="btn btn-primary" style="float: right"><i class="fa fa-plus fa-lg"></i>
                添加客房</a>

            <table class="table table-hover">
                <thead>
                <tr>
                    <th style="width: 60px;">ID</th>
                    <th style="width: 120px;">名称</th>
                    <th style="width: 200px;">类型</th>
                    <th style="width: 80px;">入住人数</th>
                    <th style="width: 80px;">剩余数量</th>
                    <th style="width: 80px;">缩略图片</th>
                    <th style="width: 200px;">操作</th>
                </tr>
                </thead>
                <tbody>
                @forelse($room as $v)
                    <tr>
                        <td>{{ $v->id }}</td>
                        <td>{{ $v->title }}</td>
                        <td>{{ $v->type }}</td>
                        <td>{{ $v->person }}</td>
                        <td>{{ $v->surplus_amount }}</td>
                        <td><img src="{{ $v->picurl }}" height="100px"/> </td>
                        <td>
                            <a href="javascript:void(0)" onclick="deletes({{$v->id}})"> 删除</a>
                            <a href="{{ url('admin/room/'.$v->id.'/edit') }}" class="edit"> 修改</a>
                        </td>
                    </tr>
                @empty
                    <p>没有类容</p>
                @endforelse
                </tbody>
            </table>
            <div class="text-center">
                {!! $room->links() !!}
            </div>
        </div>

    </div>
</div>
<!-- Content End -->
<!-- footer -->
@include('admin.footer')
<script type="text/javascript">
    function deletes(id){
        if(confirm('确定删除！')){
            window.location.href= id+'/delete';
        }
    }
</script>