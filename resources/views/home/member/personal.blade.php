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
            <div class="col-xs-8 mt55 member-content ">
                <p><span>资料完善度<i></i></span></p>
                <form action="{{url('/member/updatePersonal')}}" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label>手机</label>
                        <input type="text" name="mobile" value="{{ $member->mobile }}" readonly=""/>
                        <a>修改</a>
                    </div>
                    <div class="form-group">
                        <label>邮箱</label>
                        <input type="text" name="email" value="{{ $member->email }}" readonly=""/>
                        <a>修改</a>
                    </div>
                    <div class="form-group">
                        <label>昵称</label>
                        <input type="text" name="username" value="{{ $member->username }}" readonly=""/>
                        <a>修改</a>
                    </div>
                    <div class="form-group">
                        <label>姓名</label>
                        <input type="text" name="name" value="{{ $member->name ? $member->name : '未设置' }}" readonly=""/>
                        <a>修改</a>
                    </div>
                    <div class="form-group">
                        <label>性别</label>
                        <input type="text" name="sex" value="{{ $member->sex }}" readonly=""/>
                        <a>修改</a>
                    </div>
                    <div class="form-group">
                        <label>生日</label>
                        <input type="text" name="birth" value="{{ $member->birth }}" readonly=""/>
                        <a>修改</a>
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