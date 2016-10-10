<?php
/**工具类
 * Created by PhpStorm.
 * User: miaoyu
 * Date: 2016/7/11
 * Time: 11:32
 */
namespace App\Tool;

class Util{
    /**
     * 生成订单号
     */
    public static function getOrderNum(){
        return date('Ymd').substr(implode(NULL, array_map('ord', str_split(substr(uniqid(), 7, 13), 1))), 0, 8);
    }

    public static function weather(){
//        $url = 'https://api.heweather.com/x3/weather?cityid=CN101043100&key=6ab52759390f47499610c10c1d8d618e';
    	$url = 'http://www.weather.com.cn/data/cityinfo/101043100.html';
        return file_get_contents($url);
    }
}

