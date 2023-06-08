@extends('layouts.layout_front')

@section('description', 'area検索')

@section('keywords', 'キーワード1,キーワード2・・・')

@section('title', 'エリア検索')
<?php $com = 0; ?>
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
            <h1 class="pagetitle">エリア検索</h1>
        </div>
    </section>
    <div class="area_only">
        <div class="flex area_in">
            {{-- <form action="{{ url('area-search') }}" method="GET">
                <div class="search_area">
                    <button type="submit" name="1" id="east">県東部</button>
                    <button type="submit" name="2" id="west">県西部</button>
                    <button type="submit" name="3" id="south">県南部</button>
                </div>
            </form> --}}
            <a href="{{ url('news') }}?id={{ $category->id }}"></a>
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
    {{-- @foreach ($road_stations as $road)
        @if ($road->area_id === $area)
            @php
                $com++;
            @endphp
        @endif
    @endforeach --}}
    <section class="search_sum">
        <h2>
            検索件数:<?= $com ?>件
        </h2>
    </section>
    <div class="list_box">
        @if (isset($search))


            @foreach ($search as $road)
                @if ($road->area_id == 3)
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
                        <a href="{{ url('station-detail' . '?id=' . $road->id) }}">
                            <div class="link_more_box">
                                <p>more</p>
                            </div>
                        </a>
                    </div>
                @endif
                {{-- @endif --}}
            @endforeach
        @endif
    </div>


@endsection

{{-- 該当ページ専用JS --}}
@section('pageJs')

@endsection
