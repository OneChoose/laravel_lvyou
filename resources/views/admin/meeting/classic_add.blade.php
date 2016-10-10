@include('admin.header')
@include('admin.nav')
        <!-- 配置文件 -->
<script type="text/javascript" src="/admin/ueditor/ueditor.config.js"></script>
<!-- 编辑器源码文件 -->
<script type="text/javascript" src="/admin/ueditor/ueditor.all.js"></script>
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
                <a class="list-group-item list-group-item-title">会议与宴会管理</a>
                <a href="/admin/meeting/index" class="list-group-item active"><i class="fa fa-list fa-fw"></i>新增经典会议</a>
                <a href="/admin/meeting/index" class="list-group-item"><i class="fa fa-list fa-fw"></i>会议与宴会</a>
                <a href="/admin/meeting/classic" class="list-group-item"><i class="fa fa-list fa-fw"></i>经典会议</a>
                <a href="/admin/meeting/classic" class="list-group-item"><i class="fa fa-list fa-fw"></i>会议与宴会概况</a>
                <a href="/admin/meeting/classic" class="list-group-item"><i class="fa fa-list fa-fw"></i>预订管理</a>
            </div>
        </div>
        <div class="col-xs-10">
            <ol class="breadcrumb">
                <li>会议与宴会管理</li>
                <li class="active">新增会议与宴会</li>
            </ol>
            <div class="container-fluid" id="content_box_blank">
                <form id="form_add" class="form-horizontal" method="post" action="/admin/meeting/classicSave" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-xs-12">
                            {{ csrf_field() }}
                            <div class="row form-group">
                                <label class="col-xs-2 control-label">会议名称</label>

                                <div class="col-xs-6">
                                    <input type="text" class="form-control" name="title" data-rule="required;">
                                </div>
                            </div>
                            <div class="row form-group">
                                <label class="col-xs-2 control-label">酒店分类</label>

                                <div class="col-xs-6">
                                    <select class="form-control c" name="hotel_type" id="driver_area">
                                        <option value="">请选择</option>
                                        <option value="华邦">华邦</option>
                                        <option value="拙雅">拙雅</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row form-group">
                                <label class="col-xs-2 control-label">会议室名称</label>

                                <div class="col-xs-6">
                                    <select class="form-control c" name="meeting_id" id="driver_area">
                                        <option value="">请选择</option>
                                        @foreach ($meeting as $v)
                                        <option value="{{ $v->id }}">{{ $v->title }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row form-group">
                                <label class="col-xs-2 control-label">时间</label>

                                <div class="col-xs-6">
                                    <input type="text" class="form-control" name="create_time" data-rule="required;">
                                </div>
                            </div>
                            <div class="row form-group">
                                <label class="col-xs-2 control-label">最多容纳人数</label>

                                <div class="col-xs-6">
                                    <input type="text" class="form-control" name="galleryful" data-rule="required;">
                                </div>
                            </div>
                            <div class="row form-group">
                                <label class="col-xs-2 control-label">封面图</label>

                                <div class="col-xs-6">
                                    <input type="file" class="" name="file_pics" data-rule="required;">
                                </div>
                            </div>
                            <div class="row form-group">
                                <label class="col-xs-2 control-label">内容</label>

                                <div class="col-xs-6">
                                    <textarea id="container" name="content"
                                            type="text/plain">{!! old('content') !!}</textarea>
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
