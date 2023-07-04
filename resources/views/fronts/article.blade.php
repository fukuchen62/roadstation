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

    {{-- 該当ページのCSS --}}
    <link rel="stylesheet" href="{{ asset('assets/css/article.css') }}">

    <style>
        /* 関連記事 */
        /* @media screen and (min-width:901px) {
                                                                                            .relatedarticle1 {
                                                                                                margin-bottom: 60px;
                                                                                                width: 48%;
                                                                                            }
                                                                                            } */
    </style>

@endsection

{{-- キービジュアル --}}
@section('key_visual')
    <div class="kv">
        <img class="sub-keyvisual" src="{{ asset('assets/images/blog_list/blog.jpg') }}" alt="サブキービジュアル">
    </div>
@endsection

{{-- メイン --}}
@section('content')
    <div class="blog-wrapper">
        <section class="blog-main">
            <p class="back-btn">
                <a href="{{ url('blog') }}">＜＜一覧へ戻る</a>
            </p>
            {{--  @foreach ($blogs as $blog)  --}}
            <h3 class="blog-title">{{ $blog->title }}</h3>
            {{--  <p>登録日時：{{ $blog->created_at }}</p>  --}}
            {{--  <p>登録日時：{{ $blog['created_at']->format('Y年m月d日') }}</p>  --}}
            <div class="update-information">
                <p class="date">{{ $blog['created_at']->format('Y年n月j日') }}</p>
                <p class="category">{{ $blog->blogCategory->getName() }}</p>

                @php
                    $road_station_id = $blog->road_station_id;
                    $id_list = explode('|', $road_station_id);
                @endphp

                @foreach ($id_list as $id)
                    @php
                        $name = $blog::getRoadstationName($id);
                    @endphp

                    <a href="{{ url('station-detail') }}?id={{ $id }}">
                        <p class="station_name">{{ $name }}</p>
                    </a>
                @endforeach
            </div>

            @if ($blog->picture != null)
                <img class="blog-img" src="{{ asset('/storage/images/' . $blog->picture) }}"
                    alt="ブログ「{{ $blog->title }}」の写真">
            @else
                <img class="card-img" src="{{ asset('/storage/images/no-image.png') }}" alt="画像無し">
            @endif
            {{--  {!! $blog->content !!}  --}}
            <div>
                @php
                    $text = $blog->content;
                    $target = ['storage_path', 'link_path'];
                    $path = [asset('storage/images'), route('blog', ['id' => ''])];
                    
                    // 写真pathを絶対パスで置換
                    $text = str_replace($target, $path, $text);
                    // 出力
                    echo $text;
                @endphp
            </div>
            {{--  @endforeach  --}}


            {{--  道の駅情報の表示部分  --}}
            <h3 class="roadstation-
                information">＜ 道の駅情報 ＞</h3>

            {{-- @php
                $road_station_id = $blog->road_station_id;
                $id_list = explode('|', $road_station_id);
            @endphp --}}

            @foreach ($id_list as $id)
                @php
                    $name = $blog::getRoadstationName($id);
                @endphp

                <a class="address" href="{{ url('station-detail') }}?id={{ $id }}">
                    <p class="address-btn">{{ $name }}の詳細はこちら</p>
                </a>

                {{-- <p class="address"><a class="address-btn"
                        href="{{ url('station-detail') }}?id={{ $id }}">{{ $name }}の詳細はこちら</a>
                </p> --}}
                {{--  <P>test:<a href="{{ url('station-detail') }}?id={{ $blog->road_station_id }}">{{ url('station-detail') }}?id={{ $blog->roadStation->getId() }}</a></P>  --}}
            @endforeach

            {{-- 現在の投稿を基準に【次の記事へ】と【前の記事へ】ボタンの表示部分 モバイル用 --}}
            <div class="before-next-mobilebtn">
                <p>
                    @if ($blog->previous() != null)
                        <a
                            href="{{ url('blog-detail') }}?id={{ $blog->previous()->id }}&blog_category_id={{ $blog->blog_category_id }}">
                            < 前の記事へ</a>
                    @endif
                </p>

                <p>
                    @if ($blog->next() != null)
                        <a
                            href="{{ url('blog-detail') }}?id={{ $blog->next()->id }}&blog_category_id={{ $blog->blog_category_id }}">次の記事へ
                            ></a>
                    @endif
                </p>
            </div>

            {{-- 現在の投稿を基準に【次の記事へ】と【前の記事へ】ボタンの表示部分 モバイル以外 --}}
            <div class="before-next-pcbtn">
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
            </div>

            {{-- 関連記事の表示部分 --}}
            <h3 class="relatedarticle-title">関連記事</h3>
            <div class="relatedarticle">
                {{-- @foreach ($categories as $category)
                    <div class="relatedarticle1">
                        <a href="{{ url('blog-detail') }}?id={{ $category->id }}">
                            <img class="relatedarticle-img" src="{{ asset('/storage/images/' . $category->picture) }}"
                                alt="ブログ記事の画像">
                            <h4>{{ $category->title }}</h4>
                            <div class="update-information">
                                <p class="date">{{ $category['created_at']->format('Y年n月j日') }}</p>
                                <p class="category">{{ $blog->blogcategory->category_name }}</p>
                            </div>
                        </a>
                    </div>
                @endforeach --}}

                @foreach ($recommend_blogs as $item)
                    <div class="relatedarticle1">
                        <a href="{{ url('blog-detail') }}?id={{ $item->id }}">
                            <img class="relatedarticle-img" src="{{ asset('/storage/images/' . $item->picture) }}"
                                alt="ブログ記事の画像">
                            <h4>{{ $item->title }}</h4>
                            <div class="update-information">
                                <p class="date">{{ $item['created_at']->format('Y年n月j日') }}</p>
                                <p class="category">{{ $blog->blogcategory->category_name }}</p>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </section>

        {{--  サイドバーのカテゴリーの表示部分  --}}
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
                <img src="{{ asset('assets/images/illustrations/tanuki-activity.png') }}" alt="キャラクター画像">
            </div>
        </section>
    </div>
@endsection
