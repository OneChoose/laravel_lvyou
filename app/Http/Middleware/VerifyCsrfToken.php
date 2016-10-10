<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as BaseVerifier;

class VerifyCsrfToken extends BaseVerifier
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
//        'testCsrf'
            '/admin/upload_img/ajax',
            '/room/roomMoney',
            '/weixin/notify',
        '/alipay/webReturn',
        '/alipay/webNotify',
        '/admin/room/calendar_date',
        '/admin/room/calendar_month'
    ];
}
