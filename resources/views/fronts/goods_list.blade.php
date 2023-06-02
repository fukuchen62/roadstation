@extends('layouts.layout_front')

@section('description', 'プライバシーポリシーページ表示')

@section('keywords', 'キーワード1,キーワード2・・・')

@section('title', '特産品の選択画面')

{{-- 該当ページのCSS --}}
@section('pageCss')
    <link rel="stylesheet" href="{{ asset('assets/css/goodsMainView.css')  }}">
@endsection

@section('key_visual')
    <img class="sub-keyvisual" src="{{ asset('assets/images/sub-keyvisual.jpg') }}" alt="サブキービジュアル">
@endsection

{{-- メイン --}}
@section('content')
    <section class="titlesection">
        <div class="titlesection__box">
            <h1 class="pagetitle">特産品の選択画面</h1>
        </div>
    </section>

    <section class="section">

            <div class="categoryTitle">農産物</div>
            <div class="container">
            @foreach ($agricultural_products as $agricultural )
                <div class="card">
                    <ul>
                        <div class="cardContainer">
                            <a href="" class="{{}}">
                        <img src="{{ asset('/storage/images/' . $agricultural->picture) }}" alt="種別画像" class="listImg"></a>
                        <li class="listCategoryName">種別名：{{$agricultural->getCategoryName()}}</li>
                        </div>
                    </ul>
                </div>
            @endforeach
            </div>

            <div class="categoryTitle">海産物</div>
            <div class="container">
            @foreach ($seafood as $seafood )
                <div class="card">
                    <ul>
                        <div class="cardContainer">
                        <img src="{{ asset('/storage/images/' . $seafood->picture) }}" alt="種別画像" class="listImg">
                        <li class="listCategoryName">種別名：{{$seafood->getCategoryName()}}</li>
                        </div>
                    </ul>
                </div>
            @endforeach
            </div>

              <div class="categoryTitle">工芸品</div>
            <div class="container">
            @foreach ($craft as $craft )
                <div class="card">
                    <ul>
                        <div class="cardContainer">
                        <img src="{{ asset('/storage/images/' . $craft->picture) }}" alt="種別画像" class="listImg">
                        <li class="listCategoryName">種別名：{{$craft->getCategoryName()}}</li>
                        </div>
                    </ul>
                </div>
            @endforeach
            </div>


        {{-- <section>
            <div class="container">
            @foreach ($goods_type as $type )
                <div class="card">
                    <ul>
                        <div class="cardContainer">
                        <img src="{{ asset('/storage/images/' . $type->picture) }}" alt="種別画像" class="listImg">
                        <li class="listCategoryName">種別名：{{$type->getCategoryName()}}</li>
                        </div>
                    </ul>
                </div>
            @endforeach
            </div>
        </section> --}}


        {{-- 特産品種別詳細紹介カードを作成 --}}
        <section>
            @foreach ($goods_type as $type )
                    <ul class="detail">
                    <div class="detailContainer">
                        <img src="{{ asset('/storage/images/' . $type->picture) }}" alt="種別画像" class="detailImg">
                        <li class="detailName">商品名：　{{$type->common_name}}</li>
                        <li class="detailSeason">旬の時期：<br>{{$type->season}}</li>
                        <li class="detailPrice">参考価格:<br>{{$type->price}}円</li>
                        <li class="detailUsage">利用方法：{!!$type->usage!!}</li>
                        {{-- <li class="detailCategoryName">種別名：{{$type->getCategoryName()}}</li> --}}
                        <li class="detailDiscription">説明文:{!!$type->discription!!}</li>
                        <li class="detail_sub">買える道の駅</li>
                        <li class="stationLink">

                        {{-- 道の駅のリンク --}}
                        @php
                            $station_list = $type->station_list;
                            // 文字列から配列に変換
                            $id_list = explode("|", $station_list);
                        @endphp

                        @foreach ( $id_list as $id )

                        @php

                                $name = $type::getRoadstationName($id);

                        @endphp

                        <a class="stationBtn" href="{{route('roadstation')}}?id={{$id}}">{{$name}}</a>

                        @endforeach
                        </li>
                    </div>
                    </ul>
            @endforeach
        </section>
        <div class="bloglink">
        <a href="{{route('blog')}}" >
            <img src="{{ asset('/storage/images/link_1_1_300×300.png') }}" alt="体験ブログリンク">
        </a></div>

    </section>

@endsection

{{-- 該当ページ専用JS --}}
@section('pageJs')

@endsection
