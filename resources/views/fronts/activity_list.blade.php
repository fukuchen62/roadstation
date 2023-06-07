{{-- レイアウトの受け取り --}}
@extends('layouts.layout_front')

{{-- タイトルの受け取り --}}
@section('title', '注目アクティビティ | とくしま まるっと道の駅')

{{-- CSS --}}
@section('pageCss')

    {{-- common CSS --}}
    <link rel="stylesheet" href="{{ asset('assets/css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/common.css') }}">
    {{-- 該当ページのCSS --}}
    <link rel="stylesheet" href="{{ asset('assets/css/activity_list.css') }}">

@endsection

{{-- メイン --}}
@section('content')
    <div class="attention-box">
        <h2 class="attention">注目アクティビティ</h2>
    </div>
    {{--  体験一覧一覧の表示部分  --}}
    @foreach ($activities as $activity)
        <section class="activity-delimiter">
            <div class="activity-group">
                <img class="activity-photo" src="{{ asset('/storage/images/' . $activity->picture1) }}" alt="">
                <div class="activity-text-group">
                    <p>道の駅 <a
                            href="{{ url('station-detail') }}?id={{ $activity->roadStation->getId() }}">{{ $activity->roadstation->getName() }}</a>
                    </p>
                    <h3 class="activity-name">
                        {{ $activity->activity_name }}
                    </h3>
                    {{--  <h4 class="headline-text">営業時間：</h4>  --}}
                    <p class="business-text">
                        営業時間：<br>{{ $activity->business_hours }}


                    </p>
                    {{--  <h4 class="headline text">料 金：</h4>  --}}
                    <p class="price-text">
                        料 金<br>{{ $activity->price }}
                    </p>
                </div>
            </div>
            {{--  <h4 class="headline text">利用条件：</h4>  --}}
            {!! $activity->conditions !!}
            {{--  <h4 class="headline text">体験内容・詳細：</h4 class="detail-text">  --}}
            <p>{!! $activity->discription !!}</p>

            {{--  体験できる道の駅の表示部分  --}}
            <h3 class="headline activity-place">体験できる道の駅</h3>
            <ul class="roadstation-frame">
                <li class="roadstation-name"><a
                        href="{{ url('station-detail') }}?id={{ $activity->roadStation->getId() }}">{{ $activity->roadstation->getName() }}</a>
                </li>
            </ul>

            {{--  体験したブログ記事の表示部分  --}}
            <h3 class="headline activity-place">体験したブログ記事</h3>
            {{-- <ul class="roadstation-frame">
                        <li class="roadstation-frame"><a
                                href="{{ url('blog-detail') }}?id={{ $activity->blog->id }}&blog_category_id={{ $activity->blog->blog_category_id }}">{{ $activity->blog->getName() }}</a>
                        </li> 
                    </ul> --}}
            @if ($activity->blog->is_show == 0)
                <p>{{ '該当するブログ記事はありません。' }}</p>
            @else
                <ul>
                    <li class="roadstation-frame"><a
                            href="{{ url('blog-detail') }}?id={{ $activity->blog->id }}&category_id={{ $activity->blog->categoryy_id }}">{{ $activity->blog->getName() }}</a>
                    </li>
                </ul>
            @endif

        </section>
    @endforeach

    <section class="blog">
        <div class="blog-btn">

            {{-- 行ってきたんよボタンの表示部分 --}}
            <a href="{{ url('blog') }}"><img src="{{ asset('assets/images/blog-btn.png') }}" alt="ブログ記事一覧に遷移するボタン"></a>
        </div>
    </section>
@endsection
