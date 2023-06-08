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

/**
 * TOP Page
 */
Route::get('/', [App\Http\Controllers\TopController::class, 'index'])->name('top');




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


// *********** お問い合わせ ***********

/**
 *お問い合わせページを表示する
 */
Route::get(
    'contact',
    'App\Http\Controllers\ContactController@contact'
)->name('contact');

/**
 *お問い合わせ確認ページを表示する
 */
Route::post(
    'contact-check',
    'App\Http\Controllers\ContactController@contactCheck'
)->name('check');

/**
 *お問い合わせ送信完了ページを表示する
 */
Route::post(
    'contact-send',
    'App\Http\Controllers\ContactController@contactSend'
)->name('send');






/*--- 以下は管理画面に関するルーティン設定です--*/

/**
 * ニュースの一覧画面
 */
Route::get(
    'cms-news-list',
    'App\Http\Controllers\AdminNewsController@index'
)->name('cms-newslist');

/**
 * ニュースの新規登録画面
 */
Route::get(
    'cms-news-new',
    'App\Http\Controllers\AdminNewsController@newsInput'
)->name('cms-newsinput');

/**
 * ニュースの新規登処理
 */
Route::post(
    'cms-news-new',
    'App\Http\Controllers\AdminNewsController@newsCreate'
)->name('cms-newscreate');

/**
 * ニュースの編集画面
 */
Route::get(
    'cms-news-edit',
    'App\Http\Controllers\AdminNewsController@newsEdit'
)->name('cms-newsedit');

/**
 * ニュースの編集登録
 */
Route::post(
    'cms-news-edit',
    'App\Http\Controllers\AdminNewsController@newsUpdate'
)->name('cms-newsupdate');


/**
 * ニュースの削除処理
 */
Route::get(
    'cms-news-delete',
    'App\Http\Controllers\AdminNewsController@newsDelete'
)->name('cms-newsremove');

/**
 * 道駅特産品の一覧画面
 */
Route::get(
    'cms-product-types',
    'App\Http\Controllers\AdminGoodsController@index'
)->name('cms-producttypes');

/**
 * 道駅特産品の新規登録画面
 */
Route::get(
    'cms-producttypes-new',
    'App\Http\Controllers\AdminGoodsController@newsInput'
)->name('cms-producttypesinput');

/**
 * 道駅特産品の新規登処理
 */
Route::post(
    'cms-producttypes-new',
    'App\Http\Controllers\AdminGoodsController@newsCreate'
)->name('cms-producttypescreate');

/**
 * 道駅特産品の編集画面
 */
Route::get(
    'cms-producttypes-edit',
    'App\Http\Controllers\AdminGoodsController@newsEdit'
)->name('cms-producttypesedit');

/**
 * 道駅特産品の編集登録
 */
Route::post(
    'cms-producttypes-edit',
    'App\Http\Controllers\AdminGoodsController@newsUpdate'
)->name('cms-producttypesupdate');


/**
 * 道駅特産品の削除処理
 */
Route::get(
    'cms-producttypes-delete',
    'App\Http\Controllers\AdminGoodsController@newsDelete'
)->name('cms-producttypesremove');
