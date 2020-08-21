<!-- commonレイアウトの継承 -->
@extends('layout.common')

@section('title', 'Topページ')
@section('type', 'website')<!-- topページ以外はarticleを指定 -->
@section('description', 'Topページの説明文')<!-- ページの説明文を指定 80~90文字 -->
<!-- headテンプレート読み込み -->
@include('layout.head')

<!-- headerテンプレート読み込み -->
@include('layout.header')

@section('content')<!-- 以下にコンテンツ内容を追加 -->
    <div>
        <h1>投稿内容確認</h1><br>
        <form action="/work_form_done" method="post">
            {{ csrf_field() }}
            <div><label>管理ID</label>{{$admin_id}}
                <input type="hidden" name="admin_id" value="{{$admin_id}}">
            </div>
            <div>
                <label>タイトル：</label>{{$title}}
                <input type="hidden" name="title" value="{{$title}}">
            </div><br>
            <div>
                <label>作品名：</label>{{$work_id}}
                <input type="hidden" name="work_id" value="{{$work_id}}">
            </div><br>
            <div>
                <label>住所：</label>{{$pref_id}} {{$city_id}} {{$street}} {{$etc}}
                <input type="hidden" name="pref_id" value="{{$pref_id}}">
                <input type="hidden" name="city_id" value="{{$city_id}}">
                <input type="hidden" name="street" value="{{$street}}">
                <input type="hidden" name="etc" value="{{$etc}}">
            </div><br>
            <div>
                <label>画像：</label>{{$picture}}
                <input type="hidden" name="picture" value="{{$picture}}">
            </div><br>
            <div>
                <label>コメント：</label>{{$comment}}
                <input type="hidden" name="comment" value="{{$comment}}">
            </div><br>
            <input type="submit" value="投稿する">
            <input type="button" onclick="history.back()" value="戻る">
    </form>
    </div>
@endsection

<!-- footerテンプレート読み込み -->
@include('layout.footer')