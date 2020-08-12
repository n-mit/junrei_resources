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
            <h2>投稿内容の編集をプレビュー</h2>
        </div>
    </div>
    <br><br><br>
    <div class="row">
        <form  method="post" action="{{url('/test_edit_done', $old_data->id)}}" accept-charset="UTF-8" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="col-md-12 col-ms-12 col-xs-12 text-center">
                <h2>{{$data['title']}}</h2>
                <input type="hidden" name="title" value="{{$data['title']}}">
            </div>
            <br><br>
            @if(!empty($img_check))
            <div class="col-md-12 col-ms-12 col-xs-12 text-center">
                <img src="{{$data['read_temp_path']}}" width="50%">
                <input type="hidden" name="path" value="{{$data['temp_path']}}">
            </div>
            <br><br>
            @endif
            <div class="col-md-12 col-ms-12 col-xs-12 text-center">
                <div>{!! nl2br($data['contents']) !!}</div>
                <input type="hidden" name="contents" value="{{$data['contents']}}">
            </div>
            <br>
            <div class="text-center">
                <input type="submit" value="送信" style="width:50%" class="btn-primary btn-lg">
            </div>
        </form>
    </div>
</div>

<br><br><br><br>

</body>
</html>