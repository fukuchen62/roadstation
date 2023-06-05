{{-- レイアウトの受け取り --}}
@extends('layouts.layout_front')

{{-- タイトルの受け取り --}}
@section('title', 'ブログ記事一覧')

{{-- CSS --}}
@section('pageCss')

    {{-- common CSS --}}
    <link rel="stylesheet" href="{{ asset('assets/css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/common.css') }}">
    {{-- 該当ページのCSS --}}
    <link rel="stylesheet" href="{{ asset('assets/css/blog_list.css') }}">

@endsection


@section('content')

    {{-- ブログ記事一覧の表示部分 表示する記事数はコントローラ内のwhere句（paginate）で指定 --}}
    @foreach ($blogs as $blog)
        <a href="{{ url('blog-detail') }}?id={{ $blog->id }}&blog_category_id={{ $blog->blog_category_id }}">
            <h2>{{ $blog->title }}</h2>
            <img src="{{ asset('/storage/images/' . $blog->picture) }}" alt="">
            <p>内 容：{!! $blog->content !!}</p>
            <p>登録日時：{{ $blog['created_at']->format('Y年n月j日') }}</p>
            <p>カテゴリー名：{{ $blog->blogCategory->getName() }}</p>
        </a>
    @endforeach

    {{-- サイドバーのカテゴリー一覧の表示部分 --}}
    <div>
        <h3>カテゴリー一覧</h3>
        <ul>
            <ul>
                @foreach ($blog_categories as $category)
                    <li><a href="{{ url('blog') }}?id={{ $category->id }}">{{ $category->category_name }}</a></li>
                @endforeach
            </ul>
        </ul>
    </div>

    {{-- ページネーション表示部分 --}}
    {{ $blogs->links() }}
@endsection
