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
    @foreach ($road_stations as $val)
        <section class="titlesection">
            <div class="titlesection__box">
                <h1 class="pagetitle">
                    {{ $val->station_name }}
                </h1>
            </div>
        </section>

        <section class="section">
            <div class="station_img">
                <img src="{{ asset('/storage/imgs/' . $val->picture1) }}" alt="トップ">
                <div>
                    <p class="catchphrase">
                        {!! $val->catchphrase !!}
                    </p>
                </div>
            </div>
            <div class="discription">
                <h2>
                    {!! $val->discription !!}
                </h2>
            </div>
            <div class="review">
                <img src="{{ asset('assets/images/cat1.jpg') }}" alt="human" class="review_img">
                <div class="gray_box">
                    <p>
                        {{ $val->review }}
                    </p>
                </div>
                {{-- <img src="{{ asset('/storage/images/' . $goods->picture) }}" alt="ダミー" class="detailimg"> --}}
                {{-- imgをsrcはasset('/storage/images/'で終わり、.$gg) --}}
        </section>
        <section class="basic">
            <div class="">
                <h2>基本情報</h2>
            </div>
        </section>
    @endforeach
@endsection

{{-- 該当ページ専用JS --}}
@section('pageJs')

@endsection
