@include('admin.header')
@include('admin.nav')
<script type="text/javascript">
    function deletes(id,parent_id){
        if(parent_id == 0){
            if(confirm('删除此分类，将同时删除此分类下的所有子分类及文章！')){
                window.location.href= 'category/'+id+'/'+parent_id+'/delete';
            }
        }else if(parent_id > 0){
            if(confirm('删除此分类，将同时删除此分类下的所有文章！！')){
                window.location.href= 'category/'+id+'/'+parent_id+'/delete';
            }
        }

    }
</script>

        <!-- Content Start -->
<div class="container-fluid" id="content_box">
    <div class="row">

        <div class="col-xs-2" id="nav_left">
            <div id="side-wigVw4RU" class="list-group">
                <a class="list-group-item list-group-item-title">内容管理</a>
                <a href="/admin/category" class="list-group-item active"><i class="fa fa-list fa-fw"></i>分类管理</a>
                <a href="/admin/article/index" class="list-group-item"><i class="fa fa-list fa-fw"></i>文章管理</a>
            </div>
        </div>
        <div class="col-xs-10">
            <ol class="breadcrumb">
                <li>内容管理</li>
                <li class="active">分类管理</li>
            </ol>
            <a href="/admin/category/add" class="btn btn-primary" style="float: right"><i class="fa fa-plus fa-lg"></i>
                新增分类</a>

            <table class="table table-hover">
                <thead>
                <tr>
                    <th style="width: 60px;">ID</th>
                    <th style="width: 120px;">分类名称</th>
                    <th style="width: 200px;">父类名称</th>
                    <th style="width: 80px;">排序</th>
                    <th style="width: 200px;">操作</th>
                </tr>
                </thead>
                @foreach($category as $v)
                    @if($v->parent_id == 0)
                        <tr>
                            <td>{{ $v->id }}</td>
                            <td>{{ $v->name }}</td>
                            <td>{{ $v->parent_id }}</td>
                            <td>{{ $v->sort }}</td>
                            <td>
                                <a href="javascript:void(0)" onclick= "deletes({{$v->id}},{{$v->parent_id}})"> 删除</a>
                                <a href="{{ url('admin/category/'.$v->id.'/edit') }}" class="edit"> 修改</a>
                            </td>
                        </tr>
                        @foreach($v->childrenCategory as $list)
                            <tr>
                                <td>{{ $list->id }}</td>
                                <td>&nbsp;&nbsp;&nbsp;&nbsp;|--{{ $list->name }}</td>
                                <td>{{ $list->parent_id }}</td>
                                <td>{{ $list->sort }}</td>
                                <td>
                                    <a href="javascript:void(0)" onclick= "deletes({{$list->id}},{{$list->parent_id}})"> 删除</a>
                                    <a href="{{ url('admin/category/'.$list->id.'/edit') }}" class="edit"> 修改</a>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                @endforeach
            </table>

        </div>

    </div>
</div>
<!-- Content End -->
<!-- footer -->
@include('admin.footer')
