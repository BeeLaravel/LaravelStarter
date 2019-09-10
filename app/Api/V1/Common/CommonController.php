<?php
namespace App\Api\V1\Common;

class CommonController extends Controller { // Mini Program
    public function __construct() {
        $this->middleware('auth:api', ['except' => ['forms']]);
    }

    public function forms() {
        return [];
    }
}
