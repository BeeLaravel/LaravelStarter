<?php
namespace App\Http\Controllers\Api\V1;

class AuthController extends Controller {
    public function __construct() {
        $this->middleware('auth:api', ['except' => ['login']]); // jwt.auth refresh
    }
    /**
     * Pagination Questions
     * 分页展示题目
     *
     * @Get("/")
     * @Versions({"v1"})
     * @Request("email=email&password=password", contentType="application/x-www-form-urlencoded")
     * @Response(200, body={"access_token": "access_token", "token_type": "bearer", "expires_in": 3600})
     */
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
