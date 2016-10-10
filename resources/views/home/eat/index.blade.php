@include('home.header')
<body>
<div class="container">
    <!-- top-->
    <section class="header-box room-header">
        <!--navbar-->
        @include('home.nav')
        <!--banner-->
        <div class="banner">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide swiper-slide1">
                        <img src="/home/img/room-img.png" />
                    </div>
                </div>
            </div>
            <a class="home-prev" id="home-prev"></a>
            <a class="home-next" id="home-next"></a>
            <script src="/home/libs/assets/mySwiper.js"></script>
        </div>

    </section>


    <!--content-->

    <section class="content">
        <div class="paging-dome">
            <div class="room-mes">
                <div class="room-mes-box">
                    <h2>餐饮服务</h2>
                    <p>
                        重庆仙女山华邦酒店、拙雅酒店将为您提供全球的精致美食，从亚洲食肆到欧洲甜品众多的美食供君选择。
                    </p>
                </div>
                <div class="room-mes-r" style="width:405px;">
							<span>
								重庆华邦酒店集团为您的下一次企业或个人活动提供选择。<br><br>
								T. 023-8666666
							</span>
                </div>
            </div>
        </div>
        <div class="room-content">
            <div class="room-dome">
                <p style="margin-top: 10px; margin-bottom: 0;"><span style="font-size: 18px;">华邦</span>&nbsp;|&nbsp;<span style="font-size: 14px;">非遗</span></p>
                <div class="list-box room-list">
                    <ul>
                        @foreach($food as $v)
                            <li style=" margin-right: 15px;">
                                <div>
                                    <img style="width: 100% ;height: 225px" src="{{ $v->img }}">
                                    <div class="repast-list-ms room-list-ms">
                                        <h3>{{ $v->name }}</h3>
                                        <p><span>价格：</span>    <span>{{ $v->price }}</span></p>
                                        <p><span>供应时间：</span>    <span>{{ $v->supply_time }}</span></p>
                                        <p><span>描述：</span>    <span>{!! $v->content !!}</span></p>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <div class="line"></div>
    </section>

    <!-- footer-->
@include('home.footer')
