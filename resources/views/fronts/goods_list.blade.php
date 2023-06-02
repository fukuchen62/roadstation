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

        <h2 class="section__box--title ">第一セクション</h2>

        {{--<div class="testspace">
            <h3>テストスペース</h3>
             <tbody>
            @foreach ($special_goods as $goods)
                <tr>
                    <div class="detail">
                    <div class="detailContainer">
                    <img src="{{ asset('/storage/images/' . $goods->picture) }}" alt="ダミー" class="detailimg">

                    <div class="detail_name">
                    <td>商品名　{!! $goods->goods_name !!}
                    </div>
                    <div class="detail_season">
                    <td>旬の時期　{!! $goods->season !!}</td>
                    </div>
                    <div class="detail_price">
                    <td>参考価格：{!! $goods->price !!}円</td>
                    </div>
                    <div class="detail_usage">
                    <td>利用方法：{!! $goods->usage !!}</td>
                    </div>
                    <div class="detail_discription">
                    <td>解説文：{!! $goods->discription !!}</td>
                    </div>
                    <div class="detail_sub">買える道の駅</div>
                    <div class="station_list">
                    <td>買える道の駅名 {!! $goods->station !!}</td>
                    </div>
                    </div><br><br>
                    </div>
                </tr>
            @endforeach
            </tbody> --}}


            {{-- <div class="container">
            <tbody>
            @foreach ($special_goods as $goods)
                <tr>
                    <div class="card">
                    <div class="cardContainer">
                    <img src="{{ asset('storage/images/news_1_1_300×300.png')}}" alt="ダミー" class="dummyimg">


                    <div class="category">
                    <td>カテゴリーID：{{ $goods->category_id }}</td>
                    </div>
                    <div class="goods_name">
                    <td>品名：{{ $goods->goods_name }}</td>
                    </div>
                    <div class="roadside_station">
                    <td>道の駅ID：{{ $goods->station_list }}</td>
                    </div>
                    <div class="discription">
                    <td>解説文：{{ $goods->discription }}</td>
                    </div>
                    </div><br><br>
                    </div>
                </tr>
            @endforeach
            </tbody>
            </div>
        </div>--}}

        {{-- 特産品種別パネルを作成 --}}
        <section>
            <div class="container">
            @foreach ($goods_type as $type )
                <div class="card">

                    <ul>
                        <div class="cardContainer">
                        <img src="{{ asset('/storage/images/' . $type->picture) }}" alt="種別画像" class="listImg">
                        <li class="commonName">種別名：{{$type->common_name}}</li>
                        <li class="listPrice">参考価格{{$type->price}}円</li>
                        <li class="listTypeId">種別ID：{{$type->goods_category_id}}</li>
                        <li class="listCategoryName">種別名：{{$type->getCategoryName()}}</li>
                        <li class="listDiscription">説明文:{!!$type->discription!!}</li>
                        <div class="listStation"> {{-- 関連道の駅 --}}

                                                @foreach ( $station_id as $id)
                                                    <a href="{{route('roadstation')}}?id={{$id}}">道の駅{{$id}}</a>
                                                @endforeach
                                            </div>
                                              @php
                                                    print_r($station_id);
                                                @endphp
                        </div>
                    </ul>
                </div>
            @endforeach
            </div>
        </section>


        {{-- 特産品種別詳細紹介カードを作成 --}}

    </section>

@endsection

{{-- 該当ページ専用JS --}}
@section('pageJs')

@endsection
