<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerContoller;
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

Route::get('/', function () {
    return view('index');
});
Route::get('/test1', function () {
    return view('test-case-1');
});
Route::get('/test2', function () {
    return view('test-case-2');
});
Route::get('/test3', function () {
    return view('test-case-3');
});

// customer routes
Route::get('/customer', [CustomerContoller::class, 'index']);
Route::get('/get-data', [CustomerContoller::class, 'show']);
Route::get('/ajax-test', [CustomerContoller::class, 'showData']);