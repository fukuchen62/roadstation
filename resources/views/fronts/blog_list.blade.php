{{-- レイアウトの受け取り --}}
@extends('layouts.layout_front')

{{-- タイトルの受け取り --}}
@section('title', 'ブログ記事一覧')

{{-- CSS --}}
@section('pageCss')

    {{-- common CSS --}}
    <link rel="stylesheet" href="{{ asset('assets/css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/common.css') }}">
    {{-- 該当ページのCSS --}}
    <link rel="stylesheet" href="{{ asset('assets/css/blog_list.css') }}">

    <style>
        .link {
            width: 75%;
            margin-top: 16px;
        }

        .pagination {
            font-size: 1.5rem;
            text-align: center;
        }

        .pagination li {
            display: inline-block;
        }
    </style>
@endsection

@section('key_visual')
    <div class="kv">
        <img class="sub-keyvisual" src="{{ asset('assets/images/blog_list/blog.jpg') }}" alt="サブキービジュアル">
    </div>
@endsection

@section('content')

    <h2>ブログ一覧</h2>
    <div class="blog-main">
        <div class="blog-wrapper">

            {{-- ブログ記事一覧の表示部分 表示する記事数はコントローラ内のwhere句（paginate）で指定 --}}
            @foreach ($blogs as $blog)
                <a class="blog-card"
                    href="{{ url('blog-detail') }}?id={{ $blog->id }}&blog_category_id={{ $blog->blog_category_id }}">
                    <img class="card-img" src="{{ asset('/storage/images/' . $blog->picture) }}" alt="">
                    <h3>{{ $blog->title }}</h3>
                    <p>{{ $blog['created_at']->format('Y年n月j日') }}　　　{{ $blog->blogCategory->getName() }}</p>
                    {!! $blog->overview !!}
                </a>
            @endforeach

        </div>

        {{-- サイドバーのカテゴリー一覧の表示部分 --}}
        <section class="side">
            <h3>カテゴリー一覧</h3>
            <ul>
                @foreach ($blog_categories as $category)
                    <li><a href="{{ url('blog') }}?id={{ $category->id }}">{{ $category->category_name }}</a></li>
                @endforeach
            </ul>
        </section>

    </div>
    {{-- ページネーション表示部分 --}}
    <div class="link">{{ $blogs->links('pagination::bootstrap-4') }}</div>
@endsection
