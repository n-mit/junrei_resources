<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use app\Models\Test;

class TestController extends Controller
{
    //テストフォーム
    public function testForm() {
        return view('test_form');
    }

    //テストフォーム確認画面
    public function testFormCheck(Request $request) {

        //画像データがあるか確認する
        $img_check = $request['path'];

        //postデータを画像も含めて受け取る
        $inputs = $request->except('path');

        // バリデーション
        $rules = [
            'title' => 'required | max:40',
            'contents' => 'required | max:2000',
        ];

        $validation = \Validator::make($inputs, $rules);

        if($validation->fails()) {
            return redirect()->back()->withErrors($validation->errors())->withInput();
        }

        //titleとcontentsを抜き出す
        $title = $inputs['title'];
        $contents = $inputs['contents'];

        //画像が選択されていた場合の処理
        if(!empty($img_check)) {

        //画像を抜き出す
        $img = $request->file('path');

        //画像をtempディレクトリに保存
        $temp_path = $img->store('public/temp');
        $read_temp_path = str_replace('public/', 'storage/', $temp_path);

        //全てのpostデータを連想配列に再度収納
        $data = array(
            'title' => $title,
            'temp_path' => $temp_path,
            'read_temp_path' => $read_temp_path,
            'contents' => $contents,
        );

        //画像を表示するためにsessionに保存
        $request->session()->put('data', $data);

        } else {
            //画像が選択されていない場合
            $data = array(
                'title' => $title,
                'contents' => $contents,
            );
        }

        return view('test_form_check', compact('data', 'img_check'));
    }

    //テストフォーム完了
    public function testFormDone(Request $request) {

        //セッションがあるかどうか確認
        $data = $request->session()->get('data');

        //セッションがある場合は画像がありの投稿なので、画像のパスをDBに保存する処理を実行
        if(!empty($data)) {

        $temp_path = $data['temp_path'];
        $read_temp_path = $data['read_temp_path'];

        $title = $data['title'];
        $contents = $data['contents'];

        //ファイル名は$temp_pathから"public/temp/"を除いたもの
        $filename = str_replace('public/temp/', '', $temp_path);

        //画像を保存するパスは"public/img/xxx.jpeg"
        $storage_path = 'public/img/'.$filename;

        //temp_path: public/temp/5n209adAa1XmDLVthgWplTQcXm8uG4UwsjrIKrMk.jpeg ←こんなパス
        //storage_path: public/img/5n209adAa1XmDLVthgWplTQcXm8uG4UwsjrIKrMk.jpeg ←publicの後が上とは違う

        //data情報をセッションから削除
        $request->session()->forget('data');

        //Storageファサードのmoveメソッドで、第一引数->第二引数へファイルを移動
        //ここでは、tempフォルダからimgフォルダに画像を移動している
        Storage::move($temp_path, $storage_path);

        //画像を読み込むときのパスはstorage/img/xxx.jpeg"
        $read_path = str_replace('public/', 'storage/', $storage_path);

        //read_path: storage/img/5n209adAa1XmDLVthgWplTQcXm8uG4UwsjrIKrMk.jpeg ←これをDBに保存

        //DBに登録(INSERT INTO test (title, path, contents) values (?, ?, ?);)
        $post_data = array(
            'title' => $request->title,
            'path' => '/'.$read_path,
            'contents' => $request->contents
            );

        \App\Models\Test::insert($post_data);

        } else {

            //画像がない場合は単純にタイトルと本文を登録
            $inputs = $request->all();

            $post_data = array(
                'title' => $request->title,
                'contents' => $request->contents
            );

            \App\Models\Test::insert($post_data);
        }

        return view('test_form_done');
    }

    //テストフォームの情報一覧
    public function testPost(Request $request) {

        $data = \App\Models\Test::all();

        return view('test_post', compact('data'));
    }

    //画像削除テスト
    public function testDelete() {

        $img = DB::select('SELECT * FROM test');

        return view('test_delete', compact('img'));
    }

    //画像削除テスト確認
    public function testDeleteCheck(Request $request, $id) {

        $data = \App\Models\Test::find($id);

        return view('test_delete_check', compact('data'));
    }

    //画像削除テスト完了(画像と合わせて投稿も削除)
    public function testDeleteDone(Request $request, $id) {

        //登録データを取得
        $data = \App\Models\Test::find($id);

        //画像情報を抜き出す
        $img = $data['path'];

        //取得した画像データから/storage/imgの箇所を取り除く
        $filename = str_replace('/storage/img/', '', $img);

        //DAm8jyvUJ9fJ1czjw3M6wUoTSIsOYtDZG9jFDijy.jpg ←画像の名前だけのパスに変更

        //public/img内にある選択された画像を削除
        Storage::delete('public/img/'.$filename);

        //画像削除の後、DBのデータも削除
        $data->delete();

        return view('test_delete_done');
    }

    //テストフォーム編集
    public function testEdit($id, Request $request) {

        $data = \App\Models\Test::find($id);

        return view('test_edit', compact('data'));
    }

    //テストフォーム編集確認画面
    public function testEditCheck($id, Request $request) {

        $old_data = \App\Models\Test::find($id);

        //画像データがあるか確認する
        $img_check = $request['path'];

        //postデータを画像も含めて受け取る
        $inputs = $request->except('path');

        // バリデーション
        $rules = [
            'title' => 'required | max:40',
            'contents' => 'required | max:2000',
        ];

        $validation = \Validator::make($inputs, $rules);

        if($validation->fails()) {
            return redirect()->back()->withErrors($validation->errors())->withInput();
        }

        //titleとcontentsを抜き出す
        $title = $inputs['title'];
        $contents = $inputs['contents'];

        //画像が選択されていた場合の処理
        if(!empty($img_check)) {

        //画像を抜き出す
        $img = $request->file('path');

        //画像をtempディレクトリに保存
        $temp_path = $img->store('public/temp');
        $read_temp_path = str_replace('public/', 'storage/', $temp_path);

        //全てのpostデータを連想配列に再度収納
        $data = array(
            'title' => $title,
            'temp_path' => $temp_path,
            'read_temp_path' => '/'.$read_temp_path,
            'contents' => $contents,
        );

        //画像を表示するためにsessionに保存
        $request->session()->put('data', $data);

        } else {
            //画像が選択されていない場合
            $data = array(
                'title' => $title,
                'contents' => $contents,
            );
        }

        return view('test_edit_check', compact('data', 'img_check', 'old_data'));
    }

    //テストフォーム編集完了
    public function testEditDone($id, Request $request) {

        //セッションがあるかどうか確認
        $data = $request->session()->get('data');

        //セッションがある場合は画像がありの投稿なので、画像のパスをDBに保存する処理を実行
        if(!empty($data)) {

        $temp_path = $data['temp_path'];
        $read_temp_path = $data['read_temp_path'];

        $title = $data['title'];
        $contents = $data['contents'];

        //ファイル名は$temp_pathから"public/temp/"を除いたもの
        $filename = str_replace('public/temp/', '', $temp_path);

        //画像を保存するパスは"public/img/xxx.jpeg"
        $storage_path = 'public/img/'.$filename;

        //temp_path: public/temp/5n209adAa1XmDLVthgWplTQcXm8uG4UwsjrIKrMk.jpeg ←こんなパス
        //storage_path: public/img/5n209adAa1XmDLVthgWplTQcXm8uG4UwsjrIKrMk.jpeg ←publicの後が上とは違う

        //data情報をセッションから削除
        $request->session()->forget('data');

        //Storageファサードのmoveメソッドで、第一引数->第二引数へファイルを移動
        //ここでは、tempフォルダからimgフォルダに画像を移動している
        Storage::move($temp_path, $storage_path);

        //画像を読み込むときのパスはstorage/img/xxx.jpeg"
        $read_path = str_replace('public/', 'storage/', $storage_path);

        //read_path: storage/img/5n209adAa1XmDLVthgWplTQcXm8uG4UwsjrIKrMk.jpeg ←これをDBに保存

        //文字列の先頭に/を追加
        $path_data = '/'.$read_path;

        //DBに変更データを登録
        $old_data = \App\Models\Test::find($id);
        $old_data->title = $request->input('title');
        $old_data->path = $path_data;
        $old_data->contents = $request->input('contents');
        $old_data->timestamps = false;
        $old_data->save();

        } else {

            //画像がない場合は単純にタイトルと本文を登録
            $inputs = $request->all();

            $old_data = \App\Models\Test::find($id);
            $old_data->title = $request->input('title');
            $old_data->contents = $request->input('contents');
            $old_data->timestamps = false;
            $old_data->save();
        }

        return view('test_edit_done');
    }
}
