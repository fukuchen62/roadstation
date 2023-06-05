@extends('layouts.layout_front')

@section('description', '詳細検索')

@section('keywords', 'キーワード1,キーワード2・・・')

@section('title', '詳細検索')

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
                            <input type="checkbox" name="icon[]" id="guide_icon" value="guide_icon">
                            <label for="guide_icon">観光案内</label>

                            <input type="checkbox" name="icon[]" id="shop_icon" value="shop_icon">
                            <label for="shop_icon">ショップ</label>

                            <input type="checkbox" name="icon[]" id="lightmeal_icon" value="lightmeal_icon">
                            <label for="lightmeal_icon">軽食・喫茶</label>

                            <input type="checkbox" name="icon[]" id="restaurant_icon" value="restaurant_icon">
                            <label for="restaurant_icon">レストラン</label>
                        </div>
                    </li>
                    <li>
                        <div class="search_check">
                            <input type="checkbox" name="icon[]" id="experience_icon" value="experience_icon">
                            <label for="experience_icon">体験施設</label>

                            <input type="checkbox" name="icon[]" id="disability_icon" value="disability_icon">
                            <label for="disability_icon">身障者トイレ</label>

                            <input type="checkbox" name="icon[]" id="park_icon" value="park_icon">
                            <label for="park_icon">公園</label>

                            <input type="checkbox" name="icon[]" id="bed_icon" value="bed_icon">
                            <label for="bed_icon">ベビーベッド</label>
                        </div>
                    </li>
                    <li>
                        <div class="search_check">
                            <input type="checkbox" name="icon[]" id="accommodation_icon" value="accommodation_icon">
                            <label for="accommodation_icon">宿泊施設</label>

                            <input type="checkbox" name="icon[]" id="spa_icon" value="spa_icon">
                            <label for="spa_icon">温泉施設</label>

                            <input type="checkbox" name="icon[]" id="shower_icon" value="shower_icon">
                            <label for="shower_icon">シャワー</label>

                            <input type="checkbox" name="icon[]" id="observatory_icon" value="observatory_icon">
                            <label for="observatory_icon">展望台</label>


                        </div>
                    </li>
                    <li>
                        <div class="search_check">
                            <input type="checkbox" name="icon[]" id="ev_icon" value="ev_icon">
                            <label for="ev_icon">EV充電施設</label>

                            <input type="checkbox" name="icon[]" id="lan_icon" value="lan_icon">
                            <label for="lan_icon">無線LAN</label>

                            <input type="checkbox" name="icon[]" id="atm_icon" value="atm_icon">
                            <label for="atm_icon">ATM</label>

                            <input type="checkbox" name="icon[]" id="museum_icon" value="museum_icon">
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
    
    if (isset($_GET['area']) && isset($_GET['icon'])) {
        $area = $_GET['area'];
        $icon = $_GET['icon'];
    }
    ?>

    @if (isset($area) && isset($icon))
        @foreach ($icon as $areas)
            <div>{{ $areas }}</div>
        @endforeach
    @endif
@endsection

{{-- 該当ページ専用JS --}}
@section('pageJs')

@endsection
