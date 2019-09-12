<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * Indicates whether the XSRF-TOKEN cookie should be set on the response.
     *
     * @var bool
     */
    protected $addHttpCookie = true;

    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        // 'wechat',
    ];
    // Route::any('/wechat', 'WeChatController@serve');
}
    // public function serve() {
    //     Log::info('request arrived.'); # 注意：Log 为 Laravel 组件，所以它记的日志去 Laravel 日志看，而不是 EasyWeChat 日志

    //     $app = app('wechat.official_account');
    //     $app->server->push(function($message){
    //         return "欢迎关注 overtrue！";
    //     });

    //     return $app->server->serve();
    // }
