@extends('layouts.layout_front')

@section('description', '道の駅詳細')

@section('keywords', 'キーワード1,キーワード2・・・')

@section('title', 'ページタイトル')

{{-- 該当ページのCSS --}}
@section('pageCss')
    <link rel="stylesheet" href="{{ asset('assets/css/station.css') }}">
@endsection

{{-- slick --}}
@section('pageJs1')
    <link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slick-theme.css') }}">
@endsection

{{-- メイン --}}
@section('content')

    @foreach ($road_stations as $station)
        {{-- 基本情報1 --}}
        <section>

            <div class="station-title">
                <h2>道の駅&nbsp;{{ $station->station_name }}</h2>
                <p>{{ $station->catchphrase }}</p>
            </div>

            <!-- スライドショー -->
            <div class="slide-items">
                <div>
                    {{-- <img src="{{ asset('assets/images/station/stations_3_1_1200_400.jpg .jpg') }}" alt=""> --}}
                    <img src="{{ asset('/storage/images/' . $station->picture1) }}" alt="">
                </div>

                <div>
                    {{-- <img src="{{ asset('assets/images/station/drive.jpg') }}" alt=""> --}}
                    <img src="{{ asset('/storage/images/' . $station->picture2) }}" alt="">

                </div>

                <div>
                    {{-- <img src="{{ asset('assets/images/station/stations_3_2_.jpg') }}" alt=""> --}}
                    <img src="{{ asset('/storage/images/' . $station->picture3) }}" alt="">
                </div>
            </div>

            <p class="width">{!! $station->discription !!}
            </p>

            <div class="flex">
                <img src="{{ asset('assets/images/illustrations/tanuki-heart.png') }}" width="145px" height="145px"
                    alt="道の駅の感想を嬉しそうに喋るたぬき">
                <div class="speech">
                    <p>{{ $station->review }}</p>
                </div>
            </div>
        </section>

        <section>

            {{-- 農産物 --}}
            @if ($vegetable->isNotEmpty())
                <section>

                    <div class="flex f-width">

                        <img src="{{ asset('assets/images/illustrations/tanuki-food4.png') }}" width="125px"
                            height="100px" alt="美味しいすだち" class="none">

                        <div class="center overlap ">

                            <img src="{{ asset('assets/images/h3-orange.png') }}" width="214" height="137"
                                alt="">

                            <h3 class="center width absolute">農産物</h3>

                        </div>

                        <img src="{{ asset('assets/images/illustrations/tanuki-food.png') }}" width="141.5px"
                            height="140px" alt="道の駅のさつまいもを食べるたぬき" class="sideways">

                    </div>

                    @php
                        $count = 0;
                    @endphp
                    @foreach ($vegetable as $goods)
                        @if ($count % 2 != 0)
                            <section class="commentary">

                                <div class="container">

                                    <img src="{{ asset('/storage/images/' . $goods->picture) }}" width="5472"
                                        height="3648" class="img" alt="美味しいパンケーキ">

                                    <div class="text">

                                        <h4 class="deco-h4">{{ $goods->goods_name }}</h4>

                                        <p>{{ $goods->price }}</p>

                                        <p class="com-wrap">{!! $goods->discription !!}</p>

                                        <p class="blog-btn">
                                            <a
                                                href="{{ url('blog-detail') }}?id={{ $goods->road_station_id }}">【ブログ】行ってみたんよへ</a>
                                        </p>
                                    </div>
                                </div>
                            </section>
                        @else
                            <section class="commentary">

                                <div class="container reverse">

                                    <img src="{{ asset('/storage/images/' . $goods->picture) }}" class="img"
                                        alt="美味しい海鮮丼">

                                    <div class="text">

                                        <h4 class="deco-h4">{{ $goods->goods_name }}</h4>

                                        <p>{{ $goods->price }}</p>

                                        <p>{!! $goods->discription !!}</p>

                                        <p class="blog-btn"><a
                                                href="{{ url('blog-detail') }}?id={{ $goods->road_station_id }}">【ブログ】行ってみたんよへ</a>
                                        </p>
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
                <section>

                    {{-- 水産物タイトル --}}
                    <div class="flex f-width">

                        <img src="{{ asset('assets/images/illustrations/tanuki-food5.png') }}" width="125px"
                            height="125.5px" alt="美味しいわかめ" class="sideways">

                        <div class="center overlap ">

                            <img src="{{ asset('assets/images/h3-red.png') }}" width="214" height="137"
                                alt="道の駅のお土産">

                            <h3 class="center width">水産物</h3>

                        </div>

                        <img src="{{ asset('assets/images/illustrations/tanuki-food2.png') }}" width="141.5px"
                            height="140px" alt="道の駅の魚を食べるたぬき" class="sideways">

                    </div>

                    @php
                        $count = 0;
                    @endphp
                    @foreach ($fish as $goods)
                        @if ($count % 2 != 0)
                            <section class="commentary">

                                <div class="container">

                                    <img src="{{ asset('/storage/images/' . $goods->picture) }}" class="img"
                                        alt="美味しいスイートポテト">

                                    <div class="text">

                                        <h4 class="deco-h4">{{ $goods->goods_name }}</h4>

                                        <p>{{ $goods->price }}</p>

                                        <p class="com-wrap">{{ $goods->discription }}</p>

                                        <p class="blog-btn"><a
                                                href="{{ url('blog-detail') }}?id={{ $goods->road_station_id }}">【ブログ】行ってみたんよへ</a>
                                        </p>
                                    </div>
                                </div>
                            </section>
                        @else
                            <section class="commentary">

                                <div class="container reverse">

                                    <img src="{{ asset('/storage/images/' . $goods->picture) }}" class="img"
                                        alt="美味しいプリン">

                                    <div class="text">

                                        <h4 class="deco-h4">{{ $goods->goods_name }}</h4>

                                        <p>{{ $goods->price }}</p>

                                        <p class="com-wrap">{{ $goods->discription }}</p>

                                        <p class="blog-btn"><a
                                                href="{{ url('blog-detail') }}?id={{ $goods->road_station_id }}">【ブログ】行ってみたんよへ</a>
                                        </p>
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
                <section>

                    {{-- 工芸品タイトル --}}
                    <div class="flex f-width">

                        <img src="{{ asset('assets/images/illustrations/tanuki-food6.png') }}" width="118px"
                            height="114.5px" alt="きれいな藍染" class="none">

                        <div class="center overlap ">

                            <img src="{{ asset('assets/images/h3-green.png') }}" width="214" height="137"
                                alt="道の駅のお土産">

                            <h3 class="center width">工芸品</h3>

                        </div>

                        <img src="{{ asset('assets/images/illustrations/tanuki-food3.png') }}" width="141.5px"
                            height="140px" alt="道の駅で買ったお椀でご飯を食べるたぬき" class="sideways">

                    </div>

                    @php
                        $count = 0;
                    @endphp
                    @foreach ($craft as $goods)
                        @if ($count % 2 != 0)
                            <section class="commentary">

                                <div class="container">
                                    <img src="{{ asset('/storage/images/' . $goods->picture) }}" class="img"
                                        alt="美味しいスイートポテト">

                                    <div class="text">

                                        <h4 class="deco-h4">{{ $goods->goods_name }}</h4>

                                        <p>{{ $goods->price }}</p>

                                        <p class="com-wrap">{{ $goods->discription }}</p>

                                        <p class="blog-btn"><a
                                                href="{{ url('blog-detail') }}?id={{ $goods->road_station_id }}">【ブログ】行ってみたんよへ</a>
                                        </p>
                                    </div>
                                </div>
                            </section>
                        @else
                            <section class="commentary">

                                <div class="container reverse">
                                    <img src="{{ asset('/storage/images/' . $goods->picture) }}" class="img"
                                        alt="美味しいプリン">

                                    <div class="text">

                                        <h4 class="deco-h4">{{ $goods->goods_name }}</h4>

                                        <p>{{ $goods->price }}</p>

                                        <p class="com-wrap">{{ $goods->discription }}</p>

                                        <p class="blog-btn"><a
                                                href="{{ url('blog-detail') }}?id={{ $goods->road_station_id }}">【ブログ】行ってみたんよへ</a>
                                        </p>
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
                <section>

                    {{-- グルメタイトル --}}
                    <div class="flex f-width">

                        <img src="{{ asset('assets/images/illustrations/tanuki-gourmet2.png') }}" width="130px"
                            height="128px" alt="美味しい飲み物" class="none">

                        <div class="center overlap ">

                            <img src="{{ asset('assets/images/h3-red.png') }}" width="214" height="137"
                                alt="">

                            <h3 class="center width absolute">
                                グルメ
                            </h3>

                        </div>

                        <img src="{{ asset('assets/images/illustrations/tanuki-gourmet.png') }}" width="145px"
                            height="126.5px" alt="道の駅のソフトクリームを食べるたぬき" class="sideways">
                    </div>

                    {{-- グルメ記事 --}}
                    @php
                        $count = 0;
                    @endphp
                    @foreach ($meal as $goods)
                        @if ($count % 2 != 0)
                            <section class="commentary">

                                <div class="container">

                                    <img src="{{ asset('/storage/images/' . $goods->picture) }}" width="5472"
                                        height="3648" class="img" alt="美味しいパンケーキ">

                                    <div class="text">

                                        <h4 class="deco-h4">
                                            {{ $goods->goods_name }}
                                        </h4>

                                        <p>{{ $goods->price }}円</p>

                                        <p class="com-wrap">{!! $goods->discription !!}
                                        </p>

                                        <p class="blog-btn">

                                            <a
                                                href="{{ url('blog-detail') }}?road_station_id={{ $goods->road_station_id }}">【ブログ】行ってみたんよへ</a>

                                        </p>

                                    </div>
                                </div>

                            </section>
                        @else
                            <section class="commentary">

                                <!-- 画像左と文字を横に並べる。CSS -->
                                <div class="container reverse">

                                    <img src="{{ asset('/storage/images/' . $goods->picture) }}" class="img"
                                        alt="美味しい海鮮丼">

                                    <div class="text">

                                        <h4 class="deco-h4">{{ $goods->goods_name }}</h4>

                                        <p>{{ $goods->price }}円</p>

                                        <p>{!! $goods->discription !!}</p>

                                        <p class="blog-btn"><a
                                                href="{{ url('blog-detail') }}?road_station_id={{ $goods->road_station_id }}">【ブログ】行ってみたんよへ</a>
                                        </p>

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

            {{-- 体験 --}}
            @foreach ($activities as $activity)
                <section class="width">

                    <div class="flex f-width">

                        <img src="{{ asset('assets/images/illustrations/tanuki-activity2.png') }}" width="177.5px"
                            height="135px" alt="DMV" class="none">

                        <div class="center overlap ">

                            <img src="{{ asset('assets/images/h3-orange.png') }}" width="191" height="111"
                                alt="">

                            <h3 class="center width">体験</h3>

                        </div>

                        <img src="{{ asset('assets/images/illustrations/tanuki-activity.png') }}" width="177.5px"
                            height="135px" alt="””DMV" class="sideways2">

                    </div>

                    <img src="{{ asset('/storage/images/' . $activity->picture1) }}" class="kv" alt="楽しいジップライン">

                    <h4>{{ $activity->activity_name }}</h4>

                    <p>料金：{{ $activity->price }}</p>

                    <p>利用条件：
                        {!! $activity->conditions !!}
                    </p>

                    <a href="{{ route('bloglist') }}">
                        <img src="{{ asset('assets/images/blog-btn.png') }}" class="blog-btn blog-img" alt="体験ブログの記事へ">
                    </a>

                </section>
            @endforeach

        </section>

        {{-- 基本情報2 --}}
        <section>

            <h3 class="item center">基本情報</h3>

            <div class="text">

                <h4 class="station-name">道の駅&nbsp;{{ $station->station_name }}</h4>

                <dl>
                    <dt>〒{{ $station->zip_code }}</dt>
                    <dd>{{ $station->address }}</dd>

                    <dt>TEL：</dt>
                    <dd>{{ $station->tel }}</dd>

                    <dt>公式URL：</dt>
                    <dd>{{ $station->url }}</dd>

                    <dt>SNS：</dt>
                    <dd>
                        @if ($station->sns == null)
                            {{ '現在掲載はございません。' }}
                        @else
                            {{ $station->sns }}
                        @endif

                    <dt>営業時間：</dt>
                    <dd>{{ $station->business_hours }}
                    </dd>

                    <dt>定休日：</dt>
                    <dd>{{ $station->regular_holiday }}</dd>

                    <dt>駐車場：</dt>
                    <dd>{{ $station->parking }}
                    </dd>
                    <dt>設備：</dt>
                    <dd>
                        <div class="icon-wrapper">

                            @if ($station->accommodation_icon == 1)
                                <img title="宿泊施設" src="{{ asset('assets/images/icon/accommodation_icon1.svg') }}"
                                    alt="宿泊施設">
                            @else
                                <img title="宿泊施設" src="{{ asset('assets/images/icon/accommodation_icon0.svg') }}"
                                    alt="宿泊施設">
                            @endif

                            @if ($station->atm_icon == 1)
                                <img title="ATM" src="{{ asset('assets/images/icon/atm_icon1.svg') }}"
                                    alt="設備ATM">
                            @else
                                <img title="ATM" src="{{ asset('assets/images/icon/atm_icon0.svg') }}"
                                    alt="設備ATM">
                            @endif

                            @if ($station->bed_icon == 1)
                                <img title="ベビーベッド" src="{{ asset('assets/images/icon/bed_icon1.svg') }}"
                                    alt="ベビーベッド">
                            @else
                                <img title="ベビーベッド" src="{{ asset('assets/images/icon/bd_icon0.svg') }}" alt="ベビーベッド">
                            @endif

                            @if ($station->disability_icon == 1)
                                <img title="身障者トイレ" src="{{ asset('assets/images/icon/disability_icon1.svg') }}"
                                    alt="身障者トイレ">
                            @else
                                <img title="身障者トイレ" src="{{ asset('assets/images/icon/disability_icon0.svg') }}"
                                    alt="身障者トイレ">
                            @endif

                            @if ($station->ev_icon == 1)
                                <img title="EV充電施設" src="{{ asset('assets/images/icon/ev_icon1.svg') }}" alt="EV充電施設">
                            @else
                                <img title="EV充電施設" src="{{ asset('assets/images/icon/ev_icon0.svg') }}" alt="EV充電施設">
                            @endif

                            @if ($station->lightmeal_icon == 1)
                                <img title="軽食・喫茶" src="{{ asset('assets/images/icon/lightmeal_icon1.svg') }}"
                                    alt="軽食・喫茶">
                            @else
                                <img title="軽食・喫茶" src="{{ asset('assets/images/icon/lightmeal_icon0.svg') }}"
                                    alt="軽食・喫茶">
                            @endif

                            @if ($station->park_icon == 1)
                                <img title="公園" src="{{ asset('assets/images/icon/park_icon1.svg') }}"
                                    alt="公園">
                            @else
                                <img title="公園" src="{{ asset('assets/images/icon/park_icon0.svg') }}"
                                    alt="公園">
                            @endif

                            @if ($station->restaurant_icon == 1)
                                <img title="レストラン" src="{{ asset('assets/images/icon/restaurant_icon1.svg') }}"
                                    alt="レストラン">
                            @else
                                <img title="レストラン" src="{{ asset('assets/images/icon/restaurant_icon0.svg') }}"
                                    alt="レストラン">
                            @endif

                            @if ($station->shop_icon == 1)
                                <img title="ショップ" src="{{ asset('assets/images/icon/shop_icon1.svg') }}"
                                    alt="ショップ">
                            @else
                                <img title="ショップ" src="{{ asset('assets/images/icon/shop_icon0.svg') }}"
                                    alt="ショップ">
                            @endif

                            @if ($station->shower_icon == 1)
                                <img title="シャワー" src="{{ asset('assets/images/icon/shower_icon1.svg') }}"
                                    alt="シャワー">
                            @else
                                <img title="シャワー" src="{{ asset('assets/images/icon/shower_icon0.svg') }}"
                                    alt="シャワー">
                            @endif

                            @if ($station->spa_icon == 1)
                                <img title="温泉施設" src="{{ asset('assets/images/icon/spa_icon1.svg') }}"
                                    alt="温泉施設">
                            @else
                                <img title="温泉施設" src="{{ asset('assets/images/icon/spa_icon0.svg') }}"
                                    alt="温泉施設">
                            @endif


                            <img title="ここに説明が入ります" src="{{ asset('assets/images/icon/shower_icon1.svg') }}"
                                alt="">

                            <img title="ここに説明が入ります" src="{{ asset('assets/images/icon/spa_icon1.svg') }}"
                                alt="">

                            <img title="ここに説明が入ります" src="{{ asset('assets/images/icon/spa_icon1.svg') }}"
                                alt="">

                            <img title="ここに説明が入ります" src="{{ asset('assets/images/icon/spa_icon1.svg') }}"
                                alt="">

                            <img title="ここに説明が入ります" src="{{ asset('assets/images/icon/spa_icon1.svg') }}"
                                alt="">
                        </div>
                    </dd>
                </dl>

                <p>
                    <strong>
                        <span class="yellow">
                            ★
                        </span>
                        お気に入りを押したらお気に入りページに登録されます！
                    </strong>
                </p>
                <p>
                    <a href="#">
                        登録する（マイクロコピー）
                    </a>
                </p>
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
