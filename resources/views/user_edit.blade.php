@extends('layout/layout')
@section('contents')

<br>

<div class="text-center">
    <h2>ユーザー情報編集</h2>
</div>

<br>

<div class="container">
    <div class="row">
        <div class="col-md-12 col-ms-12 col-xs-12">
            <div class="mx-auto" style="width:70%">
                <form method="post" action="{{url('/user_edit_check', $data->id)}}" class="form-horizontal">
                {{csrf_field()}}
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name"  class="form-control" value="{{$data->name}}">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="mail_address" placeholder="例：grant-c@example.com" class="form-control" value="{{$data->mail_address}}">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" placeholder="password" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Confirmation</label>
                        <input type="password" name="password2" placeholder="password again" class="form-control">
                        <small class="form-text text-muted">確認のためにpasswordを再入力してください。</small>
                    </div>
                    <br>
                    <div>
                        <input type="submit" value="登録" class="btn-primary btn-lg mb-5" style="width:100%">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<br><br><br>

@endsection