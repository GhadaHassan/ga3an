<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
$api = app('Dingo\Api\Routing\Router');
$api->version('v1', function ($api) {
    $api->post('login', 'App\Http\Controllers\Auth\LoginController@login');
    $api->post('logout', 'App\Http\Controllers\Auth\LoginController@logout');
    $api->post('refresh', 'App\Http\Controllers\Auth\LoginController@refresh');
    $api->post('me', 'App\Http\Controllers\Auth\LoginController@me');
    $api->post('register', 'App\Http\Controllers\Auth\RegisterController@register');
    $api->post('category', 'App\Http\Controllers\CategoryController@index');
    
});