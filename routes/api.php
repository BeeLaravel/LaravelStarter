<?php
$api = app('Dingo\Api\Routing\Router');

$api->version('v1', [
	'middleware' => 'api',
], function ($api) {
	$api->group([
	    'prefix' => 'common'
	], function ($api) {
		$api->post('forms', "\App\Api\V1\Common\CommonController@forms");
		$api->post('events', "\App\Api\V1\Common\CommonController@events");
	});

	$api->group([
	    'prefix' => 'auth'
	], function ($api) {
	    $api->post('login', '\App\Api\V1\AuthController@login');
	    $api->post('logout', '\App\Api\V1\AuthController@logout');
	    $api->post('refresh', '\App\Api\V1\AuthController@refresh');
	    $api->post('me', "\App\Api\V1\AuthController@me");

	    $api->post('weapp/login', '\App\Api\V1\AuthorizationsController@weappLogin')
	        ->name('api.weapp.login');

	    $api->post('weapp/authorizations', '\App\Api\V1\AuthorizationsController@weappStore')
	        ->name('api.weapp.authorizations.store');
	});

	$api->group([
	    'prefix' => 'weapp'
	], function ($api) {
		$api->post('qrcode', "\App\Api\V1\Api\WeApp\QrcodeController@qrcode");
	});

	$api->group([
	    'prefix' => 'mini'
	], function ($api) {
	    $api->resource('programs', '\App\Api\V1\Mini\ProgramController');
	});

	$api->group([
	    'prefix' => 'tacit'
	], function ($api) {
	    $api->resource('questions', '\App\Api\V1\Tacit\QuestionController');
	    $api->resource('tests', '\App\Api\V1\Tacit\TestController');
	});
});
$api->version('v2', [
	'middleware' => 'api',
], function ($api) {
	$api->group([
	    'prefix' => 'auth'
	], function ($api) {
	    $api->post('login', '\App\Api\V2\AuthController@login');
	    $api->post('logout', '\App\Api\V2\AuthController@logout');
	    $api->post('refresh', '\App\Api\V2\AuthController@refresh');
	    $api->post('me', "\App\Api\V2\AuthController@me");
	});

	$api->group([
	    'prefix' => 'tacit'
	], function ($api) {
	    $api->resource('questions', '\App\Api\V2\Tacit\QuestionController');
	});
});
