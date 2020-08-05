<?php

use Illuminate\Http\Request;
$api = app('Dingo\Api\Routing\Router');

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

$api->version('v1', function ($api) {

    $api->get('/me', function (){
        return [
            'status' => 200,
            'data' => [
                'name' => 'Muhammad Ardhana Wahyu Nugraha',
                'nicname' => 'Ardhanaa',
                'gender' => 'Male',
                'class' => 'Kekinian uhuy'
            ]
        ];
    });

    $api->post('/login', function (){
        return [
            'status' => 204,
            'data' => 'Success'
        ];
    });

    $api->post('/register', function (){
        return [
            'status' => 204,
            'data' => 'Success'
        ];
    });

    $api->delete('/logout', function (){
        return [
            'status' => 204,
            'data' => 'Success'
        ];
    });
});