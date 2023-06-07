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

@endsection


@section('content')

    <div class="blog-main">
        <div class="blog-wrapper">

        {{-- ブログ記事一覧の表示部分 表示する記事数はコントローラ内のwhere句（paginate）で指定 --}}
        @foreach ($blogs as $blog)
            <a class="blog-card"
                href="{{ url('blog-detail') }}?id={{ $blog->id }}&blog_category_id={{ $blog->blog_category_id }}">
                <h2>{{ $blog->title }}</h2>
                <img class="card-img" src="{{ asset('/storage/images/' . $blog->picture) }}" alt="">
                <p class="text">{!! $blog->content !!}</p>
                <p>登録日時：{{ $blog['created_at']->format('Y年n月j日') }}</p>
                <p>カテゴリー名：{{ $blog->blogCategory->getName() }}</p>
            </a>
        @endforeach
                {{-- ページネーション表示部分 --}}
                {{ $blogs->links('pagination::bootstrap-4') }}
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
@endsection
