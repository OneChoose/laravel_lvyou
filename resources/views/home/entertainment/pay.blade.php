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
                    <h2>确认你的住宿订单</h2>
                </div>
            </div>
        </div>
        <div class="bgo-content ">
            <div class="col-xs-8 mt55 order-content ">
                <p style="font-size: 24px; padding-top: 20px;">
                    <span style="color: #191311;">活动：{{ $entertainment->title  }}</span>
                    <span style="color: #aa0017; float: right;">¥{{ $entertainment->price }}元</span>
                </p>
                <p>
                    订单详情<br>
                    <br>
                    商品名称：  {{ $entertainment->title  }}<br>
                    <br>
                    交易金额： {{ $entertainment->price }}元<br>
                    <br>
                    订单号：   {{ $order }}<br>
                </p>
                <div class="order-demo" style="padding: 20px;">
                    <form method="post" action="{{ url('entertainment/pay') }}">
                        {{ csrf_field() }}
                        <input type="hidden" class="form-control" name="order" value="{{ $order  }}" data-rule="required;">
				     			<span class="input-group">
				     				<input type="radio" checked="checked" name="pay_type" value="3" style="width: 15px; left: 20px; top: 5px;" />
				     				<span style="padding-left: 30px; font-size: 24px;">支付宝</span>
				     			</span>
				     			<span class="input-group">
				     				<input type="radio" name="pay_type" value="4" style="width: 15px; left: 20px;top: 5px;" />
				     				<span style="padding-left: 30px; font-size: 24px;">微信</span>
				     			</span>
                        <button class="mem-but" name="submit">继续</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="clearfix"></div>
        <div class="line"></div>
    </section>
    <!-- footer-->
@include('home.footer')