<?php

use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix' => config('admin.route.prefix'),
    'namespace' => config('admin.route.namespace'),
    'middleware' => config('admin.route.middleware'),
], function (Router $router) {
    $router->get('/', 'HomeController@index')->name('admin.home');

    // ### common
    $router->resource('/common/frases', 'Common\FraseController');
    // ### mini
    $router->resource('/mini/programs', 'Mini\ProgramController');

    // ### tacit
    $router->resource('/tacit/questions', 'Tacit\QuestionController');
    $router->resource('/tacit/tests', 'Tacit\TestController');
});
