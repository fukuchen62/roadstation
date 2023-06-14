@extends('layouts.layout_front')

{{-- タイトル --}}
@section('title', '新着情報詳細ページ')

@section('pageCss')
    <link rel="stylesheet" href="{{ asset('assets/css/article.css') }}">
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

            {{-- 記事本文 --}}
            {{-- @foreach ($news as $new) --}}
            <h3 class="blog-title">{{ $new->title }}</h3>

            <div class="update-information">

                @php
                    $ts = strtotime($new->updated_at);
                @endphp
                <p class="date"> {{ date('Y年n月j日', $ts) }}</p>

                <p class="category">{{ $new->newsCategory->category_name }}</p>
            </div>

            @if ($new->picture)
                <img class="blog-img" src="{{ asset('/storage/images/' . $new->picture) }}" alt="">
            @else
                <img class="blog-img" src="{{ asset('/storage/images/no-image.png') }}" alt="">
            @endif

            <p class="blog-text">
                {!! $new->discription !!}
            </p>

            <h3 class="roadstation-
                        information">&lt; 関連道の駅の情報&gt; </h3>

            <p class="address">

                @php
                    $station_list = $new->station_list;
                    $id_list = explode('|', $station_list);
                @endphp

                @foreach ($id_list as $id)
                    @php
                        $id = $new->changeName($id);
                        $name = $new::getRoadstationName($id);
                    @endphp

                    <a class="stationBtn" href="{{ url('station-detail') }}?id={{ $id }}">{{ $name }}
                    </a>
                @endforeach
            </p>

            {{-- 前後移動モバイル --}}
            <div class="before-next-mobilebtn">

                @if ($new->previous() != null)
                    <p><a href="{{ url('news-detail') }}?id={{ $new->previous()->id }}">＜＜前の記事へ</a></p>
                @endif

                @if ($new->next() != null)
                    <p><a href="{{ url('news-detail') }}?id={{ $new->next()->id }}">次の記事へ＞＞</a></p>
                @endif

            </div>

            {{-- 前後移動PC --}}
            <div class="before-next-pcbtn">
                @if ($new->previous() != null)
                    <p><a href="{{ url('news-detail') }}?id={{ $new->previous()->id }}">＜＜前の記事へ</a></p>
                @endif

                @if ($new->next() != null)
                    <p><a href="{{ url('news-detail') }}?id={{ $new->next()->id }}">次の記事へ＞＞</a></p>
                @endif

            </div>
            {{-- @endforeach --}}

            {{-- 関連記事 --}}
            <h3 class="relatedarticle-title">関連記事</h3>

            <div class="relatedarticle">

                @foreach ($categories as $category)
                    <div class="relatedarticle1">

                        <a
                            href="{{ url('news-detail') }}?id={{ $category->id }}&news_category_id={{ $new->news_category_id }}">

                            <img class="relatedarticle-img" src="{{ asset('/storage/images/' . $category->picture) }}"
                                alt="ニュース画像">

                            <h4>{{ $category->title }}</h4>

                            <div class="update-information">

                                @php
                                    $ts = strtotime($new->updated_at);
                                @endphp
                                <p class="date">{{ date('Y年n月j日', $ts) }}</p>

                                <p class="category"> {{ $category->newsCategory->category_name }}</p>

                            </div>

                        </a>

                    </div>
                @endforeach

            </div>

        </section>

        {{-- カテゴリー --}}
        <section class="side">
            <h3 class="category-title">カテゴリー一覧</h3>
            <ul class="category_list">
                @foreach ($news_categories as $category)
                    <li class="category-name"><a
                            href="{{ url('news') }}?news_category_id={{ $category->id }}">{{ $category->category_name }}</a>
                    </li>
                    <li></li>
                @endforeach
            </ul>
        </section>
    </div>

@endsection
