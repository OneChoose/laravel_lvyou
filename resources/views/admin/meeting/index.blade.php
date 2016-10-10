@include('admin.header')
@include('admin.nav')
<script type="text/javascript">
    function deletes(id){
        if(confirm('确定删除嘛')){
            window.location.href= '/admin/meeting/'+id+ '/delete';
        }
    }
</script>

        <!-- Content Start -->
<div class="container-fluid" id="content_box">
    <div class="row">

        <div class="col-xs-2" id="nav_left">
            <div id="side-wigVw4RU" class="list-group">
                <a class="list-group-item list-group-item-title">会议与宴会管理</a>
                <a href="/admin/meeting/index" class="list-group-item active"><i class="fa fa-list fa-fw"></i>会议与宴会</a>
                <a href="/admin/meeting/classic" class="list-group-item"><i class="fa fa-list fa-fw"></i>经典会议</a>
                <a href="/admin/meeting/classic" class="list-group-item"><i class="fa fa-list fa-fw"></i>会议与宴会概况</a>
                <a href="/admin/meeting/classic" class="list-group-item"><i class="fa fa-list fa-fw"></i>预订管理</a>
            </div>
        </div>
        <div class="col-xs-10">
            <ol class="breadcrumb">
                <li>会议与宴会管理</li>
                <li class="active">会议与宴会</li>
            </ol>
            <a href="/admin/meeting/add" class="btn btn-primary" style="float: right"><i class="fa fa-plus fa-lg"></i>
                新增会议与宴会</a>

            <table class="table table-hover">
                <thead>
                <tr>
                    <th style="width: 60px;">ID</th>
                    <th style="width: 200px;">名称</th>
                    <th style="width: 80px;">酒店分类</th>
                    <th style="width: 80px;">会议分类</th>
                    <th style="width: 80px;">最多容纳人数</th>
                    <th style="width: 80px;">面积</th>
                    <th style="width: 80px;">位置</th>
                    <th style="width: 200px;">操作</th>
                </tr>
                </thead>
                @foreach($meeting as $v)
                        <tr>
                            <td>{{ $v->id }}</td>
                            <td>{{ $v->title }}</td>
                            <td>{{ $v->hotel_type }}</td>
                            <td>{{ $v->type }}</td>
                            <td>{{ $v->galleryful }}</td>
                            <td>{{ $v->area }}</td>
                            <td>{{ $v->location }}</td>
                            <td>
                                <a href="javascript:void(0)" onclick= "deletes({{$v->id}})"> 删除</a>
                                <a href="{{ url('admin/meeting/'.$v->id.'/edit') }}" class="edit"> 修改</a>
                            </td>
                        </tr>
                @endforeach
            </table>
            <div class="text-center">
                {!! $meeting->links() !!}
            </div>
        </div>

    </div>
</div>
<!-- Content End -->
<!-- footer -->
@include('admin.footer')
