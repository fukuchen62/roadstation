@extends('layouts.layout_front_top')

@section('description', 'トップページのデスクリプション')

@section('keywords', 'キーワード1,キーワード2・・・')

@section('title', 'トップページ')

{{-- 該当ページのCSS --}}
@section('pageCss')
    <link rel="stylesheet" href="{{asset('assets/css/index.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/slick.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/top.css')}}">
@endsection

@section('key_visual')
    <p class="catchcopy koresae">これさえ見れば徳島で</p>
    <p class="catchcopy sakanaga">道の駅を楽しめる</p>
@endsection

{{-- メイン --}}
@section('content')
    <body>
    <header>
        <!-- g-nav mobile -->
        <nav id="wrapper">
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
        </nav>

        <!-- g-nav pc -->
        <nav class="nav-pc">
            <h1><a href="#"><img src="https://placehold.jp/80x80.png" alt="とくしままるっと道の駅"></a></h1>

            <ul>
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
        <div class="news">
            <div class="news1">
                <h2>ニュース</h2>
                <a href="#">
                    <p class="news-btn"><a href="">もっと見る</a></p>
                </a>
            </div>
            <div class="news2">
                <ul>
                    <li><a href="">New! ●月●日　カテゴリ:その他</a></li>
                    {{-- <li class="news-title"><a href="">{{$news->title}}</a></li> --}}
                    <li><a href="">New! ●月●日　カテゴリ:その他</a></li>
                    <li class="news-title"><a href="">世界初！DMVに乗ってきたんよ</a></li>
                    <li><a href="">New! ●月●日　カテゴリ:その他</a></li>
                    <li class="news-title"><a href="">世界初！DMVに乗ってきたんよ</a></li>
                </ul>
            </div>
        </div>

        <div class="map">
            <img class="tokusimamap" src="../assets/images/tizu.png" alt="地図">
        </div>

        <div class="area">
            <p class="east"><a href="">東部</p></a>
            <p class="west"><a href="">西部</p></a>
            <p class="south"><a href="">南部</p></a>
            <p class="station_detail"><a href="">詳細検索</a></p>
        </div>

        <section class="feature">
            <h2 class="feature">こんなんあるで！</h2>
            <div class="goods-wrapper">
                <ul class="goods">
                    <li><img class="goods-1" src="../storage/images/index.images/mikan.jpg" alt=""></li>
                    <li><img class="goods-1" src="../storage/images/index.images/otaniyaki.jpg" alt=""></li>
                    <li><img class="goods-1" src="../storage/images/index.images/renkon.jpg" alt=""></li>
                    <li><img class="goods-1" src="../storage/images/index.images/sakana.jpg"></li>
                    <li class="goods-2"><a href="">特産品
                            <p class="goods-strapline">徳島には自然の恵みがいっぱいあるんじょ！</p>
                        </a>
                        <p class="goods-btn"><a href="">もっと見る</a></p>
                    </li>
                    <li><img class="goods-1" src="../storage/images/index.images/sudati.jpg" alt=""></li>
                    <li><img class="goods-1" src="../storage/images/index.images/tikuwa.jpg" alt=""></li>
                    <li><img class="goods-1" src="../storage/images/index.images/wakame.jpg" alt=""></li>
                    <li><img class="goods-1" src="../storage/images/index.images/yakiimo.jpg" alt=""></li>

                </ul>
            </div>

            <div class="activity-wrapper">
                <ul class="activity">
                    <li><img class="activity-1" src="../storage/images/index.images/boat.jpg" alt=""></li>
                    <li><img class="activity-1" src="../storage/images/index.images/dmv.jpg" alt=""></li>
                    <li><img class="activity-1" src="../storage/images/index.images/aizometop.jpg" alt=""></li>
                    <li><img class="activity-1" src="../storage/images/index.images/zipline.jpg"></li>
                    <li class="activity-2"><a href="">体験
                            <p class="activity-strapline">山！川！海！<br>徳島なら全部揃っとるで！</p>
                        </a>
                        <p class="activity-btn"><a href="">もっと見る</a></p>
                    </li>

                    <li><img class="activity-1" src="../storage/images/index.images/hune.jpg" alt=""></li>
                    <li><img class="activity-1" src="../storage/images/index.images/asiyu.jpg" alt=""></li>
                    <li><img class="activity-1" src="../storage/images/index.images/udon.jpg" alt=""></li>
                    <li><img class="activity-1" src="../storage/images/index.images/ropeway.jpg" alt=""></li>

                </ul>
            </div>
        </section>

        <section class="blog">
            <h2>行ってきたんよ</h2>
            <div class="blog-container">
                <div class="blog-wrapper">
                    <div class="img-wrapper">
                        <img src="../storage/images/index.images/boat.jpg" alt="">
                        <h3 class="heading">タイトルなどが、入ります。 </h3>
                        <p class="text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                    </div>
                </div>

                <div class="blog-wrapper">
                    <div class="img-wrapper">
                        <img src="../storage/images/index.images/boat.jpg" alt="">
                        <h3 class="heading">タイトルなどが、入ります。 </h3>
                        <p class="text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                    </div>
                </div>

                <div class="blog-wrapper">
                    <div class="img-wrapper">
                        <img src="../storage/images/index.images/boat.jpg" alt="">
                        <h3 class="heading">タイトルなどが、入ります。 </h3>
                        <p class="text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                    </div>
                </div>
        </section>

        <div class="blog-btn">
            <a href=""><img src="../assets/images/blog-btn.png" alt=""></a>
        </div>



    </main>
    <footer>
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

    <script src="../assets/js/main.js"></script>
</body>
@endsection

{{-- 該当ページ専用JS --}}
@section('pageJs')
    <script src="{{ asset('assets/js/main.js') }}"></script>
     <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
@endsection
