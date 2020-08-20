<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Sub_PostsController extends Controller
{
    // サブ投稿フォームを表示
    public function getSubWorkForm(){
        return view('/sub_work_form');
    }

    // サブ投稿内容を確認
    public function postSubWorkCheck(Request $request){
        $sub_posts = $request->all();
        return view('sub_work_form_check', compact('sub_posts'));
    }

    // サブ投稿完了
    public function postSubWorkDone(){
        return view('/sub_work_form_done');
    }
}
