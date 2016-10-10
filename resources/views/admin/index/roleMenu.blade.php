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
                <li class="active">设置权限</li>
            </ol>
            <div class="container-fluid" id="content_box_blank">
                <form id="form_add" class="form-horizontal" method="post" action="/admin/saveRoleMenu">
                    <input type="hidden" class="form-control" name="role_id" value="{{ $role_id }}">
                    {{ csrf_field() }}
                    <div class="row form-group">
                        <label class="col-xs-2 control-label">角色名：</label>
                        <div class="col-xs-6">
                            <label class="col-xs-2 control-label">{{ $role->role_name }}</label>
                        </div>
                    </div>

                    <div class="row form-group">
                        <label class="col-xs-2 control-label">权限：</label>
                        <div class="col-xs-6">
                            @foreach($menu as $v)
                                <label class="col-xs-2 control-label">
                                    <input type="checkbox" name="menu_id[]" id="menu_id" value="{{ $v->id }}" {{ in_array($v->id,$roleMenu) ? 'checked="checked"' : '' }}>  {{ $v->menu_desc }}
                                </label>
                            @endforeach
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-offset-2 col-xs-10">
                            <button type="submit" class="btn btn-primary"><i class="fa fa-floppy-o fa-lg"></i> 保存
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>
<!-- Content End -->
<!-- footer -->
@include('admin.footer')
