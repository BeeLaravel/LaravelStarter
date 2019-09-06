## Install

### laravel-admin
php artisan vendor:publish --provider="Encore\Admin\AdminServiceProvider" # 发布资源
php artisan admin:install # 安装

#### 后台插件
php artisan vendor:publish --tag=api-tester # 发布资源 api-tester

php artisan admin:import helpers # 导入资源 - 菜单
php artisan admin:import api-tester
php artisan admin:import config
php artisan admin:import file-manager
php artisan admin:import media-manager


### jwt-auth
composer require tymon/jwt-auth 1.*@rc -vvv # 安装
php artisan vendor:publish --provider="Tymon\JWTAuth\Providers\LaravelServiceProvider" # 发布资源-配置
php artisan jwt:secret # 生成密钥

\App\Models\User.php
	use Tymon\JWTAuth\Contracts\JWTSubject;

	implements JWTSubject

	public function getJWTIdentifier() {
        return $this->getKey();
    }
    public function getJWTCustomClaims() {
        return [];
    }
config/app.php
	'aliases' => [
        'JWTAuth' => 'Tymon\JWTAuth\Facades\JWTAuth',
        'JWTFactory' => 'Tymon\JWTAuth\Facades\JWTFactory',
	],
config/auth.php
	api.driver token => jwt
routes/api.php
	Route::group([
	    'prefix' => 'auth'
	], function ($router) {
	    Route::post('login', 'AuthController@login');
	    Route::post('logout', 'AuthController@logout');
	    Route::post('refresh', 'AuthController@refresh');
	    Route::post('me', 'AuthController@me');
	});
app/Http/Controllers/Api/Controller.php
	namespace App\Http\Controllers\Api;

	class Controller extends \App\Http\Controllers\Controller {
		public function __construct() {
	        $this->middleware('auth:api');
	    }
	}
app/Http/Controllers/Api/AuthController.php
	namespace App\Http\Controllers\Api;

	class AuthController extends Controller {
	    public function __construct() {
	        $this->middleware('auth:api', ['except' => ['login']]); // jwt.auth refresh
	    }
	    public function login() {
	        $credentials = request(['email', 'password']);

	        if (! $token = auth('api')->attempt($credentials)) {
	            return response()->json(['error' => 'Unauthorized'], 401);
	        }

	        return $this->respondWithToken($token);
	    }
	    public function me() {
	        return response()->json(auth('api')->user());
	    }
	    public function logout() {
	        auth('api')->logout();

	        return response()->json(['message' => 'Successfully logged out']);
	    }
	    public function refresh() {
	        return $this->respondWithToken(auth('api')->refresh());
	    }
	    protected function respondWithToken($token) {
	        return response()->json([
	            'access_token' => $token,
	            'token_type' => 'bearer',
	            'expires_in' => auth('api')->factory()->getTTL() * 60
	        ]);
	    }
	}
使用
	url ?token={{token}}
	header Authorization:Bearer {{token}}

#### 中间件
auth
auth:api
jwt.auth
jwt.refresh
jwt.check
jwt.renew

#### 资源
https://learnku.com/articles/17883
https://juejin.im/post/5a0812a16fb9a0451704ad96 lumen
https://learnku.com/articles/10889/detailed-implementation-of-jwt-extensions
https://learnku.com/articles/10885/full-use-of-jwt#b363e1

### dingo-api
composer require dingo/api -vvv # 安装
php artisan vendor:publish --provider="Dingo\Api\Provider\LaravelServiceProvider" # 发布配置

Dingo\Api\Facade\API
Dingo\Api\Facade\Route

.env
	### API
	API_STANDARDS_TREE = vnd
	API_SUBTYPE = BeeSoft
	API_PREFIX = api
	# API_DOMAIN = api.beesoft.ink
	API_VERSION = v1
	API_NAME=BeeSoft
	API_CONDITIONAL_REQUEST = false
	API_STRICT = false
	API_DEFAULT_FORMAT = json
	API_DEBUG = true
