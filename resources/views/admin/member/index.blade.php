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
                <a class="list-group-item list-group-item-title">会员管理</a>
                <a href="/admin/member/index" class="list-group-item active"><i class="fa fa-list fa-fw"></i>会员列表</a>
                <a href="/admin/member/add" class="list-group-item"><i class="fa fa-list fa-fw"></i>添加会员</a>
            </div>
        </div>
        <div class="col-xs-10">
            <ol class="breadcrumb">
                <li>会员管理</li>
                <li class="active">会员列表</li>
            </ol>
            <a href="/admin/member/add" class="btn btn-primary" style="float: right"><i class="fa fa-plus fa-lg"></i>
                新增会员</a>

            <table class="table table-hover">
                <thead>
                <tr>
                    <th style="width: 60px;">ID</th>
                    <th style="width: 120px;">用户名</th>
                    <th style="width: 200px;">昵称</th>
                    <th style="width: 80px;">手机</th>
                    <th style="width: 200px;">积分</th>
                    <th style="width: 200px;">操作</th>
                </tr>
                </thead>
                @forelse($member as $v)
                    <tr>
                        <td>{{ $v->id }}</td>
                        <td>{{ $v->username }}</td>
                        <td>{{ $v->name }}</td>
                        <td>{{ $v->mobile }}</td>
                        <td>{{ $v->integral }}</td>
                        <td>
                            <a href="javascript:void(0)" onclick= "deletes({{$v->id}})"> 删除</a>
                            <a href="{{ url('admin/member/'.$v->id.'/edit') }}" class="edit"> 修改</a>
                        </td>
                    </tr>
                @empty
                    <p>没有类容</p>
                @endforelse
            </table>
            <div class="text-center">
                {!! $member->links() !!}
            </div>
        </div>

    </div>
</div>
<!-- Content End -->
<!-- footer -->
@include('admin.footer')
