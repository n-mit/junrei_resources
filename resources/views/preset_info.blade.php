@extends('layout/layout')
@section('contents')

<br>

<div class="text-center">
    <h2>プリセット情報</h2>
</div>

<br>

<div class="container">
    <div class="row">
        <div class="mx-auto" style="width:70%">
            <div class="col-md-12 col-ms-12 col-xs-12">
                <table class="table table-striped table-hover">

                    <tr>
                        <th>ID</th>
                        <td>{{$data->id}}</td>
                    </tr>

                    <tr>
                        <th>プリセット名</th>
                        <td>{{$data->preset_name}}</td>
                    </tr>

                    <tr>
                        <th>事業の内訳</th>
                        <td>{{$data->name}}</td>
                    </tr>

                    <tr>
                        <th>所要額の内訳</th>
                        <td>{{$data->sum}}</td>
                    </tr>

                    <tr>
                        <th>摘要</th>
                        <td>{{$data->note}}</td>
                    </tr>
                </table>
            </div>
            <div class="col-md-12 col-ms-12 col-xs-12 text-center">
                <hr class="my-5">
            </div>
            <div class="col-md-12 col-ms-12 col-xs-12 text-center mt-4 mb-4">
                <a href="preset_edit.html" class="btn-primary btn-lg">プリセットを編集する</a>
            </div>
            <div class="col-md-12 col-ms-12 col-xs-12 text-center mt-4 mb-4">
                <a href="/preset_list" class="btn-primary btn-lg">プリセット一覧に戻る</a>
            </div>
        </div>
    </div>
</div>

<br><br><br>

@endsection