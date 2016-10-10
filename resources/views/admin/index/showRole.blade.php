@include('admin.header')
@include('admin.nav')

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
                <li class="active">新增角色</li>
            </ol>
            <div class="container-fluid" id="content_box_blank">
                <form id="form_add" class="form-horizontal" method="post" action="/admin/updateRole">
                    <input type="hidden" class="form-control" name="id" value="{{ $role->id }}">
                    <div class="row">
                        <div class="col-xs-12">
                            {{ csrf_field() }}
                            <div class="row form-group">
                                <label class="col-xs-2 control-label">角色名</label>

                                <div class="col-xs-6">
                                    <input type="text" class="form-control" name="role_name" value="{{ $role->role_name }}">
                                </div>
                                <label class="col-xs-0 control-label errMsg">{{ $errors->first('role_name') }}</label>
                            </div>
                            <div class="row form-group">
                                <label class="col-xs-2 control-label">角色描述</label>

                                <div class="col-xs-6">
                                    <input type="text" class="form-control" name="role_desc" value="{{ $role->role_desc }}">
                                </div>
                            </div>

                        </div>
                        <div class="form-group">
                            <div class="col-xs-offset-2 col-xs-10">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-floppy-o fa-lg"></i> 修改
                                </button>
                            </div>
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
