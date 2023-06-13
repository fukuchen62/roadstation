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
            text-align: center;
        }

        .pagination {
            margin: auto;
            margin-top: 16px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .page-link {
            display: block;
            border-radius: 50%;
            width: 56px;
            height: 56px;
            margin: auto;
        }

        .page-item:nth-child(odd){
            background-color: #5eb356;
            border-radius: 50%;
            color: #fffbf1;
            font-size: 40px;
            font-weight: bold;
        }

        .page-item:nth-child(even){
            background-color: #5eb356;
            border-radius: 50%;
            color: #fffbf1;
            font-size: 40px;
            font-weight: bold;
        }

        .page-item:nth-of-type(1) {
            background-color: #fffbf1;
            color: #91471d;
            font-size: 40px;
            font-weight: bold;
        }

        .page-item:nth-last-of-type(1){
            background-color: #fffbf1;
            color: #91471d;
            font-size: 40px;
            font-weight: bold;
        }

        @media screen and (min-width:768px){
            .pagination{
                /* width: 51%; */
                width: 50%;
            }
        }

        @media screen and (min-width:1080px) {
            nav {
                /* width: 790px; */
                /* width: 71%; */
                margin: auto;
            }

            /* .pagination{
                width: 51%;
            } */

            .page-link {
            width: 44px;
            height: 44px;
            }

            .page-item:nth-child(odd){
                font-size: 32px;
            }

            .page-item:nth-child(even){
                font-size: 32px;
            }

            .page-item:nth-of-type(1) {
                font-size: 32px;
            }

            .page-item:nth-last-of-type(1){
                font-size: 32px;
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
    {{--  {{ $blogs->links('pagination::bootstrap-4') }}  --}}

    <div class="link">
    {{ $blogs->appends(request()->query())->links('pagination::bootstrap-4') }}
    </div>
@endsection
