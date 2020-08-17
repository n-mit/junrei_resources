@section('footer')
<footer id="footer">
    <div id="inner">
        <p class="copyright">©じゅんれいっ！運営委員会</p>
    </div>
</footer>

<!-- ハンバーガーメニュー -->
<nav class="menu-link">
    <p class="link-title">メニュー</p>
    <ul class="menu-ul">
        <li><a href="#">ホーム</a></li>
        <li><a href="#">検索</a></li>
        <li><a href="#">写真を見る</a></li>
        <li><a href="#">ランキング</a></li>
        <li><a href="#">お問い合わせ</a></li>
        <li><a href="#">ログイン</a></li>
    </ul>
    <a href="javascript:void(0)" id="close">閉じる</a>
</nav>

<!-- JavaScript読み込み -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="{{ asset('js/script.js') }}"></script>
@yield('pageJs')
@endsection