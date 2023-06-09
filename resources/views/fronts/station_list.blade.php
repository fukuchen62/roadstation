@extends('layouts.layout_front')

@section('description', '一覧')


@section('keywords', 'キーワード1,キーワード2・・・')

{{-- タイトル --}}
@section('title', '一覧')

@section('pageCss')
    {{-- <link rel="stylesheet" href="{{ asset('assets/css/station.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('assets/css/station_list.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/fstyle_station_detail.css') }}">

@endsection

@section('key_visual')
    <!-- キービジュアル -->
    <div class="kv">
        <figure><img src="{{ asset('assets/images/station_list/station_list.jpg') }}" alt="特産品ページ"></figure>
    </div>
@endsection

@section('content')
    <main class="wrapper">
        <section class="station-titlebox">
            <h2 class="stationlist-title">道の駅一覧</h2>
        </section>

        <div class="stationlist-box">
            {{-- <div class="list_box"> --}}
            <h3 class="east-title">県東部</h3>
            <section class="east">
                @foreach ($road_stations as $road)
                    @if ($road->area_id == 1)
                        <a href="{{ url('station-detail' . '?id=' . $road->id) }}">
                            <div class="card">
                                <img src="{{ asset('/assets/images/station/' . $road->picture1) }}" width="250px"
                                    height="200px" alt="道の駅の画像">
                                <h4>道の駅&nbsp;{{ $road->station_name }}</h4>
                                <p>{{ $road->catchphrase }}</p>
                                <dl>
                                    <dt>営業時間：</dt>
                                    <dd>{{ $road->business_hours }}</dd>

                                    <dt>〒{{ $road->zip_code }}</dt>
                                    <dd>{{ $road->address }}</dd>

                                    {{-- <dt>TEL：</dt>
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
                                    </dd> --}}
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
                            </div>
                        </a>
                    @endif
                @endforeach
            </section>
            {{-- </div> --}}
            <h3 class="west-title">県西部</h3>
            {{-- <div class="list_box"> --}}
            <section class="west">

                @foreach ($road_stations as $road)
                    @if ($road->area_id == 2)
                        <a href="{{ url('station-detail' . '?id=' . $road->id) }}">
                            <div class="card">
                                <img src="{{ asset('/assets/images/station/' . $road->picture1) }}" width="250px"
                                    height="200px" alt="道の駅の画像">
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
                            </div>
                        </a>
                    @endif
                @endforeach
            </section>
            {{-- </div> --}}
            <h3 class="south-title">県南部</h3>
            {{-- <div class="list_box"> --}}
            <section class="south">

                @foreach ($road_stations as $road)
                    @if ($road->area_id == 3)
                        <a href="{{ url('station-detail' . '?id=' . $road->id) }}">
                            <div class="card">
                                <img src="{{ asset('/assets/images/station/' . $road->picture1) }}" width="250px"
                                    height="200px" alt="道の駅の画像">
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
                            </div>
                        </a>
                    @endif
                @endforeach
            </section>
            {{-- </div> --}}
        </div>
    </main>
@endsection

{{-- 該当ページ専用JS --}}
@section('pageJs')
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
@endsection
