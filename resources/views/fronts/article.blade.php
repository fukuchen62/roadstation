@extends('layouts.layout_front')

@section('pageCss')
    <style>
        img {
            width: 320px;
            height: auto;
        }
    </style>
@endsection

@section('title', 'ブログ記事')
{{-- @foreach ($blogs as $blog)
        {{ $blogs->title }} | 徳島まるっと道の駅
    @endforeach --}}

{{-- @endsection --}}

@section('content')

    @foreach ($blogs as $blog)
        <div>
            <h2>{{ $blog->title }}</h2>
            <p>登録日時：{{ $blog->created_at }}</p>
            <p>カテゴリー名：{{ $blog->blogCategory->getName() }}</p>
            <img src="{{ asset('/storage/images/' . $blog->picture) }}" alt="">
            <p>内 容：</p>{!! $blog->content !!}
        </div>
    @endforeach


    {{--  道の駅情報の表示部分  --}}

    @foreach ($blogs as $blog)
        <h3>道の駅情報</h3>
        <p>各道の駅詳細ページリンク</p>
        <P><a href="{{ url('station-detail') }}?id={{ $blog->roadStation->getId() }}">{{ url('station-detail') }}?d={{ $blog->roadStation->getId() }}</a>
        </P>
    @endforeach


    {{-- 関連記事の表示部分 --}}
            <h2>
                関連記事
            </h2>


            @foreach ($categories as $category)
                <a href="{{ url('blog-detail') }}?id={{ $category->id }}&blog_category_id={{ $blog->$blog_categry_id }}">
                    <div>
                        <img src="{{ asset('/storage/images/' . $category->picture) }}" alt="">
                        <h3>{{ $category->title }}</h3>
                        <p>{{ $category->created_at }}</p>
                        {{ $category->blogCategory->category_name }}
                    </div>
                </a>
            @endforeach


    {{--  サイドバーのカテゴリーの表示部分  --}}
    <div>
        <h3>
            カテゴリー一覧
        </h3>
            <ul>
                @foreach ($blog_categories as $category)
                    <li><a href="{{ url('blog') }}?id={{ $category->id }}">{{ $category->category_name }}</a></li>
                @endforeach
            </ul>
    </div>

@endsection
