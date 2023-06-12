@extends('layouts.layout_front')

@section('title', 'お気に入りページ')

{{-- 該当ページのCSS --}}
@section('pageCss')
    <link rel="stylesheet" href="{{ asset('assets/css/mypage.css') }}">
@endsection

@section('key_visual')
    <!-- キービジュアル -->
    <div class="kv">
        <figure><img src="{{ asset('assets/images/station_list/station_list.jpg') }}" alt="お気に入りページ"></figure>
    </div>
@endsection

{{-- メイン --}}
@section('content')

    <section class="station-titlebox">
        <h2 class="stationlist-title">お気に入り道の駅</h2>
    </section>

    <div class="stationlist-box">

        <section class="east">
            @if ($stations)
                <div class="grid">
                    @foreach ($stations as $station)
                        <a href="{{ url('station-detail' . '?id=' . $station->id) }}">
                            <div class="card">
                                <img src="{{ asset('/storage/images/' . $station->picture1) }}" width="250px"
                                    height="200px" alt="道の駅の画像">
                                <h4>道の駅&nbsp;{{ $station->station_name }}</h4>
                                <p>{!! $station->catchphrase !!}</p>
                                <dl>
                                    <dt>営業時間：</dt>
                                    <dd>{{ $station->business_hours }}</dd>
                                    <dt>〒{{ $station->zip_code }}</dt>
                                    <dd>{{ $station->address }}</dd>
                                    <dt>設備：</dt>
                                    <dd>
                                        <img title="宿泊施設"
                                            src="{{ asset('assets/images/icon/accommodation_icon' . $station->accommodation_icon . '.svg') }}"
                                            alt="宿泊施設">
                                        <img title="ATM"
                                            src="{{ asset('assets/images/icon/atm_icon' . $station->atm_icon . '.svg') }}"
                                            alt="設備ATM">
                                        <img title="ベビーベッド"
                                            src="{{ asset('assets/images/icon/bed_icon' . $station->bed_icon . '.svg') }}"
                                            alt="ベビーベッド">
                                        <img title="身障者トイレ"
                                            src="{{ asset('assets/images/icon/disability_icon' . $station->disability_icon . '.svg') }}"
                                            alt="身障者トイレ">
                                        <img title="EV充電施設"
                                            src="{{ asset('assets/images/icon/ev_icon' . $station->ev_icon . '.svg') }}"
                                            alt="EV充電施設">
                                        <img title="軽食・喫茶"
                                            src="{{ asset('assets/images/icon/lightmeal_icon' . $station->lightmeal_icon . '.svg') }}"
                                            alt="軽食・喫茶">
                                        <img title="公園"
                                            src="{{ asset('assets/images/icon/park_icon' . $station->park_icon . '.svg') }}"
                                            alt="公園">
                                        <img title="レストラン"
                                            src="{{ asset('assets/images/icon/restaurant_icon' . $station->restaurant_icon . '.svg') }}"
                                            alt="レストラン">
                                        <img title="ショップ"
                                            src="{{ asset('assets/images/icon/shop_icon' . $station->shop_icon . '.svg') }}"
                                            alt="ショップ">
                                        <img title="シャワー"
                                            src="{{ asset('assets/images/icon/shower_icon' . $station->shower_icon . '.svg') }}"
                                            alt="シャワー">
                                        <img title="温泉施設"
                                            src="{{ asset('assets/images/icon/spa_icon' . $station->spa_icon . '.svg') }}"
                                            alt="温泉施設">
                                        <img title="無線LAN"
                                            src="{{ asset('assets/images/icon/lan_icon' . $station->lan_icon . '.svg') }}"
                                            alt="無線LAN">
                                        <img title="体験施設"
                                            src="{{ asset('assets/images/icon/experience_icon' . $station->experience_icon . '.svg') }}"
                                            alt="体験施設">
                                        <img title="観光案内"
                                            src="{{ asset('assets/images/icon/guide_icon' . $station->guide_icon . '.svg') }}"
                                            alt="観光案内">
                                        <img title="展望台"
                                            src="{{ asset('assets/images/icon/observatory_icon' . $station->observatory_icon . '.svg') }}"
                                            alt="展望台">
                                        <img title="美術館・博物館"
                                            src="{{ asset('assets/images/icon/museam_icon' . $station->museum_icon . '.svg') }}"
                                            alt="美術館・博物館">
                                    </dd>
                                </dl>
                            </div>
                        </a>
                    @endforeach
                </div>
            @else
                <!-- 以下表示する物がない状態 -->
                <div class="no_favorite">
                    <p>まだお気に入りがありません</p>
                    <p>お気に入りの道の駅を探しに行きましょう！</p>
                    <p class="favorite_p"><a class="btn" href="{{ route('stationlist') }}">道の駅一覧</a></p>
                </div>
            @endif

        </section>

    </div>

@endsection
