<?php
namespace App\Api\V2;

class Controller extends \App\Api\Controller {
	public function __construct() {
        $this->middleware('auth:api');
    }
}
