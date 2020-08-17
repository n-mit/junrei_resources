<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    // 投稿フォームを表示
    public function getWorkForm(){
        return view('/work_form');
    }

    // 投稿内容を確認
    public function postWorkCheck(Request $request){
        $posts = $request->all();
        return view('work_form_check', compact('posts'));
    }

    // 投稿完了
    public function postWorkDone(){
        return view('/work_form_done');
    }

}
