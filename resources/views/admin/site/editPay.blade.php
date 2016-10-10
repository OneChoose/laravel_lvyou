@include('admin.header')
@include('admin.nav')

        <!-- Content Start -->
<div class="container-fluid" id="content_box">
    <div class="row">

        <div class="col-xs-2" id="nav_left">
            <div id="side-wigVw4RU" class="list-group">
                <a class="list-group-item list-group-item-title">基本管理</a>
                <a href="/admin/site/index" class="list-group-item"><i class="fa fa-list fa-fw"></i>基本配置</a>
                {{--<a href="/admin/site/pay" class="list-group-item active"><i class="fa fa-list fa-fw"></i>支付设置</a>--}}
            </div>
        </div>
        <div class="col-xs-10">
            <ol class="breadcrumb">
                <li>基本管理</li>
                <li class="active">支付设置</li>
                <li class="active">修改</li>
            </ol>
            <div class="container-fluid" id="content_box_blank">
                <form id="form_add" class="form-horizontal" method="post" action="{{ url('admin/site/'.$sitePay->id.'/updatePay') }}">
                    <div class="row">
                        <div class="col-xs-12">
                            {{ csrf_field() }}
                            <input type="hidden" name="_method" value="PUT">
                            <div class="row form-group">
                                <label class="col-xs-2 control-label">名称</label>
                                <div class="col-xs-6">
                                    <input type="text" class="form-control" disabled="disabled"  value="{{ $sitePay->name }}" data-rule="required;">
                                </div>
                            </div>

                            <div class="row form-group">
                                <label class="col-xs-2 control-label">	身份者id</label>
                                <div class="col-xs-6">
                                    <input type="text" class="form-control" name="partner_id" value="{{ $sitePay->partner_id }}" data-rule="required;">
                                </div>
                            </div>
                            <div class="row form-group">
                                <label class="col-xs-2 control-label">	账号id</label>
                                <div class="col-xs-6">
                                    <input type="text" class="form-control" name="seller_id" value="{{ $sitePay->seller_id }}" data-rule="required;">
                                </div>
                            </div>
                            <div class="row form-group">
                                <label class="col-xs-2 control-label">	安全检验码</label>
                                <div class="col-xs-6">
                                    <input type="text" class="form-control" name="key" value="{{ $sitePay->key }}" data-rule="required;">
                                </div>
                            </div>
                            <div class="row form-group">
                                <label class="col-xs-2 control-label">	状态</label>
                                <div class="col-xs-6">
                                    开启 <input type="radio" name="status" value="1" {{ $sitePay->status == 1 ? 'checked="checked"' : '' }} data-rule="required;">
                                    关闭<input type="radio" name="status" value="2" {{ $sitePay->status == 2 ? 'checked="checked"' : '' }} data-rule="required;">
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
