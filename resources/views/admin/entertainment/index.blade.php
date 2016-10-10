@include('admin.header')
@include('admin.nav')

        <!-- Content Start -->
<div class="container-fluid" id="content_box">
    <div class="row">

        <div class="col-xs-2" id="nav_left">
            <div id="side-wigVw4RU" class="list-group">
                <a class="list-group-item list-group-item-title">休闲娱乐</a>
                <a href="/admin/entertainment/add" class="list-group-item"><i class="fa fa-list fa-fw"></i>添加休闲娱乐</a>
                <a href="/admin/entertainment/index" class="list-group-item active"><i class="fa fa-list fa-fw"></i>休闲娱乐列表</a>
            </div>
        </div>
        <div class="col-xs-10">
            <ol class="breadcrumb">
                <li>休闲娱乐</li>
                <li class="active">休闲娱乐列表</li>
            </ol>
            <a href="/admin/entertainment/add" class="btn btn-primary" style="float: right"><i class="fa fa-plus fa-lg"></i>
                添加休闲娱乐</a>

            <table class="table table-hover">
                <thead>
                <tr>
                    <th style="width: 60px;">ID</th>
                    <th style="width: 120px;">缩略图</th>
                    <th style="width: 100px;">名称</th>
                    <th style="width: 80px;">价格</th>
                    <th style="width: 80px;">营业时间</th>
                    <th style="width: 80px;">是否支持支付</th>
                    <th style="width: 200px;">操作</th>
                </tr>
                </thead>
                <tbody>
                @forelse($entertainment as $v)
                    <tr>
                        <td>{{ $v->id }}</td>
                        <td><img height="100px" width="200px" src="{{ $v->picurl }}" /></td>
                        <td>{{ $v->title }}</td>
                        <td>{{ $v->price }}</td>
                        <td>{{ $v->open_time }}-{{ $v->close_time }}</td>
                        <td>{{ $v->is_pay==1 ? '支持': '不支持' }}</td>
                        <td>
                            <a href="javascript:void(0)" onclick="deletes({{$v->id}})"> 删除</a>
                            <a href="{{ url('admin/entertainment/'.$v->id.'/edit') }}" class="edit"> 修改</a>
                        </td>
                    </tr>
                @empty
                    <p>没有类容</p>
                @endforelse
                </tbody>
            </table>
            <div class="text-center">
                {!! $entertainment->links() !!}
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