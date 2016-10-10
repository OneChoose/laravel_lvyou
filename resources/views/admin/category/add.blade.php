@include('admin.header')
@include('admin.nav')

        <!-- Content Start -->
<div class="container-fluid" id="content_box">
    <div class="row">

        <div class="col-xs-2" id="nav_left">
            <div id="side-wigVw4RU" class="list-group">
                <a class="list-group-item list-group-item-title">内容管理</a>
                <a href="/admin/category" class="list-group-item"><i class="fa fa-list fa-fw"></i>分类管理</a>
                <a href="/admin/category/add" class="list-group-item active"><i class="fa fa-list fa-fw"></i>新增分类</a>
            </div>
        </div>
        <div class="col-xs-10">
            <ol class="breadcrumb">
                <li>内容管理</li>
                <li class="active">新增分类</li>
            </ol>
            <div class="container-fluid" id="content_box_blank">
                <form id="form_add" class="form-horizontal" method="post" action="/admin/category/save">
                    <div class="row">
                        <div class="col-xs-12">
                            {{ csrf_field() }}
                            <div class="row form-group">
                                <label class="col-xs-2 control-label">分类名称</label>

                                <div class="col-xs-6">
                                    <input type="text" class="form-control" name="name" data-rule="required;">
                                </div>
                            </div>
                            <div class="row form-group">
                                <label class="col-xs-2 control-label">所属分类</label>

                                <div class="col-xs-6">
                                    <select class="form-control c" name="parent" id="parent">
                                        <option value="0">顶级分类</option>
                                        @foreach($category as $v)
                                            @if($v->parent_id == 0)
                                                <option value="{{ $v->id }}">{{ $v->name }}</option>
                                                @foreach($v->childrenCategory as $list)
                                                    <option disabled="disabled" value="{{ $list->id }}">|--{{ $list->name }}</option>
                                                @endforeach
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row form-group">
                                <label class="col-xs-2 control-label">排序</label>

                                <div class="col-xs-6">
                                    <input type="text" class="form-control" name="sort" data-rule="required;">
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
