<?php
namespace App\Http\Controllers\Api;

class Controller extends \App\Http\Controllers\Controller {
	public function __construct() {
        $this->middleware('auth:api');
    }
}
