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
<script>

//投稿本文の文字数をリアルタイムにカウント
function ShowLength(str) {
    document.getElementById("count").innerHTML = str.length;
}

//画像変更する場合の処理
$(function() {
    $('#img-change').click(function() {
        $('#change-group').show();
        $('#hide-group').hide();
    });
});

</script>
<body>

<br><br>

<div class="container">
    <div class="row">
        <div class="col-md-12 col-ms-12 col-xs-12 text-center">
            <h2>投稿用フォーム編集テスト</h2>
        </div>
        <br><br><br>
        <div class="col-md-12 col-ms-12 col-xs-12 mx-auto" style="width:80%">
            <form  method="post" action="{{url('/test_edit_check', $data->id)}}" accept-charset="UTF-8" enctype="multipart/form-data">
            {{csrf_field()}}
                <div class="form-group">
                    <label>タイトル(40文字以内)</label>
                    <input type="text" name="title" value="{{$data->title}}"
                    class="form-control @if(!empty($errors->first('title')))border-danger @endif">
                    <span class="help-block text-danger">{{$errors->first('title')}}</span>
                </div>
                <br>
                @if(!empty($data->path))
                <div class="form-group" id="hide-group">
                    <label>現在の投稿画像(画像を変更する場合はボタンクリック)</label><br>
                    <img src="{{$data->path}}" width="30%">
                    <input type="hidden" name="path">
                    <input type="button" value="画像を変更する" id="img-change">
                </div>
                <div class="form-group" id="change-group" style="display: none">
                    <label>投稿画像</label><br>
                    <input type="file" name="path" value="写真を選択" id="img">
                </div>
                @else
                <div class="form-group" id="change-group">
                    <label>投稿画像</label><br>
                    <input type="file" name="path" value="写真を選択" id="img">
                </div>
                @endif
                <br>
                <div class="form-group">
                    <label>本文(2000文字以内)</label>
                    <span class="float-right">現在：<span id="count">0</span>文字/2000文字</span>
                    <textarea name="contents" maxlength="2000" value="{{old('contents')}}" rows="40" cols="40" class="form-control @if(!empty($errors->first('contents')))border-danger @endif" onkeyup="ShowLength(value);">{{$data->contents}}</textarea>
                    <span class="help-block text-danger">{{$errors->first('contents')}}</span>
                </div>
                <br>
                <div>
                    <input type="submit" value="送信" style="width:100%" class="btn-primary btn-lg">
                </div>
            </form>
        </div>
    </div>
</div>

<br><br><br><br>

</body>
</html>