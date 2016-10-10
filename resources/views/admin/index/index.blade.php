@include('admin.header')
@include('admin.nav')
<script type="text/javascript">
    function deletes(id){
        if(confirm('确定删除此管理员？')){
            window.location.href= '/admin/'+id+'/deleteManager';
        }
    }
</script>
<!-- Content Start -->
<div class="container-fluid" id="content_box">
    <div class="row">

        <div class="col-xs-2" id="nav_left">
            <div id="side-wigVw4RU" class="list-group">
                <a class="list-group-item list-group-item-title">管理员管理</a>
                <a href="/admin/index" class="list-group-item active"><i class="fa fa-list fa-fw"></i>管理员列表</a>
                <a href="/admin/addManager" class="list-group-item"><i class="fa fa-list fa-fw"></i>新增管理员</a>
            </div>
            <div id="side-wigVw4RU" class="list-group">
                <a class="list-group-item list-group-item-title">权限管理</a>
                <a href="/admin/role" class="list-group-item"><i class="fa fa-list fa-fw"></i>角色列表</a>
                <a href="/admin/addRole" class="list-group-item"><i class="fa fa-list fa-fw"></i>新增角色</a>
            </div>
        </div>
        <div class="col-xs-10">
            <ol class="breadcrumb">
                <li>管理员管理</li>
                <li class="active">管理员列表</li>
            </ol>
            <div class="panel panel-default">
                <div class="panel-body">
                    <form class="form-inline" role="form" action="" method="get">
                        <div class="form-group">
                            <div class="input-group">
                                <label class="input-group-addon" for="">用户名</label>
                                <input class="form-control" type="text" name="name" id="" value=""/>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary"
                                    data-content="It's so simple to create a tooltop for my website!"><i
                                        class="fa fa-filter"></i> 搜 索
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <table class="table table-hover">
                <thead>
                <tr>
                    <th style="width: 60px;">ID</th>
                    <th style="width: 120px;">email</th>
                    <th style="width: 200px;">用户名</th>
                    <th style="width: 200px;">角色</th>
                    <th style="width: 200px;">添加时间</th>
                    <th style="width: 200px;">修改时间</th>
                    <th style="width: 200px;">操作</th>
                </tr>
                </thead>
                @foreach($admin as $v)
                <tr>
                    <td>{{ $v->id }}</td>
                    <td>{{ $v->email }}</td>
                    <td>{{ $v->name }}</td>
                    <td>{{ $v->getRole->role_name }}</td>
                    <td>{{ $v->created_at }}</td>
                    <td>{{ $v->updated_at }}</td>
                    <td>
                        <a href="javascript:void(0)" onclick= "deletes({{$v->id}})"> 删除</a>
                        <a href="/admin/index/updateManager/{{ $v->id }}" class="comment_list"> 修改</a>
                    </td>
                </tr>
                @endforeach
            </table>
            <div class="text-center">
                {!! $admin->links() !!}
            </div>
        </div>

    </div>
</div>
<!-- Content End -->
<!-- footer -->
@include('admin.footer')
