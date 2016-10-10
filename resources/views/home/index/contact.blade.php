@include('home.header')

<body>
<div class="container">
    <!-- top-->
    <section class="ich-header">
        <!--navbar-->
        @include('home.nav')
    </section>
    <!--map-->
    <div id="allmap" class="map"></div>
    <!--content-->
    <section class="content">
        <div class="paging-dome">
            <div class=" ich-mes room-mes">
                <div class="room-mes-box">
                    <h2>重庆仙女山华邦酒店  | 仙女山拙雅酒店</h2>
                </div>
            </div>
        </div>
        <div class="contact-demo">
            <div class="col-xs-4 wk-change">
                <a href="" class="current">联系我们</a>
                <a href="">工作机会</a>
            </div>
            <div class="work-demo col-xs-8 current">
                <div class="current">
                    {!! $article->content !!}
                </div>
            </div>
        </div>
        <div class="line"></div>
    </section>
    <!-- footer-->
@include('home.footer')
    <script src="/home/js/baiduMap.js"></script>