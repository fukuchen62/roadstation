<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">

    {{-- デディスクリプション --}}
    <!-- <meta name="description" content="@yield('description')"> -->
    <meta name="description" content="徳島県内の「道の駅」の検策、体験、グルメ、お土産、特産品、工芸品、レビューなど。アクティビティを体験したり実際に訪れて感じた事をテーマにしたブログは必見！">

    {{-- キーワード --}}
    <!-- <meta name="keywords" content="@yield('keywords')"> -->
    <meta name="keywords" content="道の駅、検索、徳島、エリア検索、人気、道の駅一覧">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">

    <!-- ファビコン -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon/favicon.ico') }}">

    {{-- ページタイトル --}}
    <title>@yield('title')</title>

    <!-- reset.cssファイルを読み込む -->
    <link rel=" stylesheet" href="{{ asset('assets/css/reset.css') }}">
    <!-- 共通のCSSファイル -->
    <link rel="stylesheet" href="{{ asset('assets/css/common.css') }}">
    {{-- 独自のCSSファイルを読み込む --}}
    @yield('pageCss')

    {{-- 独自のJSファイルを読み込む(道の駅詳細ページのみ) --}}
    @yield('pageJs1')

    <!-- jqueryライブラリ -->
    <script src="{{ asset('assets/js/vendor/jquery-3.6.3.min.js') }}"></script>

    <!-- フォント設定 -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kiwi+Maru&family=Zen+Maru+Gothic&display=swap"
        rel="stylesheet">

    <!-- アイコンフォント -->
    <script defer src="https://use.fontawesome.com/releases/v6.4.0/js/all.js"></script>

    {{-- トークンを読み込む --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- Adobefontの導入 --}}
    <script>
        (function(d) {
            var config = {
                    kitId: 'xan8yzi',
                    scriptTimeout: 3000,
                    async: true
                },
                h = d.documentElement,
                t = setTimeout(function() {
                    h.className = h.className.replace(/\bwf-loading\b/g, "") + " wf-inactive";
                }, config.scriptTimeout),
                tk = d.createElement("script"),
                f = false,
                s = d.getElementsByTagName("script")[0],
                a;
            h.className += " wf-loading";
            tk.src = 'https://use.typekit.net/' + config.kitId + '.js';
            tk.async = true;
            tk.onload = tk.onreadystatechange = function() {
                a = this.readyState;
                if (f || a && a != "complete" && a != "loaded") return;
                f = true;
                clearTimeout(t);
                try {
                    Typekit.load(config)
                } catch (e) {}
            };
            s.parentNode.insertBefore(tk, s)
        })(document);
    </script>

</head>

<body>

    {{-- ヘッダー --}}
    @include('includes.front_header')

    {{-- keyビジュアル --}}
    @yield('key_visual')

    {{-- メインコンテンツ --}}
    <main id="main" class="wrapper">
        @yield('content')
    </main>

    {{-- フッター --}}
    @include('includes.front_footer')

    <!-- 共通のjsファイル -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

    {{-- 独自のJSファイルを読み込む --}}
    @yield('pageJs2')
</body>

</html>
