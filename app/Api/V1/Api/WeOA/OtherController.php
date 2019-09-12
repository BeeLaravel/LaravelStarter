<?php
namespace App\Api\V1\Api\WeOA;

use Illuminate\Http\Request;

class OtherController extends Controller { // 内容安全 消息解密 生物认证
    public function __construct() {
        $this->middleware('auth:api', ['except' => ['qrcode']]);
    }

    public function qrcode(Request $request) {
        $app = \EasyWeChat::miniProgram();

        $response = $app->app_code->getUnlimit('a=12345678');
    }

    public function backup(Request $request, $parent_id=0) {
        $app = \EasyWeChat::miniProgram();

        $content = '你好';
        $result = $app->content_security->checkText($content); // 不超过 500K 字节
        $img_url = '';
        $result = $app->content_security->checkImage($img_url); // PNG|JPG|JPEG|GIF 像素 < 750x1334 大小 < 300K
        // {
        //     "errcode": "0",
        //     "errmsg": "ok"
        // }
        // {
        //     "errcode": 87014,
        //     "errmsg": "risky content"
        // }

        $decryptedData = $app->encryptor->decryptData($session, $iv, $encryptedData); // 消息解密

        // $app->soter->verifySignature($openid, $json, $signature); // 生物认证秘钥签名验证 
        // string $json - 通过 wx.startSoterAuthentication 成功回调获得的 resultJSON 字段
        // string $signature - 通过 wx.startSoterAuthentication 成功回调获得的 resultJSONSignature 字段
    }
}
