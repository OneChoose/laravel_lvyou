@include('admin.header')
@include('admin.nav')
<script type="text/javascript">
    function deletes(id){
        if(confirm('确定删除嘛')){
            window.location.href= '/admin/site/'+id+ '/linkDelete';
        }
    }
</script>

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
            <a href="/admin/site/linkAdd" class="btn btn-primary" style="float: right"><i class="fa fa-plus fa-lg"></i>
                新增友情链接</a>

            <table class="table table-hover">
                <thead>
                <tr>
                    <th style="width: 60px;">ID</th>
                    <th style="width: 200px;">站点名称</th>
                    <th style="width: 80px;">站点URL</th>
                    <th style="width: 80px;">nofollow</th>
                    <th style="width: 80px;">排序</th>
                    <th style="width: 200px;">操作</th>
                </tr>
                </thead>
                @foreach($link as $v)
                        <tr>
                            <td>{{ $v->id }}</td>
                            <td>{{ $v->webname }}</td>
                            <td>{{ $v->linkurl }}</td>
                            <td>{{ $v->nofollow == 'true' ? '是' : '否' }}</td>
                            <td>{{ $v->orderid }}</td>
                            <td>
                                <a href="javascript:void(0)" onclick= "deletes({{$v->id}})"> 删除</a>
                                <a href="{{ url('admin/site/'.$v->id.'/linkEdit') }}" class="edit"> 修改</a>
                            </td>
                        </tr>
                @endforeach
            </table>

        </div>

    </div>
</div>
<!-- Content End -->
<!-- footer -->
@include('admin.footer')
