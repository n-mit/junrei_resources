@extends('layout/layout')
@section('contents')

<br>

<div class="text-center">
    <h2>ユーザー情報</h2>
</div>

<br>

<div class="container">
    <div class="row">
        <div class="mx-auto" style="width:70%">
            <div class="col-md-12 col-ms-12 col-xs-12">
                <table class="table table-striped table-hover">
                    <tr>
                        <th>ユーザー名</th>
                        <th>メールアドレス</th>
                    </tr>
                    <tr>
                        <td>{{$data->name}}</td>
                        <td>{{$data->mail_address}}</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-12 col-ms-12 col-xs-12 text-center mt-4 mb-4">
            <a href="/user_list" class="btn-primary btn-lg">ユーザー一覧に戻る</a>
        </div>
    </div>
</div>

<br><br><br>

@endsection