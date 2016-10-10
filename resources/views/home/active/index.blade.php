@include('home.header')
<body>
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
            <h3>精选优惠</h3>
            @foreach($active as $k=>$v)
                @if($k == 0)
            <a href="/active/detail/{{ $v->id }}">
                <div class="ct-dome">
                    <img src="{{ $v->img }}" style="width: 1470px;height: 428px;">
                    <div class="lv-message">
                        <div class="lv-message-box">
                            <h2>{{ $v->name }}</h2>
                            <p>{{ $v->description }}</p>
                            <p style="font-size: 28px;">Catering for you 。</p>
                        </div>

                    </div>
                </div>
            </a>
                @elseif($k == 1)
            <a href="/active/detail/{{ $v->id }}">
                <div class="ct-dome mt5">
                    <img src="{{ $v->img }}" style="width: 1470px;height: 428px;">
                    <div class="lv-message p-r" >
                        <div class="lv-message-box">
                            <h2>{{ $v->name }}</h2>
                            <p>{{ $v->description }}</p>
                            <p style="font-size: 28px;">Comforting for you 。</p>
                        </div>
                    </div>
                </div>
            </a>
                @elseif($k == 2)
            <a href="/active/detail/{{ $v->id }}">
                <div class="ct-dome  mt5">
                    <img src="{{ $v->img }}" style="width: 1470px;height: 428px;">
                    <div class="lv-message">
                        <div class="lv-message-box">
                            <h2>{{ $v->name }}</h2>
                            <p>{{ $v->description }}</p>
                            <p style="font-size: 28px;">Traveling for you</p>
                        </div>
                    </div>
                </div>
            </a>
                @else
                    没有类容
                @endif
            @endforeach
        </div>
        <div class="line">
        </div>
    </section>
    <!-- footer-->
@include('home.footer')
