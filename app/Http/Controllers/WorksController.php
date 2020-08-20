<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WorksController extends Controller
{
    // 作品名一覧を表示
    public function getWorks(){
        return view('works');
    }

    // Top検索欄のformから送られてきたデータ処理
    public function postSearch(Request $request){
        $text = $request->text;
        return view('result', compact('text'));
    }

    // 作品投稿一覧ページ
    public function getWorkList(){
        return view('work_list');
    }

    // 作品ページを表示
    public function getWorkPage(){
        return view('work_page');
    }
}
