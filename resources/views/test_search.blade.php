<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>検索</title>
<!-- BootstrapのCSS読み込み -->
<link href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css" />{{--autocomplete鵜使うためのui--}}
<!-- jQuery読み込み -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
<!-- BootstrapのJS読み込み -->
<script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>{{--autocomplete鵜使うためのui--}}

<script>

$(function() {
    $('#title').keyup(function() {
        let val = $('#title').val();
        let data = @json($data);
        if(data.length>0) {
            $("#title").autocomplete({
                source: data
            });
        };
    });
});

</script>
<body>

<br><br>

<div class="container">
    <div class="row">
        <div class="col-md-12 col-ms-12 col-xs-12 text-center">
            <form class="form-group">
                <input type="text" name="title" id="title" class="form-control">
                <br><br>
                <input type="submit" value="探す" class="btn-lg">
            </form>
        </div>
    </div>
</div>

</body>
</html>