@extends('layouts.layout_front')

@section('description', 'エリア検索')

@section('keywords', 'キーワード1,キーワード2・・・')

@section('title', 'エリア検索')

{{-- 該当ページのCSS --}}
@section('pageCss')
    <link rel="stylesheet" href="{{ asset('assets/css/station_area.css') }}">
    <style>
        .pagination {
            text-align: center;
        }

        .pagination li {
            display: inline-block;
        }
    </style>
@endsection

@section('key_visual')
    <div class="kv">
        <img class="sub-keyvisual" src="{{ asset('assets/images/station_area/area.jpg') }}" alt="お好きな道の駅を検索してください。">
    </div>
@endsection

{{-- メイン --}}
@section('content')
    <main class="wrapper">

        <h3 class="district">道の駅エリア検索</h3>

        <div class="area">
            {{-- aの場合下のようにしてやるとcontrollerに反映される。 --}}
            <a href="{{ route('areasearch') }}?area_id=1">
                {{-- routeの場合はname --}}
                <h3 class="area-btn">県東部</h3>
            </a>
            <a href="{{ route('areasearch') }}?area_id=2">
                <h3 class="area-btn">県西部</h3>
            </a>
            <a href="{{ route('areasearch') }}?area_id=3">
                <h3 class="area-btn">県南部</h3>
            </a>
            <a href="{{ route('ditailsearch') }}">
                <h3 class="area-btn">詳細検索</h3>
            </a>
        </div>

        <h3 class="east-title">県{{ $area->area_name }}</h3>

        <h3 class="search_results">
            検索件数:({{ $com }}件)
        </h3>
        <div class="grid">
            @foreach ($search as $road)
                <div class="card">

                    {{-- @if ($road->area_id == 3) --}}
                    <a href="{{ url('station-detail' . '?id=' . $road->id) }}">

                        @if ($road->picture1)
                            <img src="{{ asset('/storage/images/' . $road->picture1) }}" width="250px" height="200px"
                                alt="道の駅の画像">
                        @else
                            <img src="{{ asset('/storage/images/no-image.png') }}" width="250px" height="200px"
                                alt="道の駅の画像">
                        @endif

                        <h4>道の駅&nbsp;{{ $road->station_name }}</h4>
                        <p>{{ $road->catchphrase }}</p>
                        <dl>
                            <dt>営業時間：</dt>
                            <dd>{{ $road->business_hours }}</dd>

                            <dt>〒{{ $road->zip_code }}</dt>
                            <dd>{{ $road->address }}</dd>

                            <dt>設備：</dt>
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
                    </a>
                </div>
            @endforeach
        </div>
        <div class="link">
            {{ $search->links('pagination::bootstrap-4') }}
        </div>
    </main>
@endsection

{{-- 該当ページ専用JS --}}
@section('pageJs')

@endsection
