@extends('layouts.layout_front')

{{-- タイトル --}}
@section('title', '新着情報詳細ページ')

@section('pageCss')
    <link rel="stylesheet" href="../assets/css/article.css">
@endsection

@section('key_visual')
    <!-- キービジュアル -->
    <div class="kv">
        <figure><img src="{{ asset('assets/images/news.list/news-kv.jpg') }}" alt="ニュース詳細ページ画像"></figure>
    </div>
@endsection

@section('content')

    <div class="blog-wrapper">

        <section class="blog-main">

            <p class="back-btn">
                <a href="{{ route('news') }}">＜＜一覧へ戻る</a>
            </p>

            <h3 class="blog-title">60文字以内の記事タイトル</h3>

            <div class="update-information">
                <p class="date">2023年6月10日</p>
                <p class="category">グルメ</p>
            </div>

            <img class="blog-img" src="../assets/images/cat1.jpg" alt="">

            <p class="blog-text">
                テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
            </p>

            <h3 class="roadstation-
                        information">&lt;道の駅の情報&gt;</h3>

            <p class="address">
                <a href="https://www.sanrio.co.jp/specialsite/team-purin/">くるくるなるとの詳細ページはこちら</a>
            </p>

            <div class="before-next-mobilebtn">

                <p><a href="">＜＜前の記事へ</a></p>

                <p><a href="">次の記事へ＞＞</a></p>

            </div>

            <div class="before-next-pcbtn">

                <p><a href="">＜＜前の記事へ</a></p>

                <p><a href="">次の記事へ＞＞</a></p>
            </div>

            <h3 class="relatedarticle-title">関連記事</h3>

            <div class="relatedarticle">

                <div class="relatedarticle1">

                    <a href=""><img class="relatedarticle-img" src="../storage/images/index.images/asiyu.jpg"
                            alt="">

                        <h4>60文字のタイトルが入ります。60文字のタイトルが入ります。60文字のタイトルが入ります。60文字のタイトルが入ります。</h4>

                        <div class="update-information">
                            <p class="date">2023年6月10日</p>

                            <p class="category">グルメ</p>

                        </div>

                    </a>

                </div>

                <div class="relatedarticle1">

                    <a href=""><img class="relatedarticle-img" src="../storage/images/index.images/asiyu.jpg"
                            alt="">

                        <h4>60文字のタイトルが入ります。60文字のタイトルが入ります。60文字のタイトルが入ります。60文字のタイトルが入ります。</h4>


                        <div class="update-information">

                            <p class="date">2023年6月10日</p>

                            <p class="category">グルメ</p>

                        </div>

                    </a>
                </div>

            </div>

        </section>

        {{-- カテゴリー --}}
        <section class="side">
            <h3>カテゴリー一覧</h3>
            <ul class="category_list">
                <li><a href="">更新情報</a></li>
                <li><a href="">イベント情報</a></li>
                <li><a href="">道の駅news</a></li>
            </ul>
        </section>
    </div>

@endsection
