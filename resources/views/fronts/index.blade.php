@extends('layouts.layout_front_top')

@section('description', 'トップページのデスクリプション')

@section('keywords', 'キーワード1,キーワード2・・・')

@section('title', 'トップページ')

{{-- 該当ページのCSS --}}
@section('pageCss')
    <link rel="stylesheet" href="{{ asset('assets/css/index.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/slick.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/slick-theme.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">

    <!-- フォント設定 -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kiwi+Maru&family=Zen+Maru+Gothic&display=swap" rel="stylesheet">

    <!-- ファビコン -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon/favicon.ico') }}">

    <script defer src="https://use.fontawesome.com/releases/v6.4.0/js/all.js"></script>
@endsection

@section('key_visual')
    <p class="catchcopy koresae">これさえ見れば徳島で</p>
    <p class="catchcopy sakanaga">道の駅を楽しめる</p>
@endsection

{{-- メイン --}}
@section('content')
    <section class="news-box">
        <div>
            <h2 class="news-title">ニュース</h2>
            <a class="pcbtn btn" href="{{ route('news') }}">もっと見る</a>
        </div>

        <!-- 記事リスト -->
        <ul class="article-list">
            @foreach ($news as $news)
                <ul>
                    @php
                        $ts = strtotime($news->created_at);
                    @endphp
                    <li>
                        <a href="{{ route('newsdetail') }}?id={{ $news->id }}">{{ date('Y年m月d日', $ts) }}　　{{ $news->newsCategory->category_name }}<br>
                            {!! $news->title !!}</a>
                </ul>
            @endforeach
        </ul>
        <p class="news-mobilebtn btn"><a href="{{ route('news') }}">もっと見る</a></p>
    </section>


    <section class="area-map">
        <div class="map">
            <img class="tokusimamap" src="{{ asset('assets/images/illustrations/tokushima_map.png') }}" alt="地図">
            <a class="east" href="{{ route('areasearch') }}?area_id=1">東部</a>
            <a class="west" href="{{ route('areasearch') }}?area_id=2">西部</a>
            <a class="south" href="{{ route('areasearch') }}?area_id=3">南部</a>
        </div>
        <a class="btn" href="{{ route('ditailsearch') }}">詳細検索</a>
    </section>

    <section>
        <div class="section-title01">
            <h2>こんなんあるで！</h2>
        </div>

        <div class="goods-wrapper">
            <ul class="goods">
                <li><img class="image-tile" src="{{ asset('assets/images/index/mikan.jpg') }}" alt=""></li>
                <li><img class="image-tile" src="{{ asset('assets/images/index/otaniyaki.jpg') }}" alt=""></li>
                <li><img class="image-tile" src="{{ asset('assets/images/index/renkon.jpg') }}" alt=""></li>
                <li><img class="image-tile" src="{{ asset('assets/images/index/sakana.jpg') }}" alt=""></li>
                <li class="goods-title">
                    <h2 class="sp-h2">特産品</h2>
                    <p class="goods-strapline">徳島には自然の恵みがいっぱいあるんじょ！</p>

                    <img src="{{ asset('assets/images/illustrations/anime1.gif') }}" alt="" width="130px"
                        height="130px" class="anime1">

                    <img src="{{ asset('assets/images/illustrations/anime4.gif') }}" alt="" width="80px"
                        height="80px" class="anime4">
                    <a class="sp-btn" href="{{ route('goods') }}">
                        もっと見る
                    </a>
                </li>
                <li><img class="image-tile" src="{{ asset('assets/images/index/sudati.jpg') }}" alt=""></li>
                <li><img class="image-tile" src="{{ asset('assets/images/index/tikuwa.jpg') }}" alt=""></li>
                <li><img class="image-tile" src="{{ asset('assets/images/index/wakame.jpg') }}" alt=""></li>
                <li><img class="image-tile" src="{{ asset('assets/images/index/yakiimo.jpg') }}" alt=""></li>
            </ul>

            <a href="{{ route('goods') }}">
                <p class="btn mobile-btn">もっと見る</p>
            </a>
        </div>

        <div class="section-title02">
            <h2>こんなんやってみ！</h2>
        </div>
        <div class="activity-wrapper">
            <ul class="activity">
                <li><img class="image-tile" src="{{ asset('assets/images/index/boat.jpg') }}" alt=""></li>
                <li><img class="image-tile" src="{{ asset('assets/images/index/dmv.jpg') }}" alt=""></li>
                <li><img class="image-tile" src="{{ asset('assets/images/index/aizometop.jpg') }}" alt=""></li>
                <li><img class="image-tile" src="{{ asset('assets/images/index/zipline.jpg') }}" alt=""></li>
                <li class="activity-title">
                    <h2 class="sp-h2">体験</h2>
                    <p class="activity-strapline">山！川！海！<br>徳島なら全部揃っとるで！</p>

                    <img src="{{ asset('assets/images/illustrations/anime2.gif') }}" alt="" width="100px"
                        height="100px" class="anime2">

                    <img src="{{ asset('assets/images/illustrations/anime3.gif') }}" alt="" width="80px"
                        height="80px" class="anime3">

                    <a class="sp-btn" href=" {{ route('activity') }}">
                        もっと見る
                    </a>
                </li>


                <li><img class="image-tile" src="{{ asset('assets/images/index/hune.jpg') }}" alt=""></li>
                <li><img class="image-tile" src="{{ asset('assets/images/index/asiyu.jpg') }}" alt=""></li>
                <li><img class="image-tile" src="{{ asset('assets/images/index/udon.jpg') }}" alt=""></li>
                <li><img class="image-tile" src="{{ asset('assets/images/index/ropeway.jpg') }}" alt=""></li>
            </ul>
            <a href="">
                <p class="mobilebtn btn">もっと見る</p>
            </a>
        </div>
    </section>


    <div class="section-title03">
        <h2>行ってきたんよ！</h2>
    </div>
    <div class="blog-main">
        <div class="blog-wrapper">
            @foreach ($blog as $blog)
                <a href="{{ route('blog') }}?id={{ $blog->id }}&blog_category_id={{ $blog->blog_category_id }}"
                    class="blog-card">

                    <img class="card-img" src="{{ asset('/storage/images/' . $blog->picture) }}" alt="no-img">

                    <h3>{!! $blog->title !!}</h3>

                    @php
                        $ts = strtotime($blog->created_at);
                    @endphp

                    <div class="update-information">
                        <p class="date">{{ date('Y年m月d日', $ts) }}</p>
                        <p class="category">{{ $blog->blogCategory->category_name }}</p>
                    </div>
                    <p class="text">{!! $blog->overview !!}</p>
                </a>
            @endforeach
        </div>
    </div>

    <div class="blog-btn">
        <a href="{{ route('bloglist') }}"><img src="{{ asset('assets/images/blog-btn.png') }}" alt="ブログボタン"></a>
    </div>
@endsection

{{-- 該当ページ専用JS --}}
@section('pageJs')
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/slick.min.js"></script>
@endsection
