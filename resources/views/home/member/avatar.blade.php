@include('home.header')
<body>
<div class="container">
    <!-- top-->
    <section class="ich-header">
        <!--navbar-->
        @include('home.nav')
    </section>
    <!--content-->

    <section class="content">
        <div class="paging-dome">
            <div class=" ich-mes room-mes">
                <div class="room-mes-box">
                    <h2>个人中心</h2>
                </div>
            </div>
        </div>
        <div class="bgo-content ">
            @include('home.member.aside')
                    <!-- sidebar menu end-->

            <div class="col-xs-8  mt55 member-content">
                <p><span>资料完善度<i></i></span></p>
                <img src="{{$member->avatar}}" alt="暂未上传头像" style="width:100px;height:100px;"/>
                <form action="{{url('/member/updateAvatar')}}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group" style="border: 0">
                        <input type="file" name="avatar" style="position:static">
                    </div>
                    <button type="submit" class="mem-but">保存设置</button>
                </form>
            </div>

        </div>

        <div class="clearfix"></div>
        <div class="line"></div>
    </section>
    <!-- footer-->
@include('home.footer')