@include('admin.header')
@include('admin.nav')

        <!-- Content Start -->
<div class="container-fluid" id="content_box">
    <div class="row">

        <div class="col-xs-2" id="nav_left">
            <div id="side-wigVw4RU" class="list-group">
                <a class="list-group-item list-group-item-title">商品管理</a>
                <a href="/admin/goods/index" class="list-group-item active"><i class="fa fa-list fa-fw"></i>商品列表</a>
                <a href="/admin/goods_type/index" class="list-group-item"><i class="fa fa-list fa-fw"></i>商品类型</a>
            </div>
        </div>
        <div class="col-xs-10">
            <ol class="breadcrumb">
                <li>商品管理</li>
                <li class="active">商品列表</li>
            </ol>
            <a href="/admin/goods/add" class="btn btn-primary" style="float: right"><i class="fa fa-plus fa-lg"></i>
                添加商品</a>

            <table class="table table-hover">
                <thead>
                <tr>
                    <th style="width: 60px;">ID</th>
                    <th style="width: 120px;">商品名称</th>
                    <th style="width: 200px;">商品分类</th>
                    <th style="width: 80px;">库存</th>
                    <th style="width: 80px;">更新时间</th>
                    <th style="width: 80px;">点击</th>
                    <th style="width: 200px;">操作</th>
                </tr>
                </thead>
                <tbody>
                @forelse($goods as $v)
                    <tr>
                        <td>{{ $v->id }}</td>
                        <td>{{ $v->title }}</td>
                        <td>{{ $v->category->name }}</td>
                        <td>{{ $v->housenum }}</td>
                        <td>{{ $v->updated_at }}</td>
                        <td>{{ $v->click }}</td>
                        <td>
                            <a href="javascript:void(0)" onclick="deletes({{$v->id}})"> 删除</a>
                            <a href="{{ url('admin/goods/'.$v->id.'/edit') }}" class="edit"> 修改</a>
                        </td>
                    </tr>
                @empty
                    <p>没有类容</p>
                @endforelse
                </tbody>
            </table>
            <div class="text-center">
                {!! $goods->links() !!}
            </div>
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