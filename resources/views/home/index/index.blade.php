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
                    <div class="swiper-slide swiper-slide1" >
                        <img src="/home/img/zy-banner.png" />
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
        <!--date-control-->
        <div class="date-control">
            <form method="post" action="/room/searchRoom">
                <span>获享最优惠房价保证</span>
						<span class="input-group">
							<label>入住</label>
                            {{ csrf_field() }}
							<input class="laydate-icon" name="start_time" onclick="laydate({istime: true, format: 'YYYY-MM-DD'})">
						</span>
						<span class="input-group">
							<label>退房</label>
							<input class="laydate-icon" name="end_time" onclick="laydate({istime: true, format: 'YYYY-MM-DD'})">
						</span>
						<span>
							<input type="submit"  value="搜索"/>
						</span>
            </form>
            <!--旅行信息-->
            <div class="nv-message">
                <span style="font-size: 14px;">武隆</span>
						<span style="font-size: 24px;">
						{{ $weather->weatherinfo->temp1 }} - {{ $weather->weatherinfo->temp2 }}
						{{ $date }}
						</span>
            </div>
        </div>
        <!--change-->
        <div class="home-change">
            <a class="change" href="/?index=hb">仙女山华邦酒店</a>
            <a class="current" href="/?index=zy">仙女山拙雅酒店</a>
        </div>
    </section>
    <!--fast-track-->
    <section class="nav-track current">
        <a href="/room/index?index={{ isset($_GET['index']) && !empty($_GET['index']) ? $_GET['index'] : 'hb' }}">
            <div>
                <h2>客房中心</h2>
                <span>感受奢享房型尽在此<i class="fa fa-angle-right "></i></span>
            </div>
        </a>
        <a href="/eat/index?index={{ isset($_GET['index']) && !empty($_GET['index']) ? $_GET['index'] : 'hb' }}">
            <div>
                <h2>餐饮服务</h2>
                <span>精致美食体验享受<i class="fa fa-angle-right"></i></span>
            </div>
        </a>
        <a href="/entertainment/index?index={{ isset($_GET['index']) && !empty($_GET['index']) ? $_GET['index'] : 'hb' }}">
            <div>
                <h2>会议与宴会</h2>
                <span>休闲娱乐活动时光<i class="fa fa-angle-right
                "></i></span>
            </div>
        </a>
        <a href="/feiyi">
            <div>
                <h2>非遗文化</h2>
                <span>深度体验当地民俗风情<i class="fa fa-angle-right"></i></span>
            </div>
        </a>

    </section>

    <!--content-->
    <section class="content">
        <div class="ct-dome">
            <div class="ct-img">
                <img src="/home/img/zy-img01.png" class="ct-img-hover">
                <div class="ct-img-bg"></div>
                <div class="ct-text">
                    <img src="/home/img/text-01.png">
                    <span>心灵呼唤的私享地</span>
                </div>
            </div>
            <div class="ct-message current">
                <a href="/active/index">
                    <div>
                        <h2>促销活动</h2>
                        <span>经常优惠尽情感受<i class="fa fa-angle-right"></i></span>
                    </div>
                </a>
            </div>
        </div>
        <div class="ct-dome mt10">
            <img src="/home/img/zy-img02.png" class="ct-img-hover" >
            <div class="ct-img-bg"></div>
            <div class="lv-message current">
                <a href="/entertainment/index?index={{ isset($_GET['index']) && !empty($_GET['index']) ? $_GET['index'] : 'hb' }}" style="display: block">
                    <div class="lv-message-box">
                        <h2>休闲娱乐</h2>
                        <p>休闲娱乐活动时光。重庆华邦酒店旅业有限公司（以下简称“华邦旅业”）成立于2002年7月，属华邦生命健康股份有限公司全资子公司，是华邦健康旗下旅游业务板块的主要子公司，主营业务为旅游景区开发与运营…</p>
                        <a href="/entertainment/index?index={{ isset($_GET['index']) && !empty($_GET['index']) ? $_GET['index'] : 'hb' }}" class="current">查看详情</a>
                    </div>
                </a>


            </div>
        </div>
        <div class="ct-dome mt10">
            <img src="/home/img/zy-img03.png" class="ct-img-hover" >
            <div class="ct-img-bg"></div>
            <div class="lv-message p-r current" >
                <a href="/travel">
                    <div class="lv-message-box">
                        <h2>旅游攻略</h2>
                        <p>深度体验当地民俗风情，重庆庆华邦酒店旅业有限公司（以下简称“华邦旅业”）成立于2002年7月，属华邦生命健康股份有限公司全资子公司，是华邦健康旗下旅游业务板块的主要子公司，主营业务为旅游景区开发与运营…</p>
                        <a href="/travel" class="current">查看详情</a>
                    </div></a>

            </div>
        </div>
        <div class="line"></div>
    </section>
    <!-- footer-->
@include('home.footer')

