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
        <h1>サブ投稿フォーム</h1><br>
        <form action="/sub_work_form_check" method="post">
            {{ csrf_field() }}
            画像：<input type="file" name="file"><br>
            コメント：<input type="text" name="text"><br>
            <input type="submit" value="確認">
    </form>
    </div>
@endsection

<!-- footerテンプレート読み込み -->
@include('layout.footer')