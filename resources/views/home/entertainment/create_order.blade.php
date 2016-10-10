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
                    <span style="color: #aa0017;">SPA</span>
                    <span style="color: #aa0017; padding-left: 24px;">¥260.00元/间</span>
                </p>
                <p><span>营业时间：</span>09:00-21:00</p>
                <div class="order-demo">
                    <form>
                        <div class="form-control">
				     				<span class="form-group">
										<label style="font-weight: 400; padding-right: 10px;">消费时间:</label>
										<input class="laydate-icon"onclick="laydate({istime: true, format: 'YYYY-MM-DD'})" style="width: 161px; padding-left: 28px;padding-right: 0;">
									</span>
                        </div>
                        <div class="form-control">
				     				<span class="form-group">
				     					<label>数量:</label>
					     				<select>
                                            <option>请选择</option>
                                            <option>1</option>
                                        </select>
				     				</span>
                        </div>
                        <div class="form-control">
				     				<span class="form-group">
				     					<label>姓名:</label>
				     					<input type="text" />
				     				</span>
				     				<span class="form-group">
				     					<label>联系电话:</label>
				     					<input type="text" />
				     				</span>
                        </div>
                        <div class="form-dol">
                            <span>实际支付： 0元</span>
                        </div>
                    </form>

                </div>
                <button class="mem-but">提交订单</button>
            </div>
        </div>

        <div class="clearfix"></div>
        <div class="line"></div>
    </section>
    <!-- footer-->
@include('home.footer')