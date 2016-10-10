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
                <a href="/admin/room/discount" class="list-group-item"><i class="fa fa-list fa-fw"></i>客房满即送</a>
                <a href="/admin/room/comment" class="list-group-item active"><i class="fa fa-list fa-fw"></i>房间评论</a>
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
                    <th style="width: 120px;">房间名称</th>
                    <th style="width: 200px;">评论内容</th>
                    <th style="width: 80px;">会员</th>
                    <th style="width: 80px;">是否显示</th>
                    <th style="width: 200px;">操作</th>
                </tr>
                </thead>
                <tbody>
                @forelse($room_comment as $v)
                    <tr>
                        <td>{{ $v->id }}</td>
                        <td>{{ $v->room->title }}</td>
                        <td>{{ $v->content }}</td>
                        <td>{{ $v->member->name }}</td>
                        <td>{{ $v->display == 1 ? '否' : '是' }}</td>
                        <td>
                            <a href="javascript:void(0)" onclick="deletes({{$v->id}})"> 删除</a>
                            <a href="{{ url('admin/room/commentDisplay/'.$v->id) }}"> 切换显示</a>
                        </td>
                    </tr>
                @empty
                    <p>没有类容</p>
                @endforelse
                </tbody>
            </table>
            <div class="text-center">
                {{--{!! $room->links() !!}--}}
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