<div class="navbox" xmlns="http://www.w3.org/1999/html">
    <div class="logo">
        <span class="logo-tow current">
            <img src="/home/img/logo-0{{ isset($_GET['index']) && $_GET['index']== 'zy' ? 2 : 1 }}.png"/></span>
    </div>
    <div class="nav-list">
        <ul>
            <li><a href="/">首页</a></li>
            <li><a href="/company">公司简介</a></li>
            <li><a href="/new">新闻中心</a></li>
            <li><a href="/work">工作机会</a></li>
            <li><a href="/contact">联系我们</a></li>
        </ul>
    </div>

    @if(Session::get('phone'))
        <div class="login-mes">
            <span class="">欢迎 {{ Session::get('phone') }}</span>
            <a class="" href="/member/personal" title="个人中心">个人中心</a>
            <a class="" href="/login/delete" title="退出">退出</a>
        </div>
    @else
        <a class="login" dhref="/login" title="登录">登录</a>
    @endif
</div>