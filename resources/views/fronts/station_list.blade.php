@extends('layouts.layout_front')

@section('description', '一覧')


@section('keywords', 'キーワード1,キーワード2・・・')

{{-- タイトル --}}
@section('title', '一覧')

@section('pageCss')
    <link rel="stylesheet" href="{{ asset('assets/css/fstyle_station_detail.css') }}">
@endsection

@section('key_visual')
    <img class="sub-keyvisual" src="{{ asset('assets/images/sub-keyvisual.jpg') }}" alt="サブキービジュアル">
@endsection

@section('content')
    <div class="car">
        <img src="{{ asset('/storage/imgs/road_side_2.jpg') }}" alt="man">
    </div>
    <p>道の駅一覧</p>
    <p>西部</p>
    @foreach ($road_stations as $road)
        @if ($road->area_id == 2)
            <div class="list">
                <a href="{{ url('station-detail' . '?id=' . $road->id) }}">
                    <img src="{{ asset('/storage/imgs/' . $road->picture1) }}" alt="">
                    <p><?= $road->station_name ?></p>
                    <div> 営業時間:<?= $road->business_hours ?></div>
                    <div>住所:<?= $road->address ?></div>
                    {{-- <div class="icon">
                        <img src="{{ asset('/storage/imgs/atm_icon_' . $road['atm_icon'] . '.jpeg') }}" alt="">
                        <img src="{{ asset('/storage/imgs/bed_icon_' . $road['bed_icon'] . '.jpeg') }}" alt="">
                        <img src="{{ asset('/storage/imgs/restaurant_icon_' . $road['restaurant_icon'] . '.jpeg') }}"
                            alt="">
                        <img src="{{ asset('/storage/imgs/lightmeal_icon_' . $road['lightmeal_icon'] . '.jpeg') }}"
                            alt="">
                        <img src="{{ asset('/storage/imgs/accommodation_icon_' . $road['accommodation_icon'] . '.jpeg') }}"
                            alt="">
                        <img src="{{ asset('/storage/imgs/spa_icon_' . $road['spa_icon'] . '.jpeg') }}" alt="">
                        <img src="{{ asset('/storage/imgs/park_icon_' . $road['park_icon'] . '.jpeg') }}" alt="">
                        <img src="{{ asset('/storage/imgs/ev_icon_' . $road['ev_icon'] . '.jpeg') }}" alt="">
                        <img src="{{ asset('/storage/imgs/lan_icon_' . $road['lan_icon'] . '.jpeg') }}" alt="">
                        <img src="{{ asset('/storage/imgs/shower_icon_' . $road['shower_icon'] . '.jpeg') }}"
                            alt="">
                        <img src="{{ asset('/storage/imgs/experience_icon_' . $road['experience_icon'] . '.jpeg') }}"
                            alt="">
                        <img src="{{ asset('/storage/imgs/guide_icon_' . $road['guide_icon'] . '.jpeg') }}" alt="">
                        <img src="{{ asset('/storage/imgs/disability_icon_' . $road['disability_icon'] . '.jpeg') }}"
                            alt="">
                        <img src="{{ asset('/storage/imgs/shop_icon_' . $road['shop_icon'] . '.jpeg') }}" alt="">
                        <img src="{{ asset('/storage/imgs/observatory_icon_' . $road['observatory_icon'] . '.jpeg') }}"
                            alt="">
                        <img src="{{ asset('/storage/imgs/museum_icon_' . $road['museum_icon'] . '.jpeg') }}"
                            alt=""> --}}
            </div>
            </a>
            </div>
            </div>
        @endif
    @endforeach
    <p>東部</p>
    @foreach ($road_stations as $road)
    @endforeach
    <p>南部</p>
    @foreach ($road_stations as $road)
    @endforeach
@endsection

{{-- 該当ページ専用JS --}}
@section('pageJs')

@endsection
