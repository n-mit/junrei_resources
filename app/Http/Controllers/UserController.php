<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use app\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //ユーザー登録
    function userRegi() {
        return View('user_regi');
    }

    //ユーザー登録確認
    function userRegiCheck(Request $request) {
        $inputs = $request->all();
        return view('user_regi_check', $inputs);
    }

    //ユーザー登録完了
    function userRegiDone(Request $request) {
        $data1 = $request->all();

        $data = array(
        'name' => $request->name,
        'mail_address' => $request->mail_address,
        'password' => Hash::make($request->password)
        );

        \App\Models\User::insert($data);
        return view('user_regi_done');
    }

    //ユーザー一覧
    function userList() {
        $user = DB::select('SELECT * FROM user');
        $data = ['user' => $user];
        return view('user_list', $data);
    }

    //ユーザー情報
    function userInfo($id) {
        $data = \App\Models\User::find($id);
        return view('user_info', ['data' => $data]);
    }

    //ユーザー編集
    function userEdit($id) {
        $data = \App\Models\User::find($id);
        return view('user_edit', ['data' => $data]);
    }

    //ユーザー編集確認
    function userEditCheck($id, Request $request) {
        $data = \App\Models\User::find($id);
        $inputs = $request->all();
        return view('user_edit_check', ['data' => $data], $inputs);
    }

    //ユーザー編集完了
    function userEditDone(Request $request, $id) {
        //$id = $request->input('id');
        $data = \App\Models\User::find($id);
        $data->name = $request->input('name');
        $data->mail_address = $request->input('mail_address');
        $data->password = Hash::make($request->input('password'));
        $data->timestamps = false;
        $data->save();
        return view('user_edit_done');
    }

    //ユーザー削除
    function userDelete($id) {
        $data = \App\Models\User::find($id);
        return view('user_del', ['data' => $data]);
    }

    //ユーザー削除完了
    function userDeleteDone($id) {
        $data = \App\Models\User::find($id);
        $data->delete();
        return view('user_del_done', ['data' => $data]);
    }
}
