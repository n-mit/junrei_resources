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
        <h1>作品名投稿一覧ページ</h1>
        <p>各投稿の一覧が表示
            表示内容：画像・タイトル・作品名・住所
        </p>
    </div><br>

    <div><a href="/work_page">作品投稿詳細ページ</a></div>
    <div><a href="/work_form">投稿する</a></div>
@endsection

<!-- footerテンプレート読み込み -->
@include('layout.footer')