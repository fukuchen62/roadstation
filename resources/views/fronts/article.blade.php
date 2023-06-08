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
    <link rel="stylesheet" href="{{ asset('assets/css/common.css') }}">
    {{-- 該当ページのCSS --}}
    <link rel="stylesheet" href="{{ asset('assets/css/article.css') }}">

@endsection


{{-- メイン --}}
@section('content')
    <div class="blog-wrapper">
        <section class="blog-main">
            <p class="back-btn">
                <a href="{{ url('blog') }}">＜＜一覧へ戻る</a>
            </p>
            @foreach ($blogs as $blog)
                <h3 class="blog-title">{{ $blog->title }}</h3>
                {{--  <p>登録日時：{{ $blog->created_at }}</p>  --}}
                {{--  <p>登録日時：{{ $blog['created_at']->format('Y年m月d日') }}</p>  --}}
                <p class="date">
                    ●{{ $blog['created_at']->format('Y年n月j日') }}　　　カテゴリ：{{ $blog->blogCategory->getName() }}</p>
                <img class="blog-img" src="{{ asset('/storage/images/' . $blog->picture) }}" alt="">
                <p class="blog-text">内 容：</p>{!! $blog->content !!}
            @endforeach


            {{--  道の駅情報の表示部分  --}}
            <h3 class="roadstation-
                information">道の駅情報</h3>

            @php
                $road_station_id = $blog->road_station_id;
                $id_list = explode('|', $road_station_id);
            @endphp

            @foreach ($id_list as $id)
                @php
                    $name = $blog::getRoadstationName($id);
                @endphp

                <P class="address"><a
                        href="{{ url('station-detail') }}?id={{ $id }}">{{ $name }}の詳細はこちら</a>
                </P>
                {{--  <P>test:<a href="{{ url('station-detail') }}?id={{ $blog->road_station_id }}">{{ url('station-detail') }}?id={{ $blog->roadStation->getId() }}</a></P>  --}}
            @endforeach

            {{-- 現在の投稿を基準に【次の記事へ】と【前の記事へ】ボタンの表示部分 --}}
            <div>
                @if ($blog->previous() != null)
                    <a
                        href="{{ url('blog-detail') }}?id={{ $blog->previous()->id }}&blog_category_id={{ $blog->blog_category_id }}">
                        < 前の記事へ</a>
                @endif
            </div>

            <div>
                @if ($blog->next() != null)
                    <a
                        href="{{ url('blog-detail') }}?id={{ $blog->next()->id }}&blog_category_id={{ $blog->blog_category_id }}">次の記事へ
                        ></a>
                @endif
            </div>

            {{-- 関連記事の表示部分 --}}
            <h3 class="relatedarticle-title">関連記事</h3>
            <ul class="relatedarticle">
                @foreach ($categories as $category)
                    <li class="relatedarticle1">
                        <a
                            href="{{ url('blog-detail') }}?id={{ $category->id }}&blog_category_id={{ $category->blog_category_id }}">
                            <img class="relatedarticle-img" src="{{ asset('/storage/images/' . $category->picture) }}"
                                alt="ブログ記事の画像">
                            <h4>{{ $category->title }}</h4>
                            <p>{{ $category['created_at']->format('Y年n月j日') }}</p>
                            <p>{{ $blog->blogcategory->category_name }}</p>
                        </a>
                    </li>
                @endforeach
            </ul>
        </section>
        {{--  サイドバーのカテゴリーの表示部分  --}}
        <section class="side">
            <h3>カテゴリー一覧</h3>
            <ul class="category_list">
                @foreach ($blog_categories as $category)
                    <li><a href="{{ url('blog') }}?id={{ $category->id }}">{{ $category->category_name }}</a></li>
                @endforeach
            </ul>
        </section>
    </div>
@endsection
