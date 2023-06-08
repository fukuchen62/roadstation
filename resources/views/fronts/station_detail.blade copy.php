@extends('layouts.layout_front')

@section('description', '道の駅詳細')

@section('keywords', 'キーワード1,キーワード2・・・')

@section('title', 'ページタイトル')

{{-- 該当ページのCSS --}}
@section('pageCss')
    <link rel="stylesheet" href="{{ asset('assets/css/fstyle_station_detail.css') }}">
@endsection

@section('key_visual')
    <img class="sub-keyvisual" src="{{ asset('assets/images/sub-keyvisual.jpg') }}" alt="サブキービジュアル">
@endsection

<?php
$sum = 0;
?>

{{-- メイン --}}
@section('content')
    @foreach ($road_stations as $val)
        <section class="titlesection">
            <div class="titlesection__box">
                <h1 class="pagetitle">
                    {{ $val->station_name }}
                </h1>
            </div>
        </section>
        <section class="section">
            <div class="station_img">
                <img src="{{ asset('/storage/imgs/' . $val->picture1) }}" alt="トップ">
                <div>
                    <p class="catchphrase">
                        {!! $val->catchphrase !!}
                    </p>
                </div>
            </div>
            <div class="discription">
                <h2>
                    {!! $val->discription !!}
                </h2>
            </div>
            <div class="review">
                <img src="{{ asset('assets/images/cat1.jpg') }}" alt="human" class="review_img">
                <div class="gray_box">
                    <p>
                        {!! $val->review !!}
                    </p>
                </div>
                {{-- <img src="{{ asset('/storage/images/' . $goods->picture) }}" alt="ダミー" class="detailimg"> --}}
                {{-- imgをsrcはasset('/storage/images/'で終わり、.$gg) --}}
    @endforeach
    </section>
    <section class="gourmet">
        <h2>グルメ</h2>

        @foreach ($product_types as $pro)
            <div class="flex pro_box mr-tp-2">
                <div class="pro_in">
                    <p><span class="pro_title"><?= $pro['common_name'] ?> </span>参考価格:<?= $pro['price'] ?>円</p>
                    <div>
                        <div class="pro_disc">
                            <p><?= $pro['discription'] ?></p>
                        </div>
                    </div>
                    <a href="{{ url('blog-detail' . '?id=' . $pro->station_list) }}" class="mr-tp-2 block">
                        <div class="link">
                            <p>行ってみたんよ</p>
                        </div>
                    </a>
                </div>

                <div>
                    <img src="{{ asset('/storage/imgs/' . $pro->picture) }}" alt="グルメ">
                </div>
            </div>
        @endforeach
    </section>

    <section class="souvenir">
        <h2>お土産</h2>
        @foreach ($special_goods as $goods)
            <div class="flex pro_box mr-tp-2">
                <div class="pro_in">
                    <p><span class="pro_title"><?= $pro['common_name'] ?> </span>参考価格:<?= $pro['price'] ?>円</p>
                    <div>
                        <div class="pro_disc">
                            <p><?= $goods['discription'] ?></p>
                        </div>
                    </div>
                    <a href="{{ url('blog-detail' . '?id=' . $goods->station_list) }}"class="mr-tp-2 block">
                        <div class="link">
                            <p>行ってみたんよ</p>
                        </div>
                    </a>
                </div>
                <div>
                    <img src="{{ asset('/storage/imgs/' . $goods->picture) }}" alt="グルメ">
                </div>
        @endforeach
    </section>

    <section class="act1">
        <h2>体験</h2>
        @foreach ($activities as $act)
            <div class="wrap">
                <div><?= $act['picture1'] ?></div>
                <img src="{{ asset('/storage/imgs/' . $act->picture1) }}" alt="アクティビティー">
                <div>{!! $act->discription !!}</div>
                <div class="box">
                    <a href="{{ url('news') }}" class="block">
                        <div class="blog_link">
                            <p>行ってみたんよ</p>
                        </div>
                    </a>
                </div>
            </div>
        @endforeach
    </section>
    <section class="basic">
        @foreach ($road_stations as $val)
            <div>
                <h2>基本情報</h2>
            </div>
            <div> 道の駅 {!! $val->station_name !!}</div>
            <div> 〒{!! $val->zip_code !!}</div>
            <div> TEL:{!! $val->tel !!}</div>
            <div> 公式URL:{!! $val->url !!}</div>
            <div> 公式SNS:{!! $val->sns !!}</div>
            <div> 営業時間:{!! $val->business_hours !!}</div>
            <div> 定休日:{!! $val->regular_holiday !!}</div>
            <div> 駐車場:{!! $val->parking !!}</div>
            <div>
                <p>設備:</p>
                <div class="icon">
                    <img src="{{ asset('/storage/imgs/atm_icon_' . $val->atm_icon . '.jpeg') }}" alt="">
                    <img src="{{ asset('/storage/imgs/bed_icon_' . $val->bed_icon . '.jpeg') }}" alt="">
                    <img src="{{ asset('/storage/imgs/restaurant_icon_' . $val->restaurant_icon . '.jpeg') }}"
                        alt="">
                    <img src="{{ asset('/storage/imgs/lightmeal_icon_' . $val->lightmeal_icon . '.jpeg') }}"
                        alt="">
                    <img src="{{ asset('/storage/imgs/accommodation_icon_' . $val->accommodation_icon . '.jpeg') }}"
                        alt="">
                    <img src="{{ asset('/storage/imgs/spa_icon_' . $val->spa_icon . '.jpeg') }}" alt="">
                    <img src="{{ asset('/storage/imgs/park_icon_' . $val->park_icon . '.jpeg') }}" alt="">
                    <img src="{{ asset('/storage/imgs/ev_icon_' . $val->ev_icon . '.jpeg') }}" alt="">
                    <img src="{{ asset('/storage/imgs/lan_icon_' . $val->lan_icon . '.jpeg') }}" alt="">
                    <img src="{{ asset('/storage/imgs/shower_icon_' . $val->shower_icon . '.jpeg') }}" alt="">
                    <img src="{{ asset('/storage/imgs/experience_icon_' . $val->experience_icon . '.jpeg') }}"
                        alt="">
                    <img src="{{ asset('/storage/imgs/guide_icon_' . $val->guide_icon . '.jpeg') }}" alt="">
                    <img src="{{ asset('/storage/imgs/disability_icon_' . $val->disability_icon . '.jpeg') }}"
                        alt="">
                    <img src="{{ asset('/storage/imgs/shop_icon_' . $val->shop_icon . '.jpeg') }}" alt="">
                    <img src="{{ asset('/storage/imgs/observatory_icon_' . $val->observatory_icon . '.jpeg') }}"
                        alt="">
                    <img src="{{ asset('/storage/imgs/museum_icon_' . $val->museum_icon . '.jpeg') }}" alt="">
                </div>
            </div>
            <div>
                <button class="star">お気に入り</button>
            </div>
    </section>
    <div class="google_map">
        {!! $val->map_url !!}
    </div>
    @endforeach
@endsection

{{-- 該当ページ専用JS --}}
@section('pageJs')

@endsection
