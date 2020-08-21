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
        <li><a href="/top">ホーム</a></li>
        <li><a href="/works">検索</a></li>
        <li><a href="#">ランキング</a></li>
        <li><a href="/contact_form">お問い合わせ</a></li>
        <li><a href="/login">ログイン</a></li>
    </ul>
    <a href="javascript:void(0)" id="close">閉じる</a>
</nav>

<!-- JavaScript読み込み -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="{{ asset('js/script.js') }}"></script>
@yield('pageJs')
@endsection