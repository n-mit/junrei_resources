<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\Posts;
use app\Models\Works;

class WorksController extends Controller
{
    // 作品名一覧を表示
    public function getWorks(){
        // DBからworksテーブルのデータ取得
        $inputs = \App\Models\Works::all();

        // viewへ変数の受け渡し
        return view('works',compact('inputs'));
    }

    // Top検索欄のformから送られてきたデータ処理
    public function postSearch(Request $request){
        $text = $request->text;
        return view('result', compact('text'));
    }

    // 作品投稿一覧ページ
    public function getWorkList($id){
        // 各作品一覧から引数$idをもらい、Worksテーブルのwork_idを取得する
        $id = \App\Models\Works::find($id);
        $data = $id['work_id'];

        //dd($data);
        // Postsテーブルのデータを取得
        // work_idで取得するデータをもってくる（調整中）
        $inputs = \App\Models\Posts::all();

        return view('work_list', compact('id','inputs'));
    }

    // 作品ページを表示
    public function getWorkPage(){
        return view('work_page');
    }
}
