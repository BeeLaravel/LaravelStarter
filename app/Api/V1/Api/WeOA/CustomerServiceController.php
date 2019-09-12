<?php
namespace App\Api\V1\Api\WeOA;

use Illuminate\Http\Request;

class CustomerServiceController extends Controller { // 
    public function __construct() {
        $this->middleware('auth:api', ['except' => ['qrcode']]);
    }

    public function qrcode(Request $request) {
        $app = \EasyWeChat::miniProgram();

        $response = $app->app_code->getUnlimit('a=12345678');

        
    }

    public function backup(Request $request, $parent_id=0) {
        $app = \EasyWeChat::miniProgram();

        $service = $app->customer_service;
    }
}
