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
                    <h2>新闻中心</h2>
                </div>
            </div>
        </div>
        <div class="room-content">
            <!-- //新闻模板-->
            <div class="news-module">
                <div class="news-content">
                   @foreach ($article as $v)
                    <a  href="/new/detail/{{ $v->id }}">
                        <div class="dome-list">
                            <div class="list-4"><img src="{{ $v->img }}"></div>
                            <div class="list-8">
                                <h3>{{ $v->title }}</h3>
                                <span>{{ $v->created_at }}</span>
                                <p>{{ $v->description }}</p>
                                <a class="new-but" href="/new/detail/{{ $v->id }}">查看详情</a>
                            </div>
                        </div>
                    </a>
                    @endforeach

                    <!-- 分页模块-->
                    <nav class="page-module">
                        {!! $article->links() !!}
                    </nav>
                </div>
            </div>
        </div>
        <div class="line"></div>
    </section>
    <!-- footer-->
@include('home.footer')
