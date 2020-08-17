@section('head')
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') | じゅんれいっ！</title>
    <meta name="og:url" content="ページURL">
    <meta name="og:type" content="@yield('type')">
    <meta name="og:image" content="SNS用シェア画像" alt="じゅんれいっ！">
    <meta name="description" content="@yield('description')">
    <!-- stylesheet読み込み -->
    <link href="{{ asset('css/reset.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    @yield('pageCss')
@endsection