@include('home.header')
<script src="/jquery/jquery-2.1.4.min.js"></script>
<script type="text/javascript">
    $(function(){
        $('.common_amount').blur(function(){
            var room_amount = $('.room_amount').val();
            var bed_amount = $('.bed_amount').val();
            var get_time = $('.get_time').val();
            var out_time = $('.out_time').val();
            var id = $('.room_amount').attr('did');
            $.post(
                    '/room/roomMoney',
                    {room_amount: room_amount,room_id: id,bed_amount: bed_amount,get_time:get_time,out_time:out_time},
                    function(data){
                        if(data.status == 10000) {
                            $('.total_money').val(data.total_money);
                        } else {
                            alert(data.message);
                        }
                    },
                    'json'
            );
        });
    });
</script>
<!-- Content Start -->
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
                <p style="font-size: 24px; padding-top: 20px;">请选择：

                <div class="order-demo">
                    <form method="post" action="{{ url('room/orderRoom') }}">

                        {{ csrf_field() }}
                        <div class="form-control">
                            <span class="form-group">
                                 <select name="room_id">
                                     @foreach($room as $v)
                                         <option value="{{ $v->id }}">{{ $v->title }}-{{ $v->price }}</option>
                                     @endforeach
                                 </select>
                            </span>
                        </div>
                        <div class="form-group order-date">
				     				<span class="input-group">
										<label>入住</label>
										<input class="laydate-icon get_time" value="{{ $start_time }}" placeholder="{{ $errors->first('get_time')  }}" name="get_time" onclick="laydate({istime: true, format: 'YYYY-MM-DD'})">
									</span>
									<span class="input-group">
										<label>退房</label>
										<input class="laydate-icon out_time" name="out_time" value="{{ $end_time }}" placeholder="{{ $errors->first('out_time')  }}" onclick="laydate({istime: true, format: 'YYYY-MM-DD'})">
									</span>
                        </div>
                        <div class="form-control">
				     				<span class="form-group">
				     					<label>客房数</label>
					     				<select name="room_amount">
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
				     				<span class="form-group">
				     					<label>成人数</label>
					     				<select name="man_amount">
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
				     				<span class="form-group">
				     					<label>儿童数</label>
					     				<select name="children_amount">
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
				     				<span class="form-group">
				     					<label>加床数</label>
					     				<select name="bed_amount">
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
				     				<span class="form-group">
				     					<label>最晚到达:</label>
				     					<input class="laydate-icon" name="to_time" style="width: 161px; padding-left: 28px;padding-right: 0;" placeholder="{{ $errors->first('to_time')  }}" onclick="laydate({istime: true, format: 'YYYY-MM-DD'})">
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
                                    <span class="form-group">
				     					<label>支付方式</label>
					     				<select name="pay_type" id="pay_type">
                                            <option value="1">到店支付</option>
                                            <option value="2">线上支付</option>
                                        </select>
				     				</span>
                        </div>
                        <div class="form-dol">
                            <span>实际支付： 0元</span>
                        </div>
                        <button type="submit" class="mem-but" style="bottom: -40px; position: absolute;">提交订单</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="clearfix"></div>
        <div class="line"></div>
    </section>
    <!-- footer-->
@include('home.footer')
