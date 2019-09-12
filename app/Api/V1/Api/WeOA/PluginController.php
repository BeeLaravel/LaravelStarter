<?php
namespace App\Api\V1\Api\WeOA;

use Illuminate\Http\Request;

class PluginController extends Controller { // 插件
    public function __construct() {
        $this->middleware('auth:api', ['except' => ['qrcode']]);
    }

    public function qrcode(Request $request) {
        $app = \EasyWeChat::miniProgram();

        $response = $app->app_code->getUnlimit('a=12345678');
    }

    public function backup(Request $request, $parent_id=0) {
        $app = \EasyWeChat::miniProgram();

        $app->plugin->list(); // 激活插件 列表
        $app->plugin->apply($pluginAppId); // 激活插件 添加
        $app->plugin->unbind($pluginAppId); // 激活插件 删除

        $app->plugin\_dev->getUsers($page, $size); // 插件使用方 列表
        $app->plugin_dev->agree($appId); // 插件使用方 添加
        $app->plugin_dev->refuse('理由'); // 拒绝插件使用申请
        $app->plugin_dev->delete(); // 删除已拒绝的申请者
    }
}
