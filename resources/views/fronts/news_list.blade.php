@extends('layouts.layout_front')

{{-- タイトル --}}
@section('title', '新着情報一覧ページ')

@section('pageCss')
    <style>
        main {
            margin: 50px;
            overflow: hidden;
        }

        h1 {
            font-size: 3rem;
            font-weight: bold;
            margin: 30px 0;
        }

        h2 {
            font-size: 1.2rem;
            font-weight: bold;
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
            margin: 30px 5px;
            width: 400px;
            height: auto;

            float: left;
        }

        img {
            width: 300px;
            height: 300px;
            object-fit: contain;
        }

        .category {
            float: right;
        }

        li {
            padding: 5px;
        }

        .link {
            clear: both;
        }

        .pagination {
            text-align: center;
        }

        .pagination li {
            display: inline-block;
        }
    </style>
@endsection

{{-- @section('pageCss')
    <link rel="stylesheet" href="{{ asset('assets/css/reset.css') }} ">
    <link rel="stylesheet" href="{{ asset('assets/css/common.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/blog_list.css') }}">
@endsection --}}

@section('content')

    <h1>新着情報詳細ページ</h1>

    <div class="cards">

        @foreach ($news as $new)
            <a href="{{ url('news-detail') }}?id={{ $new->id }}&news_category_id={{ $new->news_category_id }}">

                <div class="card">

                    <img src="{{ asset('/storage/images/' . $new->picture) }}" alt="">

                    <h2>{{ $new->title }}</h2>

                    <p>{!! $new->overview !!}</p>

                    @php
                        $ts = strtotime($new->updated_at);
                    @endphp
                    <small class="news__area--data">
                        {{ date('Y年n月j日', $ts) }}
                    </small>

                    <span>
                        {{-- {!! $new->getCategoryName() !!} --}}
                        {{ $new->newsCategory->category_name }}
                    </span>

                </div>
            </a>
        @endforeach

    </div>

    <div class="category">

        <h2>カテゴリー</h2>

        <ul>
            @foreach ($news_categories as $category)
                <li><a href="{{ url('news') }}?id={{ $category->id }}">{{ $category->category_name }}</a></li>
            @endforeach
        </ul>

    </div>

    <div class="link">{{ $news->links('pagination::bootstrap-4') }}</div>

@endsection
