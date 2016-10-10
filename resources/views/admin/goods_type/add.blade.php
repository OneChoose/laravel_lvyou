@include('admin.header')
@include('admin.nav')
        <!-- 配置文件 -->
<script type="text/javascript" src="/admin/ueditor/ueditor.config.js"></script>
<!-- 编辑器源码文件 -->
<script type="text/javascript" src="/admin/ueditor/ueditor.all.js"></script>
<script type="text/javascript" src="/calendar/calendar.js"></script>
<link rel="stylesheet" type="text/css" href="/calendar/calendar-blue.css"/>
<!-- 实例化编辑器 -->
<script type="text/javascript">
//    var ue = UE.getEditor('container');
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
                <a class="list-group-item list-group-item-title">商品管理</a>
                <a href="/admin/goods/add" class="list-group-item active"><i class="fa fa-list fa-fw"></i>添加商品分类</a>
                <a href="/admin/goods/index" class="list-group-item"><i class="fa fa-list fa-fw"></i>商品列表</a>
                <a href="/admin/goods_type/index" class="list-group-item"><i class="fa fa-list fa-fw"></i>商品类型</a>
            </div>
        </div>
        <div class="col-xs-10">
            <ol class="breadcrumb">
                <li>商品管理</li>
                <li class="active">添加商品分类</li>
            </ol>
            <div class="container-fluid" id="content_box_blank">
                <form id="form_add" class="form-horizontal" method="post" action="/admin/goods_type/save" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-xs-12">
                            {{ csrf_field() }}
                            <div class="row form-group">
                                <label class="col-xs-2 control-label">商品分类名称</label>
                                <div class="col-xs-6">
                                    <input type="text" class="form-control" name="name" placeholder="{{ $errors->first('name')  }}" data-rule="required;">
                                </div>
                            </div>
                            <div class="row form-group">
                                <label class="col-xs-2 control-label">所属分类</label>
                                <div class="col-xs-6">
                                    <select class="form-control c" name="parent" id="driver_area">
                                        <option value="0">顶级分类</option>
                                        @foreach($goods_type as $v)
                                            @if($v->parent_id == 0)
                                                <option value="{{ $v->id }}">{{ $v->name }}</option>
                                                @foreach($v->childrenGoodsType as $list)
                                                    <option disabled="disabled" value="{{ $list->id }}">|--{{ $list->name }}</option>
                                                @endforeach
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row form-group">
                                <label class="col-xs-2 control-label">缩略图</label>
                                <div class="col-xs-6">
                                    <input type="file" class="" name="picurl" data-rule="required;">
                                </div>
                            </div>
                            <div class="row form-group">
                                <label class="col-xs-2 control-label">跳转链接</label>
                                <div class="col-xs-6">
                                    <input type="text" class="form-control" name="linkurl" data-rule="required;">
                                </div>
                            </div>
                            <div class="row form-group">
                                <label class="col-xs-2 control-label">排序</label>
                                <div class="col-xs-6">
                                    <input type="text" class="form-control" name="sort" data-rule="required;">
                                </div>
                            </div>
                            <div class="row form-group">
                                <label class="col-xs-2 control-label">隐藏类别</label>
                                <div class="col-xs-6">
                                    <td><input type="radio" class=""  name="checkinfo" value="true" checked="checked">
                                        显示&nbsp;
                                        <input type="radio" class=""  name="checkinfo" value="false">
                                        隐藏</td>
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
