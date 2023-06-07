@extends('layouts.layout_front')

@section('description', 'プライバシーポリシーページ表示')

@section('keywords', 'キーワード1,キーワード2・・・')

@section('title', '特産品の選択画面')

{{-- 該当ページのCSS --}}
@section('pageCss')
    <link rel="stylesheet" href="{{asset('assets/css/goods_list.css')}}">
@endsection

@section('key_visual')

<div class="kv">
<figure>
    <img src="{{asset('assets/images/goods_list.img/goods_list_header.jpg')}}" alt="特産品ページ">
</figure>
</div>
    {{-- <img class="sub-keyvisual" src="{{ asset('assets/images/sub-keyvisual.jpg') }}" alt="サブキービジュアル"> --}}
@endsection


@section('content')



<div class="wrapper">
     <section class="agricultural-products-goods">
            <h2 class="title">特産品一覧</h2>
            <h3 class="headline agricultural-products">農産物</h3>

            <ul class="goods">
            @foreach ($agricultural_products as $agricultural )
                <li class="goods-group">
                    <a href="#detail-top" class="btns" id="{{'btn-' . $agricultural->id}}">
                        <img class="goods-photo" src="{{ asset('/storage/images/' . $agricultural->picture) }}" alt="">
                        <h4 class="goods-name">{{$agricultural->getCategoryName()}}</h4>
                    </a>
                </li>
            @endforeach
            </ul>
        </section>

        <section class="seafood-goods">
            <h3 class="headline seafood">水産物</h3>

            <ul class="goods">
            @foreach ($seafood as $seafood )
                <li class="goods-group">
                    <a href="#detail-top" class="btns" id="{{'btn-' . $seafood->id}}">
                        <img class="goods-photo" src="{{ asset('/storage/images/' . $seafood->picture) }}" alt="">
                        <h4 class="goods-name">{{$seafood->getCategoryName()}}</h4>
                    </a>
                </li>
            @endforeach
            </ul>
        </section>

        <section class="craft-goods">
            <h3 class="headline craft">工芸品</h3>

            <ul class="goods">
            @foreach ($craft as $craft )
                <li class="goods-group">
                    <a href="#detail-top" class="btns" id="{{'btn-' . $craft->id}}">
                        <img class="goods-photo" src="{{ asset('/storage/images/' . $craft->picture) }}" alt="">
                        <h4 class="goods-name">{{$craft->getCategoryName()}}</h4>
                    </a>
                </li>
            @endforeach
            </ul>
        </section>

        <section class="gourmet-goods">
            <h3 class="headline-gourmet">グルメ</h3>

            <ul class="goods">
            @foreach ($gourmet as $gourmet )
                <li class="goods-group">
                    <a href="#detail-top" class="btns" id="{{'btn-' . $gourmet->id}}">
                        <img class="goods-photo" src="{{ asset('/storage/images/' . $gourmet->picture) }}" alt="">
                        <h4 class="goods-name">{{$gourmet->getCategoryName()}}</h4>
                    </a>
                </li>
            @endforeach
            </ul>
        </section>

        <section class="others-goods">
            <h3 class="headline-others">その他</h3>

            <ul class="goods">
            @foreach ($others as $others )
                <li class="goods-group">
                    <a href="#detail-top" class="btns" id="{{'btn-' . $others->id}}">
                        <img class="goods-photo" src="{{ asset('/storage/images/' . $gourmet->others) }}" alt="">
                        <h4 class="goods-name">{{$others->getCategoryName()}}</h4>
                    </a>
                </li>
            @endforeach
            </ul>
        </section>

        <section class="detail-group" id="detail-top">
            @foreach ($goods_type as $type )
            <div class="any" id="{{'type-' . $type->id}}">
            <h3 class="headline item-name">{{$type->common_name}}</h3>
            <div class="item-group">
                <img class="detail-photo" src="{{ asset('/storage/images/' . $type->picture) }}" alt="">
                <div class="item-text-group">
                    <!-- <h3 class="headline text"></h3> -->
                    @php
                    //  配列$seasonsの中身を表示用に加工
                        $seasons = $type->season;
                        $month = str_replace("|",'月　',$seasons);
                        $month = str_replace("a",'10',$month);
                        $month = str_replace("b",'11',$month);
                        $month = str_replace("c",'12',$month);
                    @endphp
                    <p class="season-text">旬の時期：<br>{{$month}}月</p>

                    <!-- <h3 class="headline text"></h3> -->
                    <p class="price-text">参考価格：<br>
                        {{$type->price}}円</p>

                    <!-- <h3 class="headline text"></h3> -->
                    <p class="conditions-text">利用方法：<br>
                        {!!$type->usage!!}</p>
                </div>
            </div>
            <!-- <h3 class="headline text"></h3> -->
            <p class="comment-text">解説テキスト：<br>
                {!!$type->discription!!}</p>

            <h3 class="headline buy-place">買える道の駅</h3>

            <ul class="roadstation-frame">

                    @php
                        $station_list = $type->station_list;
                        // 文字列から配列に変換
                        $id_list = explode("|", $station_list);
                    @endphp

                    @foreach ( $id_list as $id )

                        @php
                                $name = $type::getRoadstationName($id);
                        @endphp
                        <li class="roadstation-name">
                        <a class="" href="{{route('roadstation')}}?id={{$id}}">
                            <p class="name">{{$name}}</p>
                        </a>
                        </li>
                    @endforeach

            </ul>
            </div>
            @endforeach
        </section>


        {{-- <section id="detail">
            <div class="details">
            @foreach ($goods_type as $type )
                    <ul class="detailContainer any" id="{{'type-' . $type->id}}">
                        <img src="{{ asset('/storage/images/' . $type->picture) }}" alt="種別画像" class="detailImg">
                        <li class="detailName">商品名：　{{$type->common_name}}</li>
                        @php --}}
                        {{-- 配列$seasonsの中身を表示用に加工
                        //     $seasons = $type->season;
                        //     $month = str_replace("|",'月　',$seasons);
                        //     $month = str_replace("a",'10',$month);
                        //     $month = str_replace("b",'11',$month);
                        //     $month = str_replace("c",'12',$month);
                        // @endphp
                        // <li class="detailSeason">旬の月:<br>{{$month}}月</li>
                        // <li class="detailPrice">参考価格:<br>{{$type->price}}円</li>
                        // <li class="detailUsage">利用方法：{!!$type->usage!!}</li>
                        // <li class="detailDiscription">説明文:{!!$type->discription!!}</li>
                        // <li class="detail_sub">買える道の駅</li>
                        // <li class="stationLink">

                        {{-- 道の駅のリンク --}}
                       {{-- @php
                        $station_list = $type->station_list;
                        文字列から配列に変換
                            $id_list = explode("|", $station_list);
                        @endphp

                        @foreach ( $id_list as $id )

                        @php

                                $name = $type::getRoadstationName($id);

                        @endphp

                        <a class="stationBtn" href="{{route('roadstation')}}?id={{$id}}">{{$name}}</a>

                        @endforeach
                        </li>
                    </ul>

            @endforeach
            </div>
        </section>

        <div class="blog-btn">
            <a href="index.html"><img src="{{route('bloglist')}}" alt=""></a>
        </div> --}}




{{-- 自己作成分↓ --}}

    {{-- <section class="section"> --}}
        {{-- 農産物の一覧表示 --}}
            {{-- <div class="categoryTitle">農産物</div> --}}
            {{-- 出力した農産品画像名前のグリッド配置 --}}
            {{-- <div class="container">
            @foreach ($agricultural_products as $agricultural )
                <div class="card" >
                        <a href="#detail" class="btns" id="{{'btn-' . $agricultural->id}}">
                        <img src="{{ asset('/storage/images/' . $agricultural->picture) }}" alt="種別画像" class="cardImg"></a>
                        <p class="listCategoryName">種別名：{{$agricultural->getCategoryName()}}</p>
                </div>
            @endforeach
            </div> --}}
            {{-- 海産物の一覧表示 --}}
            {{-- <div class="categoryTitle">海産物</div>
            <div class="container">
            @foreach ($seafood as $seafood )
                <div class="card">
                        <a href="#detail" class="btns" id="{{'btn-' . $seafood->id}}">
                        <img src="{{ asset('/storage/images/' . $seafood->picture) }}" alt="種別画像" class="cardImg"></a>
                        <p class="listCategoryName">
                            種別名：{{$seafood->getCategoryName()}}
                        </p>
                </div>
            @endforeach
            </div> --}}
            {{-- 工芸品の一覧表示 --}}
            {{-- <div class="categoryTitle">工芸品</div>
            <div class="container">
            @foreach ($craft as $craft )
                <div class="card">
                        <a href="#detail" class="btns" id="{{'btn-' . $craft->id}}">
                        <img src="{{ asset('/storage/images/' . $craft->picture) }}" alt="種別画像" class="cardImg"></a>
                        <p class="listCategoryName">種別名：{{$craft->getCategoryName()}}</p>
                </div>
            @endforeach
            </div> --}}

            {{-- グルメの一覧表示 --}}
            {{-- <div class="categoryTitle">グルメ</div>
            <div class="container">
            @foreach ($gourmet as $gourmet )
                <div class="card">
                        <a href="#detail" class="btns" id="{{'btn-' . $gourmet->id}}">
                        <img src="{{ asset('/storage/images/' . $gourmet->picture) }}" alt="種別画像" class="cardImg"></a>
                        <p class="listCategoryName">種別名：{{$gourmet->getCategoryName()}}</p>
                </div>
            @endforeach
            </div> --}}

        {{-- 特産品種別詳細紹介カードを作成 --}}

        {{-- <section id="detail">
            <div class="details">
            @foreach ($goods_type as $type )
                    <ul class="detailContainer" id="{{'type-' . $type->id}}">
                        <img src="{{ asset('/storage/images/' . $type->picture) }}" alt="種別画像" class="detailImg">
                        <li class="detailName">商品名：　{{$type->common_name}}</li>
                        @php
                            $seasons = $type->season;
                            $month = str_replace("|",'月　',$seasons);
                            $month = str_replace("a",'10',$month);
                            $month = str_replace("b",'11',$month);
                            $month = str_replace("c",'12',$month);
                        @endphp
                        <li class="detailSeason">旬の月:<br>{{$month}}月</li>
                        <li class="detailPrice">参考価格:<br>{{$type->price}}円</li>
                        <li class="detailUsage">利用方法：{!!$type->usage!!}</li>
                        <li class="detailDiscription">説明文:{!!$type->discription!!}</li>
                        <li class="detail_sub">買える道の駅</li>
                        <li class="stationLink"> --}}

                        {{-- 道の駅のリンク --}}
                        {{-- @php
                            $station_list = $type->station_list; --}}
                            {{-- // 文字列から配列に変換
                            $id_list = explode("|", $station_list);
                        @endphp

                        @foreach ( $id_list as $id )

                        @php

                                $name = $type::getRoadstationName($id);

                        @endphp --}}

                        {{-- <a class="stationBtn" href="{{route('roadstation')}}?id={{$id}}">{{$name}}</a>

                        @endforeach
                        </li>
                    </ul>

            @endforeach
            </div>
        </section> --}}
        {{-- 体験ブログへのリンク --}}
        {{-- <div class="bloglink">
        <a href="{{route('bloglist')}}" >
            <img src="{{ asset('assets/images/blog-btn.png') }}" alt="体験ブログリンク">
        </a></div> --}}

    {{-- </section>
</div>
@endsection --}}

{{-- 該当ページ専用JS --}}
@section('pageJs')
<script src="{{ asset('/assets/js/goods_list.js') }}"></script>
@endsection
