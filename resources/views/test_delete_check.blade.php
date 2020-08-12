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
        <div class="col-md-12 col-ms-12 col-xs-12 mx-auto" style="width:80%">
            <form  method="post" action="{{url('/test_delete_done', $data->id)}}" accept-charset="UTF-8" enctype="multipart/form-data">
            {{csrf_field()}}
            {{method_field('delete')}}
                <div class="col-md-12 col-ms-12 col-xs-12 text-center">
                    <h2>選択した画像を削除しますか？</h2>
                    <img src="{{$data->path}}" width="50%">
                    <br><br>
                    <input type="submit" value="削除" class="btn-danger btn-lg">
                </div>
            </form>
        </div>
    </div>
</div>