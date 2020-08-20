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
        <h1>お問い合わせフォーム</h1><br>
        <form action="/contact_form_check" method="post">
            {{ csrf_field() }}
            お名前：<input type="text" name="contact_name"><br>
            メールアドレス：<input type="mail" name="contact_address"><br>
            お問い合わせ内容：<textarea name="contact_post"></textarea><br>
            <input type="submit" value="確認">
    </form>
    </div>
@endsection

<!-- footerテンプレート読み込み -->
@include('layout.footer')