<?php
namespace App\Http\Controllers\Api\V2;

class Controller extends \App\Http\Controllers\Api\Controller {
	public function __construct() {
        $this->middleware('auth:api');
    }
}
