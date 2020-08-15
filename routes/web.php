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


//
//ログイン関連
//

//ログイン
Route::get("/login", "LoginController@loginini");

Route::post("/login", "LoginController@login");

Route::get('/access_denied', function () {
    return view('access_denied');
});

//ログアウト
Route::get("/logout", "LoginController@logout");

//ログインテスト用(のちに消去)
Route::get('/login_ok', "LoginController@loginOK");

//
//ユーザー関連
//


//ユーザー登録画面
Route::get('user_regi', 'UserController@userRegi');

//ユーザー登録確認画面
Route::post('user_regi_check', 'UserController@userRegiCheck');

//ユーザー登録完了画面
Route::post('user_regi_done', 'UserController@userRegiDone');

//マイページ
Route::get('user_mypage/{id}', 'UserController@userMyPage');
