@extends('layout/layout')
@section('contents')

<br>

<div class="container">
    <div class="row">
        <div class="mx-auto">
            <div class="col-md-12 col-ms-12 col-xs-12 text-center">
                <h2>プリセットの編集が完了しました。</h2>
            </div>
            <div class="col-md-12 col-ms-12 col-xs-12 text-center mt-4 mb4">
                <hr class="my-5">
                <a href="/preset_info" class="btn-primary btn-lg">プリセット情報に戻る</a>
            </div>
            <div class="col-md-12 col-ms-12 col-xs-12 text-center mt-4 mb-4">
                <a href="/preset_list" class="btn-primary btn-lg">プリセット一覧に戻る</a>
            </div>
        </div>
    </div>
</div>

@endsection