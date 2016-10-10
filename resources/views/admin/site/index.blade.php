@include('admin.header')
@include('admin.nav')

        <style>
            .breadcrumb>li+li:before{
                content: "-";
            }
            .input-group-addon {width: 40%;}
            .input-group .form-control {width: 100%;}
        </style>
<!-- Content Start -->
<div class="container-fluid" id="content_box">
    <div class="row">

        <div class="col-xs-2" id="nav_left">
            <div id="side-wigVw4RU" class="list-group">
                <a class="list-group-item list-group-item-title">基本管理</a>
                <a href="/admin/site/index" class="list-group-item active"><i class="fa fa-list fa-fw"></i>基本配置</a>
                <a href="/admin/site/link" class="list-group-item"><i class="fa fa-list fa-fw"></i>友情链接</a>
                {{--<a href="/admin/site/pay" class="list-group-item"><i class="fa fa-list fa-fw"></i>支付设置</a>--}}
            </div>
        </div>
        <div class="col-xs-10">
            <ul class="breadcrumb">
                <li><a href="/admin/site/index"  class="btn btn-primary">基本配置</a></li>
                <li><a href="/admin/site/children_bed_price"  class="btn btn-default">加床费</a></li>
            </ul>
            <div class="panel panel-default">
                <div class="panel-body">
                    <form class="form-block" role="form" action="/admin/site/base" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <div class="input-group">
                                <label class="input-group-addon" for="">网站名称</label>
                                <input class="form-control" type="text" name="site[web_name]" id="" value="{{ $site['web_name'] }}"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <label class="input-group-addon" for="">SEO标题</label>
                                <input class="form-control" type="text" name="site[web_seo]" id="" value="{{ $site['web_seo'] }}"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <label class="input-group-addon" for="">关键字设置</label>
                                <input class="form-control" type="text" name="site[web_keyword]" id="" value="{{ $site['web_keyword'] }}"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <label class="input-group-addon" for="">描述</label>
                                <input class="form-control" type="text" name="site[web_description]" id="" value="{{ $site['web_description'] }}"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary"
                                    data-content="It's so simple to create a tooltop for my website!"><i
                                        class="fa fa-filter"></i> 修改
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <table class="table table-hover">

            </table>

        </div>

    </div>
</div>
<!-- Content End -->
<!-- footer -->
@include('admin.footer')
