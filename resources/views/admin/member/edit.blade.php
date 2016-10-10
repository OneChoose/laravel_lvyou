@include('admin.header')
@include('admin.nav')
        <!-- Content Start -->
<div class="container-fluid" id="content_box">
    <div class="row">

        <div class="col-xs-2" id="nav_left">
            <div id="side-wigVw4RU" class="list-group">
                <a class="list-group-item list-group-item-title">会员管理</a>
                <a href="/admin/member/index" class="list-group-item"><i class="fa fa-list fa-fw"></i>会员列表</a>
                <a href="/admin/member/add" class="list-group-item"><i class="fa fa-list fa-fw"></i>添加会员</a>
                <a href="#" class="list-group-item active"><i class="fa fa-list fa-fw"></i>修改会员</a>
            </div>
        </div>
        <div class="col-xs-10">
            <ol class="breadcrumb">
                <li>会员管理</li>
                <li class="active">修改会员</li>
            </ol>
            <div class="container-fluid" id="content_box_blank">
                <form id="form_add" class="form-horizontal" method="post" action="/admin/member/update" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-xs-12">
                            {{ csrf_field() }}
                            <input value="{{ $member->id }}" type="hidden" name="id"/>
                            <div class="row form-group">
                                <label class="col-xs-2 control-label">用户名</label>
                                <div class="col-xs-6">
                                    <input type="text" class="form-control" name="username" value="{{ $member->username }}" placeholder="{{ $errors->first('username')  }}" data-rule="required;">
                                </div>
                            </div>
                            <div class="row form-group">
                                <label class="col-xs-2 control-label">密码</label>
                                <div class="col-xs-6">
                                    <input type="text" class="form-control" name="password" value="" placeholder="{{ $errors->first('password')  }}" data-rule="required;">
                                </div>
                            </div>
                            <div class="row form-group">
                                <label class="col-xs-2 control-label">昵称</label>
                                <div class="col-xs-6">
                                    <input type="text" class="form-control" name="name" value="{{ $member->name }}" data-rule="required;">
                                </div>
                            </div>
                            <div class="row form-group">
                                <label class="col-xs-2 control-label">手机</label>
                                <div class="col-xs-6">
                                    <input type="text" class="form-control" name="mobile" value="{{ $member->mobile }}" data-rule="required;">
                                </div>
                            </div>
                            <div class="row form-group">
                                <label class="col-xs-2 control-label">头像</label>
                                <div class="col-xs-6">
                                    <input type="file" class="form-control" name="avatar" data-rule="required;">
                                </div>
                            </div>
                            <div class="row form-group">
                                <label class="col-xs-2 control-label">行别</label>
                                <div class="col-xs-6">
                                    男
                                    <input type="radio" name="sex" value="1" data-rule="required;" {{ $member->sex==1 ? 'checked="checked"' : '' }}>
                                    女
                                    <input type="radio" name="sex" value="0" data-rule="required;" {{ $member->sex==0 ? 'checked="checked"' : '' }}>
                                </div>
                            </div>
                            <div class="row form-group">
                                <label class="col-xs-2 control-label">积分</label>
                                <div class="col-xs-6">
                                    <input type="text" class="form-control" name="integral" value="{{ $member->integral }}" data-rule="required;">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-offset-2 col-xs-10">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-floppy-o fa-lg"></i> 新增
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
