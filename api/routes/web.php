<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('reset_password/{token}', ['as' => 'password.reset', function ($token) {
    // implement your reset password route here!
    return response()->json($token);
}]);

Route::get('activate/{token}', ['as' => 'user.activation', function ($token) {
    return response()->json($token);
}]);

Route::get('account_update/{token}', ['as' => 'user.account_update', function ($token) {
    return response()->json($token);
}]);

Route::get('/', function () {
    return view('welcome');
});
