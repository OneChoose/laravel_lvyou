@include('home.header')
        <!-- Content Start -->
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
                    <h2>重庆仙女山华邦酒店</h2>
                    <p>
                        如家酒店集团创立于2002年，2006年10月在美国纳斯达克上市（股票代码：HMIN）。作为中国酒店业海外上市第一股，<br>
                        如家酒店集团以“成为全球酒店行业前三甲的酒店管理企业”为愿景，始终秉承“家”文化，用真挚的如家招牌式的微<br>
                        笑和贴心的服务使住 “家”者宾至如归。
                    </p>
                </div>
                <div class="room-mes-r">
                    <span>感谢您选择重庆仙女山华邦酒店。</span>
                </div>
            </div>
        </div>
        <div class="room-content">
            <div class="room-dome">
                <h3>房间详情</h3>
                <div class="list-box room-list">
                    <ul>
                        @forelse($room as $v)
                        <li>
                            <div>
                                <a href="/room/detail/{{ $v->id }}"><img src="{{ $v->picurl }}" style="width: 100% ;height: 225px"></a>
                                <div class="room-list-ms">
                                    <h3>{{ $v->title }}</h3>
                                    <em>剩余数量{{ $v->surplus_amount }}间</em>
                                    <p><span>人数</span>    <span>{{ $v->person }} 人</span></p>
                                    <p><span>特色</span>    <span>{{ $v->description }}</span></p>
                                    <p><span>特色</span>    <span>{{ $v->facility }}</span></p>
                                    <p class="room-price">
												<span>
													￥{{ $v->price }}
												</span>
                                        <a href="{{ url('room/roomInfo/'.$v->id) }}">房间预订</a>
                                    </p>
                                </div>
                            </div>
                        </li>
                        @empty
                            <p>暂无数据</p>
                        @endforelse
                    </ul>
                </div>
            </div>
        </div>
        <div class="line"></div>
    </section>
    <!-- footer-->
    @include('home.footer')




