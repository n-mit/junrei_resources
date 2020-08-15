<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>じゅんれいっ！ | 新規ユーザー登録</title>
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
            <h2>新規ユーザー登録内容確認</h2>
        </div>
        <br><br>
        <div style="width:60%" class="mx-auto">
            <form method="post" action="/user_regi_done">
            {{csrf_field()}}
                <div class="col-md-12 col-ms-12 col-xs-12 text-center">
                    <label>ユーザーID</label>：{{$user}}
                    <input type="hidden" name="user" value="{{$user}}">
                </div>
                <br>
                <div class="col-md-12 col-ms-12 col-xs-12 text-center">
                    <label>ユーザー名</label>：{{$user_name}}
                    <input type="hidden" name="user_name" value="{{$user_name}}">
                </div>
                <br>
                <div class="col-md-12 col-ms-12 col-xs-12 text-center">
                    <label>パスワード</label>：{{$password}}
                    <input type="hidden" name="password" value="{{$password}}">
                </div>
                <br>
                <input type="submit" value="登録" style="width:60%" class="btn-lg">
            </form>
        </div>
    </div>
</div>

</body>
</html>