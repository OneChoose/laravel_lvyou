@include('admin.header')
@include('admin.nav')
        <!-- 配置文件 -->
<script type="text/javascript" src="/admin/ueditor/ueditor.config.js"></script>
<!-- 编辑器源码文件 -->
<script type="text/javascript" src="/admin/ueditor/ueditor.all.js"></script>
<!-- 实例化编辑器 -->
<script type="text/javascript">
    var ue = UE.getEditor('container', {
        initialFrameWidth : 1000,
        initialFrameHeight : 450
    });
    ue.ready(function() {
        ue.execCommand('serverparam', '_token', '{{ csrf_token() }}');
    });
</script>

        <!-- Content Start -->
<div class="container-fluid" id="content_box">
    <div class="row">

        <div class="col-xs-2" id="nav_left">
            <div id="side-wigVw4RU" class="list-group">
                <a class="list-group-item list-group-item-title">内容管理</a>
                <a href="/admin/article/index" class="list-group-item"><i class="fa fa-list fa-fw"></i>文章管理</a>
                <a href="/admin/article/add" class="list-group-item active"><i class="fa fa-list fa-fw"></i>新增文章</a>
                <a href="/admin/single_page/index" class="list-group-item"><i class="fa fa-list fa-fw"></i>单页管理</a>
            </div>
        </div>
        <div class="col-xs-10">
            <ol class="breadcrumb">
                <li>内容管理</li>
                <li class="active">新增文章</li>
            </ol>
            <div class="container-fluid" id="content_box_blank">
                <form id="form_add" class="form-horizontal" method="post" action="/admin/single_page/save">
                    <div class="row">
                        <div class="col-xs-12">
                            {{ csrf_field() }}
                            <div class="row form-group">
                                <label class="col-xs-2 control-label">标题</label>

                                <div class="col-xs-6">
                                    <input type="text" class="form-control" name="title" placeholder="{{ $errors->first('title')  }}" data-rule="required;">
                                </div>
                            </div>
                            <div class="row form-group">
                                <label class="col-xs-2 control-label">内容</label>

                                <div class="col-xs-6">
                                    <script id="container" name="contents" type="text/plain">{!! old('content') !!}</script>
                                    <span style="color: #969896;">{{ $errors->first('contents')  }}</span>

                                </div>
                            </div>
                            <div class="row form-group">
                                <label class="col-xs-2 control-label">审核</label>

                                <div class="col-xs-6">
                                    通过
                                    <input type="radio" name="checked" value="1" checked="checked" data-rule="required;">
                                    不通过
                                    <input type="radio" name="checked" value="0" data-rule="required;">
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
