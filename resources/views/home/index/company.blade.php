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
        {!! $article->content !!}
        <div class="line"></div>
    </section>

    <!-- footer-->
@include('home.footer')