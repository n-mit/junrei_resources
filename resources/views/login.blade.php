<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>じゅんれいっ！ | ログイン</title>
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
            <h2>ログイン</h2>
        </div>
        <div class="col-md-12 col-ms-12 col-xs-12">
            <form method="post" action="/login" class="form-horizontal">
            {{csrf_field()}}
                <div class="form-group">
                    <label>ユーザーID</label>
                    <input type="text" name="user" value="{{old('user')}}"
                    class="form-control @if(!empty($errors->first('user')))border-danger @endif">
                    <span class="help-block text-danger">{{$errors->first('user')}}</span>
                    @if(session('message'))
                    <span class="help-block text-danger">{{session('message')}}</span>
                    @endif
                </div>
                <div class="form-group @if(!empty($errors->first('password'))) has-error @endif">
                    <label>パスワード</label>
                    <input type="password" name="password" placeholder="password"
                    class="form-control @if(!empty($errors->first('password')))border-danger @endif">
                    <span class="help-block text-danger">{{$errors->first('password')}}</span>
                    @if(session('pass_message'))
                    <span class="help-block text-danger">{{session('pass_message')}}</span>
                    @endif
                </div>
                <br>
                <input type="submit" value="ログイン" class="btn-lg">
            </form>
        </div>
    </div>
</div>

</body>
</html>