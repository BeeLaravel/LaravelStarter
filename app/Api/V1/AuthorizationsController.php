<?php
namespace App\Api\V1;

use App\Http\Requests\Api\WeappAuthorizationRequest;

use App\User;
use App\Models\Mini\User as MiniUser;

use Auth;

class AuthorizationsController extends Controller {
    public function __construct() {
        $this->middleware('auth:api', ['except' => ['weappLogin', 'weappStore']]);
    }

    public function weappStore(WeappAuthorizationRequest $request) {
        $code = $request->code; // weapp wx.login 获取的 code

        $miniProgram = \EasyWeChat::miniProgram();
        $data = $miniProgram->auth->session($code);
        // [
        //   "session_key" => "yJAlefMLfaIFFfCEAjEhnw=="
        //   "expires_in" => 7200
        //   "openid" => "oqnDv0Ih5gLH9uOnSDw6lOKiO-UE"
        // ]

        if ( isset($data['errcode']) ) {
            return $this->response->errorUnauthorized('code 不正确');
        }

        $user = User::where('weapp_openid', $data['openid'])->first();

        $attributes['weixin_session_key'] = $data['session_key'];

        if ( !$user ) {
            if ( !$request->username ) {
                return $this->response->errorForbidden('用户不存在');
            }

            $username = $request->username;

            filter_var($username, FILTER_VALIDATE_EMAIL) ?
                $credentials['email'] = $username :
                $credentials['phone'] = $username;

            $credentials['password'] = $request->password;

            if ( !Auth::guard('api')->once($credentials) ) {
                return $this->response->errorUnauthorized('用户名或密码错误');
            }

            $user = Auth::guard('api')->getUser();
            $attributes['weapp_openid'] = $data['openid'];
        }

        $user->update($attributes);

        $token = Auth::guard('api')->fromUser($user);

        return $this->respondWithToken($token)->setStatusCode(201);
    }
    public function weappLogin(WeappAuthorizationRequest $request) {
        $code = $request->code;

        $miniProgram = \EasyWeChat::miniProgram();
        $data = $miniProgram->auth->session($code);

        if ( isset($data['errcode']) ) {
            return $this->response->errorUnauthorized('code 不正确');
        }

        $user = MiniUser::where('openid', $data['openid'])->first();

        $attributes['session_key'] = $data['session_key'];

        if ( !$user ) {
            $user = MiniUser::create([
                'openid' => $data['openid'],
                'session_key' => $data['session_key'],
            ]);
        } else {
            $result = $user->update($attributes);
        }

        return $this->response->array([
            'openid' => $data['openid'],
            'session_key' => $data['session_key']
        ])->setStatusCode(201);
    }
}
