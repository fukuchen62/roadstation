@extends('layouts.layout_front')

@section('description', 'area検索')

@section('keywords', 'キーワード1,キーワード2・・・')

@section('title', 'エリア検索')
<?php $com = 0; ?>
{{-- 該当ページのCSS --}}
@section('pageCss')
    <link rel="stylesheet" href="{{ asset('assets/css/station.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/fstyle_search.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/station_area.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/fstyle_station_detail.css') }}">
@endsection

@section('key_visual')
    <div class="kv">
        <img class="sub-keyvisual" src="{{ asset('assets/images/station_area/area.jpg') }}" alt="お好きな道の駅を検索してください。">
    </div>
@endsection

{{-- メイン --}}
@section('content')
    <main class="wrapper">
        {{-- <section class="area_category"> --}}
        {{-- <div class="titlesection__box">
                <h1 class="pagetitle">エリア検索</h1>
            </div> --}}
        @foreach ($area as $areas)
            <h3 class="district">{{ $areas->area_name }}</h3>
        @endforeach
        <div class="area_only">
            <div class="flex area_in">
                <form action="{{ url('area-search') }}" method="GET">
                    {{-- controllerに送ってやる --}}
                    {{ csrf_field() }}
                    <div class="search_area">
                        <button type="submit" name="area" id="east" value="east">県東部</button>
                        <button type="submit" name="area" id="west" value="west">県西部</button>
                        <button type="submit" name="area" id="south" value="south">県南部</button>
                        {{-- 同じnameでvalueで分けなあかん --}}
                    </div>
                </form>
                {{-- <a href="{{ url('news') }}?id={{ $category->id }}"></a> --}}
                <button onclick="location.href='{{ url('detail-search') }}'">詳細検索</button>
            </div>
        </div>
        <?php
        // $area = 0;
        // if (isset($_GET['east'])) {
        //     $area = 1;
        //     // var_dump($area);
        // } elseif (isset($_GET['west'])) {
        //     $area = 2;
        //     // var_dump($area);
        // } elseif (isset($_GET['south'])) {
        //     $area = 3;
        //     // var_dump($area);
        // }
        ?>
        @foreach ($search as $road)
            @php
                $com++;
            @endphp
        @endforeach
        <section class="search_sum">
            <h3 class="search_results">
                検索件数:<?= $com ?>件
                </h2>
        </section>
        <div class="card-list">
            @foreach ($search as $road)
                <div class="card">

                    {{-- @if ($road->area_id == 3) --}}
                    <?php $com++; ?>
                    <a href="{{ url('station-detail' . '?id=' . $road->id) }}">
                        <img src="{{ asset('/storage/imgs/' . $road->picture1) }}" width="250px" height="200px"
                            alt="道の駅写真">
                        <h4>道の駅&nbsp;{{ $road->station_name }}</h4>
                        <p>{{ $road->catchphrase }}</p>
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
                                    <img title="EV充電施設"
                                        src="{{ asset('assets/images/icon/ev_icon' . $road->ev_icon . '.svg') }}"
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
                                        src="{{ asset('assets/images/icon/spa_icon' . $road->_icon . '.svg') }}"
                                        alt="">
                                    <img title="ここに説明が入ります"
                                        src="{{ asset('assets/images/icon/spa_icon' . $road->_icon . '.svg') }}"
                                        alt="">
                                    <img title="ここに説明が入ります"
                                        src="{{ asset('assets/images/icon/spa_icon' . $road->_icon . '.svg') }}"
                                        alt="">
                                    <img title="ここに説明が入ります"
                                        src="{{ asset('assets/images/icon/spa_icon' . $road->_icon . '.svg') }}"
                                        alt="">
                                </div>
                            </dd>
                        </dl>
                    </a>
                </div>
            @endforeach
        </div>
        {{-- </section> --}}
    </main>
@endsection

{{-- 該当ページ専用JS --}}
@section('pageJs')

@endsection
