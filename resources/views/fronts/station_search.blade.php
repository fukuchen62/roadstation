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
    <form action="{{ url('detail-search') }}" method="GET">
        {{ csrf_field() }}
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
    
    // if (isset($_GET['area']) && isset($_GET['icon'])) {
    ?>
    <?php
    // $area = '';
    // $icon = '';
    // $atm = 0;
    // $bed = 0;
    // $area = $_GET['area'];
    // $icon = $_GET['icon'];
    // $areaA = in_array(4, $area);
    // if ($areaA) {
    //     $area = [1, 2, 3];
    // }
    // $atmA = in_array('atm_icon', $icon);
    // if ($atmA) {
    //     $atm = 1;
    // } else {
    //     $atm = 0;
    // }
    // $bedA = in_array('bea_icon', $icon);
    // if ($bedA) {
    //     $bed = 1;
    // } else {
    //     $bed = 0;
    // }
    
    // $area = array_map('intval', $area);
    // $areaB = in_array('4', $area);
    // if ($areaB) {
    //     $areaA = 1 || 2 || 3;
    // } else {
    //     $areaA = implode('||', $area);
    //     echo var_dump($areaA);
    // }
    ?>

    <div class="list_box">
        @foreach ($search as $road)
            {{-- @if ($road->area_id == 3) --}}
            <?php $com++; ?>
            <div class="list">

                <img src="{{ asset('/storage/imgs/' . $road->picture1) }}" alt="">
                <div class="station-title">
                    <h2>道の駅&nbsp;{{ $road->station_name }}</h2>
                    <p>{{ $road->catchphrase }}</p>
                </div>

                <dl>
                    <dt>営業時間：</dt>
                    <dd>{{ $road->business_hours }}</dd>

                    <dt>〒{{ $road->zip_code }}</dt>
                    <dd>{{ $road->address }}</dd>

                    <dt>TEL：</dt>
                    <dd>{{ $road->tel }}</dd>

                    <dt>公式URL：</dt>
                    <dd>{{ $road->url }}</dd>

                    <dt>SNS：</dt>
                    <dd>
                        @if ($road->sns == null)
                            {{ '現在掲載はございません。' }}
                        @else
                            {{ $road->sns }}
                        @endif
                    </dd>
                    <dt>定休日：</dt>
                    <dd>{{ $road->regular_holiday }}</dd>

                    <dt>駐車場：</dt>
                    <dd>{{ $road->parking }}
                    </dd>
                    <dt>設備：</dt>
                    <dd>
                        <div class="icon-wrapper">
                            <img title="宿泊施設"
                                src="{{ asset('assets/images/icon/accommodation_icon' . $road->accommodation_icon . '.svg') }}"
                                alt="宿泊施設">
                            <img title="ATM"
                                src="{{ asset('assets/images/icon/atm_icon' . $road->atm_icon . '.svg') }}"
                                alt="設備ATM">
                            <img title="ベビーベッド"
                                src="{{ asset('assets/images/icon/bed_icon' . $road->bed_icon . '.svg') }}"
                                alt="ベビーベッド">
                            <img title="身障者トイレ"
                                src="{{ asset('assets/images/icon/disability_icon' . $road->disability_icon . '.svg') }}"
                                alt="身障者トイレ">
                            <img title="EV充電施設" src="{{ asset('assets/images/icon/ev_icon' . $road->ev_icon . '.svg') }}"
                                alt="EV充電施設">
                            <img title="軽食・喫茶"
                                src="{{ asset('assets/images/icon/lightmeal_icon' . $road->lightmeal_icon . '.svg') }}"
                                alt="軽食・喫茶">
                            <img title="公園"
                                src="{{ asset('assets/images/icon/park_icon' . $road->park_icon . '.svg') }}"
                                alt="公園">
                            <img title="レストラン"
                                src="{{ asset('assets/images/icon/restaurant_icon' . $road->restaurant_icon . '.svg') }}"
                                alt="レストラン">
                            <img title="ショップ"
                                src="{{ asset('assets/images/icon/shop_icon' . $road->shop_icon . '.svg') }}"
                                alt="ショップ">
                            <img title="シャワー"
                                src="{{ asset('assets/images/icon/shower_icon' . $road->shower_icon . '.svg') }}"
                                alt="シャワー">
                            <img title="温泉施設"
                                src="{{ asset('assets/images/icon/spa_icon' . $road->spa_icon . '.svg') }}"
                                alt="温泉施設">
                            <img title="ここに説明が入ります"
                                src="{{ asset('assets/images/icon/shower_icon' . $road->shower_icon . '.svg') }}"
                                alt="">
                            <img title="ここに説明が入ります"
                                src="{{ asset('assets/images/icon/spa_icon' . $road->_icon . '.svg') }}" alt="">
                            <img title="ここに説明が入ります"
                                src="{{ asset('assets/images/icon/spa_icon' . $road->_icon . '.svg') }}" alt="">
                            <img title="ここに説明が入ります"
                                src="{{ asset('assets/images/icon/spa_icon' . $road->_icon . '.svg') }}" alt="">
                            <img title="ここに説明が入ります"
                                src="{{ asset('assets/images/icon/spa_icon' . $road->_icon . '.svg') }}" alt="">
                        </div>
                    </dd>
                </dl>
                <a href="{{ url('station-detail' . '?id=' . $road->id) }}">
                    <div class="link_more_box">
                        <p>more</p>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
@endsection

{{-- 該当ページ専用JS --}}
@section('pageJs')

@endsection
