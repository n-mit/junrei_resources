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
            @foreach ($inputs as $input)
            <td><a href="/work_list/{{$input->work_id}}">{{$input->work_name}}</a></td><br>
            @endforeach
    </div><br>

    <div>聖地の写真を<a href="/work_form">投稿する</a></div>
@endsection

<!-- footerテンプレート読み込み -->
@include('layout.footer')