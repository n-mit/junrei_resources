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
    @if(session('message'))
    <span>{{session('message')}}</span>
    @endif
    <div>
        <p>ああああああああああああああああああああ</p>
        <a href="/user_regi">新規ユーザー登録</a>
    </div>
@endsection

<!-- footerテンプレート読み込み -->
@include('layout.footer')