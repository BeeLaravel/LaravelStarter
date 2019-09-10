<?php
namespace App\Api\V1\Api\WeApp;

use Illuminate\Http\Request;

class QrcodeController extends Controller { // Qrcode
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
        //     'app_id' => 'wx3cf0f39249eb0exx',
        //     'secret' => 'f1c242f4f28f735d4687abb469072axx',
        //     // 'response_type' => 'array', // array(default)/collection/object/raw/自定义类名
        //     // 'log' => [
        //     //     'level' => 'debug',
        //     //     'file' => __DIR__.'/wechat.log',
        //     // ],
        // ];
        // $app = \EasyWeChat\Factory::miniProgram($config);

        $app = \EasyWeChat::miniProgram();

        $response = $app->app_code->get('path/to/page', [ // A 方案 有限 10W
            // 'width' => 600,
            // 'auto_color' => true,
            // 'line_color' => [
            //     'r' => 105,
            //     'g' => 166,
            //     'b' => 134,
            // ],
        ]);
        $response = $app->app_code->getUnlimit('scene-value', [ // B 方案 无限
            'page'  => 'path/to/page',
            // 'width' => 600,
            // 'auto_color' => true,
            // 'line_color' => [
            //     'r' => 105,
            //     'g' => 166,
            //     'b' => 134,
            // ],
        ]);
        $response = $app->app_code->getQrCode('/path/to/page'); // C 方案 小程序二维码 有限 10W

        if ( $response instanceof \EasyWeChat\Kernel\Http\StreamResponse ) {
            $filename = $response->save('/path/to/directory');
            $filename = $response->saveAs('/path/to/directory', 'appcode.png');
        }
    }
}
