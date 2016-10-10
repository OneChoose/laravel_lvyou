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
                    <h2>
                        休闲娱乐
                    </h2>
                    <p>
                        重庆仙女山华邦酒店、拙雅酒店是公司和社交活动的首选之地，我们提供多功能的活动场地，配有世界一流的设施，<br>
                        以及丽晶著名的周到服务。
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
                <h3>项目</h3>
                <div class="list-box room-list">
                    <ul>
                        @foreach($entertainment as $v)
                        <li>
                            <div>
                                <img src="{{ $v->picurl }}" style="width: 100% ;height: 225px">
                                <div class="pt-list-ms repast-list-ms room-list-ms">
                                    <h3>{{ $v->title }}</h3>
                                    <p style="padding-bottom: 13px;">{{ $v->introduction }}</p>
                                    <p class="room-price">
                                        <a href="/entertainment/order/{{ $v->id }}">项目预订</a>
                                    </p>
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
