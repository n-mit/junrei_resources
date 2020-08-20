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


/**
 * ログイン関連
 */

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

/**
 * ユーザー関連
 */


//ユーザー登録画面
Route::get('/user_regi', 'UserController@userRegi');

//ユーザー登録確認画面
Route::post('/user_regi_check', 'UserController@userRegiCheck');

//ユーザー登録完了画面
Route::post('/user_regi_done', 'UserController@userRegiDone');

//マイページ
Route::get('/user_mypage/{admin_id}', 'UserController@userMyPage');

//パスワード変更
Route::get('/pass_edit/{admin_id}', 'UserController@passEdit');

//パスワード変更確認画面
Route::post('/pass_edit_check/{admin_id}', 'UserController@passEditCheck');

//パスワード変更完了画面
Route::post('/pass_edit_done/{admin_id}', 'UserController@passEditDone');

//マイページ情報編集
Route::get('/user_edit/{admin_id}', 'UserController@userEdit');

//マイページ情報編集確認画面
Route::post('/user_edit_check/{admin_id}', 'UserController@userEditCheck');

//マイページ情報編集完了画面
Route::post('/user_edit_done/{admin_id}', 'UserController@userEditDone');

//全ユーザー情報削除
Route::get('/user_delete/{admin_id}', 'UserController@userDelete');

//全ユーザー情報削除確認画面
Route::get('/user_delete_check/{admin_id}', 'UserController@userDeleteCheck');

//全ユーザー情報削除完了
Route::post('/user_delete_done/{admin_id}', 'UserController@userDeleteDone');