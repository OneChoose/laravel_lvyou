@include('home.header')
<body>
<div class="container">
    <!-- top-->
    <section class="ich-header">
        <!--navbar-->
        @include('home.nav')

    </section>
    <!--content-->

    <section class="content">
        <div class="paging-dome">
            <div class=" ich-mes room-mes">
                <div class="room-mes-box">
                    <h2>非遗文化</h2>
                </div>
            </div>
        </div>
        <div class="room-content">
            <!-- // 新闻消息模板-->
            <div class="news-module">
                {!! $article->content !!}
            </div>
        </div>
        <div class="line"></div>
    </section>
    <!-- footer-->
@include('home.footer')
