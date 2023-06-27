{{-- レイアウトの受け取り --}}
@extends('layouts.layout_front')

{{-- タイトルの受け取り --}}
@section('title', 'ブログ一覧ページ | 徳島まるっと道の駅')

{{-- CSS --}}
@section('pageCss')

    {{-- 該当ページのCSS --}}
    <link rel="stylesheet" href="{{ asset('assets/css/blog_list.css') }}">

    <style>
        /** ページネーション **/


        @media screen and (min-width:768px) {
            .pagination {
                /* width: 51%; */
                /* width: 50%; */
            }
        }

        @media screen and (min-width:1080px) {
            nav {
                /* width: 790px; */
                /* width: 71%; */
                /* margin: auto; */
            }

            /* .pagination{
                                        width: 51%;
                                    } */
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

                        @php
                            $road_station_id = $blog->road_station_id;
                            $id_list = explode('|', $road_station_id);
                        @endphp

                        @foreach ($id_list as $id)
                            @php
                                $name = $blog::getRoadstationName($id);
                            @endphp

                            <p class="station_name">{{ $name }}</p>
                        @endforeach

                        @if ($blog->picture != null)
                            <img class="card-img" src="{{ asset('/storage/images/' . $blog->picture) }}"
                                alt="ブログ「{{ $blog->title }}」の写真">
                        @else
                            <img class="card-img" src="{{ asset('/storage/images/no-image.png') }}" alt="画像無し">
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
            <div class="side-img">
                <img src="{{ asset('assets/images/illustrations/tanuki-activity.png') }}" alt="">
            </div>
        </section>

    </div>
    {{-- ページネーション表示部分 --}}
    {{--  {{ $blogs->links('pagination::bootstrap-4') }}  --}}

    <div class="link">
        {{ $blogs->appends(request()->query())->links('pagination::bootstrap-4') }}
    </div>
@endsection
