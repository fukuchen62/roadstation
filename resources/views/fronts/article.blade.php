{{-- レイアウトの受け取り --}}
@extends('layouts.layout_front')

{{-- タイトルの受け取り --}}
@section('title', 'ブログ記事 | 徳島まるっと道の駅')
{{-- @foreach ($blogs as $blog)
        {{ $blogs->title }} | 徳島まるっと道の駅
    @endforeach --}}

{{-- @endsection --}}


{{-- CSS --}}
@section('pageCss')

    {{-- common CSS --}}
    <link rel="stylesheet" href="{{ asset('assets/css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/indes.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/common.css') }}">
    {{-- 該当ページのCSS --}}
    <link rel="stylesheet" href="{{ asset('assets/css/article.css') }}">

@endsection


{{-- メイン --}}
@section('content')

    @foreach ($blogs as $blog)
        <div>
            <h2>{{ $blog->title }}</h2>
            {{--  <p>登録日時：{{ $blog->created_at }}</p>  --}}
            {{--  <p>登録日時：{{ $blog['created_at']->format('Y年m月d日') }}</p>  --}}
            <p>登録日時：{{ $blog['created_at']->format('Y年n月j日') }}</p>
            <p>カテゴリー名：{{ $blog->blogCategory->getName() }}</p>
            <img src="{{ asset('/storage/images/' . $blog->picture) }}" alt="">
            <p>内 容：</p>{!! $blog->content !!}
        </div>
    @endforeach


    {{--  道の駅情報の表示部分  --}}
    <h3>道の駅情報</h3>
    <p>アドレス：</p>

    @php
        $road_station_id = $blog->road_station_id;
        $id_list = explode('|', $road_station_id);
    @endphp

    @foreach ($id_list as $id)
        @php
            $name = $blog::getRoadstationName($id);
        @endphp

        <P><a href="{{ url('station-detail') }}?id={{ $id }}">{{ $name }}の詳細はこちら</a>
        </P>
        {{--  <P>test:<a href="{{ url('station-detail') }}?id={{ $blog->road_station_id }}">{{ url('station-detail') }}?id={{ $blog->roadStation->getId() }}</a></P>  --}}
    @endforeach

    {{--  <p>
        @if ($paginator->hasPages())
            <a href="{{ $paginator->previousPageUrl() }}">戻る</a>
        @endif
    </p>
    <p>
        @if ($paginator->hasPages())
            <a href="{{ $paginator->nextPageUrl() }}">次へ</a>
        @endif
    </p>  --}}

    @if ($blog->id - 1 > 0)
        <a href="{{ url('blog-detail') }}?id={{ $blog->id - 1 }}">前の記事へ</a>
    @endif

    @if ($blog->id + 1 < count($blogs))
        <a href="{{ url('blog-detail') }}?id={{ $blog->id + 1 }}">次の記事へ</a>
    @endif

    {{-- 関連記事の表示部分 --}}
    <h2>関連記事</h2>
    <ul>
        @foreach ($categories as $category)
            <li>
                <a
                    href="{{ url('blog-detail') }}?id={{ $category->id }}&blog_category_id={{ $category->blog_category_id }}">
                    <img src="{{ asset('/storage/images/' . $category->picture) }}" alt="ブログ記事の画像">
                    <h3>{{ $category->title }}</h3>
                    <p>{{ $category['created_at']->format('Y年n月j日') }}</p>
                    <p>{{ $blog->blogcategory->category_name }}</p>
                </a>
            </li>
        @endforeach
    </ul>

    {{--  サイドバーのカテゴリーの表示部分  --}}
    <div>
        <h3>カテゴリー一覧</h3>
        <ul>
            @foreach ($blog_categories as $category)
                <li><a href="{{ url('blog') }}?id={{ $category->id }}">{{ $category->category_name }}</a></li>
            @endforeach
        </ul>
    </div>

@endsection
