<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
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

// home welcome
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

// customer
Route::get('/customer', [CustomerController::class, 'show']);
Route::get('/ajax-test', [CustomerController::class, 'showData']);