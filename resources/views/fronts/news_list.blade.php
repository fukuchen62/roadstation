@extends('layouts.layout_front')

{{-- タイトル --}}
@section('title', 'ニュース一覧')

@section('pageCss')
    <link rel="stylesheet" href="{{ asset('assets/css/news_list.css') }}">
@endsection

@section('key_visual')
    <!-- キービジュアル -->
    <div class="kv">
        <figure><img src="{{ asset('assets/images/news.list/news-kv.jpg') }}" alt="キービジュアル"></figure>
    </div>
@endsection

@section('content')

    <h2>ニュース一覧 ({{ $count }}件)</h2>

    <div class="blog-main">

        <div class="blog-wrapper">

            @if ($count > 0)
                @foreach ($news as $new)
                    <div class="blog-card">

                        <a
                            href="{{ url('news-detail') }}?id={{ $new->id }}&news_category_id={{ $new->news_category_id }}">

                            @if ($new->picture)
                                <img class="card-img" src="{{ asset('/storage/images/' . $new->picture) }}"
                                    alt="{{ $new->title }}の画像">
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
            @else
                <p>該当記事は見つかりません。</p>
            @endif



            <div>
                {{-- {{ $news->appends(Request::only('news_category_id'))->links('pagination::bootstrap-4') }} --}}
                {{-- {{ $news->appends(request()->query())->links('pagination::bootstrap-4') }} --}}
            </div>

        </div>

        {{-- カテゴリータイトル --}}
        <section class="side">
            <h3 class="category-title">カテゴリー一覧</h3>
            <ul class="category_list">
                @foreach ($news_categories as $category)
                    <li class="category-name">
                        <a href="{{ url('news') }}?news_category_id={{ $category->id }}">{{ $category->category_name }}
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

    <div>
        {{-- {{ $news->appends(Request::only('news_category_id'))->links('pagination::bootstrap-4') }} --}}
        {{ $news->appends(request()->query())->links('pagination::bootstrap-4') }}
    </div>

@endsection
