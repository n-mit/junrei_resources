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
            <h2>投稿一覧</h2>
        </div>
        <a href="/test_form">投稿フォームへ</a>
    </div>
    <br><br>
    <div class="row">
        @foreach($data as $val)
        <div class="col-md-12 col-ms-12 col-xs-12 text-center">
            <p>{{$val->title}}</p>
        </div>
        @if(!empty($val->path))
        <div class="col-md-12 col-ms-12 col-xs-12 text-center">
            <img src="{{asset($val->path)}}" width="30%">
        </div>
        @endif
        <br>
        <div class="col-md-12 col-ms-12 col-xs-12 mt-3 mb-4 text-center">
            <a href="/test_good/{{$val->id}}" class="btn-primary btn-lg">いいね</a>
        </div>
        @endforeach
    </div>
</div>

</body>
</html>