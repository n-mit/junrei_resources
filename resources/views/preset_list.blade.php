@extends('layout/layout')
@section('contents')
<br>

<div class="text-center">
    <h2>プリセット一覧</h2>
</div>

<br>

<div class="container">
    <div class="row">
        <div class="mx-auto" style="width:70%">
            <div class="col-md-12 col-ms-12 col-xs-12">
                <table class="table table-striped table-hover">
                    <tr>
                        <th>プリセット名</th>
                        <th>摘要</th>
                        <th>操作</th>
                    </tr>
                    @foreach($preset as $val)
                    <tr>
                        <td><a href="/preset_info/{{$val->id}}">{{$val->preset_name}}</a></td>
                        <td>{{$val->note}}</td>
                        <td><a href="/preset_edit/{{$val->id}}">編集</a>　｜　<a href="/preset_del/{{$val->id}}">削除</a></td>
                    </tr>
                    @endforeach
                </table>
            </div>
            <div class="col-md-12 col-ms-12 col-xs-12">
                <div class="text-center">
                    <hr class="my-5">
                </div>
            </div>
            <div class="col-md-12 col-ms-12 col-xs-12 mt-3 mb-3 text-center">
                <a href="/preset_regi" class="btn-primary btn-lg">プリセットの新規登録</a>
            </div>
        </div>
    </div>
</div>

<br><br><br>


@endsection