<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Interval grant</title>
<!-- BootstrapのCSS読み込み -->
<link href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
<!-- jQuery読み込み -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
<!-- BootstrapのJS読み込み -->
<script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
<body>

<nav class="navbar navbar-expand-sm navbar-dark bg-info mt-3 mb-3">
    <img src="{{asset('img/logo.png')}}">
    <h2 class="navber-brand">Interval grant</h2>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav mr-auto">
            <li class="nav-link dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                各種登録
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="/company_regi">事業所登録</a>
                    <a class="dropdown-item" href="/user_regi">ユーザー登録</a>
                    <a class="dropdown-item" href="/preset_regi">プリセット登録</a>
                    <!--<a class="dropdown-item" href="/document_regi">書類登録</a>-->
                </div>
            </li>
            <li class="nav-link dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                各種一覧
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="/company_list">事業所一覧</a>
                    <a class="dropdown-item" href="/user_list">ユーザー一覧</a>
                    <a class="dropdown-item" href="/preset_list">プリセット一覧</a>
                    <!--<a class="dropdown-item" href="/document_list">書類一覧</a>-->
                </div>
            </li>
        </ul>
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="/login">ログアウト</a>
            </li>
        </ul>
    </div>
</nav>

@yield('contents')

</body>
</html>