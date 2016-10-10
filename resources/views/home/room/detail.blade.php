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
                    <h2>重庆仙女山华邦酒店</h2>
                    <p>
                        如家酒店集团创立于2002年，2006年10月在美国纳斯达克上市（股票代码：HMIN）。作为中国酒店业海外上市第一股，<br>
                        如家酒店集团以“成为全球酒店行业前三甲的酒店管理企业”为愿景，始终秉承“家”文化，用真挚的如家招牌式的微<br>
                        笑和贴心的服务使住 “家”者宾至如归。
                    </p>
                </div>
                <div class="room-mes-r" style="width:405px;">
							<span>
								感谢您选择重庆仙女山华邦酒店。
							</span>
                </div>
            </div>
        </div>
        <div class="room-content">
            <div class="paging-dome" style="margin-top: 20px;">
                <div class="room-mes">
                    <div class="">
                        <p style="font-size: 28px; color: #191311; border-bottom: 1px solid #8e8f8f; padding-bottom: 20px;">房型信息：{{ $room->title }}</p>
                        <p style="font-size: 28px; color: #191311;margin-top: 20px;position: relative;">
                            <span>房价合计：￥{{ $room->price }}</span>
                            <a href="{{ url('room/roomInfo/'.$room->id) }}">预订</a>
                        </p>
                    </div>

                </div>
            </div>
            <div class="paging-dome" style="margin-top: 20px;">
                <div class="room-mes">
                    <form method="post" action="/room/comment">
                        {{ csrf_field() }}
                        <input name="id" value="{{ $room->id }}" type="hidden" />
                        <label style="font-size: 24px; font-weight: 400;">网友评论：</label>
                        <div class="form-group">
                            <textarea name="content"></textarea>
                            <button class="cmt-but" name="submit">评论</button>
                        </div>
                    </form>
                    <p style=" border-bottom: 1px solid #8e8f8f;padding-bottom: 20px;">
                        <span style="font-size: 24px; font-weight: 400;">全部评论：</span>
                    </p>

                    @foreach($room_comment as $v)
                    <div class="cmt-demo mt10">
                        <i><img src="{{ $v->member->avatar }}" width="85" height="85"/></i>
                        <div class="cmt-mes">
                            <h3>{{ $v->member->name }}</h3>
                            <p>{{ $v->content }}</p>
                            {{--<a>更多<i class="fa fa-angle-down "></i></a>--}}
                        </div>
                    </div>
                    @endforeach
                </div>

            </div>
        </div>
        <div class="line"></div>
    </section>

    <!-- footer-->
    @include('home.footer')