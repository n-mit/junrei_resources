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
            タイトル：{{ $posts['title'] }}<br>
            作品名：{{ $posts['work_name'] }}<br>
            住所：{{ $posts['pref_name'] }} {{ $posts['city_name'] }}<br>
            {{ $posts['street'] }}<br>
            {{ $posts['etc'] }}<br>
            画像：{{ $posts['file'] }}<br>
            コメント：{{ $posts['text'] }}<br>
            <input type="submit" value="投稿する">
            <input type="button" onclick="history.back()" value="戻る">
    </form>
    </div>
@endsection

<!-- footerテンプレート読み込み -->
@include('layout.footer')