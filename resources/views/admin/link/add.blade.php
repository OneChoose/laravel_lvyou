@include('admin.header')
@include('admin.nav')

        <!-- Content Start -->
<div class="container-fluid" id="content_box">
    <div class="row">

        <div class="col-xs-2" id="nav_left">
            <div id="side-wigVw4RU" class="list-group">
                <a class="list-group-item list-group-item-title">基本管理</a>
                <a href="/admin/site/index" class="list-group-item"><i class="fa fa-list fa-fw"></i>基本配置</a>
                <a href="/admin/site/link" class="list-group-item active"><i class="fa fa-list fa-fw"></i>友情链接</a>
            </div>
        </div>
        <div class="col-xs-10">
            <ol class="breadcrumb">
                <li>基本管理</li>
                <li class="active">友情链接</li>
            </ol>
            <div class="container-fluid" id="content_box_blank">
                <form id="form_add" class="form-horizontal" method="post" action="/admin/site/linkSave">
                    <div class="row">
                        <div class="col-xs-12">
                            {{ csrf_field() }}
                            <div class="row form-group">
                                <label class="col-xs-2 control-label">网站名称</label>

                                <div class="col-xs-6">
                                    <input type="text" class="form-control" name="webname" data-rule="required;">
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
                                    <input type="text" class="form-control" name="orderid" data-rule="required;">
                                </div>
                            </div>
                            <div class="row form-group">
                                <label class="col-xs-2 control-label">是否显示</label>

                                <div class="col-xs-6">
                                    是<input type="radio" name="checkinfo" value="true" checked="checked">
                                    否<input type="radio" name="checkinfo" value="false">
                                </div>
                            </div>
                            <div class="row form-group">
                                <label class="col-xs-2 control-label">nofollow</label>

                                <div class="col-xs-6">
                                    是<input type="radio" name="nofollow" value="true" checked="checked">
                                    否<input type="radio" name="nofollow" value="false">
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
