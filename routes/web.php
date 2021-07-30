<?php

use Illuminate\Support\Facades\Route;

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

Route::get('sproject', function () {
    return view('welcome');
});
//Route::get('sproject/adduser', 'PostController@index');
//Route::post('store-form', [PostController::class, 'store']);
Route::get('sproject/adduser', [\App\Http\Controllers\PostController::class, 'index']);
Route::get('sproject/users', [\App\Http\Controllers\PostController::class, 'display']);
Route::post('sproject/userform', [\App\Http\Controllers\PostController::class, 'store']);

Route::get('/sproject', function () {
    return view('welcome');
});