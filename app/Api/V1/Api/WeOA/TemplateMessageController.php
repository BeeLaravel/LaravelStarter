<?php
namespace App\Api\V1\Api\WeOA;

use Illuminate\Http\Request;

class TemplateMessageController extends Controller { // 模板消息
    public function __construct() {
        $this->middleware('auth:api', ['except' => ['qrcode']]);
    }

    public function qrcode(Request $request) {
        $app = \EasyWeChat::miniProgram();

        $response = $app->app_code->getUnlimit('a=12345678');
    }

    public function backup(Request $request, $parent_id=0) {
        $app = \EasyWeChat::miniProgram();

        $app->template_message->list($offset, $count); // 模板库 列表(标题)
        $app->template_message->get($id); // 模板库 详情(关键词库)

        $app->template_message->getTemplates($offset, $count); // 个人模板库 列表
        $app->template_message->add($id, $keywordIdList); // 个人模板库 添加
        $app->template_message->delete($templateId); // 个人模板库 删除

        $app->template_message->send([ // 发送模板消息
            'touser' => 'user-openid',
            'template_id' => 'template-id',
            'page' => 'index',
            'form_id' => 'form-id',
            'data' => [
                'keyword1' => 'VALUE',
                'keyword2' => 'VALUE2',
            ],
        ]);
    }
}
