@extends('layouts.layout_front')

{{-- タイトル --}}
@section('title', 'ニュース一覧')

@section('pageCss')
    <link rel="stylesheet" href="{{ asset('assets/css/news_list.css') }}">

    {{-- <style>
        .link {
            margin: 0 auto;
            text-align: center;
            position: relative;
            left: 200px;
        }
    </style> --}}
@endsection

@section('key_visual')
    <!-- キービジュアル -->
    <div class="kv">
        <figure><img src="{{ asset('assets/images/news.list/news-kv.jpg') }}" alt="キービジュアル"></figure>
    </div>
@endsection

@section('content')

    <h2>ニュース一覧</h2>

    <div class="blog-main">

        <div class="blog-wrapper">

            @foreach ($news as $new)
                <div class="blog-card">

                    <a href="{{ url('news-detail') }}?id={{ $new->id }}&news_category_id={{ $new->news_category_id }}">

                        @if ($new->picture)
                            <img class="card-img" src="{{ asset('/storage/images/' . $new->picture) }}" alt="no-img">
                        @else
                            <img class="card-img" src="{{ asset('/storage/images/no-image.png') }}" alt="no-img">
                        @endif

                        <h3>{{ $new->title }}</h3>

                        @php
                            $ts = strtotime($new->updated_at);
                        @endphp

                        <div class="update-information">
                            <p class="date">{{ date('Y年n月j日', $ts) }}</p>
                            <p class="category">{{ $new->newsCategory->category_name }}</p>
                        </div>

                        <p class="text">
                            {!! $new->overview !!}
                        </p>

                    </a>

                </div>
            @endforeach

            <div>
                {{-- {{ $news->appends(Request::only('news_category_id'))->links('pagination::bootstrap-4') }} --}}
                {{ $news->appends(request()->query())->links('pagination::bootstrap-4') }}
            </div>

        </div>

        {{-- カテゴリータイトル --}}
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
            <div class="side-img">
                <img src="{{asset('assets/images/illustrations/tanuki-gourmet.png')}}" alt="">
            </div>
        </section>

    </div>

@endsection
