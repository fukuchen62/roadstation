@extends('layouts.layout_front')

{{-- タイトル --}}
@section('title', 'ニュース詳細ページ | 徳島まるっと道の駅')

@section('pageCss')
    <link rel="stylesheet" href="{{ asset('assets/css/article.css') }}">
@endsection

@section('key_visual')
    <!-- キービジュアル -->
    <div class="kv">
        <figure><img src="{{ asset('assets/images/news.list/news-kv.jpg') }}" alt="キービジュアル"></figure>
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
            <h3 class="blog-title">{{ $news_item->title }}</h3>

            <div class="update-information">
                @php
                    $ts = strtotime($news_item->updated_at);
                @endphp
                <p class="date"> {{ date('Y年n月j日', $ts) }}</p>

                <p class="category">{{ $news_item->newsCategory->category_name }}</p>
            </div>

            @if ($news_item->picture)
                <img class="blog-img" src="{{ asset('/storage/images/' . $news_item->picture) }}"
                    alt="{{ $news_item->title }}の画像">
            @else
                <img class="blog-img" src="{{ asset('/storage/images/no-image.png') }}" alt="画像無し">
            @endif

            <p class="blog-text">
                {!! $news_item->discription !!}
            </p>

            {{-- 関連ブログ --}}
            @if ($blogs)
                @foreach ($blogs as $blog)
                    <h3 class="roadstation-
                        information">&lt; 関連ブログの情報&gt; </h3>

                    <p class="address">

                        <a class="stationBtn" href="{{ url('blog-detail') }}?id={{ $blog->id }}">{{ $blog->title }}
                        </a>

                    </p>
                @endforeach
            @endif

            {{-- 関連道の駅 --}}
            <h3 class="roadstation-
                        information">&lt; 関連道の駅の情報&gt; </h3>

            <p class="address">

                @php
                    $station_list = $news_item->station_list;
                    $id_list = explode('|', $station_list);
                @endphp

                @foreach ($id_list as $id)
                    @php
                        $id = $news_item->changeName($id);
                        $name = $news_item::getRoadstationName($id);
                    @endphp

                    <a class="stationBtn" href="{{ url('station-detail') }}?id={{ $id }}">{{ $name }}
                    </a>
                @endforeach
            </p>

            {{-- 前後移動モバイル --}}
            <div class="before-next-mobilebtn">

                @if ($news_item->previous() != null)
                    <p><a
                            href="{{ url('news-detail') }}?id={{ $news_item->previous()->id }}&news_category_id={{ $news_item->news_category_id }}&memo={{ $news_item->memo }}">＜＜前の記事へ</a>
                    </p>
                @endif

                @if ($news_item->next() != null)
                    <p><a
                            href="{{ url('news-detail') }}?id={{ $news_item->next()->id }}&news_category_id={{ $news_item->news_category_id }}&memo={{ $news_item->memo }}">次の記事へ＞＞</a>
                    </p>
                @endif

            </div>

            {{-- 前後移動PC --}}
            <div class="before-next-pcbtn">
                @if ($news_item->previous() != null)
                    <p><a
                            href="{{ url('news-detail') }}?id={{ $news_item->previous()->id }}&news_category_id={{ $news_item->news_category_id }}&memo={{ $news_item->memo }}">＜＜前の記事へ</a>
                    </p>
                @endif

                @if ($news_item->next() != null)
                    <p><a
                            href="{{ url('news-detail') }}?id={{ $news_item->next()->id }}&news_category_id={{ $news_item->news_category_id }}&memo={{ $news_item->memo }}">次の記事へ＞＞</a>
                    </p>
                @endif

            </div>
            {{-- @endforeach --}}

            {{-- 関連記事 --}}
            <h3 class="relatedarticle-title">関連記事</h3>

            <div class="relatedarticle">

                @foreach ($categories as $category)
                    <div class="relatedarticle1">

                        <a
                            href="{{ url('news-detail') }}?id={{ $category->id }}&news_category_id={{ $news_item->news_category_id }}&memo={{ $news_item->memo }}">

                            <img class="relatedarticle-img" src="{{ asset('/storage/images/' . $category->picture) }}"
                                alt="ニュース画像">

                            <h4>{{ $category->title }}</h4>

                            <div class="update-information">

                                @php
                                    $ts = strtotime($news_item->updated_at);
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
                            href="{{ url('news') }}?news_category_id={{ $category->id }}">{{ $category->category_name }}
                            ({{ $category->getCount() }})
                        </a>
                    </li>
                    <li></li>
                @endforeach
            </ul>

            <div class="side-img">
                <img src="{{ asset('assets/images/illustrations/tanuki-gourmet.png') }}" alt="キャラクター画像">
            </div>
        </section>
    </div>

@endsection
