<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>都道府県</title>
<!-- BootstrapのCSS読み込み -->
<link href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
<!-- jQuery読み込み -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
<!-- BootstrapのJS読み込み -->
<script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
<script>


    // 都道府県フォーム生成
$(function() {
    $.getJSON('pref_city.json', function(data) {
        for(var i=0; i<47; i++) {
            var code = i+1;
            code = ('00'+code).slice(-2); // ゼロパディング
        $('#select-pref').append('<option value="'+code+'">'+data[i][code].pref+'</option>');
        }
    });


// 都道府県メニューに連動した市区町村フォーム生成
    $('#select-pref').on('change', function() {
        $('#select-city option:nth-child(n+2)').remove(); // ※1 市区町村フォームクリア
            var select_pref = ('00'+$('#select-pref option:selected').val()).slice(-2);
            var key = Number(select_pref)-1;
        $.getJSON('pref_city.json', function(data) {
            for(var i=0; i<data[key][select_pref].city.length; i++){
                $('#select-city').append('<option value="'+data[key][select_pref].city[i].id+'">'+data[key][select_pref].city[i].name+'</option>');
            }
        });
    });
});

</script>
<body>

<br><br>

参考：<a href="https://lancers.work/pref-city-form-jquery-json/">このサイト</a>

<br><br>

<select id="select-pref"><option value="">都道府県を選択してください</option></select>
<select id="select-city"><option value="">市区町村を選択してください</option></select>

</body>
</html>