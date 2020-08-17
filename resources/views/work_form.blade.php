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
        <h1>投稿フォーム</h1><br>
        <form action="/work_form_check" method="post">
            {{ csrf_field() }}
            タイトル：<input type="text" name="title"><br>
            作品名：<input type="text" name="work_name"><br>
            住所：<select name="pref_name">
                <option value="0" selected="selected">選択してください。</option>
                <option value="1">東京都</option>
                <option value="2">埼玉県</option>
                <option value="3">神奈川県</option>
            </select>
            <select name="city_name">
                <option value="0" selected="selected">選択してください。</option>
                <option value="1">千代田区</option>
                <option value="2">さいたま市</option>
                <option value="3">横浜市</option>
            </select><br>
            <input type="text" name="street" placeholder="町名・番地を入力してください。"><br>
            <input type="text" name="etc" placeholder="ビル名などを入力してください。"><br>
            画像：<input type="file" name="file"><br>
            コメント：<input type="text" name="text"><br>
            <input type="submit" value="確認">
    </form>
    </div>
@endsection

<!-- footerテンプレート読み込み -->
@include('layout.footer')