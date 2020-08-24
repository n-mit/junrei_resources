@extends('layout.common')

@section('title', '基本情報編集')
@section('type', 'website')
@section('description', '基本情報編集')
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
            <h2>このページはログインしていないと表示できません。</h2>
            <br>
            <a href="/login">ログイン画面へ</a>
        </div>
    </div>
</div>

@endsection

@include('layout.footer')
