@extends('layout/layout')
@section('contents')

<br>

<div class="text-center">
    <h2>ユーザー一覧</h2>
</div>

<br>

<div class="container">
    <div class="row">
        <div class="col-md-12 col-ms-12 col-xs-12">
            <div class="mx-auto" style="width:70%">
                <table class="table table-striped table-hover">
                    <tr>
                        <th>名前</th>
                        <th>メールアドレス</th>
                        <th>ユーザー操作</th>
                    </tr>
                    @foreach($user as $val)
                    <tr>
                        <td><a href="/user_info/{{$val->id}}">{{$val->name}}</a></td>
                        <td>{{$val->mail_address}}</td>
                        <td><a href="/user_edit/{{$val->id}}">編集</a> / <a href="/user_del/{{$val->id}}">削除</a></td>
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
                <a href="/user_regi" class="btn-primary btn-lg">新規ユーザー登録</a>
            </div>
        </div>
    </div>
</div>

@endsection

