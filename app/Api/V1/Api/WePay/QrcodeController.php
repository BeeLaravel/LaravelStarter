<?php
namespace App\Api\V1\Api\WePay;

use Illuminate\Http\Request;

class QrcodeController extends Controller { // Qrcode 二维码
    public function __construct() {
        $this->middleware('auth:api', ['except' => ['qrcode']]);
    }

    public function qrcode(Request $request) {
        $app = \EasyWeChat::miniProgram();

        $response = $app->app_code->getUnlimit('a=12345678');

        if ( $response instanceof \EasyWeChat\Kernel\Http\StreamResponse ) {
            $filename = $response->save(storage_path('app/public/qrcode/weapp'));
            return url('storage/qrcode/weapp/'.$filename);
        } else {
            return $response;
        }
    }

    public function backup(Request $request, $parent_id=0) {
        // $config = [
        //     'app_id' => 'xxxx',
        //     'mch_id' => 'your-mch-id',
        //     'key' => 'key-for-signature',   // API 密钥
        //     'cert_path' => 'path/to/your/cert.pem', // XXX: 绝对路径！！！！
        //     'key_path' => 'path/to/your/key', // XXX: 绝对路径！！！！
        //     'notify_url' => '默认的订单回调地址',
        // ];
        // $app = \EasyWeChat\Factory::payment($config);
        // $app = app('wechat.payment');

        $result = $app->order->unify([
            'body' => '腾讯充值中心-QQ会员充值',
            'out_trade_no' => '20150806125346',
            'total_fee' => 88,
            'spbill_create_ip' => '123.12.12.123', // 可选，如不传该参数，SDK 将会自动获取相应 IP 地址
            'notify_url' => 'https://pay.weixin.qq.com/wxpay/pay.action', // 支付结果通知网址，如果不设置则会使用配置里的默认地址
            'trade_type' => 'JSAPI',
            'openid' => 'oUpF8uMuAJO_M2pxb1Q9zNjWeS6o',
        ]);

        if ( $result['return_code'] == 'SUCCESS' && $result['result_code'] == 'SUCCESS' ) {
            $result = $app->jssdk->appConfig($result['prepay_id']); // 第二次签名

            return [
                'code' => 'success',
                'msg' => $result
            ];
        } else {
         　　Log::error('微信支付签名失败:'.var_export($result, 1));
            return false;
        }
    }
    // Route::any('payments/wechat-notify', 'WeChatController@paySuccess');
    public function paySuccess() {
        $app = app('wechat.payment');
        $response = $app->handlePaidNotify(function ($message, $fail) {
            // return true;
            // $fail('Order not exists.');
        });

        return $response;
    }
}
