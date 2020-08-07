<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use app\Models\Preset;

class PresetController extends Controller
{
    //プリセット登録
    function presetRegi() {
        return View('preset_regi');
    }

    //プリセット登録確認
    function presetRegiCheck(Request $request) {
        $inputs = $request->all();
        return view('preset_regi_check', $inputs);
    }

    //プリセット登録完了
    function presetRegiDone(Request $request) {
        $data1 = $request->all();

        $data = array(
        'preset_name' => $request->preset_name,
        'discription' => $request->discription,
        'sum' => $request->sum,
        'note' => $request->note
        );
    

        \App\Models\Preset::insert($data);
        return view('preset_regi_done');
    }

    //プリセット一覧
    function presetList() {
        $preset = DB::select('SELECT * FROM preset');
        $data = ['preset' => $preset];
        return view('preset_list', $data);
    }

    //プリセット情報
    function presetInfo($id) {
        $data = \App\Models\Preset::find($id);
        return view('preset_info', ['data' => $data]);
    }

    //プリセット編集
    function presetEdit($id) {
        $data = \App\Models\Preset::find($id);
        return view('preset_edit', ['data' => $data]);
    }

    //プリセット編集確認
    function presetEditCheck($id, Request $request) {
        $data = \App\Models\Preset::find($id);
        $inputs = $request->all();
        return view('preset_edit_check', ['data' => $data], $inputs);
    }

    //プリセット編集完了
    function presetEditDone(Request $request, $id) {
        //$id = $request->input('id');
        $data = \App\Models\Preset::find($id);
        $data->preset_name = $request->input('preset_name');
        $data->discription = $request->input('discription');
        $data->sum = $request->input('sum');
        $data->note = $request->input('note');
        $data->timestamps = false;
        $data->save();
        return view('preset_edit_done');
    }

    //プリセット削除
    function presetDelete($id) {
        $data = \App\Models\Preset::find($id);
        return view('preset_del', ['data' => $data]);
    }

    //プリセット削除完了
    function presetDeleteDone($id) {
        $data = \App\Models\Preset::find($id);
        $data->delete();
        return view('preset_del_done', ['data' => $data]);
    }
        
}
