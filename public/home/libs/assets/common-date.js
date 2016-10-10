/**
 * Created by zzl on 2016/9/19.
 */

$(function(){
    /*************    方法     **************/
    //判断是否是闰年,计算每个月的天数
    function leapYear(year){
        var isLeap = year%100==0 ? (year%400==0 ? 1 : 0) : (year%4==0 ? 1 : 0);
        return new Array(31,28+isLeap,31,30,31,30,31,31,30,31,30,31);
    }
    //获得某月第一天是周几
    function firstDay(day){
        return day.getDay();
    }

    //获得当天的相关日期变量
    function dateNoneParam(){
        var day = new Date();
        var today = new Array();
        today['year'] = day.getFullYear();
        today['month'] = day.getMonth();
        today['date'] = day.getDate();
        today['week'] = day.getDay();
        today['firstDay'] = firstDay(new Date(today['year'],today['month'],1));
        return today;
    }

    //获得所选日期的相关变量
    function dateWithParam(year,month){
        var day = new Date(year,month);
        var date = new Array();
        date['year'] = day.getFullYear();
        date['month'] = day.getMonth();
        date['firstDay'] = firstDay(new Date(date['year'],date['month'],1));
        return date;
    }

    //设置日期内容html
    var attend= new Array();
              attend[0]="<a class='data_normal'></a></td>",
              attend[1]="<a class='data_normal'></a>",
              attend[2]="<a class='data_normal'></a>",
              attend[3]="<a class='data_normal'></a>",
              attend[4]="<a class='data_normal'></a>",
              attend[5]="<a class='data_normal'></a>",
              attend[6]="<a class='data_normal'></a>",
              attend[7]="<a class='data_normal'></a>",
              attend[8]="<a class='data_normal'></a>";
    //生成日历代码 的方法
    //参数依次为 年 月
    function selectCode(codeYear,codeMonth){
        select_html = "<span id='year'><select name='year'>";
        //年 选择
        for(var i=1980;i<=codeYear+yearfloor;i++){
            if(i == codeYear){
                select_html += "<option value='"+i+"' selected='true'>"+i+"</option>";
            }else{
                select_html += "<option value='"+i+"'>"+i+"</option>";
            }
        }

        select_html += "</select>年</span>\n<span id='month'><select name='year'>";

        //月 选择
        for(var j=0;j<=11;j++){
            if(j == codeMonth){
                select_html += "<option value='"+j+"' selected='true'>"+month[j]+"</option>";
            }else{
                select_html += "<option value='"+j+"'>"+month[j]+"</option>";
            }
        }
        select_html += "</select>月</span>\n";
        return select_html;
    }
    //参数依次为 年 月 日 当月第一天(是星期几)
    function kalendarCode(codeYear,codeMonth,codeDay,codeFirst){
        kalendar_html="<table id='kalendar' class='table' cellpadding='0' cellspacing='0'><thead><tr id='week'><th>周日</th><th>周一</th><th>周二</th><th>周三</th><th>周四</th><th>周五</th><th>周六</th></tr></thead><tbody id='day'>";
        //日 列表
        var dqxy=1;
        for(var m=0;m<6;m++){//日期共 4-6 行
            kalendar_html += "<tr id='rili_data' class='dayList dayListHide"+m+"'>\n";
            for(var n=0;n<7;n++){//列
                if((7*m+n) < codeFirst && codeMonth>=1){//非一月前月日期
                    kalendar_html += "<td><p class='att_day_false'>"+((7*m+n-codeFirst)+monthDays[codeMonth-1]+1)+"</p></td>";
                }
                else if((7*m+n) < codeFirst && codeMonth==0){//一月前月日期
                    kalendar_html += "<td><p  class='att_day_false'>"+((7*m+n-codeFirst)+monthDays[11]+1)+"</p></td>";
                }
                else if((7*m+n) >= (codeFirst+monthDays[codeMonth])){//下月日期
                    kalendar_html += "<td><p  class='att_day_false'>"+(dqxy++)+"</p></td>";
                }
                else{//本月日期
                    //if((7*m+n+1-codeFirst)<codeDay){
                    kalendar_html += "<td><p  class='att_day_true'>"+(7*m+n+1-codeFirst)+"</p>"+attend[parseInt(Math.random()*(8+1))]+"</td>";
                    //}
                    //else if((7*m+n+1-codeFirst)==codeDay){
                    //kalendar_html += "<td><p  class='att_day_true'>"+(7*m+n+1-codeFirst)+"</p>"+attend[9]+"</td>";
                    //}
                    //else{
                    //	kalendar_html += "<td><p  class='att_day_true'>"+(7*m+n+1-codeFirst)+"</p></td>";
                    //	}
                }
            }
            kalendar_html += "</tr>\n";
        }
        kalendar_html += "</tbody></table>";
        return kalendar_html;
    }

    //年-月select框改变数值 的方法
    //参数依次为 1、操作对象(年下拉菜单 或 月下拉菜单) 2、被选中的下拉菜单值
    function y_mChange(obj,stopId){
        obj.val(stopId);
    }

    //修改日历列表 的方法
    //参数依次为 操作对象(每一天) 月份 修改后的第一天是星期几 修改后的总天数 当天的具体日期
    function dateChange(dateObj,dateMonth,dateFirstDay,dateTotalDays,dateCurrentDay){
        dateLine = 6;
        $("#rili_data td a").remove();
        if(dateTotalDays < dateCurrentDay){
            dateCurrentDay = dateTotalDays;
        }
        var xysj=1;
        for(var i=0;i<7*dateLine;i++){
            if(i < dateFirstDay && dateMonth>=1){//非一月上月日期
                dateObj.eq(i).text((i+1-dateFirstDay)+monthDays[dateMonth-1]);
                dateObj.eq(i).attr('class','att_day_false');
            }
            else if(i < dateFirstDay && dateMonth==0){//一月上月日期
                dateObj.eq(i).text((i+1-dateFirstDay)+monthDays[11]);
                dateObj.eq(i).attr('class','att_day_false');
            }
            else if(i>(dateTotalDays+dateFirstDay-1)){//下月日期
                dateObj.eq(i).text(xysj);
                dateObj.eq(i).attr('class','att_day_false');
                xysj++;
            }
            else{
                dateObj.eq(i).text(i+1-dateFirstDay);
                dateObj.eq(i).attr('class','att_day_true');
                dateObj.eq(i).after(attend[parseInt(Math.random()*(8+1))]);
        }
        }
    }

    /*************    缓存节点和变量     **************/
    var rili_location = $('#rili_wrap');//日历代码的位置
    var rili_select=$("#rili_se");
    var select_html = ''; //年月选择
    var kalendar_html = '';//记录日历自身代码 的变量
    var yearfloor = 0;//选择年份从1980到当前时间的后0年

    var someDay = dateNoneParam();//修改后的某一天,默认是当天
    var yearChange = someDay['year'];//改变后的年份，默认当年
    var monthChange = someDay['month'];//改变后的年份，默认当月

    /*************   将日历代码放入相应位置，初始时显示此处内容      **************/

    //获取时间，确定日历显示内容
    var today = dateNoneParam();//当天
    /*月-日 设置*/
    var month = new Array('1','2','3','4','5','6','7','8','9','10','11','12');
    var monthDays = leapYear(today['year']);//返回数组，记录每月有多少天
    var weekDay = new Array('日','一','二','三','四','五','六');
    kalendar_html = kalendarCode(today['year'],today['month'],today['date'],today['firstDay']);
    select_html = selectCode(today['year'],today['month']);
    rili_location.html(kalendar_html);
    rili_select.html(select_html);

    /*************   js写的日历代码中出现的节点     **************/
    var selectYear = $('#rili_se #year select');//选择年份列表
    var listYear = $('#rili_se #year select option');//所有可选年份
    var selectMonth = $('#rili_se #month  select');//选择月份列表
    var listMonth = $('#rili_se #month select option');//所有可选月份
    var dateLine = Math.ceil((monthDays[today['month']]+today['firstDay'])/7);
    //当前日历中有几行日期，默认是 当年当月
    var dateDay = $('#kalendar tr.dayList td p');//日历中的每一天


    /***************************/
    // 年 选择事件
    selectYear.bind('change',function(){
        //获得年份
        yearChange = $(this).val();
        //修改年份
        y_mChange(selectYear,yearChange);
        //重新获得 每月天数
        monthDays = leapYear(yearChange);
        //新 年-月 下的对象信息
        someDay = dateWithParam(yearChange,monthChange);
        //修改 日期 列表
        dateChange(dateDay,someDay['month'],someDay['firstDay'],monthDays[someDay['month']],today['date']);
    });

    // 月 选择事件
    selectMonth.bind('change',function(){
        //获得 月
        monthChange = $(this).val();
        //修改月份
        y_mChange(selectMonth,monthChange);
        //新 年-月 下的对象信息
        someDay = dateWithParam(yearChange,monthChange);
        //修改 日期 列表
        dateChange(dateDay,someDay['month'],someDay['firstDay'],monthDays[someDay['month']],today['date']);
    });
    laydate.skin('huanglv')
    var start = {
        elem: '#start_time',
        format: 'YYYY/MM/DD',
        min: laydate.now(), //设定最小日期为当前日期
        max: '2099-06-16 23:59:59', //最大日期
        istime: true,
        istoday: false,
        choose: function(datas){
            end.min = datas; //开始日选好后，重置结束日的最小日期
            end.start = datas //将结束日的初始值设定为开始日
        }
    };
    var end = {
        elem: '#end_time',
        format: 'YYYY/MM/DD',
        min: laydate.now(),
        max: '2099-06-16 23:59:59',
        istime: true,
        istoday: false,
        choose: function(datas){
            start.max = datas; //结束日选好后，重置开始日的最大日期
        }
    };
    laydate(start);
    laydate(end);

});
