<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller,Session;
use Illuminate\Support\Facades\DB;
use app\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     *ユーザー登録画面
     */
    function userRegi() {
        return View('user_regi');
    }


    /**
     * ユーザー登録確認画面
     */
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

    /**
     * ユーザー登録完了画面
     */
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

    /**
     * ユーザーマイページ
     */
    public function userMyPage(Request $request, $admin_id) {
        // ログインチェック
        if($request->session()->has('login')) {
        //
        } else {
        //login画面に飛ばす
        $request->session()->flush();
        return redirect('/access_denied');
        }

        $user = \App\Models\User::find($admin_id);

        return view('user_mypage', compact('user'));
    }

    /**
     * パスワード変更
     */
    public function passEdit(Request $request, $admin_id) {

        // ログインチェック
        if($request->session()->has('login')) {
            //
            } else {
            //login画面に飛ばす
            $request->session()->flush();
            return redirect('/access_denied');
            }

            $user = \App\Models\User::find($admin_id);

        return view('pass_edit', compact('user'));
    }

    /**
     * パスワード変更確認画面
     */
    public function passEditCheck(Request $request, $admin_id) {
        // ログインチェック
        if($request->session()->has('login')) {
        //
        } else {
        //login画面に飛ばす
        $request->session()->flush();
        return redirect('/access_denied');
        }

        $inputs = $request->all();

        // バリデーション
        $rules = [
            'now_pass' => 'required|regex:/^[a-zA-Z0-9]+$/',
            'new_pass' => 'required|regex:/^[a-zA-Z0-9]+$/',
        ];

        $validation = \Validator::make($inputs, $rules);

        if($validation->fails()) {
            return redirect()->back()->withErrors($validation->errors())->withInput();
        }

        $user = \App\Models\User::find($admin_id);

        $now_pass = $inputs['now_pass'];

        $check = Hash::check($now_pass, $user->password);

        if($check == false) {
            //パスワードが一致しなかった場合のエラー
            $request->session()->flash('pass_message', '現在のパスワードが間違っています');
            return redirect()->back()->withErrors($validation->errors())->withInput();
        }

        return view('pass_edit_check', $inputs, compact('user'));
    }

    /**
     * パスワード変更完了画面
     */
    public function passEditDone(Request $request, $admin_id) {
        // ログインチェック
        if($request->session()->has('login')) {
        //
        } else {
        //login画面に飛ばす
        $request->session()->flush();
        return redirect('/access_denied');
        }

        $inputs = $request->all();

        $new_pass = $inputs['new_pass'];

        $user = \App\Models\User::find($admin_id);
        $user->password = Hash::make($new_pass);
        $user->update_date = null;
        $user->save();

        return view('pass_edit_done', compact('user'));
    }

    /**
     * マイページの基本情報編集画面
     */
    public function userEdit(Request $request, $admin_id) {
        // ログインチェック
        if($request->session()->has('login')) {
        //
        } else {
        //login画面に飛ばす
        $request->session()->flush();
        return redirect('/access_denied');
        }

        $user = \App\Models\User::find($admin_id);

        return view('user_edit', compact('user'));
    }

    /**
     * マイページの基本情報編集内容確認画面
     */
    public function userEditCheck(Request $request, $admin_id) {
        // ログインチェック
        if($request->session()->has('login')) {
        //
        } else {
        //login画面に飛ばす
        $request->session()->flush();
        return redirect('/access_denied');
        }

        $inputs = $request->all();

        $user = \App\Models\User::find($admin_id);

        return view('user_edit', $inputs, compact('user'));
    }
}
