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
        <h1>作品名一覧</h1><br>
        <a href="/work_list">作品名</a>
    </div>

    <div>投稿したい作品名が無かったら<a href="/work_form">こちら</a>から</div>
@endsection

<!-- footerテンプレート読み込み -->
@include('layout.footer')