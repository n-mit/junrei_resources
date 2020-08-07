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
//以下ログイン
//


//
//以下事業所
//


//
//以下助成金
//


//
//以下プリセット
//


//プリセット一覧
Route::get('/preset_list', 'PresetController@presetList');

//プリセット情報
Route::get('/preset_info/{id}', 'PresetController@presetInfo');

//プリセット登録
Route::get('/preset_regi', 'PresetController@presetRegi');

//プリセット登録確認
Route::post('/preset_regi_check', 'PresetController@presetRegiCheck');

//プリセット登録完了
Route::post('/preset_regi_done', 'PresetController@presetRegiDone');

//プリセット編集
Route::get('preset_edit/{id}', 'PresetController@presetEdit');

//プリセット編集確認
Route::post('/preset_edit_check/{id}', 'PresetController@presetEditCheck');

//プリセット編集完了
Route::patch('/preset_edit_done/{id}', 'PresetController@presetEditDone');//patch

//プリセット削除
Route::get('/preset_del/{id}', 'PresetController@presetDelete');

//プリセット削除完了
Route::delete('/preset_del_done/{id}', 'PresetController@presetDeleteDone');//delete



//
//以下ユーザー
//


//ユーザー一覧
Route::get('/user_list', 'UserController@userList');

//ユーザー情報
Route::get('/user_info/{id}', 'UserController@userInfo');

//ユーザー登録
Route::get('/user_regi', 'UserController@userRegi');

//ユーザー登録確認
Route::post('/user_regi_check', 'UserController@userRegiCheck');

//ユーザー登録完了
Route::post('/user_regi_done', 'UserController@userRegiDone');

//ユーザー編集
Route::get('user_edit/{id}', 'UserController@userEdit');

//ユーザー編集確認
Route::post('/user_edit_check/{id}', 'UserController@userEditCheck');

//ユーザー編集完了
Route::patch('/user_edit_done/{id}', 'UserController@userEditDone');//patch

//ユーザー削除
Route::get('/user_del/{id}', 'UserController@userDelete');

//ユーザー削除完了
Route::delete('/user_del_done/{id}', 'UserController@userDeleteDone');//delete
