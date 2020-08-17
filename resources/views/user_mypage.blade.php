<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>マイページ</title>
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
            <h2>マイページ</h2>
        </div>
    </div>
    <br><br>
    <div class="row">
        <div class="col-md-6 col-ms-12 col-xs-12">
            <div class="text-center">
                <h3>基本情報</h3>
            </div>
            <table class="table table-bordered table-hover">
                <tr>
                    <th>ユーザーID</th>
                    <td>{{$data->user}}</td>
                </tr>
                <tr>
                    <th>ユーザー名</th>
                    <td>{{$data->user_name}}</td>
                </tr>
            </table>
        </div>
        <div class="col-md-6 col-ms-12 col-xs-12 text-center">
            <h3>投稿一覧</h3>
        </div>
    </div>
</div>

</body>
</html>