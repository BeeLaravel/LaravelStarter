<?php
namespace App\Api\V1\Api\WeOA;

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
        //     'app_id' => 'wx3cf0f39249eb0exx',
        //     'secret' => 'f1c242f4f28f735d4687abb469072axx',
        //     'response_type' => 'array', // array(default)/collection/object/raw/自定义类名
        // ];
        // $app = \EasyWeChat\Factory::officialAccount($config);

        $app = \EasyWeChat::miniProgram();

        $app->server->push(function ($message) {
            return "您好!";
        });

        $response = $app->server->serve();
        return $response;
    }
}
