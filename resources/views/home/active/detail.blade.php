@include('home.header')
<div class="container">
    <!-- top-->
    <section class="header-box">
        <!--navbar-->
        @include('home.nav')
        <!--banner-->
        <div class="banner">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide swiper-slide1">
                        <img src="/home/img/img-05.png" />
                    </div>
                    <div class="swiper-slide swiper-slide2">
                        <img src="/home/img/img-05.png" />
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
                    <h2>促销活动</h2>
                    <p>
                        重庆仙女山华邦酒店、拙雅酒店每周提供不同的精彩优惠活动。
                    </p>
                </div>
                <div class="room-mes-r">
							<span>
							我们为您提供精选优惠。
							<br>
							<br>
							T. 023-8666666</span>
                </div>
            </div>
        </div>
        <div class="pt-dome">
            <h3>{{ $active->name }}</h3>
            <a>
                <div class="ct-dome">
                    <img src="{{ $active->img }}" width="86%" style="margin:0 auto; display: block;">
                    <div class="active-demo">
                        <p>{!! $active->content !!}</p>
                        <a href="/active/order/{{ $active->id }}" class="active-but">预订</a>
                    </div>
                </div>
            </a>

        </div>
        <div class="line"></div>
    </section>
@include('home.footer')
