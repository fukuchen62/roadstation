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
        /** カテゴリー一覧 **/
        /* .side {
                                                                            width: 100%;
                                                                            height: 320px;
                                                                            background-color: #ffffff;
                                                                            box-shadow: 5px 5px 8px 0 #70b27f;
                                                                            border: groove 6px #A7D28D;
                                                                            color: #8c5243;
                                                                            border-radius: 24px;
                                                                            padding: 20px;
                                                                        }

                                                                        .side h3{
                                                                            font-size: 28px;
                                                                        }
                                                                        .side li{
                                                                                font-size: 24px;
                                                                                margin-top: 24px;
                                                                            } */

        /* @media screen and (min-width:430x){
                                                                            .side{
                                                                                width:80%;
                                                                                margin: auto;
                                                                            }

                                                                        } */

        /* @media screen and (min-width:768px){
                                                                            .side{
                                                                                width:50%;
                                                                            } */

        /* @media screen and (min-width:830px){
                                                                            .side{
                                                                                width:100%;
                                                                            } */

        /* @media screen and (min-width:1080px){
                                                                            .side{
                                                                                width:25%;
                                                                            }
                                                                            } */

        /** ページネーション **/
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

        .page-item:nth-child(odd) {
            background-color: #5eb356;
            border-radius: 50%;
            color: #fffbf1;
            font-size: 40px;
            font-weight: bold;
        }

        .page-item:nth-child(even) {
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

        .page-item:nth-last-of-type(1) {
            background-color: #fffbf1;
            color: #91471d;
            font-size: 40px;
            font-weight: bold;
        }

        @media screen and (min-width:768px) {
            .pagination {
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

            .page-item:nth-child(odd) {
                font-size: 32px;
            }

            .page-item:nth-child(even) {
                font-size: 32px;
            }

            .page-item:nth-of-type(1) {
                font-size: 32px;
            }

            .page-item:nth-last-of-type(1) {
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

    <h2>ブログ一覧 ({{ $count }}件)</h2>
    <div class="blog-main">
        <div class="blog-wrapper">

            {{-- ブログ記事一覧の表示部分 表示する記事数はコントローラ内のwhere句（paginate）で指定 --}}
            @if ($count > 0)
                @foreach ($blogs as $blog)
                    {{--  <div class="blog-card">  --}}
                    <a href="{{ url('blog-detail') }}?id={{ $blog->id }}" class="blog-card">
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
            @else
                <p>該当記事は見つかりません。</p>
            @endif


        </div>

        {{-- サイドバーのカテゴリー一覧の表示部分 --}}
        <section class="side">
            <h3 class="category-title">カテゴリー一覧</h3>
            <ul class="category_list">
                @foreach ($blog_categories as $category)
                    <li><a href="{{ url('blog') }}?category_id={{ $category->id }}">{{ $category->category_name }}
                            ({{ $category->getCount() }})
                        </a>
                    <li></li>
                    </li>
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
