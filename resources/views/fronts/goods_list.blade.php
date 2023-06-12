@extends('layouts.layout_front')

@section('description', 'プライバシーポリシーページ表示')

@section('keywords', 'キーワード1,キーワード2・・・')

@section('title', '特産品の選択画面')

{{-- 該当ページのCSS --}}
@section('pageCss')
    <link rel="stylesheet" href="{{asset('assets/css/goods_list.css')}}">
@endsection

@section('key_visual')
<!-- キービジュアル -->
        <div class="kv">
            <figure><img src="{{asset('assets/images/goods_list/goods_list_header.jpg')}}" alt="特産品ページ"></figure>
        </div>
@endsection


@section('content')
    <section class="agricultural-products-goods">
            <h2 class="title">特産品一覧</h2>

            <h3 class="headline-agricultural-products">農産物</h3>

            <ul class="goods">
            @foreach ($agricultural_products as $agricultural )
                <li class="goods-group">
                    <a href="#detail-top" class="btns" id="{{'btn-' . $agricultural->id}}">
                        <img class="goods-photo" src="{{ asset('/storage/images/' . $agricultural->picture) }}" alt="">
                        <h4 class="goods-name">{{$agricultural->common_name}}</h4>
                    </a>
                </li>
            @endforeach
            </ul>
        </section>

        <section class="seafood-goods">
            <h3 class="headline-seafood">水産物</h3>

            <ul class="goods">
            @foreach ($seafood as $seafood )
                <li class="goods-group">
                    <a href="#detail-top" class="btns" id="{{'btn-' . $seafood->id}}">
                        <img class="goods-photo" src="{{ asset('/storage/images/' . $seafood->picture) }}" alt="">
                        <h4 class="goods-name">{{$seafood->common_name}}</h4>
                    </a>
                </li>
            @endforeach
            </ul>
        </section>

        <section class="craft-goods">
            <h3 class="headline-craft">工芸品</h3>

            <ul class="goods">
            @foreach ($craft as $craft )
                <li class="goods-group">
                    <a href="#detail-top" class="btns" id="{{'btn-' . $craft->id}}">
                        <img class="goods-photo" src="{{ asset('/storage/images/' . $craft->picture) }}" alt="">
                        <h4 class="goods-name">{{$craft->common_name}}</h4>
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
                        <h4 class="goods-name">{{$gourmet->common_name}}</h4>
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
                        <h4 class="goods-name">{{$others->common_name}}</h4>
                    </a>
                </li>
            @endforeach
            </ul>
        </section>
        <div id="detail-top"></div>

        <section>
            @foreach ($goods_type as $type )
            <div class="any detail-group" id="{{'type-' . $type->id}}">
            <h3 class="headline-item-name">{{$type->common_name}}</h3>
            <div class="item-group">
                <img class="detail-photo" src="{{ asset('/storage/images/' . $type->picture) }}" alt="">
                <div class="item-text-group">

                    @php
                    //  配列$seasonsの中身を表示用に加工
                        $seasons = $type->season;
                        $month = str_replace("|",'月　',$seasons);
                        $month = str_replace("a",'10',$month);
                        $month = str_replace("b",'11',$month);
                        $month = str_replace("c",'12',$month);
                    @endphp
                    <h4 class="headline-name-season">＜旬の時期＞</h4>
                    <p class="season-text">{{$month}}月</p>

                    <h4 class="headline-name">＜参考価格＞</h4>
                    <p class="price-text">{{$type->price}}円</p>

                    <h4 class="headline-name">＜利用方法＞</h4>
                    <div class="conditions-text">{!!$type->usage!!}</div>
                </div>
            </div>
            <h4 class="headline-name-comment">＜概要＞</h4>
            <div class="comment-text"> {!!$type->discription!!}</div>

            <h3 class="headline-buy-place">買える道の駅</h3>

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

        <div class="blog-btn">
            <a href="{{route('bloglist')}}"><img src="{{ asset('/assets/images/blog-btn01.png')}}" alt=""></a>
        </div>



@endsection

{{-- 該当ページ専用JS --}}
@section('pageJs2')
<script src="{{ asset('/assets/js/goods_list.js') }}"></script>
@endsection
