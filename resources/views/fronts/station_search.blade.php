@extends('layouts.layout_front')

@section('description', '詳細検索')

@section('keywords', 'キーワード1,キーワード2・・・')

@section('title', '詳細検索')

{{-- 該当ページのCSS --}}
@section('pageCss')
    <link rel="stylesheet" href="{{ asset('assets/css/station.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/fstyle_search.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/fstyle_station_detail.css') }}">
@endsection

@section('key_visual')
    <img class="sub-keyvisual" src="{{ asset('assets/images/sub-keyvisual.jpg') }}" alt="サブキービジュアル">
@endsection

{{-- メイン --}}
@section('content')

    <section class="titlesection">
        <div class="titlesection__box">
            <h1 class="pagetitle">詳細検索</h1>
        </div>
    </section>
    <form action="#" method="GET">
        <div class="search_form">
            <p>地域</p>
            <div class="search_area">
                <input type="checkbox" name="area[]" id="east" value="1">
                <label for="east">東部</label>
                <input type="checkbox" name="area[]" id="west" value="2">
                <label for="west">西部</label>
                <input type="checkbox" name="area[]" id="south" value="3">
                <label for="south">南部</label>
                <input type="checkbox" name="area[]" id="all" value="4">
                <label for="all">全域</label>
            </div>
            <p>設備</p>
            <div class="search_box">
                <ul>
                    <li>
                        <div class="search_check">
                            <input type="checkbox" name="guide_icon" id="guide_icon" value="1">
                            <label for="guide_icon">観光案内</label>
                            {{-- 配列よ名前を別々で name=eastなど個別 --}}
                            <input type="checkbox" name="shop_icon" id="shop_icon" value="1">
                            <label for="shop_icon">ショップ</label>

                            <input type="checkbox" name="lightmeal_icon" id="lightmeal_icon" value="1">
                            <label for="lightmeal_icon">軽食・喫茶</label>

                            <input type="checkbox" name="restaurant_icon" id="restaurant_icon" value="1">
                            <label for="restaurant_icon">レストラン</label>
                        </div>
                    </li>
                    <li>
                        <div class="search_check">
                            <input type="checkbox" name="experience_icon" id="experience_icon" value="1">
                            <label for="experience_icon">体験施設</label>

                            <input type="checkbox" name="disability_icon" id="disability_icon" value="1">
                            <label for="disability_icon">身障者トイレ</label>

                            <input type="checkbox" name="park_icon" id="park_icon" value="1">
                            <label for="park_icon">公園</label>

                            <input type="checkbox" name="bed_icon" id="bed_icon" value="1">
                            <label for="bed_icon">ベビーベッド</label>
                        </div>
                    </li>
                    <li>
                        <div class="search_check">
                            <input type="checkbox" name="accommodation_icon" id="accommodation_icon" value="1">
                            <label for="accommodation_icon">宿泊施設</label>

                            <input type="checkbox" name="spa_icon" id="spa_icon" value="1">
                            <label for="spa_icon">温泉施設</label>

                            <input type="checkbox" name="shower_icon" id="shower_icon" value="1">
                            <label for="shower_icon">シャワー</label>

                            <input type="checkbox" name="observatory_icon" id="observatory_icon" value="1">
                            <label for="observatory_icon">展望台</label>


                        </div>
                    </li>
                    <li>
                        <div class="search_check">
                            <input type="checkbox" name="ev_icon" id="ev_icon" value="1">
                            <label for="ev_icon">EV充電施設</label>

                            <input type="checkbox" name="lan_icon" id="lan_icon" value="1">
                            <label for="lan_icon">無線LAN</label>

                            <input type="checkbox" name="atm_icon" id="atm_icon" value="1">
                            <label for="atm_icon">ATM</label>

                            <input type="checkbox" name="museum_icon" id="museum_icon" value="1">
                            <label for="museum_icon">美術館・博物館</label>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="send">
                <input type="reset" value="リセット">
                <input type="submit" value="検索">
            </div>
    </form>
    <?php

    if (isset($_GET['area']) && isset($_GET['icon'])) { ?>
    <?php
    $area = '';
    $icon = '';
    $atm = 0;
    $bed = 0;
    $area = $_GET['area'];
    $icon = $_GET['icon'];
    $areaA = in_array(4, $area);
    if ($areaA) {
        $area = [1, 2, 3];
    }
    $atmA = in_array('atm_icon', $icon);
    if ($atmA) {
        $atm = 1;
    } else {
        $atm = 0;
    }
    $bedA = in_array('bea_icon', $icon);
    if ($bedA) {
        $bed = 1;
    } else {
        $bed = 0;
    }
    
    $area = array_map('intval', $area);
    $areaB = in_array('4', $area);
    if ($areaB) {
        $areaA = 1 || 2 || 3;
    } else {
        $areaA = implode('||', $area);
        echo var_dump($areaA);
    }
    ?>

    <pre>
        <?php var_dump($area); ?>
        <?php var_dump($icon); ?>
    </pre>
    <?php } ?>
    @if (isset($_GET['area']) && isset($_GET['icon']))

        @foreach ($road_stations as $road)
            @if ($road->area_id == $area['0'] || $road->area_id == isset($area['1']) || $road->area_id == isset($area['2']))
                @if ($road->atm_icon == $atm && $road->bed_icon == $bed)
                    {{ $road->station_name }}
                @endif
            @endif
        @endforeach
    @endif

@endsection

{{-- 該当ページ専用JS --}}
@section('pageJs')

@endsection
