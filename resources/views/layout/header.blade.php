@section('header')
<header id="header">
<h1 class="logo"><a href="#">じゅんれいっ！</a></h1>
        <nav class="menu">
            <ul>
                <li><a href="/top">ホーム</a></li>
                <li><a href="/works">検索</a></li>
                <li><a href="#">ランキング</a></li>
                <li><a href="/contact_form">お問い合わせ</a></li>
                @php
                $data = session('admin_id');
                @endphp
                @if(session('login'))
                <li><a href="/user_mypage/{{$data}}">マイページ</a></li>
                <li><a href="/logout">ログアウト</a></li>
                @else
                <li><a href="/login">ログイン</a></li>
                @endif
            </ul>
        </nav>
        <form action="/search" method="post" class="search-box">
            {{ csrf_field() }}
            <input type="text" name="text" class="text" placeholder="作品名・地名を入力してください。">
            <input type="submit" class="submit" value="検索">
        </form>
        <div class="hamburger" id="open">
            <a href="javascript:void(0)"><img src="{{ asset('img/hamburger.png') }}"></a>
        </div>
</header>
@endsection