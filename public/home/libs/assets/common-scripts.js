/*---LEFT BAR ACCORDION----*/
$(function(){
	var $tab = $('.sub-menu');
	$tab.click(function() {
		$(this).find('.sub').show();
		$(this).siblings().find('.sub').hide();
	});
	//登录加载器
	function login(){
		var obj = $(this),
			 url = obj.attr('dhref'),
			 title = obj.attr('title');
		layer.open({
			type: 2,
			title: title,
			shadeClose: true,
			shade: 0.8,
			area: ['480px', '320px'],
			content: url //iframe的url
		});
	}
	$('.login').on('click', login);
	//logo 切换
	var $HomeBut = $('.home-change'),
		$Logo = $('logo'),
		$Footer = $('.footer');

	if($HomeBut.find('a').eq(0).hasClass('current')){
		$Footer.addClass('home-footer');
	}
	if($HomeBut.find('a').eq(1).hasClass('current')){
		$Footer.addClass('current');
	}
	//会员系统
	var $member = $('.member-content'),
		 $but = $member.find('a');
	$but.click(function(){
		$(this).parent().find('input').css({background:'white',border:'1px solid #dedede','padding-left':'5px'});
		$(this).parent().find('input').removeAttr('readonly');
	});

	//鼠标滑过阴影
	var $Cbg = $('.ct-img-bg');
	$Cbg.hide();
	$Cbg.parent().mouseout(function(){
		$(this).find($Cbg).hide();
	});
	$Cbg.parent().mousemove(function(){
		$(this).find($Cbg).show();
	});

	//	日历系统控制
		var $date_sz = $('#date_sz'),
			$RiLi_demo = $('.rili_form'),
			$date_but = $('#date_but'),
			$discount =$('#discount'),
			$start_time = $('.start_time'),
			$end_time = $('.end_time'),
			$rili_data =$('.dayList ');

		$RiLi_demo.hide();
		$date_sz.on('click',function(e){
			e.preventDefault;
			e.stopPropagation();
			$RiLi_demo.toggle();
			$date_but.removeClass('date_but');
			$RiLi_demo.find('#date_serves').show();
			//...
			$date_but.find('input')[0].onclick = function(){
				e.preventDefault;
				e.stopPropagation();
				console.log($start_time.val());
				console.log($end_time.val());
				var $key =$discount.find('input').val();
				if ($key==0){
					return false
				}
				else {
					$RiLi_demo.hide();
					$this.find('.data_normal').html($key+'%');
				}
			};

		});
		$rili_data.on('click','td',function(e) {
			e.preventDefault;
			e.stopPropagation();
			$RiLi_demo.find('#date_serves').hide();
			$date_but.addClass('date_but');
			$RiLi_demo.toggle();
			var $this = $(this);
			// ...
			$date_but.find('input')[0].onclick = function(){
				e.preventDefault;
				e.stopPropagation();
				var $key =$discount.find('input').val();
				if ($key==0){
					return false
				}
				else {
					$RiLi_demo.hide();
					$this.find('.data_normal').html($key+'%');
				}
			};
			/*$.ajax({
				type: 'POST',
				dataType: 'json',
				url: '/admin/room/calendar_month',
				data: {clickNum: clickNum},
				success: function (data) {
					console.log(data)
				}

			});*/
		})
});
