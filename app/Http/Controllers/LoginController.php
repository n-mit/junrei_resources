<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    function loginini(Request $request) {
        $data['loginerror'] = '';
        return view('login', $data);
    }

    function logout(Request $request) {
        $request->session()->flush();
        return redirect('/');
    }

    function login(Request $request) {
        // 入力された値の配列の取得
        $data = $request->all();

        // バリデーション
        $rules = [
            'email' => 'required',
            'password' => 'required|regex:/^[a-zA-Z0-9]+$/',
        ];

        $validation = \Validator::make($data, $rules);

        // それぞれの値を変数に格納
        $login_email = $data['email'];
        $login_password = $data['password'];

        // 入力されたメールアドレスを指定してデータ取得
        $user = DB::table('user')->where([['mail_address', $login_email]])->first();

        // emailのデータが取れなかった場合のエラー
        if($user == '') {
            $emailerror = 'email が一致しません';
            $data = ['emailerror'=>$emailerror];
            //失敗処理
            return redirect()->back()->withErrors($validation->errors())->withInput();
        }

        // 入力されたパスワードと登録されているパスワードの比較
        // ログイン実行
        if(Hash::check($login_password, $user->password)) {
            $request->session()->put('id', $user->id);
            $request->session()->put('login', true);
            //パスワード一致の処理
            return redirect('/company_list');
        } else {
            //パスワードが一致しなかった場合のエラー
            $passerror='password が一致しません';
            $data=['passerror'=>$passerror];
            //失敗処理
            return redirect()->back()->withErrors($validation->errors())->withInput();
        }
    }
}
