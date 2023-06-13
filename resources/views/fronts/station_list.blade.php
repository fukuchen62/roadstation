@extends('layouts.layout_front')

@section('description', '道の駅一覧')


@section('keywords', 'キーワード1,キーワード2・・・')

{{-- タイトル --}}
@section('title', '道の駅一覧')

@section('pageCss')
    <link rel="stylesheet" href="{{ asset('assets/css/station_list.css') }}">
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
            <h3 class="east-title">県東部</h3>
            <section class="east">
                <div class="grid">
                    @foreach ($road_stations as $road)
                        @if ($road->area_id == 1)
                            <a href="{{ url('station-detail' . '?id=' . $road->id) }}">
                                <div class="card">

                                    @if ($road->picture1)
                                        <img src="{{ asset('/storage/images/' . $road->picture1) }}" width="250px"
                                            height="200px" alt="道の駅の画像">
                                    @else
                                        <img src="{{ asset('/storage/images/no-image.png') }}" width="250px" height="200px"
                                            alt="道の駅の画像">
                                    @endif

                                    <h4>道の駅&nbsp;{{ $road->station_name }}</h4>
                                    <p>{!! $road->catchphrase !!}</p>
                                    <dl>
                                        <dt>営業時間：</dt>
                                        <dd>{{ $road->business_hours }}</dd>
                                        <dt>〒{{ $road->zip_code }}</dt>
                                        <dd>{{ $road->address }}</dd>
                                        <dt>設備：</dt>
                                        <dd>
                                            <img title="観光案内"
                                                src="{{ asset('assets/images/icon/guide_icon' . $road->guide_icon . '.svg') }}"
                                                alt="観光案内">
                                            <img title="ショップ"
                                                src="{{ asset('assets/images/icon/shop_icon' . $road->shop_icon . '.svg') }}"
                                                alt="ショップ">
                                            <img title="軽食・喫茶"
                                                src="{{ asset('assets/images/icon/lightmeal_icon' . $road->lightmeal_icon . '.svg') }}"
                                                alt="軽食・喫茶">
                                            <img title="レストラン"
                                                src="{{ asset('assets/images/icon/restaurant_icon' . $road->restaurant_icon . '.svg') }}"
                                                alt="レストラン">
                                            <img title="体験施設"
                                                src="{{ asset('assets/images/icon/experience_icon' . $road->experience_icon . '.svg') }}"
                                                alt="体験施設">
                                            <img title="身障者トイレ"
                                                src="{{ asset('assets/images/icon/disability_icon' . $road->disability_icon . '.svg') }}"
                                                alt="身障者トイレ">
                                            <img title="公園"
                                                src="{{ asset('assets/images/icon/park_icon' . $road->park_icon . '.svg') }}"
                                                alt="公園">
                                            <img title="ベビーベッド"
                                                src="{{ asset('assets/images/icon/bed_icon' . $road->bed_icon . '.svg') }}"
                                                alt="ベビーベッド">
                                            <img title="宿泊施設"
                                                src="{{ asset('assets/images/icon/accommodation_icon' . $road->accommodation_icon . '.svg') }}"
                                                alt="宿泊施設">
                                            <img title="温泉施設"
                                                src="{{ asset('assets/images/icon/spa_icon' . $road->spa_icon . '.svg') }}"
                                                alt="温泉施設">
                                            <img title="シャワー"
                                                src="{{ asset('assets/images/icon/shower_icon' . $road->shower_icon . '.svg') }}"
                                                alt="シャワー">
                                            <img title="展望台"
                                                src="{{ asset('assets/images/icon/observatory_icon' . $road->observatory_icon . '.svg') }}"
                                                alt="展望台">
                                            <img title="EV充電施設"
                                                src="{{ asset('assets/images/icon/ev_icon' . $road->ev_icon . '.svg') }}"
                                                alt="EV充電施設">
                                            <img title="無線LAN"
                                                src="{{ asset('assets/images/icon/lan_icon' . $road->lan_icon . '.svg') }}"
                                                alt="無線LAN">
                                            <img title="ATM"
                                                src="{{ asset('assets/images/icon/atm_icon' . $road->atm_icon . '.svg') }}"
                                                alt="設備ATM">
                                            <img title="美術館・博物館"
                                                src="{{ asset('assets/images/icon/museam_icon' . $road->museum_icon . '.svg') }}"
                                                alt="美術館・博物館">
                                        </dd>
                                    </dl>
                                </div>
                            </a>
                        @endif
                    @endforeach
                </div>
            </section>
            <h3 class="west-title">県西部</h3>
            <section class="west">
                <div class="grid">
                    @foreach ($road_stations as $road)
                        @if ($road->area_id == 2)
                            <a href="{{ url('station-detail' . '?id=' . $road->id) }}">
                                <div class="card">

                                    @if ($road->picture1)
                                        <img src="{{ asset('/storage/images/' . $road->picture1) }}" width="250px"
                                            height="200px" alt="道の駅の画像">
                                    @else
                                        <img src="{{ asset('/storage/images/no-image.png') }}" width="250px"
                                            height="200px" alt="道の駅の画像">
                                    @endif

                                    <h4>道の駅&nbsp;{{ $road->station_name }}</h4>
                                    <p>{!! $road->catchphrase !!}</p>
                                    <dl>
                                        <dt>営業時間：</dt>
                                        <dd>{{ $road->business_hours }}</dd>
                                        <dt>〒{{ $road->zip_code }}</dt>
                                        <dd>{{ $road->address }}</dd>
                                        <dd>
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
                                            <img title="無線LAN"
                                                src="{{ asset('assets/images/icon/lan_icon' . $road->lan_icon . '.svg') }}"
                                                alt="無線LAN">
                                            <img title="体験施設"
                                                src="{{ asset('assets/images/icon/experience_icon' . $road->experience_icon . '.svg') }}"
                                                alt="体験施設">
                                            <img title="観光案内"
                                                src="{{ asset('assets/images/icon/guide_icon' . $road->guide_icon . '.svg') }}"
                                                alt="観光案内">
                                            <img title="展望台"
                                                src="{{ asset('assets/images/icon/observatory_icon' . $road->observatory_icon . '.svg') }}"
                                                alt="展望台">
                                            <img title="美術館・博物館"
                                                src="{{ asset('assets/images/icon/museam_icon' . $road->museum_icon . '.svg') }}"
                                                alt="美術館・博物館">
                                        </dd>
                                    </dl>
                                </div>
                            </a>
                        @endif
                    @endforeach
                </div>
            </section>
            {{-- </div> --}}
            <h3 class="south-title">県南部</h3>
            {{-- <div class="list_box"> --}}
            <section class="south">
                <div class="grid">
                    @foreach ($road_stations as $road)
                        @if ($road->area_id == 3)
                            <a href="{{ url('station-detail' . '?id=' . $road->id) }}">
                                <div class="card">

                                    @if ($road->picture1)
                                        <img src="{{ asset('/storage/images/' . $road->picture1) }}" width="250px"
                                            height="200px" alt="道の駅の画像">
                                    @else
                                        <img src="{{ asset('/storage/images/no-image.png') }}" width="250px"
                                            height="200px" alt="道の駅の画像">
                                    @endif

                                    <h4>道の駅&nbsp;{{ $road->station_name }}</h4>
                                    <p>{!! $road->catchphrase !!}</p>
                                    <dl>
                                        <dt>営業時間：</dt>
                                        <dd>{{ $road->business_hours }}</dd>

                                        <dt>〒{{ $road->zip_code }}</dt>
                                        <dd>{{ $road->address }}</dd>
                                        <dd>
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
                                            <img title="無線LAN"
                                                src="{{ asset('assets/images/icon/lan_icon' . $road->lan_icon . '.svg') }}"
                                                alt="無線LAN">
                                            <img title="体験施設"
                                                src="{{ asset('assets/images/icon/experience_icon' . $road->experience_icon . '.svg') }}"
                                                alt="体験施設">
                                            <img title="観光案内"
                                                src="{{ asset('assets/images/icon/guide_icon' . $road->guide_icon . '.svg') }}"
                                                alt="観光案内">
                                            <img title="展望台"
                                                src="{{ asset('assets/images/icon/observatory_icon' . $road->observatory_icon . '.svg') }}"
                                                alt="展望台">
                                            <img title="美術館・博物館"
                                                src="{{ asset('assets/images/icon/museam_icon' . $road->museum_icon . '.svg') }}"
                                                alt="美術館・博物館">
                                        </dd>
                                    </dl>
                                </div>
                            </a>
                        @endif
                    @endforeach
                </div>
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
