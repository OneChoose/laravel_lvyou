<?php
ini_set('date.timezone','Asia/Shanghai');
error_reporting(E_ERROR);

require_once "../lib/WxPay.Api.php";
require_once '../lib/WxPay.Notify.php';
require_once 'log.php';

//初始化日志
$logHandler= new CLogFileHandler("../logs/".date('Y-m-d').'.log');
$log = Log::Init($logHandler, 15);

class PayNotifyCallBack extends WxPayNotify
{
	//查询订单
	public function Queryorder($transaction_id)
	{
		$input = new WxPayOrderQuery();
		$input->SetTransaction_id($transaction_id);
		$result = WxPayApi::orderQuery($input);
		Log::DEBUG("query:" . json_encode($result));
		if(array_key_exists("return_code", $result)
			&& array_key_exists("result_code", $result)
			&& $result["return_code"] == "SUCCESS"
			&& $result["result_code"] == "SUCCESS")
		{
			return true;
		}
		return false;
	}
	
	//重写回调处理函数
	public function NotifyProcess($data, &$msg)
	{
		Log::DEBUG("call back:" . json_encode($data));
		$notfiyOutput = array();
		
		if(!array_key_exists("transaction_id", $data)){
			$msg = "输入参数不正确";
			return false;
		}
		//查询订单，判断订单真实性
		if(!$this->Queryorder($data["transaction_id"])){
			$msg = "订单查询失败";
			return false;
		}
		return true;
	}
	public function notify()
	{
//		$xml = $GLOBALS['HTTP_RAW_POST_DATA']; //返回的xml
		$xml = file_get_contents("php://input");

		file_put_contents('xml.txt', $xml); //记录日志 支付成功后查看xml.txt文件是否有内容 如果有xml格式文件说明回调成功
//file_get_contents(dirname(__FILE__).'/xml.txt');
		$xmlObj = simplexml_load_string($xml, 'SimpleXMLElement', LIBXML_NOCDATA);
		$xmlArr = json_decode(json_encode($xmlObj), true);
		$out_trade_no = $xmlArr['out_trade_no']; //订单号
		$total_fee = $xmlArr['total_fee'] / 100; //回调回来的xml文件中金额是以分为单位的
		$result_code = $xmlArr['result_code']; //状态
		if ($result_code == 'SUCCESS') { //数据库操作
//处理数据库操作 例如修改订单状态 给账户充值等等
			echo 'SUCCESS'; //返回成功给微信端 一定要带上不然微信会一直回调8次
			exit;
		} else { //失败
			return;
			exit;
		}
	}
}

Log::DEBUG("begin notify");
$notify = new PayNotifyCallBack();
$notify->Handle(false);
$notify->notify();
