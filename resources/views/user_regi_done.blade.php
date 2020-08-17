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
            <h2>新規ユーザー登録完了</h2>
        </div>
        <div class="col-md-12 col-ms-12 col-xs-12 text-center">
            <a href="#">トップに戻る</a>
        </div>
    </div>
</div>

@endsection

@include('layout.footer')
