<?php
namespace App\Api\V1\Tacit;

class Controller extends \App\Api\V1\Controller {
	public function __construct() {
        $this->middleware('auth:api');
    }
}
