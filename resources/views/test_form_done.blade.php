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
            <h2>投稿が完了しました</h2>
        </div>
        <div class="col-md-12 col-ms-12 col-xs-12 text-center">
            <a href="/test_post">一覧へ</a>
        </div>
        <div class="col-md-12 col-ms-12 col-xs-12 text-center">
            <a href="/test_delete">画像削除へ</a>
        </div>
        <div class="col-md-12 col-ms-12 col-xs-12 text-center">
            <a href="/test_edit">投稿修正へ</a>
        </div>
    </div>
</div>

</body>
</html>