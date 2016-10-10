//百度地图API功能
	function loadJScript() {
		var script = document.createElement("script");
		script.type = "text/javascript";
		script.src = "http://api.map.baidu.com/api?v=2.0&ak=A150082b020057487973cdd5c1101912&callback=init";
		document.body.appendChild(script);
	}
	function init() {
		var content = '<div style="margin:0;line-height:20px;padding:2px;">' +
	                     '<img src="../img/baidu.jpg" alt="" style="float:right;zoom:1;overflow:hidden;width:100px;height:100px;margin-left:3px;"/>' +
	                     '地址：北京市海淀区上地十街10号<br/>电话：(010)59928888<br/>简介：百度大厦位于北京市海淀区西二旗地铁站附近，为百度公司综合研发及办公总部。' +
	                     '</div>';
	    
		var map = new BMap.Map("allmap");            // 创建Map实例
		var point = new BMap.Point(107.756991,29.515273 ); // 创建点坐标		
		map.centerAndZoom(point,15);                 
		map.enableScrollWheelZoom();                 //启用滚轮放大缩小
		/*		 	//创建检索信息窗口对象
		    var searchInfoWindow = null;
			searchInfoWindow = new BMapLib.SearchInfoWindow(map, content, {
					title  : "百度大厦",      //标题
					width  : 290,             //宽度
					height : 105,              //高度
					panel  : "panel",         //检索结果面板
					enableAutoPan : true,     //自动平移
					searchTypes   :[
						BMAPLIB_TAB_SEARCH,   //周边检索
						BMAPLIB_TAB_TO_HERE,  //到这里去
						BMAPLIB_TAB_FROM_HERE //从这里出发
					]
				});
		    var marker = new BMap.Marker(poi); //创建marker对象
		    marker.enableDragging(); //marker可拖拽
		    marker.addEventListener("click", function(e){
			    searchInfoWindow.open(marker);
		    })
			map.addOverlay(marker); */
   	 	//在地图中添加marker
		var marker = new BMap.Marker(point); //创建marker对象
			marker.enableDragging(); //marker可拖拽
			marker.addEventListener("click", function(e){
				searchInfoWindow.open(marker);
			})
		map.addOverlay(marker); //在地图中添加marker	
		
		// 添加带有定位的导航控件
		var navigationControl = new BMap.NavigationControl({
			// 靠右下角位置
		    anchor: BMAP_ANCHOR_TOP_RIGHT,
		    // LARGE类型
		    type:BMAP_NAVIGATION_CONTROL_ZOOM,
			// 启用显示定位
			 enableGeolocation: true
		  });
		map.addControl(navigationControl);		  	
	    	
	}  
	
	window.onload = loadJScript;  //异步加载地图