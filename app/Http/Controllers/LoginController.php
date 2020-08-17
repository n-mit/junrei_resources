<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller,Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use app\Models\user;

class LoginController extends Controller
{
    //
    function loginini(Request $request) {
        $data['loginerror'] = '';
        return view('login', $data);
    }

    //ログアウト
    function logout(Request $request) {
        $request->session()->flush();
        return redirect('/login');
    }

    function login(Request $request) {
        // 入力された値の配列の取得
        $data = $request->all();

        // バリデーション
        $rules = [
            'user' => 'required',
            'password' => 'required|regex:/^[a-zA-Z0-9]+$/',
        ];

        $validation = \Validator::make($data, $rules);

        // それぞれの値を変数に格納
        $login_user = $data['user'];
        $login_password = $data['password'];

        // 入力されたユーザーIDを指定してデータ取得
        $user = DB::table('user')->where('user', $login_user)->first();

        //ユーザーIDが取れなかった場合のエラー
        if($user == '') {
            $request->session()->flash('message', 'ユーザーIDが一致しません');
            return redirect()->back()->withErrors($validation->errors())->withInput();
        }

        // 入力されたパスワードと登録されているパスワードの比較
        // ログイン実行
        if(Hash::check($login_password, $user->password)) {
            $request->session()->put('admin_id', $user->admin_id);
            $request->session()->put('login', true);
            //パスワード一致の処理
            return redirect('/login_ok');
        } else {
            //パスワードが一致しなかった場合のエラー
            $request->session()->flash('pass_message', 'パスワードが間違っています');
            return redirect()->back()->withErrors($validation->errors())->withInput();
        }
    }

    //ログイン確認用(のちに消去)
    public function loginOK(Request $request) {
        // 存在チェック
        if($request->session()->has('login')) {
        //
        } else {
        //login画面に飛ばす
        $request->session()->flush();
        return redirect('/access_denied');
        }

        //$data = $request->session()->has('admin_id');

        $data = Session::get('admin_id');

        $user = \App\Models\User::where('admin_id', $data)->first();

        $user_data = $user['user'];

        return view('/login_ok', compact('user_data'));
    }
}
