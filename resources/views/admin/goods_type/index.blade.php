@include('admin.header')
@include('admin.nav')

        <!-- Content Start -->
<div class="container-fluid" id="content_box">
    <div class="row">

        <div class="col-xs-2" id="nav_left">
            <div id="side-wigVw4RU" class="list-group">
                <a class="list-group-item list-group-item-title">商品管理</a>
                <a href="/admin/goods/index" class="list-group-item"><i class="fa fa-list fa-fw"></i>商品列表</a>
                <a href="/admin/goods_type/index" class="list-group-item active"><i class="fa fa-list fa-fw"></i>商品类型</a>
            </div>
        </div>
        <div class="col-xs-10">
            <ol class="breadcrumb">
                <li>商品管理</li>
                <li class="active">商品列表</li>
            </ol>
            <a href="/admin/goods_type/add" class="btn btn-primary" style="float: right"><i class="fa fa-plus fa-lg"></i>
                添加商品分类</a>

            <table class="table table-hover">
                <thead>
                <tr>
                    <th style="width: 60px;">ID</th>
                    <th style="width: 120px;">商品分类名称</th>
                    <th style="width: 200px;">缩略图片</th>
                    <th style="width: 200px;">隐藏类别</th>
                    <th style="width: 80px;">排序</th>
                    <th style="width: 200px;">操作</th>
                </tr>
                </thead>
                <tbody>
                @foreach($goods_type as $v)
                    @if($v->parent_id == 0)
                        <tr>
                            <td>{{ $v->id }}</td>
                            <td>{{ $v->name }}</td>
                            <td>{{ $v->picurl }}</td>
                            <td>{{ $v->checkinfo }}</td>
                            <td>{{ $v->sort }}</td>
                            <td>
                                <a href="javascript:void(0)" onclick="deletes({{$v->id}})"> 删除</a>
                                <a href="{{ url('admin/goods_type/'.$v->id.'/edit') }}" class="edit"> 修改</a>
                            </td>
                        </tr>
                        @foreach($v->childrenGoodsType as $list)
                            <tr>
                                <td>{{ $list->id }}</td>
                                <td>&nbsp;&nbsp;&nbsp;&nbsp;|--{{ $list->name }}</td>
                                <td>{{ $list->picurl }}</td>
                                <td>{{ $list->checkinfo }}</td>
                                <td>{{ $list->sort }}</td>
                                <td>
                                    <a href="javascript:void(0)" onclick="deletes({{$list->id}})"> 删除</a>
                                    <a href="{{ url('admin/goods_type/'.$list->id.'/edit') }}" class="edit"> 修改</a>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                @endforeach
                </tbody>
            </table>

        </div>

    </div>
</div>
<!-- Content End -->
<!-- footer -->
@include('admin.footer')
<script type="text/javascript">
    function deletes(id){
        if(confirm('确定删除！')){
            window.location.href= id+'/delete';
        }
    }
</script>