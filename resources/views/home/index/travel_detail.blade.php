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
                    <h2>旅游中心</h2>
                </div>
            </div>
        </div>
        <div class="room-content">
            <!-- // 新闻消息模板-->
            <div class="news-module">
                <div class="news-top">
                    <h2>{{ $article->title }}</h2>
                    <i class="news-icon"><img src="/home/img/news-icon.png"></i>
                    <p>
                        <span>作者：管理员</span>
                        <span>发表时间：{{ $article->created_at }}</span>
                    </p>
                </div>
                <div class="news-content">
                    {!! $article->content !!}
                </div>
            </div>
        </div>
        <div class="line"></div>
    </section>
    <!-- footer-->
@include('home.footer')
