@extends('layouts.layout_front')

@section('title', '道の駅詳細検索 | 徳島まるっと道の駅')

{{-- 該当ページのCSS --}}
@section('pageCss')
<link rel="stylesheet" href="{{ asset('assets/css/station_detail.css') }}">
@endsection

@section('key_visual')
<div class="kv">
    <img class="sub-keyvisual" src="{{ asset('assets/images/station_detail/station_detail01.jpg') }}" alt="サブキービジュアル">
</div>
@endsection

{{-- メイン --}}
@section('content')

<section>
    <h2>詳細検索</h2>
    <!-- mobile -->
    <form class="mobile-form" action="{{ route('ditailsearch') }}" method="GET">
        <h3 class="checkbox-title">地域<br>
        </h3>
        <table class="mobile_table" border>
            <tr>
                <td>
                    @if ($area_id != null)
                    @if (in_array(1, $area_id))
                    <label><input type="checkbox" name="area[]" id="east" value="1" class="checkbox_list" checked>
                        県東部</label>
                    @else
                    <label><input type="checkbox" name="area[]" id="east" value="1" class="checkbox_list">
                        県東部</label>
                    @endif
                    @else
                    <label><input type="checkbox" name="area[]" id="east" value="1" class="checkbox_list">
                        県東部</label>
                    @endif
                    {{-- <label><input id="area_id" class="" type="checkbox" name="area[]"
                                    value="1">県東部</label> --}}
                </td>
                <td>
                    @if ($area_id != null)
                    @if (in_array(2, $area_id))
                    <label><input type="checkbox" name="area[]" id="west" value="2" class="checkbox_list" checked>
                        県西部</label>
                    @else
                    <label><input type="checkbox" name="area[]" id="west" value="2" class="checkbox_list">
                        県西部</label>
                    @endif
                    @else
                    <label><input type="checkbox" name="area[]" id="west" value="2" class="checkbox_list">
                        県西部</label>
                    @endif
                    {{-- <label><input id="area_id" class="" type="checkbox" name="area[]"
                                    value="2">県西部</label> --}}
                </td>
                <td>
                    @if ($area_id != null)
                    @if (in_array(3, $area_id))
                    <label><input type="checkbox" name="area[]" id="south" value="3" class="checkbox_list" checked>県南部</label>
                    @else
                    <label><input type="checkbox" name="area[]" id="south" value="3" class="checkbox_list">県南部</label>
                    @endif
                    @else
                    <label><input type="checkbox" name="area[]" id="south" value="3" class="checkbox_list">県南部</label>
                    @endif
                    {{-- <label><input id="area_id" class="" type="checkbox" name="area[]"
                                    value="3">県南部</label> --}}
                </td>
            </tr>
            {{-- <tr>

                        <td>
                            <label><input id="area_id" class="" type="checkbox" name="area[]"
                                    value="4">全域</label>
                        </td>
                    </tr> --}}
        </table>

        <h3 class="checkbox-title">設備</h3>

        <table class="mobile_table" border="2" cellspacing="0">
            <tr>
                <td>
                    @if (isset($guide_icon) && $guide_icon == 1)
                    <label><input id="guide_icon" type="checkbox" name="guide_icon" value="1" checked>観光案内</label>
                    @else
                    <label><input id="guide_icon" type="checkbox" name="guide_icon" value="1">観光案内</label>
                    @endif
                </td>
                <td>
                    @if (isset($shop_icon) && $shop_icon == 1)
                    <label><input id="shop_icon" type="checkbox" name="shop_icon" value="1" checked>ショップ</label>
                    @else
                    <label><input id="shop_icon" type="checkbox" name="shop_icon" value="1">ショップ</label>
                    @endif
                </td>

            </tr>
            <tr>
                <td>
                    @if (isset($lightmeal_icon) && $lightmeal_icon == 1)
                    <label><input id="lightmeal_icon" type="checkbox" name="lightmeal_icon" value="1" checked>軽食・喫茶</label>
                    @else
                    <label><input id="lightmeal_icon" type="checkbox" name="lightmeal_icon" value="1">軽食・喫茶</label>
                    @endif
                </td>
                <td>
                    @if (isset($restaurant_icon) && $restaurant_icon == 1)
                    <label><input id="restaurant_icon" type="checkbox" name="restaurant_icon" value="1" checked>レストラン</label>
                    @else
                    <label><input id="restaurant_icon" type="checkbox" name="restaurant_icon" value="1">レストラン</label>
                    @endif
                </td>

            </tr>
            <tr>
                <td>
                    @if (isset($experience_icon) && $experience_icon == 1)
                    <label><input id="experience_icon" type="checkbox" name="experience_icon" value="1" checked>体験施設</label>
                    @else
                    <label><input id="experience_icon" type="checkbox" name="experience_icon" value="1">体験施設</label>
                    @endif
                </td>
                <td>
                    @if (isset($disability_icon) && $disability_icon == 1)
                    <label><input id="disability_icon" type="checkbox" name="disability_icon" value="1" checked>身障者トイレ</label>
                    @else
                    <label><input id="disability_icon" type="checkbox" name="disability_icon" value="1">身障者トイレ</label>
                    @endif
                </td>
            </tr>
            <tr>
                <td>
                    @if (isset($park_icon) && $park_icon == 1)
                    <label><input id="park_icon" type="checkbox" name="park_icon" value="1" checked>公園</label>
                    @else
                    <label><input id="park_icon" type="checkbox" name="park_icon" value="1">公園</label>
                    @endif
                </td>
                <td>
                    @if (isset($bed_icon) && $bed_icon == 1)
                    <label><input id="bed_icon" type="checkbox" name="bed_icon" value="1" checked>ベビーベッド</label>
                    @else
                    <label><input id="bed_icon" type="checkbox" name="bed_icon" value="1">ベビーベッド</label>
                    @endif
                </td>
            </tr>
            <tr>
                <td>
                    @if (isset($accommodation_icon) && $accommodation_icon == 1)
                    <label><input id="accommodation_icon" type="checkbox" name="accommodation_icon" value="1" checked>宿泊施設</label>
                    @else
                    <label><input id="accommodation_icon" type="checkbox" name="accommodation_icon" value="1">宿泊施設</label>
                    @endif
                </td>
                <td>
                    @if (isset($spa_icon) && $accommodation_icon == 1)
                    <label><input id="spa_icon" type="checkbox" name="spa_icon" value="1" checked>温泉施設</label>
                    @else
                    <label><input id="spa_icon" type="checkbox" name="spa_icon" value="1">温泉施設</label>
                    @endif
                </td>
            </tr>
            <tr>
                <td>
                    @if (isset($shower_icon) && $shower_icon == 1)
                    <label><input id="shower_icon" type="checkbox" name="shower_icon" value="1" checked>シャワー</label>
                    @else
                    <label><input id="shower_icon" type="checkbox" name="shower_icon" value="1">シャワー</label>
                    @endif
                </td>
                <td>
                    @if (isset($observatory_icon) && $observatory_icon == 1)
                    <label><input id="observatory_icon" type="checkbox" name="observatory_icon" value="1" checked>展望台</label>
                    @else
                    <label><input id="observatory_icon" type="checkbox" name="observatory_icon" value="1">展望台</label>
                    @endif
                </td>
            </tr>
            <tr>
                <td>
                    @if (isset($ev_icon) && $ev_icon == 1)
                    <label><input id="ev_icon" type="checkbox" name="ev_icon" value="1" checked>EV充電施設</label>
                    @else
                    <label><input id="ev_icon" type="checkbox" name="ev_icon" value="1">EV充電施設</label>
                    @endif

                </td>
                <td>
                    @if (isset($lan_icon) && $lan_icon == 1)
                    <label><input id="lan_icon" type="checkbox" name="lan_icon" value="1" checked>無線LAN</label>
                    @else
                    <label><input id="lan_icon" type="checkbox" name="lan_icon" value="1">無線LAN</label>
                    @endif
                </td>
            </tr>
            <tr>
                <td>
                    @if (isset($atm_icon) && $atm_icon == 1)
                    <label><input id="atm_icon" type="checkbox" name="atm_icon" value="1" checked>ATM</label>
                    @else
                    <label><input id="atm_icon" type="checkbox" name="atm_icon" value="1">ATM</label>
                    @endif
                <td>
                    @if (isset($museum_icon) && $museum_icon == 1)
                    <label><input id="museum_icon" type="checkbox" name="museum_icon" value="1" checked>美術館・博物館</label>
                    @else
                    <label><input id="museum_icon" type="checkbox" name="museum_icon" value="1">美術館・博物館</label>
                    @endif
                </td>

            </tr>
        </table>

        <p class="submit-btn">
            <input class="more-btn  btn-reset" type="reset" value="リセット">
            <input class="more-btn btn-search" type="submit" value="検索">
        </p>

    </form>

    <!-- PC -->
    <!-- value=""の設定を後でする。road_stationsのテーブル名と一緒？  -->
    <form class="pc-form" action="{{ route('ditailsearch') }}" method="GET">
        <h3 class="checkbox-title">地域<br>
        </h3>

        <table class="pc-table" border="2" cellspacing="0">
            <tr>
                <td>
                    @if ($area_id != null)
                    @if (in_array(1, $area_id))
                    <label><input type="checkbox" name="area[]" id="east" value="1" class="checkbox_list" checked>
                        県東部</label>
                    @else
                    <label><input type="checkbox" name="area[]" id="east" value="1" class="checkbox_list">
                        県東部</label>
                    @endif
                    @else
                    <label><input type="checkbox" name="area[]" id="east" value="1" class="checkbox_list">
                        県東部</label>
                    @endif

                    {{--
                            <label><input id="area_id" class="" type="checkbox" name="area[]"
                                    value="1">県東部</label> --}}
                </td>
                <td>
                    @if ($area_id != null)
                    @if (in_array(2, $area_id))
                    <label><input type="checkbox" name="area[]" id="west" value="2" class="checkbox_list" checked>
                        県西部</label>
                    @else
                    <label><input type="checkbox" name="area[]" id="west" value="2" class="checkbox_list">
                        県西部</label>
                    @endif
                    @else
                    <label><input type="checkbox" name="area[]" id="west" value="2" class="checkbox_list">
                        県西部</label>
                    @endif
                    {{-- <label><input id="area_id" class="" type="checkbox" name="area[]"
                                    value="2">県西部</label> --}}
                </td>
                <td>
                    @if ($area_id != null)
                    @if (in_array(3, $area_id))
                    <label><input type="checkbox" name="area[]" id="south" value="3" class="checkbox_list" checked>
                        県南部</label>
                    @else
                    <label><input type="checkbox" name="area[]" id="south" value="3" class="checkbox_list">
                        県南部</label>
                    @endif
                    @else
                    <label><input type="checkbox" name="area[]" id="south" value="3" class="checkbox_list">
                        県南部</label>
                    @endif
                    {{-- <label><input id="area_id" class="" type="checkbox" name="area[]"
                                    value="3">県南部</label> --}}
                </td>
                {{-- <td>
                            <label><input id="area_id" class="" type="checkbox" name="area[]"
                                    value="4">全域</label>
                        </td> --}}
            </tr>
        </table>

        <h3 class="checkbox-title">設備</h3>

        <table class="pc-table" border="2" cellspacing=" 0">
            <tr>
                <td>
                    @if (isset($guide_icon) && $guide_icon == 1)
                    <label><input id="guide_icon" type="checkbox" name="guide_icon" value="1" checked>観光案内</label>
                    @else
                    <label><input id="guide_icon" type="checkbox" name="guide_icon" value="1">観光案内</label>
                    @endif
                </td>
                <td>
                    @if (isset($shop_icon) && $shop_icon == 1)
                    <label><input id="shop_icon" type="checkbox" name="shop_icon" value="1" checked>ショップ</label>
                    @else
                    <label><input id="shop_icon" type="checkbox" name="shop_icon" value="1">ショップ</label>
                    @endif
                </td>
                <td>
                    @if (isset($lightmeal_icon) && $lightmeal_icon == 1)
                    <label><input id="lightmeal_icon" type="checkbox" name="lightmeal_icon" value="1" checked>軽食・喫茶</label>
                    @else
                    <label><input id="lightmeal_icon" type="checkbox" name="lightmeal_icon" value="1">軽食・喫茶</label>
                    @endif
                </td>
                <td>
                    @if (isset($restaurant_icon) && $restaurant_icon == 1)
                    <label><input id="restaurant_icon" type="checkbox" name="restaurant_icon" value="1" checked>レストラン</label>
                    @else
                    <label><input id="restaurant_icon" type="checkbox" name="restaurant_icon" value="1">レストラン</label>
                    @endif
                </td>
            </tr>
            <tr>
                <td>
                    @if (isset($experience_icon) && $experience_icon == 1)
                    <label><input id="experience_icon" type="checkbox" name="experience_icon" value="1" checked>体験施設</label>
                    @else
                    <label><input id="experience_icon" type="checkbox" name="experience_icon" value="1">体験施設</label>
                    @endif
                </td>
                <td>
                    @if (isset($disability_icon) && $disability_icon == 1)
                    <label><input id="disability_icon" type="checkbox" name="disability_icon" value="1" checked>身障者トイレ</label>
                    @else
                    <label><input id="disability_icon" type="checkbox" name="disability_icon" value="1">身障者トイレ</label>
                    @endif
                </td>
                <td>
                    @if (isset($park_icon) && $park_icon == 1)
                    <label><input id="park_icon" type="checkbox" name="park_icon" value="1" checked>公園</label>
                    @else
                    <label><input id="park_icon" type="checkbox" name="park_icon" value="1">公園</label>
                    @endif
                </td>
                <td>
                    @if (isset($bed_icon) && $bed_icon == 1)
                    <label><input id="bed_icon" type="checkbox" name="bed_icon" value="1" checked>ベビーベッド</label>
                    @else
                    <label><input id="bed_icon" type="checkbox" name="bed_icon" value="1">ベビーベッド</label>
                    @endif
                </td>
            </tr>
            <tr>
                <td>
                    @if (isset($accommodation_icon) && $accommodation_icon == 1)
                    <label><input id="accommodation_icon" type="checkbox" name="accommodation_icon" value="1" checked>宿泊施設</label>
                    @else
                    <label><input id="accommodation_icon" type="checkbox" name="accommodation_icon" value="1">宿泊施設</label>
                    @endif
                </td>
                <td>
                    @if (isset($spa_icon) && $accommodation_icon == 1)
                    <label><input id="spa_icon" type="checkbox" name="spa_icon" value="1" checked>温泉施設</label>
                    @else
                    <label><input id="spa_icon" type="checkbox" name="spa_icon" value="1">温泉施設</label>
                    @endif
                </td>
                <td>
                    @if (isset($shower_icon) && $shower_icon == 1)
                    <label><input id="shower_icon" type="checkbox" name="shower_icon" value="1" checked>シャワー</label>
                    @else
                    <label><input id="shower_icon" type="checkbox" name="shower_icon" value="1">シャワー</label>
                    @endif
                </td>
                <td>
                    @if (isset($observatory_icon) && $observatory_icon == 1)
                    <label><input id="observatory_icon" type="checkbox" name="observatory_icon" value="1" checked>展望台</label>
                    @else
                    <label><input id="observatory_icon" type="checkbox" name="observatory_icon" value="1">展望台</label>
                    @endif
                </td>
            </tr>
            <tr>
                <td>
                    @if (isset($ev_icon) && $ev_icon == 1)
                    <label><input id="ev_icon" type="checkbox" name="ev_icon" value="1" checked>EV充電施設</label>
                    @else
                    <label><input id="ev_icon" type="checkbox" name="ev_icon" value="1">EV充電施設</label>
                    @endif

                </td>
                <td>
                    @if (isset($lan_icon) && $lan_icon == 1)
                    <label><input id="lan_icon" type="checkbox" name="lan_icon" value="1" checked>無線LAN</label>
                    @else
                    <label><input id="lan_icon" type="checkbox" name="lan_icon" value="1">無線LAN</label>
                    @endif

                </td>

                <td>
                    @if (isset($atm_icon) && $atm_icon == 1)
                    <label><input id="atm_icon" type="checkbox" name="atm_icon" value="1" checked>ATM</label>
                    @else
                    <label><input id="atm_icon" type="checkbox" name="atm_icon" value="1">ATM</label>
                    @endif

                <td>
                    @if (isset($museum_icon) && $museum_icon == 1)
                    <label><input id="museum_icon" type="checkbox" name="museum_icon" value="1" checked>美術館・博物館</label>
                    @else
                    <label><input id="museum_icon" type="checkbox" name="museum_icon" value="1">美術館・博物館</label>
                    @endif

                </td>

            </tr>
        </table>

        <!-- 先輩の道の駅サイトを参考にして、classの設定をする。 -->
        <p class="submit-btn">
            <input class="more-btn  btn-reset" type="reset" value="リセット" onclick="doReload('{{ route('ditailsearch') }}')">
            <input class="more-btn btn-search" type="submit" value="検索">
        </p>
    </form>

</section>

<!-- 検索エリア -->
<!-- ボタン -->
<h3 class="search_results">
    検索件数:&nbsp;{{ $count }}&nbsp;件
</h3>
<div class="grid">
    @foreach ($search as $road)
    <div class="card">

        {{-- @if ($road->area_id == 3) --}}
        <a href="{{ url('station-detail' . '?id=' . $road->id) }}">

            @if ($road->picture1)
            <img class="card-img" src="{{ asset('/storage/images/' . $road->picture1) }}" width="250px" height="200px" alt="道の駅の画像">
            @else
            <img src="{{ asset('/storage/images/no-image.png') }}" width="250px" height="200px" alt="道の駅の画像">
            @endif

            <h4>道の駅&nbsp;{{ $road->station_name }}</h4>
            <p>{{ $road->catchphrase }}</p>
            <dl>
                <dt>営業時間：</dt>
                <dd>{{ $road->business_hours }}</dd>

                <dt>住所：</dt>
                <dd>{{ $road->address }}</dd>
            </dl>
            <div class="factory">
                <dl>
                    <dt>設備：</dt>
                    <dd>
                        <img title="観光案内" src="{{ asset('assets/images/icon/guide_icon' . $road->guide_icon . '.svg') }}" alt="観光案内">
                        <img title="ショップ" src="{{ asset('assets/images/icon/shop_icon' . $road->shop_icon . '.svg') }}" alt="ショップ">
                        <img title="軽食・喫茶" src="{{ asset('assets/images/icon/lightmeal_icon' . $road->lightmeal_icon . '.svg') }}" alt="軽食・喫茶">
                        <img title="レストラン" src="{{ asset('assets/images/icon/restaurant_icon' . $road->restaurant_icon . '.svg') }}" alt="レストラン">
                        <img title="体験施設" src="{{ asset('assets/images/icon/experience_icon' . $road->experience_icon . '.svg') }}" alt="体験施設">
                        <img title="身障者トイレ" src="{{ asset('assets/images/icon/disability_icon' . $road->disability_icon . '.svg') }}" alt="身障者トイレ">
                        <img title="公園" src="{{ asset('assets/images/icon/park_icon' . $road->park_icon . '.svg') }}" alt="公園">
                        <img title="ベビーベッド" src="{{ asset('assets/images/icon/bed_icon' . $road->bed_icon . '.svg') }}" alt="ベビーベッド">
                        <img title="宿泊施設" src="{{ asset('assets/images/icon/accommodation_icon' . $road->accommodation_icon . '.svg') }}" alt="宿泊施設">
                        <img title="温泉施設" src="{{ asset('assets/images/icon/spa_icon' . $road->spa_icon . '.svg') }}" alt="温泉施設">
                        <img title="シャワー" src="{{ asset('assets/images/icon/shower_icon' . $road->shower_icon . '.svg') }}" alt="シャワー">
                        <img title="展望台" src="{{ asset('assets/images/icon/observatory_icon' . $road->observatory_icon . '.svg') }}" alt="展望台">
                        <img title="EV充電施設" src="{{ asset('assets/images/icon/ev_icon' . $road->ev_icon . '.svg') }}" alt="EV充電施設">
                        <img title="無線LAN" src="{{ asset('assets/images/icon/lan_icon' . $road->lan_icon . '.svg') }}" alt="無線LAN">
                        <img title="ATM" src="{{ asset('assets/images/icon/atm_icon' . $road->atm_icon . '.svg') }}" alt="設備ATM">
                        <img title="美術館・博物館" src="{{ asset('assets/images/icon/museam_icon' . $road->museum_icon . '.svg') }}" alt="美術館・博物館">
                    </dd>
                </dl>
            </div>
        </a>
    </div>
    @endforeach
</div>
<br><br>
<div class="link">
    @php
    // print_r(request()->query());
    @endphp
    {{-- {{ $search->links('pagination::bootstrap-4') }} --}}
    {{ $search->appends(request()->query())->links('pagination::bootstrap-4') }}
</div>

@endsection

{{-- 該当ページ専用JS --}}
@section('pageJs')

@endsection
