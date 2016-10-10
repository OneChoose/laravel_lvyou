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
                    <h2>确认你的活动订单</h2>
                </div>
            </div>
        </div>
        <div class="bgo-content ">
            <div class="col-xs-8 mt55 order-content ">
                <p style="font-size: 24px; padding-top: 20px;">您已选择：
                    <span style="color: #aa0017;">{{ $entertainment->title }}</span>
                    <span style="color: #aa0017; padding-left: 24px;">¥{{ $entertainment->price }}元/间</span>
                </p>
                <p>{{ $entertainment->introduction }}</p>
                <div class="order-demo">
                    <form method="post" action="/entertainment/createOrder">
                        {{ csrf_field() }}
                        <input type="hidden" name="id" value="{{ $entertainment->id }}" />
                        <div class="form-control">
				     				<span class="form-group">
										<label style="font-weight: 400; padding-right: 10px;">消费时间:</label>
										<input class="laydate-icon" name="get_time" onclick="laydate({istime: true, format: 'YYYY-MM-DD'})" style="width: 161px; padding-left: 28px;padding-right: 0;">
									</span>
                        </div>
                        <div class="form-control">
				     				<span class="form-group">
				     					<label>数量:</label>
					     				<select name="number">
                                            <option value="0">请选择</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                        </select>
				     				</span>
                        </div>
                        <div class="form-control">
				     				<span class="form-group">
				     					<label>姓名:</label>
				     					<input type="text" name="name" />
				     				</span>
				     				<span class="form-group">
				     					<label>联系电话:</label>
				     					<input type="text" name="phone" />
				     				</span>
                        </div>
                        <div class="form-dol">
                            <span>实际支付： 0元</span>
                        </div>
                        <button class="mem-but">提交订单</button>
                    </form>

                </div>
            </div>
        </div>

        <div class="clearfix"></div>
        <div class="line"></div>
    </section>
    <!-- footer-->
@include('home.footer')