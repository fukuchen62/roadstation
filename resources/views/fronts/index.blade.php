@extends('layouts.layout_front_top')

@section('description', 'トップページのデスクリプション')

@section('keywords', 'キーワード1,キーワード2・・・')

@section('title', 'トップページ')

{{-- 該当ページのCSS --}}
@section('pageCss')
    <link rel="stylesheet" href="{{ asset('assets/css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/common.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/index.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/slick.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/top.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">

    <!-- フォント設定 -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kiwi+Maru&family=Zen+Maru+Gothic&display=swap" rel="stylesheet">

    <script defer src="https://use.fontawesome.com/releases/v6.4.0/js/all.js"></script>
@endsection

@section('key_visual')
    <p class="catchcopy koresae">これさえ見れば徳島で</p>
    <p class="catchcopy sakanaga">道の駅を楽しめる</p>
@endsection

{{-- メイン --}}
@section('content')
    <main class="wrapper">
        <section class="news-box">
            <div class="new1">
                <h2 class="news-title">ニュース</h2>
                <p class="more-btn news-pcbtn"><a href="news_list.html">もっと見る</a></p>
            </div>

            <div class="news2">
                @foreach ($news as $news)
                <ul>
                    @php
                        $ts = strtotime($news->created_at);
                    @endphp
                    <li> <a href="{{route('newsdetail')}}?id={{$news->id}}">{{ date('Y年m月d日', $ts) }}　　{{ $news->newsCategory->category_name }}<br>
                            {!! $news->title !!}</a>
                    </li>
                </ul>
                @endforeach
            </div>
            <p class="news-mobilebtn"><a href="{{ url('news') }}">もっと見る</a></p>
        </section>

        <section class="area-map">
            <div class="map">
                <img class="tokusimamap" src="{{ asset('assets/images/tizu.png') }}" alt="地図">
                <a class="east" href="{{route('areasearch')}}?id=1">東部</a>
                <a class="west" href="{{route('areasearch')}}?id=2">西部</a>
                <a class="south" href="{{route('areasearch')}}?id=3">南部</a>
            </div>
            <p class="more-btn"><a href="{{route('ditailsearch')}}">詳細検索</a></p>
        </section>

        <section>
            <h2 class="feature-title">こんなんあるで！</h2>
            <div class="goods-wrapper">
                <ul class="goods">
                    <li><img class="goods-1" src="../storage/images/index.images/mikan.jpg" alt=""></li>
                    <li><img class="goods-1" src="../storage/images/index.images/otaniyaki.jpg" alt=""></li>
                    <li><img class="goods-1" src="../storage/images/index.images/renkon.jpg" alt=""></li>
                    <li><img class="goods-1" src="../storage/images/index.images/sakana.jpg" alt=""></li>
                    <li class="goods-2">
                        <h2 class="sp-h2">特産品</h2>
                        <p class="goods-strapline">徳島には自然の恵みがいっぱいあるんじょ！</p>

                        <a href="{{route('goods')}}">
                            <p class="pcbtn">もっと見る</p>
                        </a>
                    </li>
                    <li><img class="goods-1" src="../storage/images/index.images/sudati.jpg" alt=""></li>
                    <li><img class="goods-1" src="../storage/images/index.images/tikuwa.jpg" alt=""></li>
                    <li><img class="goods-1" src="../storage/images/index.images/wakame.jpg" alt=""></li>
                    <li><img class="goods-1" src="../storage/images/index.images/yakiimo.jpg" alt=""></li>
                </ul>
                <a href="{{route('goods')}}">
                    <p class="more-btn mobile-btn">もっと見る</p>
                </a>
            </div>



            <div class="activity-wrapper">
                <ul class="activity">
                    <li><img class="activity-1" src="../storage/images/index.images/boat.jpg" alt=""></li>
                    <li><img class="activity-1" src="../storage/images/index.images/dmv.jpg" alt=""></li>
                    <li><img class="activity-1" src="../storage/images/index.images/aizometop.jpg" alt=""></li>
                    <li><img class="activity-1" src="../storage/images/index.images/zipline.jpg" alt=""></li>
                    <li class="activity-2">
                        <h2 class="sp-h2">体験</h2>
                        <p class="activity-strapline">山！川！海！<br>徳島なら全部揃っとるで！</p>

                        <a href="{{route('activity')}}">
                            <p class="pcbtn">もっと見る</p>
                        </a>
                    </li>


                    <li><img class="activity-1" src="../storage/images/index.images/hune.jpg" alt=""></li>
                    <li><img class="activity-1" src="../storage/images/index.images/asiyu.jpg" alt=""></li>
                    <li><img class="activity-1" src="../storage/images/index.images/udon.jpg" alt=""></li>
                    <li><img class="activity-1" src="../storage/images/index.images/ropeway.jpg" alt=""></li>
                </ul>
                <a href="">
                    <p class="more-btn mobile-btn">もっと見る</p>
                </a>
            </div>
        </section>

        <section class="blog">
            <h2 class="blog-taitle">行ってきたんよ</h2>
            <div class="blog-container">
                @foreach ($blog as $blog)
                <a href="{{route('blog')}}?id={{$blog->id}}">
                    <div class="blog-wrapper">
                        <div class="img-wrapper">
                            <img src="{{ asset('/storage/images/' . $blog->picture) }}" alt="">
                            <h3 class="heading">{!!$blog->title!!}</h3>
                            <p class="text">{!!$blog->overview!!}</p>
                        </div>
                        {{-- @php
                                $ts = strtotime($blog->created_at);
                        @endphp
                            <div class="flex">
                            <div class="news__area--data">
                                {{ date('Y年m月d日', $ts) }}
                            </div>
                            <div class="enclosure">{{ $news->newsCategory->category_name }}</div>

                        </div> --}}
                    </div>
                </a>
                @endforeach
            </div>
        </section>

        <div class="blog-btn">
            <a href="../html/blog_list.html"><img src="../assets/images/blog-btn.png" alt=""></a>
        </div>

    </main>
@endsection

{{-- 該当ページ専用JS --}}
@section('pageJs')
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/slick.min.js"></script>
@endsection
