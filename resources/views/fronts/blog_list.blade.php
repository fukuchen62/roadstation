@extends('layouts.layout_front')

@section('title', 'ブログ記事一覧')

@section('pageCss')
    <style>
        img {
            width: 320px;
            height: auto;
        }
    </style>
@endsection

@section('content')

    @foreach ($blogs as $blog)
        <a href="{{ url('blog-detail') }}?id={{ $blog->id }}">
            <h2>{{ $blog->title }}</h2>
            <img src="{{ asset('/storage/images/' . $blog->picture) }}" alt="">
            <p>内 容：{!! $blog->content !!}</p>
            <p>登録日時：{{ $blog->created_at }}</p>
            <p>カテゴリー名：{{ $blog->blogCategory->getName() }}</p>
        </a>
    @endforeach

    <div>
        <h3>
            カテゴリー一覧
        </h3>
        <ul>
            <ul>
                @foreach ($blog_categories as $category)
                    <li><a href="{{ url('blog') }}?id={{ $category->id }}">{{ $category->category_name }}</a></li>
                @endforeach
            </ul>
        </ul>
    </div>

    {{ $blogs->links() }}
@endsection
