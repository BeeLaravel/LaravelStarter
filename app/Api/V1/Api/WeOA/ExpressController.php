<?php
namespace App\Api\V1\Api\WeOA;

use Illuminate\Http\Request;

class ExpressController extends Controller { // 
    public function __construct() {
        $this->middleware('auth:api', ['except' => ['qrcode']]);
    }

    public function qrcode(Request $request) {
        $app = \EasyWeChat::miniProgram();

        $response = $app->app_code->getUnlimit('a=12345678');
    }

    public function backup(Request $request, $parent_id=0) {
        $app = \EasyWeChat::miniProgram();

        $app->express->listProviders(); // 快递公司 列表
            // {
            //   "count": 8,
            //   "data": [
            //     {
            //       "delivery_id": "BEST",
            //       "delivery_name": "百世快递"
            //     }
            //   ]
            // }

        $app->express->createWaybill($data); // 生成运单
            // 成功返回
            // {
            //   "order_id": "01234567890123456789",
            //   "waybill_id": "123456789",
            //   "waybill_data": [
            //     {
            //       "key": "SF_bagAddr",
            //       "value": "广州"
            //     },
            //     {
            //       "key": "SF_mark",
            //       "value": "101- 07-03 509"
            //     }
            //   ]
            // }
            // 失败返回
            // {
            //   "errcode": 9300501,
            //   "errmsg": "delivery logic fail",
            //   "delivery_resultcode": 10002,
            //   "delivery_resultmsg": "客户密码不正确"
            // }
        $app->express->deleteWaybill($data); // 取消运单

        $app->express->getWaybill($data); // 获取运单数据
        $app->express->getWaybillTrack($data); // 查询运单轨迹
        $app->express->getBalance($deliveryId, $bizId); // 获取电子面单余额 仅加盟类快递公司

        $app->express->bindPrinter($openid); // 绑定打印员 - 微信打单 PC 软件
        $app->express->unbindPrinter($openid); // 解绑打印员 - 微信打单 PC 软件
    }
}
