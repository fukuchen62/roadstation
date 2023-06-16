@extends('layouts.layout_front')

@section('title', '道の駅詳細ページ | 徳島まるっと道の駅')

{{-- 該当ページのCSS --}}
@section('pageCss')
    <link rel="stylesheet" href="{{ asset('assets/css/station.css') }}">
@endsection

{{-- slick --}}
@section('pageJs1')
    <link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slick-theme.css') }}">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
@endsection

{{-- メイン --}}
@section('content')

    @foreach ($road_stations as $station)
        {{-- 基本情報1 --}}
        <section class="width">
            <div class="station-title">
                <h2>道の駅&nbsp;{{ $station->station_name }}</h2>
                <p>{{ $station->catchphrase }}</p>
            </div>

            <!-- スライドショー -->
            <div class="slide-items">

                <div><img src="{{ asset('/storage/images/' . $station->picture1) }}" alt=""></div>
                <div><img src="{{ asset('/storage/images/' . $station->picture2) }}" alt=""></div>
                <div><img src="{{ asset('/storage/images/' . $station->picture3) }}" alt=""></div>

            </div>

            <p class="width-row">
                {{ $station->discription }}
            </p>

            <!-- 画像と文字を横に並べる。CSS -->
            <div class="flex">

                <img src="{{ asset('assets/images/illustrations/tanuki-heart.png') }}" alt="道の駅の感想を嬉しそうに喋るたぬき"
                    width="145" height="145">
                <div class="speech">
                    <p>{{ $station->review }}</p>
                </div>
            </div>
        </section>

        {{-- 農産物 --}}
        @if ($vegetable->isNotEmpty())
            <section class="width">
                <!-- 画像と文字を重ねる。CSS -->
                {{-- タイトル --}}
                <div class="flex f-width">
                    {{-- <img src="{{ asset('assets/images/illustrations/tanuki-food4.png') }}" width="125" height="100"
                        alt="美味しいすだち" class="none"> --}}
                    <div class="center overlap ">
                        {{-- <img src="{{ asset('assets/images/h3-orange.png') }}" width="214" height="137" alt=""> --}}
                        <h3 class="center width absolute">農産物</h3>
                    </div>
                    {{-- <img src="{{ asset('assets/images/illustrations/tanuki-food.png') }}" width="141" height="140"
                        alt="道の駅のさつまいもを食べるたぬき" class="sideways sideways-off"> --}}
                </div>
                @php
                    $count = 0;
                @endphp
                @foreach ($vegetable as $goods)
                    @if ($count % 2 != 0)
                        <section class="commentary">
                            <!-- 画像左と文字を横に並べる。CSS -->
                            <div class="container reverse">
                                <img src="{{ asset('/storage/images/' . $goods->picture) }}" class="img frameborder"
                                    alt="農産物写真">
                                <div class="text frameborder">
                                    <h4 class="deco-h4">{{ $goods->goods_name }}</h4>
                                    <p>{{ $goods->price }}</p>
                                    <p class="com-wrap">{{ $goods->discription }}</p>
                                </div>
                            </div>
                        </section>
                    @else
                        <section class="commentary">
                            <!-- 画像右と文字を横に並べる。CSS -->
                            <div class="container">
                                <img src="{{ asset('/storage/images/' . $goods->picture) }}" width="5472" height="3648"
                                    class="img frameborder" alt="農産物写真">
                                <div class="text frameborder">
                                    <h4 class="deco-h4">{{ $goods->goods_name }}</h4>
                                    <p>{{ $goods->price }}</p>
                                    <p class="com-wrap">{{ $goods->discription }}</p>
                                </div>
                            </div>
                        </section>
                    @endif
                    @php
                        $count++;
                    @endphp
                @endforeach
            </section>
        @endif

        {{-- 水産物 --}}
        @if ($fish->isNotEmpty())
            <section class="width">
                {{-- タイトル --}}
                {{-- <div class="flex f-width">
                    <img src="{{ asset('assets/images/illustrations/tanuki-food5.png') }}" width="125" height="125"
                        alt="美味しいわかめ" class="none"> --}}
                    <div class="center overlap">
                        {{-- <img src="{{ asset('assets/images/h3-red.png') }}" width="214" height="137" alt="道の駅のお土産"> --}}
                        <h3 class="center width">水産物</h3>
                    </div>
                    {{-- <img src="{{ asset('assets/images/illustrations/tanuki-food2.png') }}" width="141" height="140"
                        alt="道の駅の魚を食べるたぬき" class="sideways sideways-off"> --}}
                </div>

                @php
                    $count = 0;
                @endphp
                @foreach ($fish as $goods)
                    @if ($count % 2 != 0)
                        <section class="commentary">
                            <!-- 画像左と文字を横に並べる。CSS -->
                            <div class="container reverse">
                                <img src="{{ asset('/storage/images/' . $goods->picture) }}" class="img frameborder"
                                    alt="水産物写真">
                                <div class="text frameborder">
                                    <h4 class="deco-h4">{{ $goods->goods_name }}</h4>
                                    <p>{{ $goods->price }}</p>
                                    <p class="com-wrap">{{ $goods->discription }}</p>
                                </div>
                            </div>
                        </section>
                    @else
                        <section class="commentary">
                            <!-- 画像右と文字を横に並べる。CSS -->
                            <div class="container">
                                <img src="{{ asset('/storage/images/' . $goods->picture) }}" class="img frameborder"
                                    alt="水産物写真">

                                <div class="text frameborder">

                                    <h4 class="deco-h4">{{ $goods->goods_name }}</h4>

                                    <p>{{ $goods->price }}</p>

                                    <p class="com-wrap">{{ $goods->discription }}</p>

                                </div>
                            </div>
                        </section>
                    @endif
                    @php
                        $count++;
                    @endphp
                @endforeach

            </section>
        @endif

        {{-- 工芸品 --}}
        @if ($craft->isNotEmpty())
            <section class="width">
                {{-- タイトル --}}
                <div class="flex f-width">
                    {{-- <img src="{{ asset('assets/images/illustrations/tanuki-food6.png') }}" width="118" height="114"
                        alt="きれいな藍染" class="none"> --}}
                    <div class="center overlap ">
                        <img src="{{ asset('assets/images/h3-green.png') }}" width="214" height="137"
                            alt="道の駅のお土産">
                        <h3 class="center width">工芸品</h3>
                    </div>
                    {{-- <img src="{{ asset('assets/images/illustrations/tanuki-food3.png') }}" width="141" height="140"
                        alt="道の駅で買ったお椀でご飯を食べるたぬき" class="sideways sideways-off"> --}}
                </div>

                @php
                    $count = 0;
                @endphp
                @foreach ($craft as $goods)
                    @if ($count % 2 != 0)
                        <section class="commentary">
                            <!-- 画像左と文字を横に並べる。CSS -->
                            <div class="container reverse">
                                <img src="{{ asset('/storage/images/' . $goods->picture) }}" class="img frameborder"
                                    alt="工芸品写真">
                                <div class="text frameborder">
                                    <h4 class="deco-h4">{{ $goods->goods_name }}</h4>
                                    <p>{{ $goods->price }}</p>
                                    <p class="com-wrap">{{ $goods->discription }}</p>
                                </div>
                            </div>
                        </section>
                    @else
                        <section class="commentary">
                            <!-- 画像右と文字を横に並べる。CSS -->
                            <div class="container">
                                <img src="{{ asset('/storage/images/' . $goods->picture) }}" class="img frameborder"
                                    alt="工芸品写真">
                                <div class="text frameborder">
                                    <h4 class="deco-h4">{{ $goods->goods_name }}</h4>
                                    <p>{{ $goods->price }}</p>
                                    <p class="com-wrap">{{ $goods->discription }}</p>
                                </div>
                            </div>
                        </section>
                    @endif
                    @php
                        $count++;
                    @endphp
                @endforeach

            </section>
        @endif

        {{-- グルメ --}}
        @if ($meal->isNotEmpty())
            <section class="width">
                <!-- 画像と文字を重ねる。CSS -->
                {{-- タイトル --}}
                <div class="flex f-width">
                    {{-- <img src="{{ asset('assets/images/illustrations/tanuki-gourmet2.png') }}" width="130"
                        height="128" alt="美味しい飲み物" class="none"> --}}
                    <div class="center overlap ">
                        {{-- <img src="{{ asset('assets/images/h3-red.png') }}" width="214" height="137"
                            alt=""> --}}
                        <h3 class="center width absolute">グルメ</h3>
                    </div>
                    {{-- <img src="{{ asset('assets/images/illustrations/tanuki-gourmet.png') }}" width="145"
                        height="126" alt="道の駅のソフトクリームを食べるたぬき" class="sideways sideways-off"> --}}
                </div>

                @php
                    $count = 0;
                @endphp
                @foreach ($meal as $goods)
                    @if ($count % 2 != 0)
                        <section class="commentary">
                            <!-- 画像左と文字を横に並べる。CSS -->
                            <div class="container reverse">
                                <img src="{{ asset('/storage/images/' . $goods->picture) }}" class="img frameborder"
                                    alt="グルメ写真">
                                <div class="text frameborder">
                                    <h4 class="deco-h4">{{ $goods->goods_name }}</h4>
                                    <p>{{ $goods->price }}</p>
                                    <p class="com-wrap">{{ $goods->discription }}</p>
                                </div>
                            </div>
                        </section>
                    @else
                        <section class="commentary">
                            <!-- 画像右と文字を横に並べる。CSS -->
                            <div class="container">
                                <img src="{{ asset('/storage/images/' . $goods->picture) }}" class="img frameborder"
                                    alt="グルメ写真">
                                <div class="text frameborder">
                                    <h4 class="deco-h4">{{ $goods->goods_name }}</h4>
                                    <p>{{ $goods->price }}</p>
                                    <p class="com-wrap">{{ $goods->discription }}</p>
                                </div>
                            </div>
                        </section>
                    @endif
                    @php
                        $count++;
                    @endphp
                @endforeach
            </section>
        @endif

        {{-- その他 --}}
        @if ($others->isNotEmpty())
            <section class="width">
                {{-- タイトル --}}
                <div class="flex f-width">
                    {{-- <img src="{{ asset('assets/images/illustrations/tanuki-gift2.png') }}" width="150" height="135"
                        alt="お土産を運ぶたぬき" class="none"> --}}
                    <div class="center overlap ">
                        {{-- <img src="{{ asset('assets/images/h3-green.png') }}" width="214" height="137"
                            alt="道の駅のお土産"> --}}
                        <h3 class="center width">その他</h3>
                    </div>
                    {{-- <img src="{{ asset('assets/images/illustrations/tanuki-gift.png') }}" width="150" height="150"
                        alt="美味しいお土産" class="sideways sideways-off"> --}}
                </div>

                @php
                    $count = 0;
                @endphp
                @foreach ($others as $goods)
                    @if ($count % 2 != 0)
                        <section class="commentary">
                            <!-- 画像左と文字を横に並べる。CSS -->
                            <div class="container reverse">
                                <img src="{{ asset('/storage/images/' . $goods->picture) }}" class="img  frameborder"
                                    alt="その他写真">
                                <div class="text  frameborder">
                                    <h4 class="deco-h4">{{ $goods->goods_name }}</h4>
                                    <p>{{ $goods->price }}</p>
                                    <p class="com-wrap">{{ $goods->discription }}</p>
                                </div>
                            </div>
                        </section>
                    @else
                        <section class="commentary">
                            <!-- 画像右と文字を横に並べる。CSS -->
                            <div class="container">
                                <img src="{{ asset('/storage/images/' . $goods->picture) }}" class="img  frameborder"
                                    alt="その他写真">
                                <div class="text  frameborder">
                                    <h4 class="deco-h4">{{ $goods->goods_name }}</h4>
                                    <p>{{ $goods->price }}</p>
                                    <p class="com-wrap">{{ $goods->discription }}</p>
                                </div>
                            </div>
                        </section>
                    @endif
                    @php
                        $count++;
                    @endphp
                @endforeach
            </section>
        @endif

        {{-- アクティビティ --}}
        @foreach ($activities as $activity)
            <section class="width">
                {{-- タイトル --}}
                <div class="flex f-width">
                    {{-- <img src="{{ asset('assets/images/illustrations/tanuki-activity2.png') }}" width="177"
                        height="135" alt="DMV" class="none"> --}}
                    <div class="center overlap">
                        {{-- <img src="{{ asset('assets/images/h3-orange.png') }}" width="191" height="111"
                            alt=""> --}}
                        <h3 class="center width">体験</h3>
                    </div>
                    {{-- <img src="{{ asset('assets/images/illustrations/tanuki-activity.png') }}" width="177"
                        height="135" alt="DMV" class="sideways2 sideways-off"> --}}
                </div>
                <section>
                    <img src="{{ asset('/storage/images/' . $activity->picture1) }}" class="activity  frameborder"
                        alt="アクティビティ写真">
                    <div class="text frameborder">
                        <h4 class="deco-h4">{{ $activity->activity_name }}</h4>
                        <p>料金 : {{ $activity->price }}<br>
                            利用条件：
                            {{ $activity->conditions }}
                    </div>
                </section>
            </section>
        @endforeach

        {{-- 基本情報2 --}}
        <section class="map width">


            <div class="text frameborder harf">

                <h3 class="item">基本情報</h3>
                <h4 class="station-name deco-h4">道の駅&nbsp;{{ $station->station_name }}</h4>

                <dl>
                    <dt>〒{{ $station->zip_code }}&nbsp;</dt>
                    <dd>{{ $station->address }}</dd>

                    <dt>TEL：</dt>
                    <dd>{{ $station->tel }}</dd>

                    <dt>公式URL：</dt>
                    <dd><a href="{{ $station->url }}">{{ $station->url }}</a></dd>

                    <dt>SNS：</dt>
                    <dd>
                        @if ($station->sns == null)
                            {{ '掲載はございません。' }}
                        @else
                            <a href="{{ $station->sns }}">
                                {!! $station->sns !!}
                            </a>
                        @endif
                    </dd>
                    <dt>営業時間：</dt>
                    <dd>{{ $station->business_hours }}</dd>

                    <dt>定休日：</dt>
                    <dd>{{ $station->regular_holiday }}</dd>

                    <dt>駐車場：</dt>
                    <dd>{{ $station->parking }}
                    </dd>

                    <dt>設備：</dt>
                    <dd>
                        <div class="icon-wrapper">
                            <img title="観光案内"
                                src="{{ asset('assets/images/icon/guide_icon' . $station->guide_icon . '.svg') }}"
                                alt="観光案内">
                            <img title="ショップ"
                                src="{{ asset('assets/images/icon/shop_icon' . $station->shop_icon . '.svg') }}"
                                alt="ショップ">
                            <img title="軽食・喫茶"
                                src="{{ asset('assets/images/icon/lightmeal_icon' . $station->lightmeal_icon . '.svg') }}"
                                alt="軽食・喫茶">
                            <img title="レストラン"
                                src="{{ asset('assets/images/icon/restaurant_icon' . $station->restaurant_icon . '.svg') }}"
                                alt="レストラン">
                            <img title="体験施設"
                                src="{{ asset('assets/images/icon/experience_icon' . $station->experience_icon . '.svg') }}"
                                alt="体験施設">
                            <img title="身障者トイレ"
                                src="{{ asset('assets/images/icon/disability_icon' . $station->disability_icon . '.svg') }}"
                                alt="身障者トイレ">
                            <img title="公園"
                                src="{{ asset('assets/images/icon/park_icon' . $station->park_icon . '.svg') }}"
                                alt="公園">
                            <img title="ベビーベッド"
                                src="{{ asset('assets/images/icon/bed_icon' . $station->bed_icon . '.svg') }}"
                                alt="ベビーベッド">
                            <img title="宿泊施設"
                                src="{{ asset('assets/images/icon/accommodation_icon' . $station->accommodation_icon . '.svg') }}"
                                alt="宿泊施設">
                            <img title="温泉施設"
                                src="{{ asset('assets/images/icon/spa_icon' . $station->spa_icon . '.svg') }}"
                                alt="温泉施設">
                            <img title="シャワー"
                                src="{{ asset('assets/images/icon/shower_icon' . $station->shower_icon . '.svg') }}"
                                alt="シャワー">
                            <img title="展望台"
                                src="{{ asset('assets/images/icon/observatory_icon' . $station->observatory_icon . '.svg') }}"
                                alt="展望台">
                            <img title="EV充電施設"
                                src="{{ asset('assets/images/icon/ev_icon' . $station->ev_icon . '.svg') }}"
                                alt="EV充電施設">
                            <img title="無線LAN"
                                src="{{ asset('assets/images/icon/lan_icon' . $station->lan_icon . '.svg') }}"
                                alt="無線LAN">
                            <img title="ATM"
                                src="{{ asset('assets/images/icon/atm_icon' . $station->atm_icon . '.svg') }}"
                                alt="設備ATM">
                            <img title="美術館・博物館"
                                src="{{ asset('assets/images/icon/museam_icon' . $station->museum_icon . '.svg') }}"
                                alt="美術館・博物館">

                        </div>
                    </dd>
                </dl>

                {{-- お気に入り登録 --}}
                @php
                    $cookie = Cookie::get('id');
                    $cookielist = explode(',', $cookie);
                @endphp

                @if (in_array($station->id, $cookielist))
                    <p class="blog-btn center">
                        <a href="{{ route('cookie', ['id' => $station->id]) }}">
                            お気に入りに登録済み
                        </a>
                    </p>
                @else
                    <p>
                        <strong>
                            <span class="yellow">★</span>
                            お気に入りを押したらお気に入りページに登録されます！
                        </strong>
                    </p>

                    <p class="blog-btn center">
                        <a href="{{ route('cookie', ['id' => $station->id]) }}">
                            お気に入りに登録する
                        </a>
                    </p>
                @endif

            </div>

            <!-- googlemap -->
            {!! $station->map_url !!}

        </section>
    @endforeach

@endsection

{{-- 該当ページ専用JS --}}
@section('pageJs2')
    <script src="{{ asset('assets/js/slick.min.js') }}"></script>
@endsection
