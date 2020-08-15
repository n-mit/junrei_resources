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

        // バリデーション
        $rules = [
            'user' => 'required',
            'user_name' => 'required',
            'password' => 'required|confirmed|regex:/^[a-zA-Z0-9]+$/',
            'password_confirmation' => 'required|regex:/^[a-zA-Z0-9]+$/'
        ];

        $validation = \Validator::make($inputs, $rules);

        if($validation->fails()) {
            return redirect()->back()->withErrors($validation->errors())->withInput();
        }

        return view('user_regi_check', $inputs);
    }

    //ユーザー登録完了
    function userRegiDone(Request $request) {
        $inputs = $request->all();

        $data = array(
        'user' => $request->user,
        'user_name' => $request->user_name,
        'password' => Hash::make($request->password)
        );

        \App\Models\User::insert($data);

        return view('user_regi_done');
    }
}
