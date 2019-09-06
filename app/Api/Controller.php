<?php
namespace App\Api;

use Dingo\Api\Routing\Helpers;

class Controller extends \App\Http\Controllers\Controller {
	use Helpers;

	public function __construct() {
        $this->middleware('auth:api');
    }
}
