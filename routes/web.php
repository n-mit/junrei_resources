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

Route::get('/', function () {
    return view('welcome');
});

//
//テストフォーム
//

//テストフォーム
Route::get('/test_form', 'TestController@testForm');

//テストフォーム確認
Route::post('/test_form_check', 'TestController@testFormCheck');

//テストフォーム完了
Route::post('/test_form_done', 'TestController@testFormDone');

//テスト一覧
Route::get('/test_post' ,'TestController@testPost');

//テスト情報
Route::get('/test_post_info', 'TestController@testPostInfo');
