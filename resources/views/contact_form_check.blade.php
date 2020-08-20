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
        <h1>お問い合わせ内容確認</h1><br>
        <form action="/contact_form_done" method="post">
            {{ csrf_field() }}
            お名前：{{ $contact_data['contact_name'] }}<br>
            メールアドレス：{{ $contact_data['contact_address'] }}<br>
            お問い合わせ内容：{{ $contact_data['contact_post'] }}<br>
            <input type="submit" value="投稿する">
            <input type="button" onclick="history.back()" value="戻る">
    </form>
    </div>
@endsection

<!-- footerテンプレート読み込み -->
@include('layout.footer')