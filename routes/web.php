<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/welcome', function () {
    return view('welcome');
});

/**
 * TOP Page
 */
Route::get('/', function () {
    return view('fronts/index');
})->name('top');

// Route::get('/', [App\Http\Controllers\MainController::class, 'index'])->name('top');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/**
 * 管理画面TOPへのルート情報
 */
Route::get('/admin', [App\Http\Controllers\AdminController::class, 'adminTop'])->name('admintop');

/**
 * 管理画面ログアウト
 * 福島
 */
Route::get(
    'admin/logout',
    [App\Http\Controllers\AdminController::class, 'logout']
)->name('logout');






// ---------------------- frontPage -----------------------

/**
 *道の駅詳細ページを表示する
 */
Route::get(
    'station-detail',
    'App\Http\Controllers\RoadstationController@index'
)->name('roadstation');


/**
 *特産品特集一覧を表示する
 */
Route::get(
    'specialty-goods',
    'App\Http\Controllers\BoardController@index'
)->name('goods');

/**
 *体験特集一覧を表示する
 */
Route::get(
    'activities',
    'App\Http\Controllers\ActivityController@index'
)->name('activity');
