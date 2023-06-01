@extends('layouts.layout_front')

@section('title', '注目アクティビティ | とくしま まるっと道の駅')

@section('content')

    {{--  体験一覧一覧の表示部分  --}}
    <h2>注目アクティビティ</h2>

    @foreach ($activities as $activity)
        <div>
            <h3>{{ $activity->activity_name }}</h3>
            <p>営業時間：{{ $activity->business_hours }}</p>
            <p>料 金：{{ $activity->price }}</p>
            <p>利用条件：{!! $activity->conditions !!}
            <p>解 説：{!! $activity->discription !!}</p>
        </div>
    @endforeach

    {{--  体験できる道の駅の表示部分  --}}
    <h3>体験できる道の駅</h3>
    {{-- @foreach ($road_stations as $road_station)

    @endforeach --}}


    {{--  体験したブログ記事の表示部分  --}}
    {{-- <h3>体験したブログ記事</h3>
    @foreach ($blogs as $blog)
        <ul>
            <li><a href="">{{ $blog->blogCategory->getName() }}</a></li>
        </ul>
    @endforeach --}}

@endsection
