@extends('layout.common')

@section('title', 'マイページ')
@section('type', 'website')
@section('description', 'ユーザーのマイページ')
@section('pageCss')
<link href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
@endsection

@include('layout.head')

@include('layout.header')

@section('content')

<br><br>

<div class="container">
    <div class="row">
        <div class="col-md-12 col-ms-12 col-xs-12 text-center">
            <h2>マイページ</h2>
        </div>
    </div>
    <br><br>
    <div class="row">
        <div class="col-md-6 col-ms-12 col-xs-12">
            <div class="text-center">
                <h3>基本情報</h3>
            </div>
            <br><br>
            <table class="table table-bordered table-hover">
                <tr>
                    <th>ユーザーID</th>
                    <td>{{$user->user}}</td>
                </tr>
                <tr>
                    <th>ユーザー名</th>
                    <td>{{$user->user_name}}</td>
                </tr>
            </table>
            <a href="/pass_edit/{{$user->admin_id}}">パスワード変更</a>
        </div>
        <div class="col-md-6 col-ms-12 col-xs-12 text-center">
            <h3>投稿一覧</h3>
        </div>
    </div>
</div>

@endsection

@include('layout.footer')
