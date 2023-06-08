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


<?php
$sum = 0;
?>

{{-- メイン --}}
@section('content')

    @foreach ($road_stations as $station)
        <section>

            <div class="station-title">
                <h2>道の駅&nbsp;{{ $station->station_name }}</h2>
                <p>{{ $station->catchphrase }}</p>
            </div>

            <!-- スライドショー -->
            <div class="slide-items">
                <div>
                    <img src="{{ asset('assets/images/station.html/stations_3_1_1200_400.jpg .jpg') }}" alt="">
                </div>

                <div>
                    <img src="{{ asset('assets/images/station.html/drive.jpg') }}" alt="">
                </div>

                <div>
                    <img src="{{ asset('assets/images/station.html/stations_3_2_.jpg') }}" alt="">
                </div>
            </div>

            <p class="width">{!! $station->discription !!}
            </p>

            <!-- 画像と文字を横に並べる。CSS -->
            <div class="flex">
                <img src="{{ asset('assets/images/illustrations/tanuki-heart.png') }}" width="145px" height="145px"
                    alt="道の駅の感想を嬉しそうに喋るたぬき">
                <div class="speech">
                    <p>{{ $station->review }}</p>
                </div>
            </div>
        </section>

        <section>

            <!-- 画像と文字を重ねる。CSS -->
            <div class="flex f-width">

                <img src="{{ asset('assets/images/illustrations/tanuki-gourmet2.png') }}" width="130px" height="128px"
                    alt="美味しい飲み物" class="none">

                <div class="center overlap ">

                    <img src="{{ asset('assets/images/h3-red.png') }}" width="214" height="137" alt="">

                    <h3 class="center width absolute">グルメ</h3>

                </div>

                <img src="{{ asset('assets/images/illustrations/tanuki-gourmet.png') }}" width="145px" height="126.5px"
                    alt="道の駅のソフトクリームを食べるたぬき" class="sideways">

            </div>

            <section class="commentary">
                <!-- 画像右と文字を横に並べる。CSS -->
                <div class="container">
                    <img src="../assets/images/station.html/gourmet1.jpg" width="5472" height="3648" class="img"
                        alt="美味しいパンケーキ">
                    <div class="text">
                        <h4 class="deco-h4">鳴門金時パンケーキ</h4>
                        <p>1,210円</p>
                        <p class="com-wrap">ふわふわなパンケーキともちもち触感の求肥がたまらなくおいしい自慢のパンケーキです</p>
                        <p class="blog-btn">
                            <a href="#">【ブログ】行ってみたんよへ</a>
                            </>
                    </div>
                </div>
            </section>


            <section class="commentary">
                <!-- 画像左と文字を横に並べる。CSS -->
                <div class="container reverse">
                    <img src="../assets/images/station.html/gourmet3.jpg" class="img" alt="美味しい海鮮丼">
                    <div class="text">
                        <h4 class="deco-h4">ぶりぶり丼</h4>
                        <p>1,580円</p>
                        <p>徳島県産を使用しております</p>
                        <p class="blog-btn"><a href="#">【ブログ】行ってみたんよへ</a>
                        </p>
                    </div>
                </div>
            </section>

            <section class="commentary">
                <!-- 画像右と文字を横に並べる。CSS -->
                <div class="container">
                    <img src="../assets/images/station.html/gourmet2.jpg" class="img" alt="美味しい芋けんぴ">
                    <div class="text">
                        <h4 class="deco-h4">極細けんぴ</h4>
                        <p>580円</p>
                        <p class="com-wrap">鳴門金時を３ミリにカットし秘伝の蜜をたっぷり絡めたやみつきになる味わい</p>
                        <p class="blog-btn"><a href="#">【ブログ】行ってみたんよへ</a>
                        </p>
                    </div>
                </div>
            </section>


            <section>
                <div class="flex f-width">
                    <img src="../assets/images/illustrations/tanuki-gift2.png" width="150px" height="135px" alt="お土産を運ぶたぬき"
                        class="none">
                    <div class="center overlap ">
                        <img src="../assets/images/h3-green.png" width="214" height="137" alt="道の駅のお土産">
                        <h3 class="center width">お土産</h3>
                    </div>
                    <img src="../assets/images/illustrations/tanuki-gift.png" width="150px" height="150px" alt="美味しいお土産"
                        class="sideways">
                </div>
                <section class="commentary">
                    <!-- 画像右と文字を横に並べる。CSS -->
                    <div class="container">
                        <img src="../assets/images/station.html/gift1.jpg" class="img" alt="美味しいスイートポテト">
                        <div class="text">
                            <h4 class="deco-h4">ほっこりおいものスイートポテト</h4>
                            <p>4個 897円/8個 1,782円税込</p>
                            <p class="com-wrap">しっとり滑らかなお芋の優しい甘さが特徴。お芋好きにはたまらない！</p>
                            <p class="blog-btn"><a href="#">【ブログ】行ってみたんよへ</a>
                            </p>
                        </div>
                    </div>
                </section>

                <section class="commentary">
                    <!-- 画像左と文字を横に並べる。CSS -->
                    <div class="container reverse">
                        <img src="../assets/images/station.html/gift2.jpg" class="img" alt="美味しいプリン">
                        <div class="text">
                            <h4 class="deco-h4">鳴門ほれほれプリン</h4>
                            <p>１個３８０円税込み</p>
                            <p class="com-wrap">一番人気のほれほれ芋プリンにはスコップ型のスプーンがついています</p>
                            <p class="blog-btn"><a href="#">【ブログ】行ってみたんよへ</a>
                            </p>
                        </div>
                    </div>
                </section>

                <section class="commentary">
                    <!-- 画像右と文字を横に並べる。CSS -->
                    <div class="container">
                        <img src="../assets/images/station.html/gift3.jpg" class="img" alt="美味しいカレー">
                        <div class="text">
                            <h4 class="deco-h4">鳴門金時カレー</h4>
                            <p>648円税込</p>
                            <p class="com-wrap">お芋の甘みとカレーのスパイス。実は相性ばっちりなんです。</p>
                            <p class="blog-btn"><a href="#">【ブログ】行ってみたんよへ</a>
                            </p>
                        </div>
                    </div>
                </section>

            </section>


            <section>
                <!-- 画像と文字を重ねる。CSS -->
                <div class="flex f-width">
                    <img src="../assets/images/illustrations/tanuki-food4.png" width="125px" height="100px"
                        alt="美味しいすだち" class="none">
                    <div class="center overlap ">
                        <img src="../assets/images/h3-orange.png" width="214" height="137" alt="">
                        <h3 class="center width absolute">農産物</h3>
                    </div>
                    <img src="../assets/images/illustrations/tanuki-food.png" width="141.5px" height="140px"
                        alt="道の駅のさつまいもを食べるたぬき" class="sideways">
                </div>
                <section class="commentary">
                    <!-- 画像右と文字を横に並べる。CSS -->
                    <div class="container">
                        <img src="../assets/images/station.html/gourmet1.jpg" width="5472" height="3648"
                            class="img" alt="美味しいパンケーキ">
                        <div class="text">
                            <h4 class="deco-h4">鳴門金時パンケーキ</h4>
                            <p>1,210円</p>
                            <p class="com-wrap">ふわふわなパンケーキともちもち触感の求肥がたまらなくおいしい自慢のパンケーキです</p>
                            <p class="blog-btn">
                                <a href="#">【ブログ】行ってみたんよへ</a>
                                </>
                        </div>
                    </div>
                </section>


                <section class="commentary">
                    <!-- 画像左と文字を横に並べる。CSS -->
                    <div class="container reverse">
                        <img src="../assets/images/station.html/gourmet3.jpg" class="img" alt="美味しい海鮮丼">
                        <div class="text">
                            <h4 class="deco-h4">ぶりぶり丼</h4>
                            <p>1,580円</p>
                            <p>徳島県産を使用しております</p>
                            <p class="blog-btn"><a href="#">【ブログ】行ってみたんよへ</a>
                            </p>
                        </div>
                    </div>
                </section>

                <section class="commentary">
                    <!-- 画像右と文字を横に並べる。CSS -->
                    <div class="container">
                        <img src="../assets/images/station.html/gourmet2.jpg" class="img" alt="美味しい芋けんぴ">
                        <div class="text">
                            <h4 class="deco-h4">極細けんぴ</h4>
                            <p>580円</p>
                            <p class="com-wrap">鳴門金時を３ミリにカットし秘伝の蜜をたっぷり絡めたやみつきになる味わい</p>
                            <p class="blog-btn"><a href="#">【ブログ】行ってみたんよへ</a>
                            </p>
                        </div>
                    </div>
                </section>


                <section>
                    <div class="flex f-width">
                        <img src="../assets/images/illustrations/tanuki-food5.png" width="125px" height="125.5px"
                            alt="美味しいわかめ" class="sideways">
                        <div class="center overlap ">
                            <img src="../assets/images/h3-red.png" width="214" height="137" alt="道の駅のお土産">
                            <h3 class="center width">水産物</h3>
                        </div>
                        <img src="../assets/images/illustrations/tanuki-food2.png" width="141.5px" height="140px"
                            alt="道の駅の魚を食べるたぬき" class="sideways">
                    </div>
                    <section class="commentary">
                        <!-- 画像右と文字を横に並べる。CSS -->
                        <div class="container">
                            <img src="../assets/images/station.html/gift1.jpg" class="img" alt="美味しいスイートポテト">
                            <div class="text">
                                <h4 class="deco-h4">ほっこりおいものスイートポテト</h4>
                                <p>4個 897円/8個 1,782円税込</p>
                                <p class="com-wrap">しっとり滑らかなお芋の優しい甘さが特徴。お芋好きにはたまらない！</p>
                                <p class="blog-btn"><a href="#">【ブログ】行ってみたんよへ</a>
                                </p>
                            </div>
                        </div>
                    </section>

                    <section class="commentary">
                        <!-- 画像左と文字を横に並べる。CSS -->
                        <div class="container reverse">
                            <img src="../assets/images/station.html/gift2.jpg" class="img" alt="美味しいプリン">
                            <div class="text">
                                <h4 class="deco-h4">鳴門ほれほれプリン</h4>
                                <p>１個３８０円税込み</p>
                                <p class="com-wrap">一番人気のほれほれ芋プリンにはスコップ型のスプーンがついています</p>
                                <p class="blog-btn"><a href="#">【ブログ】行ってみたんよへ</a>
                                </p>
                            </div>
                        </div>
                    </section>

                    <section class="commentary">
                        <!-- 画像右と文字を横に並べる。CSS -->
                        <div class="container">
                            <img src="../assets/images/station.html/gift3.jpg" class="img" alt="美味しいカレー">
                            <div class="text">
                                <h4 class="deco-h4">鳴門金時カレー</h4>
                                <p>648円税込</p>
                                <p class="com-wrap">お芋の甘みとカレーのスパイス。実は相性ばっちりなんです。</p>
                                <p class="blog-btn"><a href="#">【ブログ】行ってみたんよへ</a>
                                </p>
                            </div>
                        </div>
                    </section>

                </section>


                <section>
                    <div class="flex f-width">
                        <img src="../assets/images/illustrations/tanuki-food6.png" width="118px" height="114.5px"
                            alt="きれいな藍染" class="none">
                        <div class="center overlap ">
                            <img src="../assets/images/h3-green.png" width="214" height="137" alt="道の駅のお土産">
                            <h3 class="center width">工芸品</h3>
                        </div>
                        <img src="../assets/images/illustrations/tanuki-food3.png" width="141.5px" height="140px"
                            alt="道の駅で買ったお椀でご飯を食べるたぬき" class="sideways">
                    </div>
                    <section class="commentary">
                        <!-- 画像右と文字を横に並べる。CSS -->
                        <div class="container">
                            <img src="../assets/images/station.html/gift1.jpg" class="img" alt="美味しいスイートポテト">
                            <div class="text">
                                <h4 class="deco-h4">ほっこりおいものスイートポテト</h4>
                                <p>4個 897円/8個 1,782円税込</p>
                                <p class="com-wrap">しっとり滑らかなお芋の優しい甘さが特徴。お芋好きにはたまらない！</p>
                                <p class="blog-btn"><a href="#">【ブログ】行ってみたんよへ</a>
                                </p>
                            </div>
                        </div>
                    </section>

                    <section class="commentary">
                        <!-- 画像左と文字を横に並べる。CSS -->
                        <div class="container reverse">
                            <img src="../assets/images/station.html/gift2.jpg" class="img" alt="美味しいプリン">
                            <div class="text">
                                <h4 class="deco-h4">鳴門ほれほれプリン</h4>
                                <p>１個３８０円税込み</p>
                                <p class="com-wrap">一番人気のほれほれ芋プリンにはスコップ型のスプーンがついています</p>
                                <p class="blog-btn"><a href="#">【ブログ】行ってみたんよへ</a>
                                </p>
                            </div>
                        </div>
                    </section>

                    <section class="commentary">
                        <!-- 画像右と文字を横に並べる。CSS -->
                        <div class="container">
                            <img src="../assets/images/station.html/gift3.jpg" class="img" alt="美味しいカレー">
                            <div class="text">
                                <h4 class="deco-h4">鳴門金時カレー</h4>
                                <p>648円税込</p>
                                <p class="com-wrap">お芋の甘みとカレーのスパイス。実は相性ばっちりなんです。</p>
                                <p class="blog-btn"><a href="#">【ブログ】行ってみたんよへ</a>
                                </p>
                            </div>
                        </div>
                    </section>

                </section>

                <section class="width">

                    <div class="flex f-width">

                        <img src="{{ asset('assets/images/illustrations/tanuki-activity2.png') }}" width="177.5px"
                            height="135px" alt="DMV" class="none">

                        <div class="center overlap ">

                            <img src="{{ 'assets/images/h3-orange.png' }}" width="191" height="111"
                                alt="">

                            <h3 class="center width">体験</h3>

                        </div>

                        <img src="{{ asset('assets/images/illustrations/tanuki-activity.png') }}" width="177.5px"
                            height="135px" alt="””DMV" class="sideways2">

                    </div>

                </section>

                @foreach ($station->activity as $activites)
                    <img src="../assets/images/index.images/zipline.jpg" class="kv" alt="楽しいジップライン">

                    <h4>{{ $activites->activity_name }}</h4>

                    <p>大人料金 : 800円 子供料金:500円&nbsp;小学3年生~中学生3年生<br>
                        気軽に楽しめる天空アクティビティです。&nbsp;※完全予約制です<br>
                        体重制限25kg~100kgまで&nbsp;※身長120cm以上で年齢9歳以上<br>※上記をクリアされている方でもハーネスが体にフィットしない方は参加することができません
                        <a href="#">
                            <img src="../assets/images/blog-btn.png" class="blog-btn blog-img" alt="体験ブログの記事へ">
                        </a>
                @endforeach
            </section>

        </section>

        <section>

            <h3 class="item center">基本情報</h3>
            <div class="text">
                <h4 class="station-name">道の駅&nbsp;{{ $station->station_name }}</h4>
                <!-- dtとdd１セットのみdivでくくれる。１２０ｐ -->

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
                            <img title="宿泊施設" src="{{ asset('assets/images/icon/accommodation_icon1.svg') }}"
                                alt="宿泊施設">
                            <img title="ATM" src="{{ asset('assets/images/icon/atm_icon1.svg') }}" alt="設備ATM">
                            <img title="ベビーベッド" src="{{ asset('assets/images/icon/bed_icon1.svg') }}" alt="ベビーベッド">
                            <img title="身障者トイレ" src="{{ asset('assets/images/icon/disability_icon1.svg') }}"
                                alt="身障者トイレ">
                            <img title="EV充電施設" src="{{ asset('assets/images/icon/ev_icon1.svg') }}" alt="EV充電施設">
                            <img title="軽食・喫茶" src="{{ asset('assets/images/icon/lightmeal_icon1.svg') }}"
                                alt="軽食・喫茶">
                            <img title="公園" src="{{ asset('assets/images/icon/park_icon1.svg') }}" alt="公園">
                            <img title="レストラン" src="{{ asset('assets/images/icon/restaurant_icon1.svg') }}"
                                alt="レストラン">
                            <img title="ショップ" src="{{ asset('assets/images/icon/shop_icon1.svg') }}" alt="ショップ">
                            <img title="シャワー" src="{{ asset('assets/images/icon/shower_icon1.svg') }}" alt="シャワー">
                            <img title="温泉施設" src="{{ asset('assets/images/icon/spa_icon1.svg') }}" alt="温泉施設">
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

                <p><strong><span class="yellow">★</span>お気に入りを押したらお気に入りページに登録されます！</strong></p>
                <p><a href="#">登録する（マイクロコピー）</a></p>
            </div>

            <!-- googlemap -->
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3301.533509598061!2d134.5772079762422!3d34.15827496212325!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x35536fda4ddf71ff%3A0xc5ce5c88e1a48d83!2z6YGT44Gu6aeFIOOBj-OCi-OBj-OCi-OBquOCi-OBqA!5e0!3m2!1sja!2sjp!4v1685414674912!5m2!1sja!2sjp"
                style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                title="道の駅くるくるなるとの地図" loading="lazy"></iframe>
        </section>
    @endforeach

@endsection

{{-- 該当ページ専用JS --}}
@section('pageJs2')
    <script src="{{ asset('assets/js/slick.min.js') }}"></script>
@endsection
