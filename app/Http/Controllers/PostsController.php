<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\Posts;

class PostsController extends Controller
{
    // 投稿フォームを表示
    public function getWorkForm(){
        //調整中
        $inputs = \App\Models\Posts::pluck('admin_id');

        return view('/work_form', compact('inputs'));
    }

    // 投稿内容を確認
    public function postWorkCheck(Request $request){
        $posts = $request->all();

        return view('work_form_check', $posts);
    }

    // 投稿完了
    public function postWorkDone(Request $request){
        $posts = $request->all();

        $data = array(
            'admin_id'=>$request->admin_id,
            'title' => $request->title,
            'work_id' => $request->work_id,
            'pref_id' => $request->pref_id,
            'city_id' => $request->city_id,
            'street' => $request->street,
            'etc' => $request->etc,
            'picture' => $request->picture,
            'comment' => $request->comment
        );

        \App\Models\Posts::insert($data);

        return view('/work_form_done');
    }

}
