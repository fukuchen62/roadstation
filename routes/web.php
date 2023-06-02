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

// Route::get('/welcome', function () {
//     return view('welcome');
// });


// /**
//  * TOP Page
//  */
// Route::get('/', function () {
//     return view('fronts/index');
// })->name('top');



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


// ************* TOPページ *************

Route::get(
    '/',
    'App\Http\Controllers\TopController@indexView'
)->name('top');



// *********** 道の駅テーブル ***********

/**
 *道の駅一覧ページを表示する
 */
Route::get(
    'station-list',
    'App\Http\Controllers\RoadstationController@stationListView'
)->name('stationlist');

/**
 *道の駅エリア検索ページを表示する
 */
Route::get(
    'area-search',
    'App\Http\Controllers\RoadstationController@stationAreaSearch'
)->name('areasearch');

/**
 *道の駅詳細検索ページを表示する
 */
Route::get(
    'detail-search',
    'App\Http\Controllers\RoadstationController@stationDetailSearch'
)->name('ditailsearch');

/**
 *道の駅詳細ページを表示する
 */
Route::get(
    'station-detail',
    // こっちをアドレスに入れるんだよ。
    'App\Http\Controllers\RoadstationController@stationMainView'
)->name('roadstation');




// *********** 特産品系テーブル ***********

/**
 *特産品特集一覧を表示する
 */
Route::get(
    'specialty-goods',
    'App\Http\Controllers\GoodsController@goodsMainView'
)->name('goods');





// *********** 体験テーブル ***********

/**
 *体験特集一覧を表示する
 */
Route::get(
    'activities',
    'App\Http\Controllers\ActivityController@activityMainView'
)->name('activity');




// *********** ブログテーブル ***********

/**
 *ブログ一覧を表示する
 */
Route::get(
    'blog',
    'App\Http\Controllers\BlogController@blogListSearch'
)->name('bloglist');

/**
 *ブログ詳細ページを表示する
 */
Route::get(
    'blog-detail',
    'App\Http\Controllers\BlogController@blogMainView'
)->name('blog');




// *********** 新着情報テーブル ***********


/**
 *新着情報一覧を表示する
 */
Route::get(
    'news',
    'App\Http\Controllers\NewsController@newsListView'
)->name('news');

/**
 *新着情報詳細を表示する
 */
Route::get(
    'news-detail',
    'App\Http\Controllers\NewsController@newsMainView'
)->name('newsdetail');
