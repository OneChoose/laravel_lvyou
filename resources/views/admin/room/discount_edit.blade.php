@include('admin.header')
@include('admin.nav')
        <!-- 配置文件 -->
<script type="text/javascript" src="/admin/ueditor/ueditor.config.js"></script>
<!-- 编辑器源码文件 -->
<script type="text/javascript" src="/admin/ueditor/ueditor.all.js"></script>
<script type="text/javascript" src="/calendar/calendar.js"></script>
<link rel="stylesheet" type="text/css" href="/calendar/calendar-blue.css"/>

<style>
    .errMsg {
        color: #f96161;
    }
</style>
<!-- 实例化编辑器 -->
<script type="text/javascript">
    //    var ue = UE.getEditor('container');
    var ue = UE.getEditor('container', {
        initialFrameWidth: 1000,
        initialFrameHeight: 450
    });
    ue.ready(function () {
        ue.execCommand('serverparam', '_token', '{{ csrf_token() }}');
    });
</script>

<!-- Content Start -->
<div class="container-fluid" id="content_box">
    <div class="row">

        <div class="col-xs-2" id="nav_left">
            <div id="side-wigVw4RU" class="list-group">
                <a class="list-group-item list-group-item-title">客房管理</a>
                <a href="/admin/room/add" class="list-group-item"><i class="fa fa-list fa-fw"></i>添加客房</a>
                <a href="/admin/room/index" class="list-group-item"><i class="fa fa-list fa-fw"></i>客房列表</a>
                <a href="/admin/room/discount" class="list-group-item active"><i class="fa fa-list fa-fw"></i>客房满即送</a>
                <a href="/admin/room/comment" class="list-group-item"><i class="fa fa-list fa-fw"></i>房间评论</a>
            </div>
        </div>
        <div class="col-xs-10">
            <ol class="breadcrumb">
                <li>客房管理</li>
                <li class="active">客房满即送</li>
            </ol>
            <div class="container-fluid" id="content_box_blank">
                <form id="form_add" class="form-horizontal" method="post" action="/admin/room/discount_update">
                    <div class="row">
                        <div class="col-xs-12">
                            {{ csrf_field() }}
                            <input type="hidden" value="{{ $discount->id }}" name="id" />
                            <div class="row form-group">
                                <label class="col-xs-2 control-label">客房名称</label>

                                <div class="col-xs-6">
                                    <input type="text" class="form-control" name="name" data-rule="required;" value="{{ $discount->name }}">
                                </div>
                                <label class="col-xs-0 control-label errMsg"></label>
                            </div>
                            <div class="row form-group">
                                <label class="col-xs-2 control-label">满</label>

                                <div class="col-xs-6">
                                    <input type="text" class="form-control" name="full_money" data-rule="required;" value="{{ $discount->full_money }}">
                                </div>
                                <label class="col-xs-0 control-label errMsg"></label>
                            </div>
                            <div class="row form-group">
                                <label class="col-xs-2 control-label">减</label>

                                <div class="col-xs-6">
                                    <input type="text" class="form-control" name="decrease_money" data-rule="required;" value="{{ $discount->decrease_money }}">
                                </div>
                                <label class="col-xs-0 control-label errMsg"></label>
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
