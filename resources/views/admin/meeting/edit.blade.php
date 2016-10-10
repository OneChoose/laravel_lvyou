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
                <a href="/admin/meeting/index" class="list-group-item active"><i class="fa fa-list fa-fw"></i>新增会议与宴会</a>
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
                <form id="form_add" class="form-horizontal" method="post" action="/admin/meeting/{{ $meeting->id }}/update" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-xs-12">
                            {{ csrf_field() }}
                            <div class="row form-group">
                                <label class="col-xs-2 control-label">名称</label>

                                <div class="col-xs-6">
                                    <input type="text" class="form-control" name="title" value="{{ $meeting->title }}" data-rule="required;">
                                </div>
                            </div>
                            <div class="row form-group">
                                <label class="col-xs-2 control-label">酒店分类</label>

                                <div class="col-xs-6">
                                    <select class="form-control c" name="hotel_type" id="driver_area">
                                        <option value="">请选择</option>
                                        <option value="华邦" {{ $meeting->hotel_type == '华邦' ? 'selected="selected"' : ''  }}>华邦</option>
                                        <option value="拙雅" {{ $meeting->hotel_type == '拙雅' ? 'selected="selected"' : ''  }}>拙雅</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row form-group">
                                <label class="col-xs-2 control-label">会议分类</label>

                                <div class="col-xs-6">
                                    <select class="form-control c" name="type" id="driver_area">
                                        <option value="">请选择</option>
                                        <option value="会议" {{ $meeting->type == '会议' ? 'selected="selected"' : ''  }}>会议</option>
                                        <option value="宴会" {{ $meeting->type == '宴会' ? 'selected="selected"' : ''  }}>宴会</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row form-group">
                                <label class="col-xs-2 control-label">最多容纳人数</label>

                                <div class="col-xs-6">
                                    <input type="text" class="form-control" value="{{ $meeting->galleryful }}" name="galleryful" data-rule="required;">
                                </div>
                            </div>
                            <div class="row form-group">
                                <label class="col-xs-2 control-label">位置</label>

                                <div class="col-xs-6">
                                    <input type="text" class="form-control" value="{{ $meeting->location }}" name="location" data-rule="required;">
                                </div>
                            </div>
                            <div class="row form-group">
                                <label class="col-xs-2 control-label">面积</label>

                                <div class="col-xs-6">
                                    <input type="text" class="form-control" value="{{ $meeting->area }}" name="area" data-rule="required;">
                                </div>
                            </div>
                            <div class="row form-group">
                                <label class="col-xs-2 control-label">预约条款</label>

                                <div class="col-xs-6">
                                    <input type="text" class="form-control" value="{{ $meeting->terms }}" name="terms" data-rule="required;">
                                </div>
                            </div>
                            <div class="row form-group">
                                <label class="col-xs-2 control-label">封面图</label>

                                <div class="col-xs-6">
                                    <input type="file" class="" value="" name="file_pics" data-rule="required;">
                                </div>
                                <div class="col-xs-6">
                                    <img src="{{ $meeting->img }}" style="height: 100px;" />
                                </div>
                            </div>
                            <div class="row form-group">
                                <label class="col-xs-2 control-label">内容</label>

                                <div class="col-xs-6">
                                    <textarea id="container" name="content"
                                            type="text/plain">{{ $meeting->content }}</textarea>
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
