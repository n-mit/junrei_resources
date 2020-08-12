<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>投稿用フォーム(テスト)</title>
<!-- BootstrapのCSS読み込み -->
<link href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
<!-- jQuery読み込み -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
<!-- BootstrapのJS読み込み -->
<script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
<body>

<br><br>

<div class="container">
    <div class="row">
        <div class="col-md-12 col-ms-12 col-xs-12 text-center">
            <h2>画像削除テスト</h2>
        </div>
        <br><br><br>
        <a href="test_form">登録フォームへ</a>
        @foreach($img as $val)
        <div class="col-md-12 col-ms-12 col-xs-12 mt-3 mb-3 text-center">
            <img src="{{$val->path}}" class="mt-3 mb-3" width="50%">
        </div>
        <div class="col-md-12 col-ms-12 col-xs-12 mt-3 mb-3 text-center">
            <a href="/test_delete_check/{{$val->id}}" class="btn-danger btn-lg">削除画面へ</a>
        </div>
        @endforeach
    </div>
</div>

<br><br><br>