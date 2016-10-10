@include('admin.header')
@include('admin.nav')
        <!-- 配置文件 -->
<script type="text/javascript" src="/admin/ueditor/ueditor.config.js"></script>
<!-- 编辑器源码文件 -->
<script type="text/javascript" src="/admin/ueditor/ueditor.all.js"></script>
<script type="text/javascript" src="/calendar/calendar.js"></script>
<link rel="stylesheet" type="text/css" href="/calendar/calendar-blue.css"/>
<script src="/home/libs/laydate/need/laydate.css" rel="stylesheet"></script>
<link href="/home/css/date_demo.css" rel="stylesheet">
<script src="/home/libs/laydate/laydate.js"></script>
<script src="/home/js/jquery-2.2.3.min.js"></script>

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
                <a href="/admin/room/add" class="list-group-item active"><i class="fa fa-list fa-fw"></i>添加客房</a>
                <a href="/admin/room/index" class="list-group-item"><i class="fa fa-list fa-fw"></i>客房列表</a>
                <a href="/admin/room/discount" class="list-group-item"><i class="fa fa-list fa-fw"></i>客房满即送</a>
                <a href="/admin/room/comment" class="list-group-item"><i class="fa fa-list fa-fw"></i>房间评论</a>
            </div>
        </div>
        <div class="col-xs-10">
            <ol class="breadcrumb">
                <li>客房管理</li>
                <li class="active">客房列表</li>
            </ol>
            <div class="container-fluid" id="content_box_blank">
                <form id="form_add" class="form-horizontal" method="post" action="/admin/room/save">
                    <div class="row">
                        <div class="col-xs-12">
                            {{ csrf_field() }}
                            <div class="row form-group">
                                <label class="col-xs-2 control-label">客房名称</label>

                                <div class="col-xs-6">
                                    <input type="text" class="form-control" name="title" data-rule="required;" value="">
                                </div>
                                <label class="col-xs-0 control-label errMsg">{{ $errors->first('title') }}</label>
                            </div>
                            <div class="row form-group">
                                <label class="col-xs-2 control-label">客房类型</label>

                                <div class="col-xs-6">
                                    <select class="form-control c" name="type" id="driver_area">
                                        <option value="">请选择</option>
                                        <option value="华邦">华邦</option>
                                        <option value="拙雅">拙雅</option>
                                    </select>
                                </div>

                                <label class="col-xs-0 control-label errMsg">{{ $errors->first('type') }}</label>
                            </div>
                            <div class="row form-group">
                                <label class="col-xs-2 control-label">价格</label>

                                <div class="col-xs-6">
                                    <input type="text" class="form-control" name="price" data-rule="required;">
                                </div>
                                <label class="col-xs-0 control-label errMsg">{{ $errors->first('price') }}</label>
                            </div>
                            <div class="row form-group">
                                <label class="col-xs-2 control-label">入住人数</label>

                                <div class="col-xs-6">
                                    <input type="text" class="form-control" name="person" data-rule="required;">
                                </div>
                            </div>
                            <div class="row form-group">
                                <label class="col-xs-2 control-label">剩余数量</label>

                                <div class="col-xs-6">
                                    <input type="text" class="form-control" name="surplus_amount" data-rule="required;">
                                </div>
                            </div>
                            <div class="row form-group">
                                <label class="col-xs-2 control-label">设备设施</label>

                                <div class="col-xs-6">
                                    <input type="text" class="form-control" name="facility" data-rule="required;">
                                </div>
                            </div>
                            <div class="row form-group">
                                <label class="col-xs-2 control-label">关键词</label>

                                <div class="col-xs-6">
                                    <input type="text" class="form-control" name="keywords" data-rule="required;">
                                </div>
                            </div>
                            <style type="text/css">
                                .btn {
                                    -webkit-border-radius: 3px;
                                    -moz-border-radius: 3px;
                                    -ms-border-radius: 3px;
                                    -o-border-radius: 3px;
                                    border-radius: 3px;
                                    background-color: #ff8400;
                                    color: #fff;
                                    border: none;
                                    cursor: pointer;;
                                    font-weight: bold
                                }
                                .btn:hover {
                                    background-color: #e95a00;
                                    text-decoration: none;
                                    color: #fff;
                                    font-weight: bold
                                }
                            </style>
                            <div class="row form-group">
                                <label class="col-xs-2 control-label">摘要</label>

                                <div class="col-xs-6">
                                    <input type="text" class="form-control" name="description" data-rule="required;">
                                </div>
                            </div>
                            <div class="row form-group">
                                <label class="col-xs-2 control-label">日期折扣</label>
                                <div class="col-xs-6">
                                    <ul class="">
                                        <a style="display:inline-block" class="btn" id="date_sz" >一键设置</a>
                                        <li id="date_ch" style="float:right;">
                                            <span class="d_c_name">选择日期</span>
                                            <span class="d_c_form" id="rili_se"></span>
                                        </li>
                                    </ul>
                                    <div class="rili_form">
                                            <div class="form-group" id="discount">
                                                <label>折扣</label>
                                                <input class="form-control c"  type="text" name="discount" value="" placeholder="85">
                                                <span>%</span>
                                            </div>
                                            <div class="form-group" id="date_serves">
                                                <label>时间范围</label>
                                                <input class="form-control b start_time" type="text" value="" placeholder="2016-9-30" id="start_time">
                                                -
                                                <input class="form-control b end_time" type="text" value="" placeholder="2016-10-7" id="end_time">
                                            </div>
                                            <div class="form-group" id="date_but">
                                                <label></label>
                                                <input class="btn" style="width: 81px" type="button" value="保存" placeholder="保存">
                                            </div>
                                    </div>
                                    <ul>
                                        <li id="rili_wrap"></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="row form-group">
                                <label class="col-xs-2 control-label">上传多张图片</label>

                                <div class="col-xs-6">
                                    <a class="btn" id="btn">上传图片</a> 最大500KB，支持jpg，gif，png格式。
                                    <ul id="ul_pics">

                                    </ul>
                                </div>
                            </div>
                            <div class="row form-group">
                                <label class="col-xs-2 control-label">内容</label>

                                <div class="col-xs-6">
                                    <textarea id="container" name="content"
                                            type="text/plain">{!! old('content') !!}</textarea>
                                </div>
                            </div>
                            <div class="row form-group">
                                <label class="col-xs-2 control-label">排序</label>

                                <div class="col-xs-6">
                                    <input type="text" class="form-control" name="sort" data-rule="required;">
                                </div>
                            </div>
                            <div class="row form-group">
                                <label class="col-xs-2 control-label">点击</label>

                                <div class="col-xs-6">
                                    <input type="text" class="form-control" name="click" data-rule="required;">
                                </div>
                            </div>
                            <div class="row form-group">
                                <label class="col-xs-2 control-label">审核</label>

                                <div class="col-xs-6">
                                    通过
                                    <input type="radio" value="true" checked="checked" name="checkinfo"
                                           data-rule="required;">
                                    未通过
                                    <input type="radio" value="false" name="checkinfo" data-rule="required;">
                                </div>
                            </div>
                            <div class="row form-group">
                                <label class="col-xs-2 control-label">更新时间</label>

                                <div class="col-xs-6">
                                    <input type="text" class="form-control" id="posttime"
                                           value="{{ date("Y-m-d H:i:s", time()) }}" name="posttime"
                                           data-rule="required;">
                                    <script type="text/javascript">
                                        date = new Date();
                                        Calendar.setup({
                                            inputField: "posttime",
                                            ifFormat: "%Y-%m-%d %H:%M:%S",
                                            showsTime: true,
                                            timeFormat: "24"
                                        });
                                    </script>
                                </div>
                                <label class="col-xs-0 control-label errMsg">{{ $errors->first('posttime') }}</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-offset-2 col-xs-10">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-floppy-o fa-lg"></i> 增加
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
<script type="text/javascript" src="/uploadpic/plupload/jquery.js"></script>
<script type="text/javascript" src="/uploadpic/plupload/plupload.full.min.js"></script>
<script type="text/javascript" src="/uploadpic/plupload/sucaihuo.js"></script>
<script src="/home/libs/assets/common-date.js"></script>
<script src="/home/libs/assets/common-scripts.js"></script>
<script type="text/javascript">
    var uploader = new plupload.Uploader({//创建实例的构造方法
        runtimes: 'html5,flash,silverlight,html4', //上传插件初始化选用那种方式的优先级顺序
        browse_button: 'btn', // 上传按钮
        url: "/admin/upload_img/ajax", //远程上传地址
        flash_swf_url: '/uploadpic/plupload/Moxie.swf', //flash文件地址
        silverlight_xap_url: '/uploadpic/plupload/Moxie.xap', //silverlight文件地址
        filters: {
            max_file_size: '1024kb', //最大上传文件大小（格式100b, 10kb, 10mb, 1gb）
            mime_types: [//允许文件上传类型
                {title: "files", extensions: "jpg,png,gif"}
            ]
        },
        multi_selection: true, //true:ctrl多文件上传, false 单文件上传
        init: {
            FilesAdded: function (up, files) { //文件上传前
                if ($("#ul_pics").children("li").length > 5) {
                    alert("您上传的图片太多了！");
                    uploader.destroy();
                } else {
                    var li = '';
                    plupload.each(files, function (file) { //遍历文件
                        li += "<li id='" + file['id'] + "'><div class='progress'><span class='bar'></span><span class='percent'>0%</span></div></li>";
                    });
                    $("#ul_pics").append(li);
                    uploader.start();
                }
            },
            UploadProgress: function (up, file) { //上传中，显示进度条
                var percent = file.percent;
                $("#" + file.id).find('.bar').css({"width": percent + "%"});
                $("#" + file.id).find(".percent").text(percent + "%");
            },
            FileUploaded: function (up, file, info) { //文件上传成功的时候触发
                var data = eval("(" + info.response + ")");
                $("#" + file.id).html("<div class='img'><img src='" + data.pic + "'/><input type='hidden' name='file_pics[]' value='" + data.pic + "'/></div>");

                $('div.img').dblclick(function () {
                    $(this).remove();
                })
            },
            Error: function (up, err) { //上传出错的时候触发
                alert(err.message);
            }
        }
    });
    uploader.init();

</script>