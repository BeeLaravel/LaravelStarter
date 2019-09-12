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

        $app->data_cube->summaryTrend('20170313', '20170313'); // 概况趋势
        $app->data_cube->visitDistribution(string $from, string $to); // 访问分布
        $app->data_cube->visitPage(string $from, string $to); // 访问页面
        $app->data_cube->userPortrait(string $from, string $to); // 用户画像分布数据

        $app->data_cube->dailyVisitTrend(string $from, string $to); // 访问日趋势
        $app->data_cube->weeklyVisitTrend(string $from, string $to); // 访问周趋势
        $app->data_cube->monthlyVisitTrend(string $from, string $to); // 访问月趋势

        $app->data_cube->dailyRetainInfo(string $from, string $to); // 访问日留存
        $app->data_cube->weeklyRetainInfo(string $from, string $to); // 访问周留存
        $app->data_cube->monthlyRetainInfo(string $from, string $to); // 访问月留存
    }
}
