{{-- レイアウトの受け取り --}}
@extends('layouts.layout_front')

{{-- タイトルの受け取り --}}
@section('title', 'ブログ一覧')

{{-- CSS --}}
@section('pageCss')

    {{-- common CSS --}}
    <link rel="stylesheet" href="{{ asset('assets/css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/common.css') }}">
    {{-- 該当ページのCSS --}}
    <link rel="stylesheet" href="{{ asset('assets/css/blog_list.css') }}">

    <style>
        .link {
            width: 100%;
            margin-top: 32px;
        }

        .pagination {
            font-size: 1.5rem;
            text-align: center;
            margin-top: 16px;
        }

        .pagination li {
            display: inline-block;
        }

        .page-item:nth-of-type(1) {
            font-size: 36px;
            font-weight: bold;
            background-color: #fff;
        }

        .page-item:nth-of-type(2) {
            font-weight: bold;
            color: #fff;
        }

        .page-item:nth-of-type(3) {
            font-weight: bold;
            color: #fffbf1;
        }

        .page-item:nth-of-type(4) {
            font-weight: bold;
            color: #fffbf1;
        }

        .page-item:nth-of-type(5) {
            font-size: 36px;
            font-weight: bold;
            background-color: #fff;
        }

        .page-item {
            display: block;
            width: 32px;
            height: 32px;
            border-radius: 50%;
            background-color: #5eb356;
        }



        .text {
            /* overflow: hidden;
                                                                                                                                                                                                                                                        white-space: nowrap;
                                                                                                                                                                                                                                                        text-overflow: ellipsis;

                                                                                                                                                                                                                                                        /*IE対策*/
            /* line-height: 1.5em;
                                                                                                                                                                                                                                                        max-height: 4.5em;  */
        }

        .link h2 {}


        @media screen and (min-width:1080px) {
            nav {
                width: 790px;
            }
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
                {{--  <div class="blog-card">  --}}
                <a href="{{ url('blog-detail') }}?id={{ $blog->id }}&blog_category_id={{ $blog->blog_category_id }}"
                    class="blog-card">
                    @if ($blog->picture != null)
                        <img class="card-img" src="{{ asset('/storage/images/' . $blog->picture) }}" alt="">
                    @else
                        <img class="card-img" src="{{ asset('/storage/images/no-image.png') }}" alt="">
                    @endif
                    <h3>{{ $blog->title }}</h3>
                    <div class="update-information">
                        <p class="date">{{ $blog['created_at']->format('Y年n月j日') }}</p>
                        <p class="category">{{ $blog->blogCategory->getName() }}</p>
                    </div>
                    <p class="text">{!! $blog->overview !!}</p>
                </a>
                {{--  </div>  --}}
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
    {{--  <div class="link">{{ $blogs->links('pagination::bootstrap-4') }}  --}}
    {{ $blogs->appends(request()->query())->links('pagination::bootstrap-4') }}
    </div>
@endsection
