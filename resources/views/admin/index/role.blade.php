@include('admin.header')
@include('admin.nav')
<script type="text/javascript">
    function deletes(id){
        if(confirm('删除此角色，将同时删除此角色下的所有管理员及拥有的权限')){
            window.location.href= '/admin/'+id+'/deleteRole';
        }
    }
</script>
<!-- Content Start -->
<div class="container-fluid" id="content_box">
    <div class="row">

        <div class="col-xs-2" id="nav_left">
            <div id="side-wigVw4RU" class="list-group">
                <a class="list-group-item list-group-item-title">管理员管理</a>
                <a href="/admin/index" class="list-group-item"><i class="fa fa-list fa-fw"></i>管理员列表</a>
                <a href="/admin/addManager" class="list-group-item"><i class="fa fa-list fa-fw"></i>新增管理员</a>
            </div>
            <div id="side-wigVw4RU" class="list-group">
                <a class="list-group-item list-group-item-title">权限管理</a>
                <a href="/admin/role" class="list-group-item active"><i class="fa fa-list fa-fw"></i>角色列表</a>
                <a href="/admin/addRole" class="list-group-item"><i class="fa fa-list fa-fw"></i>新增角色</a>
            </div>
        </div>
        <div class="col-xs-10">
            <ol class="breadcrumb">
                <li>权限管理</li>
                <li class="active">角色列表</li>
            </ol>
            <table class="table table-hover">
                <thead>
                <tr>
                    <th style="width: 60px;">ID</th>
                    <th style="width: 120px;">角色名</th>
                    <th style="width: 200px;">描述</th>
                    <th style="width: 80px;">添加时间</th>
                    <th style="width: 200px;">修改时间</th>
                    <th style="width: 200px;">操作</th>
                </tr>
                </thead>
                @foreach($role as $v)
                <tr>
                    <td>{{ $v->id }}</td>
                    <td>{{ $v->role_name }}</td>
                    <td>{{ $v->role_desc }}</td>
                    <td>{{ $v->created_at }}</td>
                    <td>{{ $v->updated_at }}</td>
                    <td>
                        <a href="javascript:void(0)" onclick= "deletes({{$v->id}})"> 删除</a>
                        <a href="/admin/showRole/{{ $v->id }}" class="comment_list"> 修改</a>
                        <a href="/admin/roleMenu/{{ $v->id }}" class="comment_list"> 权限设置</a>
                    </td>
                </tr>
                @endforeach
            </table>
            <div class="text-center">
                {!! $role->links() !!}
            </div>
        </div>

    </div>
</div>
<!-- Content End -->
<!-- footer -->
@include('admin.footer')
