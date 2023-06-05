@extends('layouts.layout_front_top')

@section('description', 'トップページのデスクリプション')

@section('keywords', 'キーワード1,キーワード2・・・')

@section('title', 'トップページ')

{{-- 該当ページのCSS --}}
@section('pageCss')
    <link rel="stylesheet" href="{{ asset('assets/css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/common.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/index.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/slick.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/top.css') }}">
@endsection

@section('key_visual')
    <p class="catchcopy koresae">これさえ見れば徳島で</p>
    <p class="catchcopy sakanaga">道の駅を楽しめる</p>
@endsection

{{-- メイン --}}
@section('content')
    <header id="top">
        <!-- g-nav mobile -->

        <div class="kv">
        </div>
        <div class="btn-gnavi">
            <span></span>
            <span></span>
            <span></span>
        </div>

        <nav id="global-navi">
            <div class="hamburger-menu-list">
                <ul class="menu">
                    <li><a href="../html/station_list.html"><i class="fa-solid fa-book-bookmark"></i>
                            道の駅一覧
                        </a></li>
                    <li><a href="../html/station_area.html"><i class="fa-solid fa-book-bookmark"></i>
                            エリア検索</a></li>
                    <li><a href="../html/station_detail.html"><i class="fa-solid fa-book-bookmark"></i>
                            詳細検索</a></li>
                    <li><a href="../html/goods_list.html"><i class="fa-solid fa-book-bookmark"></i>
                            特産品</a></li>
                    <li><a href="../html/activity_list.html"><i class="fa-solid fa-book-bookmark"></i>
                            体験</a></li>
                    <li><a href="../html/blog_list.html"><i class="fa-solid fa-book-bookmark"></i>
                            行ってみたんよ</a></li>
                    <li><a href="../html/like.html"><i class="fa-solid fa-book-bookmark"></i>
                            お気に入り</a></li>
                </ul>
            </div>
        </nav>

        <!-- g-nav pc -->
        <nav id="global-nav" class="nav-pc">
            <h1><a href="#"><img src="https://placehold.jp/80x80.png" alt="とくしままるっと道の駅"></a></h1>



            <ul class="global-list">
                <li><a href="../html/station_list.html"><i class="fa-solid fa-book-bookmark"></i>
                        道の駅一覧
                    </a></li>
                <li><a href="../html/station_area.html"><i class="fa-solid fa-book-bookmark"></i>
                        エリア検索</a></li>
                <li><a href="../html/station_detail.html"><i class="fa-solid fa-book-bookmark"></i>
                        詳細検索</a></li>
                <li><a href="../html/goods_list.html"><i class="fa-solid fa-book-bookmark"></i>
                        特産品</a></li>
                <li><a href="../html/activity_list.html"><i class="fa-solid fa-book-bookmark"></i>
                        体験</a></li>
                <li><a href="../html/blog_list.html"><i class="fa-solid fa-book-bookmark"></i>
                        行ってみたんよ</a></li>
                <li><a href="../html/like.html"><i class="fa-solid fa-book-bookmark"></i>
                        お気に入り</a></li>
            </ul>

        </nav>
    </header>


    <main class="wrapper">
        <section class="news-box">
            <div class="new1">
                <h2 class="news-title">ニュース</h2>
                <p class="news-pcbtn"><a href="">もっと見る</a></p>

            </div>

            <div class="news2">
                <ul>
                    @foreach ($news as $news)
                        <a href="" class="" id="">
                            @php
                                $ts = strtotime($news->created_at);
                            @endphp
                            <li class="news__area--data">
                                {{ date('Y年m月d日', $ts) }}
                            </li>

                            @foreach ($category as $category)
                                @php
                                    $categoryName = $news::getCategoryName($id);
                                @endphp
                            @endforeach


                            {{-- <li>カテゴリー：{{$news->news_category_id}}</li> --}}
                            <li>カテゴリー：{{ $news->newsCategory->category_name }}</li>
                            <li>タイトル：{{ $news->title }}</li>
                        </a>
                    @endforeach
                </ul>
            </div>

            <p class="news-mobilebtn"><a href="">もっと見る</a></p>
        </section>

        <section class="area-map">
            <div class="map">
                <img class="tokusimamap" src="../assets/images/tizu.png" alt="地図">
                <a class="east" href="">東部</a>
                <a class="west" href="">西部</a>
                <a class="south" href="">南部</a>
            </div>
            <p class="station_detail"><a href="">詳細検索</a></p>
        </section>

        <section>
            <h2 class="feature-title">こんなんあるで！</h2>
            <div class="goods-wrapper">
                <ul class="goods">
                    <li><img class="goods-1" src="../storage/images/index.images/mikan.jpg" alt=""></li>
                    <li><img class="goods-1" src="../storage/images/index.images/otaniyaki.jpg" alt=""></li>
                    <li><img class="goods-1" src="../storage/images/index.images/renkon.jpg" alt=""></li>
                    <li><img class="goods-1" src="../storage/images/index.images/sakana.jpg"></li>
                    <li class="goods-2">
                        <h2 class="sp-h2">特産品</h2>
                        <p class="goods-strapline">徳島には自然の恵みがいっぱいあるんじょ！</p>

                        <p class="goods-pcbtn"><a href="">もっと見る</a></p>
                    </li>
                    <li><img class="goods-1" src="../storage/images/index.images/sudati.jpg" alt=""></li>
                    <li><img class="goods-1" src="../storage/images/index.images/tikuwa.jpg" alt=""></li>
                    <li><img class="goods-1" src="../storage/images/index.images/wakame.jpg" alt=""></li>
                    <li><img class="goods-1" src="../storage/images/index.images/yakiimo.jpg" alt=""></li>
                </ul>
                <p class="goods-mobilebtn"><a href="">もっと見る</a></p>
            </div>



            <div class="activity-wrapper">
                <ul class="activity">
                    <li><img class="activity-1" src="../storage/images/index.images/boat.jpg" alt=""></li>
                    <li><img class="activity-1" src="../storage/images/index.images/dmv.jpg" alt=""></li>
                    <li><img class="activity-1" src="../storage/images/index.images/aizometop.jpg" alt=""></li>
                    <li><img class="activity-1" src="../storage/images/index.images/zipline.jpg"></li>
                    <li class="activity-2">
                        <h2 class="sp-h2">体験</h2>
                        <p class="activity-strapline">山！川！海！<br>徳島なら全部揃っとるで！</p>
                        <p class="activity-pcbtn"><a href="">もっと見る</a></p>
                    </li>

                    <li><img class="activity-1" src="../storage/images/index.images/hune.jpg" alt=""></li>
                    <li><img class="activity-1" src="../storage/images/index.images/asiyu.jpg" alt=""></li>
                    <li><img class="activity-1" src="../storage/images/index.images/udon.jpg" alt=""></li>
                    <li><img class="activity-1" src="../storage/images/index.images/ropeway.jpg" alt=""></li>
                </ul>
                <p class="activity-mobilebtn"><a href="">もっと見る</a></p>
            </div>
        </section>

        <section class="blog">
            <h2 class="blog-taitle">行ってきたんよ</h2>
            <div class="blog-container">
                <a href="">
                    <div class="blog-wrapper">
                        <div class="img-wrapper">
                            <img src="../storage/images/index.images/boat.jpg" alt="">
                            <h3 class="heading">タイトルなどが、入ります。 </h3>
                            <p class="text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                        </div>
                    </div>
                </a>

                <a href="">
                    <div class="blog-wrapper">
                        <div class="img-wrapper">
                            <img src="../storage/images/index.images/boat.jpg" alt="">
                            <h3 class="heading">タイトルなどが、入ります。 </h3>
                            <p class="text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                        </div>
                    </div>
                </a>

                <a href="">
                    <div class="blog-wrapper">
                        <div class="img-wrapper">
                            <img src="../storage/images/index.images/boat.jpg" alt="">
                            <h3 class="heading">タイトルなどが、入ります。 </h3>
                            <p class="text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                        </div>
                    </div>
                </a>
            </div>
        </section>

        <div class="blog-btn">
            <a href="../html/blog_list.html"><img src="../assets/images/blog-btn.png" alt=""></a>
        </div>

    </main>

    <footer>
        <a class="pagetop" href="#">
            <div class="pagetop__arrow"></div>
        </a>

        <ul>
            <li><a href="../html/station_list.html"><i class="fa-solid fa-book-bookmark"></i>
                    道の駅一覧</a></li>
            <li><a href="../html/station_area.html"><i class="fa-solid fa-book-bookmark"></i>
                    エリア検索</a></li>
            <li><a href="../html/station_detail.html"><i class="fa-solid fa-book-bookmark"></i>
                    詳細検索</a></li>
            <li><a href="../html/goods_list.html"><i class="fa-solid fa-book-bookmark"></i>
                    特産品</a></li>
            <li><a href="../html/activity_list.html"><i class="fa-solid fa-book-bookmark"></i>
                    体験</a></li>
            <li><a href="../html/blog_list.html"><i class="fa-solid fa-book-bookmark"></i>
                    行ってみたんよ</a></li>
            <li><a href="../html/like.html"><i class="fa-solid fa-book-bookmark"></i>
                    お気に入り</a></li>
        </ul>
    </footer>
@endsection

{{-- 該当ページ専用JS --}}
@section('pageJs')
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
@endsection
