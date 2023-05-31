@extends('layouts.layout_front')

@section('description', '道の駅詳細')

@section('keywords', 'キーワード1,キーワード2・・・')

@section('title', 'ページタイトル')

{{-- 該当ページのCSS --}}
@section('pageCss')
    <link rel="stylesheet" href="{{ asset('assets/css/fstyle_station_detail.css') }}">
@endsection

@section('key_visual')
    <img class="sub-keyvisual" src="{{ asset('assets/images/sub-keyvisual.jpg') }}" alt="サブキービジュアル">
@endsection

{{-- メイン --}}
@section('content')

    <section class="titlesection">
        <div class="titlesection__box">
            <h1 class="pagetitle">
                @foreach ($road_stations as $val)
                    {{ $val->station_name }}
                @endforeach

            </h1>
        </div>
    </section>

    <section class="section">
        <div class="station_pic">
            <p>
                @foreach ($road_stations as $val)
                    {{ $val->catchphrase }}
                @endforeach
            </p>
        </div>
        <div class="discription">
            <h2>
                @foreach ($road_stations as $val)
                    {{ $val->discription }}
                @endforeach
            </h2>
        </div>
        <div class="review">
            <img src="{{ asset('assets/images/cat1.jpg') }}" alt="human" class="review_img">
            <div class="gray_box">
                <p>
                    @foreach ($road_stations as $val)
                        {{ $val->review }}
                    @endforeach
                </p>
            </div>
    </section>

@endsection

{{-- 該当ページ専用JS --}}
@section('pageJs')

@endsection
