<?php

use App\Http\Controllers\HomeController;
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

Route::get('/', function () {
    return view('welcome');
});



Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['role:manager']], function () {
    Route::get('/manager', function () {
        return view('pages/manager');
    });
});
Route::group(['middleware' => ['role:developer']], function () {
    Route::get('/developer', function () {
        return view('pages.developer');
    });
});
Route::group(['middleware' => ['role:tester']], function () {
    Route::get('/tester', function () {
        return view('pages.tester');
    });
});




