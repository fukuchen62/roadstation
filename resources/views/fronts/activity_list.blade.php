{{-- レイアウトの受け取り --}}
@extends('layouts.layout_front')

{{-- タイトルの受け取り --}}
@section('title', 'アクティビティ一覧 | とくしま まるっと道の駅')

{{-- CSS --}}
@section('pageCss')

    {{-- common CSS --}}
    <link rel="stylesheet" href="{{ asset('assets/css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/common.css') }}">
    {{-- 該当ページのCSS --}}
    <link rel="stylesheet" href="{{ asset('assets/css/activity_list.css') }}">

    <style>
        .dd {}
    </style>

@endsection

{{-- キービジュアル --}}
@section('key_visual')
    <div class="kv">
        <img src="{{ asset('assets/images/activity_list/indigo.jpg') }}" alt="サブキービジュアル">
    </div>
@endsection

{{-- メイン --}}
@section('content')
    <div class="attention-box">
        <h2 class="attention">体験一覧</h2>
    </div>
    {{-- 体験一覧一覧の表示部分  --}}
    @foreach ($activities as $activity)
        <section class="activity-delimiter">
            <div class="activity-group">
                @if ($activity->picture1 != null)
                    <img class="activity-photo" src="{{ asset('/storage/images/' . $activity->picture1) }}" alt="">
                @else
                    <img class="activity-photo" src="{{ asset('/storage/images/no-image.png') }}" alt="">
                @endif

                <div class="activity-text-group">
                    <h3 class="activity-name">
                        {{ $activity->activity_name }}
                    </h3>
                    <h4 class="headline text">＜体験できる道の駅＞</h4>

                    <ul class="roadstation-frame">
                        <li>
                            <a
                                href="{{ url('station-detail') }}?id={{ $activity->roadStation->getId() }}" class="station-name name">{{ $activity->roadstation->getName() }}</a>
                        </li>
                    </ul>

                    <h4 class="headline text">＜体験・詳細＞</h4>
                    {!! $activity->discription !!}

                    <h4 class="headline-text">＜営業時間＞</h4>
                    <p class="business-text">
                        {{ $activity->business_hours }}
                    </p>
                    <h4 class="headline text">＜料 金＞</h4>
                    <p class="price-text">
                        {{ $activity->price }}
                    </p>

                </div>
            </div>

            <h4 class="headline text">＜利用条件＞</h4>
            <p class="conditions-text">{{ $activity->conditions }}</p>
            {{-- 体験したブログ記事の表示部分  --}}
            <h4 class="headline activity-place">＜体験したブログ記事＞</h4>
            @php
                $blog_list = $activity->blog_list;
                $id_list = explode('|', $blog_list);
            @endphp

            <ul class="roadstation-frame">
                @foreach ($id_list as $id)
                    @php
                        $id = $activity->changeName($id);
                        $title = $activity->getBlogName($id);
                    @endphp
                    @if ($title != '')
                        <li>
                            <a href="{{ url('blog-detail') }}?id={{ $id }}" class="roadstation-name name">
                                {{ $title }}
                            </a>
                        </li>
                    @endif
                @endforeach
            </ul>

        </section>
    @endforeach

    <div class="blog-btn">

        {{-- 行ってきたんよボタンの表示部分 --}}
        <a href="{{ url('blog') }}"><img src="{{ asset('assets/images/blog-btn01.png') }}" alt="ブログ記事一覧に遷移するボタン"></a>
    </div>
@endsection
