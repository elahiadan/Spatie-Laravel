<?php

use App\Http\Controllers\CoderController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Spatie\Activitylog\Models\Activity;

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
Route::get('/log', function () {
    return Activity::latest()->get();
});

Route::get('/coder', [CoderController::class, 'index'])->name('coder');
Route::get('/add-coder', [CoderController::class, 'show'])->name('add.coder');
Route::post('/store-coder', [CoderController::class, 'store'])->name('submit');
Route::get('/edit-coder/{id}', [CoderController::class, 'edit'])->name('edit.coder');
Route::post('/update-coder', [CoderController::class, 'update'])->name('update');
Route::get('/delete-coder/{id}', [CoderController::class, 'destroy'])->name('delete.coder');

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







