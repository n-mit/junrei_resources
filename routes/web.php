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

// Topページ
Route::get('/top', 'TopController@getTop');

// 作品検索
Route::get('/works', 'WorksController@getWorks');

// Topページ検索欄
Route::post('/search', 'WorksController@postSearch');
Route::get('/result', 'WorksController@result');
Route::get('/work_page', 'WorksController@getWorkPage');

// 投稿フォーム
Route::get('/work_form', 'PostsController@getWorkForm');

// 投稿フォーム内容確認
Route::post('/work_form_check', 'PostsController@postWorkCheck');

// 投稿フォーム完了
Route::post('/work_form_done', 'PostsController@postWorkDone');


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

//画像削除テスト
Route::get('/test_delete', 'TestController@testDelete');

//画像削除テスト確認画面
Route::get('/test_delete_check/{id}', 'TestController@testDeleteCheck');

//画像削除テスト完了
Route::delete('/test_delete_done/{id}', 'TestController@testDeleteDone');

//投稿編集テスト
Route::get('/test_edit/{id}', 'TestController@testEdit');

//投稿編集テスト確認
Route::post('/test_edit_check/{id}', 'TestController@testEditCheck');

//投稿編集テスト完了
Route::post('/test_edit_done/{id}', 'TestController@testEditDone');

//都道府県プルダウン
Route::get('/test_postal', 'TestController@testPostal');

//検索
Route::get('/test_search', 'TestController@testSearch');
