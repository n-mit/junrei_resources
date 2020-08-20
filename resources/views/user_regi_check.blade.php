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
            <h2>新規ユーザー登録内容確認</h2>
        </div>
        <br><br>
        <div style="width:60%" class="mx-auto">
            <form method="post" action="/user_regi_done">
            {{csrf_field()}}
                <div class="col-md-12 col-ms-12 col-xs-12 text-center">
                    <label>ユーザーID</label>：{{$user}}
                    <input type="hidden" name="user" value="{{$user}}">
                </div>
                <br>
                <div class="col-md-12 col-ms-12 col-xs-12 text-center">
                    <label>ユーザー名</label>：{{$user_name}}
                    <input type="hidden" name="user_name" value="{{$user_name}}">
                </div>
                <br>
                <div class="col-md-12 col-ms-12 col-xs-12 text-center">
                    <label>パスワード</label>：{{$password}}
                    <input type="hidden" name="password" value="{{$password}}">
                </div>
                <br>
                <input type="submit" value="登録" style="width:60%" class="btn-lg">
            </form>
        </div>
    </div>
</div>

@endsection

@include('layout.footer')