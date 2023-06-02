@extends('layouts.layout_front')

{{-- タイトル --}}
@section('title', '新着情報詳細ページ')

@section('pageCss')
    <style>
        main {
            margin: 30px;
            overflow: hidden;
        }

        .detail {
            width: 1300px;
            height: auto;
            float: left;
            overflow: hidden;

        }

        h1 {
            font-size: 2rem;
            font-weight: bold;
        }

        .station {
            font-weight: bold;
        }

        span {
            margin: 10px;
        }

        .cards {
            /* display: flex; */
            float: left;
            width: 1200px;
            height: auto;

        }

        .card {
            border: 1px solid #949393;
            padding: 20px;
            margin: 40px 5px;
            width: 400px;
            height: auto;

            float: left;
        }

        .category {
            width: 350px;
            height: 350px;
        }

        .news {
            font-size: 2rem;
            font-weight: bold;
            margin-top: 30px;
            clear: both;
        }

        .categories {
            float: right;
        }
    </style>
@endsection

@section('content')

    <div class="wrap">

        <div class="detail">
            @foreach ($news as $new)
                <h1>{{ $new->title }}</h1>

                <div>
                    <span>{{ $new->updated_at }}</span>
                    <span>{{ $new->newsCategory->category_name }}</span>
                </div>

                <img src="{{ asset('/storage/images/' . $new->picture) }}" alt="">

                <p>{!! $new->discription !!}</p>

                <span>
                    <a href="{{ url('news-detail') }}?id={{ $new->id - 1 }}">前のページへ</a>
                </span>
                <span>
                    <a href="{{ url('news-detail') }}?id={{ $new->id + 1 }}">次のページへ</a>
                </span>

                <p class="station">
                    <a href="{{ url('station-detail') }}">道の駅詳細ページへ</a>
                </p>
            @endforeach
        </div>

        <div class="cards">

            <h2 class="news">関連記事</h2>

            @foreach ($categories as $category)
                <a href="{{ url('news-detail') }}?id={{ $category->id }}&news_category_id={{ $new->news_category_id }}">

                    <div class="card">

                        <img class="category" src="{{ asset('/storage/images/' . $category->picture) }}" alt="">

                        <h2>{{ $category->title }} </h2>

                        <p>{!! $category->overview !!}</p>

                        <small>{{ $category->created_at }}</small>

                        <span>
                            {{ $category->newsCategory->category_name }}
                        </span>

                    </div>
                </a>
            @endforeach

        </div>

        <div class="categories">

            <h2>カテゴリー</h2>

            <ul>
                @foreach ($news_categories as $category)
                    <li><a href="{{ url('news') }}?id={{ $category->id }}">{{ $category->category_name }}</a></li>
                @endforeach
            </ul>

        </div>

    </div>

@endsection
