{{-- レイアウトの受け取り --}}
@extends('layouts.layout_front')

{{-- タイトルの受け取り --}}
@section('title', '注目アクティビティ | とくしま まるっと道の駅')

{{-- CSS --}}
@section('pageCss',)

    {{-- common CSS --}}
    <link rel="stylesheet" href="{{ asset('assets/css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/indes.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/common.css') }}">
    {{-- 該当ページのCSS --}}
    <link rel="stylesheet" href="{{ asset('assets/css/activity_list.css') }}">

    <style>
        section{
            text-align: left;
        }
        .activity-photo{
            display: block;
            margin:  auto;
            margin-top: 24px;
            margin-bottom: 16px;
        }
        .activity-name{
            font-size: 20px;
            margin: 0 auto;
        }
        .conditions-text{
            margin-top: 8px;
        }
        .headline text{
            margin-bottom: 0px;
        }
    </style>

@endsection

{{-- メイン --}}
@section('content')

    <h2 class="attention">注目アクティビティ</h2>

    {{--  体験一覧一覧の表示部分  --}}
@foreach ($activities as $activity)
    <section>
        <img class="activity-photo"  src="{{ asset('/storage/images/' . $activity->picture1) }}" alt="">
        <h3 class="activity-name">{{ $activity->activity_name }}</h3>
        <div class="activity-group">
            <h4 class="headline text">営業時間：</h4>
                <p class="business-text">{{ $activity->business_hours }}</p>
            <h4 class="headline text">料 金：</h4>
                <p class="price-text">{{ $activity->price }}</p>
            <h4 class="headline text">利用条件：</h4>
                <p class="conditions-text">{!! $activity->conditions !!}</p>
            <h4 class="headline text">体験内容・詳細：</h4 class="detail-text">
                <p>{!! $activity->discription !!}</p>
            
        {{--  体験できる道の駅の表示部分  --}}
        <h3 class="headline activity-place">体験できる道の駅</h3>
            <ul class="roadstation-frame">
                <li class="roadstation-name"><a href="{{ url('station-detail') }}?id={{ $activity->roadStation->getId() }}">{{ $activity->roadstation->getName() }}</a></li>
            </ul>
        {{--  体験したブログ記事の表示部分  --}}
        <h3 class="headline activity-place">体験したブログ記事</h3>
            <ul class="roadstation-frame">
                <li class="roadstation-frame"><a href="{{ url('blog-detail') }}?id={{ $activity->blog->id }}">{{ $activity->blog->getName() }}</a></li>
            </ul>
        </div>
    </section>
@endforeach

<section class="blog">
    <div class="blog-btn">

    {{-- 行ってきたんよボタンの表示部分 --}}
    <a href="{{  url('blog') }}"><img src="{{ asset('assets/images/blog-btn.png') }}" alt="ブログ記事一覧に遷移するボタン"></a>
    </div>
</section>
@endsection
