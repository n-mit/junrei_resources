@extends('layout.common')

@section('title', '新規ユーザー登録')
@section('type', 'website')
@section('description', '新規ユーザー登録')
@section('pageCss')
<link href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
@endsection

@include('layout.head')

@include('layout.header')

@section('content')

<br><br><br>

<div class="container">
    <div class="row">
        <div class="col-md-12 col-ms-12 col-xs-12 text-center">
            <h2>新規ユーザー登録</h2>
        </div>
        <br><br><br>
        <div style="width:60%" class="mx-auto">
            <div class="col-md-12 col-ms-12 col-xs-12">
                <form method="post" action="/user_regi_check">
                {{csrf_field()}}
                    <div class="form-group">
                        <label>ユーザーID</label>
                        <input type="text" name="user" value="{{old('user')}}"
                        class="form-control @if(!empty($errors->first('user')))border-danger @endif">
                        <span class="help-block text-danger">{{$errors->first('user')}}</span>
                    </div>
                    <div class="form-group">
                        <label>ユーザー名</label>
                        <input type="text" name="user_name" value="{{old('user_name')}}"
                        class="form-control @if(!empty($errors->first('user_name')))border-danger @endif">
                        <span class="help-block text-danger">{{$errors->first('user_name')}}</span>
                    </div>
                    <div class="form-group @if(!empty($errors->first('password'))) has-error @endif">
                        <label>パスワード</label>
                        <input type="password" name="password" placeholder="password"
                        class="form-control @if(!empty($errors->first('password')))border-danger @endif">
                        <span class="help-block text-danger">{{$errors->first('password')}}</span>
                    </div>
                    <div class="form-group @if(!empty($errors->first('password'))) has-error @endif">
                        <label>パスワード(確認用)</label>
                        <input type="password" name="password_confirmation" placeholder="確認のため、もう一度パスワードを入力してください。"
                        class="form-control @if(!empty($errors->first('password_confirmation')))border-danger @endif">
                        <span class="help-block text-danger">{{$errors->first('password_confirmation')}}</span>
                    </div>
                    <div>
                        <input type="submit" value="登録内容確認へ" class="btn-lg">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<br><br>

@endsection

@include('layout.footer')

