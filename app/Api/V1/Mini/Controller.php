<?php
namespace App\Api\V1\Mini;

class Controller extends \App\Api\V1\Controller {
	public function __construct() {
        $this->middleware('auth:api');
    }
}
