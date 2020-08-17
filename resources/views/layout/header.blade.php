@section('header')
<header id="header">
<h1 class="logo"><a href="#">じゅんれいっ！</a></h1>
        <nav class="menu">
            <ul>
                <li><a href="#">ホーム</a></li>
                <li><a href="#">写真を見る</a></li>
                <li><a href="#">ランキング</a></li>
                <li><a href="#">お問い合わせ</a></li>
                <li><a href="#">ログイン</a></li>
            </ul>
        </nav>
        <form action="#" method="POST" class="search-box">
            <input type="text" class="text" placeholder="作品名・地名を入力してください。">
            <input type="submit" class="submit" value="検索">
        </form>
        <div class="hamburger" id="open">
            <img src="{{ asset('img/hamburger.png') }}">
        </div>
</header>
@endsection