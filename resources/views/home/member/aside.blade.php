<aside class="col-xs-4">
    <div id="sidebar"  class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">

            <li class="sub-menu">
                <a href="javascript:;" >
                    <i class="fa fa-caret-right"></i>
                    <span>我的信息</span>
                </a>
                <ul class="sub">
                    <li><a  href="{{url('/member/personal')}}">个人信息设置</a></li>
                    <li><a  href="{{url('/member/avatar')}}">头像</a></li>
                </ul>
            </li>

            <li class="sub-menu">
                <a href="javascript:;" >
                    <i class="fa fa-caret-right"></i>
                    <span>我的订单</span>
                </a>
                <ul class="sub">
                    <li><a  href="{{url('/member/roomOrder')}}">客房订单</a></li>
                    <li><a  href="{{url('/member/entertainmentOrder')}}">娱乐订单</a></li>
                    <li><a  href="{{url('/member/activeOrder')}}">活动订单</a></li>
                </ul>
            </li>
        </ul>
    </div>
</aside>