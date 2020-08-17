<!DOCTYPE html>
<html lang="ja">
<head>
@yield('head')
</head>
<body>
    <div class="contents">
        @yield('header')
            <main>
                @yield('content')
            </main>
    </div>
        @yield('footer')
</body>
</html>