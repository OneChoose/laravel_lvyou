<?php

return [

	// The default gateway to use
	'default' => 'paypal',

	// Add in each gateway here
	'gateways' => [
		'paypal' => [
			'driver'  => 'PayPal_Express',
			'options' => [
				'solutionType'   => '',
				'landingPage'    => '',
				'headerImageUrl' => ''
			]
		]
	],
	'alipay' => [
		'driver' => 'Alipay_Express',
		'options' => [
			'partner' => '2088121076274831',
			'key' => 'oze2awgqem408h9k06b04wgaw5iou28h',
			'sellerEmail' =>'3054647844@qq.com',
			'returnUrl' => 'http://lhotel.cc/alipay/return',
			'notifyUrl' => 'your notifyUrl here'
		]
	]

];