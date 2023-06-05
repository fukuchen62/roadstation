@extends('layouts.layout_front')

@section('description', 'area検索')

@section('keywords', 'キーワード1,キーワード2・・・')

@section('title', 'エリア検索')

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
            <h1 class="pagetitle">エリア検索</h1>
        </div>
    </section>
    <div class="area_only">
        <div class="flex area_in">
            <form action="#" method="GET">
                <div class="search_area">
                    <button type="submit" name="east" id="east">県東部</button>
                    <button type="submit" name="west" id="west">県西部</button>
                    <button type="submit" name="south" id="south">県南部</button>
                </div>
            </form>
            <button onclick="location.href='{{ url('detail-search') }}'">詳細検索</button>
        </div>
    </div>
    <?php
    $area = 0;
    if (isset($_GET['east'])) {
        $area = 1;
        var_dump($area);
    } elseif (isset($_GET['west'])) {
        $area = 2;
        var_dump($area);
    } elseif (isset($_GET['south'])) {
        $area = 3;
        var_dump($area);
    }
    
    ?>
    <section>
        <h2>
            検索件数
        </h2>
    </section>
    @foreach ($road_stations as $station)
        @if ($station->area_id === $area)
            <div class="station">
                <img src="{{ asset('/storage/imgs/' . $station['picture1']) }}" width="300px" alt="">
                <p>道の駅{{ $station->station_name }}</p>
                <p>営業時間:<br>{{ $station->business_hours }}</p>
                <p>〒{{ $station->zip_code }}</p>
                <p>{{ $station->address }}</p>
                <div class="icon">
                    <img src="{{ asset('/storage/imgs/atm_icon_' . $station['atm_icon'] . '.jpeg') }}" alt="">
                    <img src="{{ asset('/storage/imgs/bed_icon_' . $station['bed_icon'] . '.jpeg') }}" alt="">
                    <img src="{{ asset('/storage/imgs/restaurant_icon_' . $station['restaurant_icon'] . '.jpeg') }}"
                        alt="">
                    <img src="{{ asset('/storage/imgs/lightmeal_icon_' . $station['lightmeal_icon'] . '.jpeg') }}"
                        alt="">
                    <img src="{{ asset('/storage/imgs/accommodation_icon_' . $station['accommodation_icon'] . '.jpeg') }}"
                        alt="">
                    <img src="{{ asset('/storage/imgs/spa_icon_' . $station['spa_icon'] . '.jpeg') }}" alt="">
                    <img src="{{ asset('/storage/imgs/park_icon_' . $station['park_icon'] . '.jpeg') }}" alt="">
                    <img src="{{ asset('/storage/imgs/ev_icon_' . $station['ev_icon'] . '.jpeg') }}" alt="">
                    <img src="{{ asset('/storage/imgs/lan_icon_' . $station['lan_icon'] . '.jpeg') }}" alt="">
                    <img src="{{ asset('/storage/imgs/shower_icon_' . $station['shower_icon'] . '.jpeg') }}"
                        alt="">
                    <img src="{{ asset('/storage/imgs/experience_icon_' . $station['experience_icon'] . '.jpeg') }}"
                        alt="">
                    <img src="{{ asset('/storage/imgs/guide_icon_' . $station['guide_icon'] . '.jpeg') }}" alt="">
                    <img src="{{ asset('/storage/imgs/disability_icon_' . $station['disability_icon'] . '.jpeg') }}"
                        alt="">
                    <img src="{{ asset('/storage/imgs/shop_icon_' . $station['shop_icon'] . '.jpeg') }}" alt="">
                    <img src="{{ asset('/storage/imgs/observatory_icon_' . $station['observatory_icon'] . '.jpeg') }}"
                        alt="">
                    <img src="{{ asset('/storage/imgs/museum_icon_' . $station['museum_icon'] . '.jpeg') }}"
                        alt="">
                </div>
            </div>
        @endif
    @endforeach


@endsection

{{-- 該当ページ専用JS --}}
@section('pageJs')

@endsection
