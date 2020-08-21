@extends('layout.common')

@section('title', 'ユーザー情報削除')
@section('type', 'website')
@section('description', 'ユーザー情報削除')
@section('pageCss')
<link href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
@endsection

@include('layout.head')

@include('layout.header')

@section('content')

<br><br>

<div class="container">
    <div class="row">
        <div class="col-md-12 col-ms-12 col-xs-12">
            <h2><span class="text-danger">ユーザー情報削除にあたっての注意！</span></h2>
        </div>
    </div>
    <br><br>
    <div class="row">
        <div class="col-md-12 col-ms-12 col-xs-12">
            <ul>
                <li>ユーザー情報を削除すると、過去の投稿や投稿した写真など、全データが削除されます。</ｌ>
                <li>一度削除したユーザー情報は復元できません。</li>
            </ul>
        </div>
    </div>
    <br><br>
    <div class="row">
        <div class="col-md-12 col-ms-12 col-xs-12">
            <a href="/user_delete_check/{{$user->admin_id}}" class="btn-lg btn-danger">削除画面へ進む</a>
        </div>
    </div>
</div>

@endsection

@include('layout.footer')
