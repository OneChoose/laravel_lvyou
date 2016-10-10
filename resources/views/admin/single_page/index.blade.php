@include('admin.header')
@include('admin.nav')
<script type="text/javascript">
    function deletes(id){
        if(confirm('确定删除！')){
            window.location.href= id+'/delete';
        }
    }
</script>

        <!-- Content Start -->
<div class="container-fluid" id="content_box">
    <div class="row">

        <div class="col-xs-2" id="nav_left">
            <div id="side-wigVw4RU" class="list-group">
                <a class="list-group-item list-group-item-title">内容管理</a>
                <a href="/admin/category" class="list-group-item"><i class="fa fa-list fa-fw"></i>分类管理</a>
                <a href="/admin/article/index" class="list-group-item"><i class="fa fa-list fa-fw"></i>文章管理</a>
                <a href="/admin/single_page/index" class="list-group-item active"><i class="fa fa-list fa-fw"></i>单页管理</a>
            </div>
        </div>
        <div class="col-xs-10">
            <ol class="breadcrumb">
                <li>内容管理</li>
                <li class="active">单页管理</li>
            </ol>
            <a href="/admin/single_page/add" class="btn btn-primary" style="float: right"><i class="fa fa-plus fa-lg"></i>
                新增单页</a>

            <table class="table table-hover">
                <thead>
                <tr>
                    <th style="width: 60px;">ID</th>
                    <th style="width: 120px;">文章名称</th>
                    <th style="width: 80px;">审核</th>
                    <th style="width: 200px;">排序</th>
                    <th style="width: 200px;">操作</th>
                </tr>
                </thead>
                @forelse($article as $v)
                    <tr>
                        <td>{{ $v->id }}</td>
                        <td>{{ $v->title }}</td>
                        <td>{{ $v->checked==1 ? '审核': '未审核' }}</td>
                        <td>{{ $v->sort }}</td>
                        <td>
                            <a href="javascript:void(0)" onclick= "deletes({{$v->id}})"> 删除</a>
                            <a href="{{ url('admin/single_page/'.$v->id.'/edit') }}" class="edit"> 修改</a>
                        </td>
                    </tr>
                @empty
                    <p>没有类容</p>
                @endforelse
            </table>
            <div class="text-center">
                {!! $article->links() !!}
            </div>
        </div>

    </div>
</div>
<!-- Content End -->
<!-- footer -->
@include('admin.footer')
