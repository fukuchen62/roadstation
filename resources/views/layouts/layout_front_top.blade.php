<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">


    {{-- ★編集要 --}}
    {{-- ディスカッション --}}
    <meta name="description" content="@yield('description')">
    {{-- <meta name="description" content="descriptiondescriptiondescriptiondescription"> --}}


    {{-- ★編集要 --}}
    {{-- キーワード --}}
    <meta name="keywords" content="@yield('keywords')">
    {{-- <meta name="keywords"
        content="descriptiondescriptiondescriptiondescription"> --}}


    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">


    {{-- ★必要かチェック要 --}}
    <!-- faviconを読み込む -->
    <link rel="icon" href="{{ asset('assets/images/icon/favicon.ico') }}" id="favicon">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/images/icon/apple_touch_icon_180x180.png') }}">


    {{-- ページタイトル --}}
    <title>@yield('title')</title>



    <!-- reset.cssファイルを読み込む -->
    <link rel="stylesheet" href="{{ asset('assets/css/reset.css') }}">

    <!-- 共通のCSSファイル -->
    <link rel="stylesheet" href="{{ asset('assets/css/common.css') }}">

    {{-- 独自のCSSファイルを読み込む --}}
    @yield('pageCss')


    <!-- jqueryライブラリ -->
    <script src="{{ asset('assets/js/vendor/jquery-3.6.3.min.js') }}"></script>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>


    <!-- slick -->
    <link rel="stylesheet" type="text/css" href="css/slick.css" />
    <script type="text/javascript" src="js/slick.min.js"></script>


    <!-- フォント設定 -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kiwi+Maru&family=Zen+Maru+Gothic&display=swap"
        rel="stylesheet">


    <!-- アイコンフォント -->
    <script defer src="https://use.fontawesome.com/releases/v6.4.0/js/all.js"></script>


    {{-- トークンを読み込む --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">


</head>

<body>

    {{-- ヘッダー --}}
    @include('includes.front_top_header')

    {{-- メインコンテンツ --}}
    <main id="main">
        @yield('content')
    </main>

    {{-- フッター --}}
    @include('includes.front_footer')

    <!-- 共通のjsファイル -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
    {{-- 独自のJSファイルを読み込む --}}
    @yield('pageJs')
</body>

</html>
