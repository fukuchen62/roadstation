@extends('layouts.layout_front')

{{-- タイトル --}}
@section('title', '新着情報一覧ページ')

@section('pageCss')

    <link rel="stylesheet" href="{{ asset('assets/css/blog_list.css') }}">

    <style>
        .pagination {
            text-align: center;
        }

        .pagination li {
            display: inline-block;
        }
    </style>
@endsection



@section('content')

    <main class="wrapper">

        <div class="blog-main">

            <div class="blog-wrapper">

                @foreach ($news as $new)
                    <a href="{{ url('news-detail') }}?id={{ $new->id }}&news_category_id={{ $new->news_category_id }}">
                        <div class="blog-card">
                            <img class="card-img" src="https://placehold.jp/300x200.png" alt="no-img">
                            <p>{{ $new->title }}</p>
                            <p class="text">
                                {!! $new->overview !!}
                            </p>
                            @php
                                $ts = strtotime($new->updated_at);
                            @endphp
                            <p>{{ date('Y年n月j日', $ts) }}カテゴリ:<a href="">{{ $new->newsCategory->category_name }}</a>
                            </p>

                        </div>
                    </a>
                @endforeach

                <div class="link">{{ $news->links('pagination::bootstrap-4') }}</div>

            </div>


            <section class="side">
                <h3>カテゴリー一覧</h3>
                <ul class="category_list">
                    @foreach ($news_categories as $category)
                        <li><a href="{{ url('news') }}?id={{ $category->id }}">{{ $category->category_name }}</a></li>
                    @endforeach
                </ul>
            </section>
        </div>




    </main>

@endsection
