@extends('layouts.layout_front')

@section('description', 'プライバシーポリシーページ表示')

@section('keywords', 'キーワード1,キーワード2・・・')

@section('title', '徳島まるっと道の駅')

{{-- 該当ページのCSS --}}
@section('pageCss')
    <link rel="stylesheet" href="{{ asset('assets/css/goods_list.css') }}">

<style>

.roadstation-frame{
    justify-content: space-between;
}
.roadstation-name {
  display: flex;
  justify-content: space-between;
  align-items: center;
  position: relative;
  margin: 10px;
  padding: 10px 20px;
  border: none;
  border-radius: 25px;
  background-color: #a7d28d;
  color: #fff;
  font-weight: 600;
  font-size: 1em;
}

.roadstation-name::before {
  position: absolute;
  right: calc(2em + -4px);
  transform: translateX(50%);
  width: 25px;
  height: 25px;
  border-radius: 50%;
  background-color: #fff;
  content: "";
}

.roadstation-name::after {
  transform: rotate(45deg);
  width: 10px;
  height: 10px;
  margin-left: 20px;
  margin-right: 5px;
  border-top: 3px solid #a7d28d;
  border-right: 3px solid #a7d28d;
  content: "";
}


.station-name:hover {
    opacity: 0.7;
}

</style>

@endsection

@section('key_visual')
    <!-- キービジュアル -->
    <div class="kv">
        <figure><img src="{{ asset('assets/images/goods_list/goods_list_header.jpg') }}" alt="特産品ページ"></figure>
    </div>
@endsection


@section('content')
    <section class="agricultural-products-goods">
        <h2 class="title">特産品一覧</h2>

        <h3 class="headline-agricultural-products">農産物</h3>

        <ul class="goods">
            @foreach ($agricultural_products as $agricultural)
                <li class="goods-group">
                    {{-- if文に使うための画像パスデータを取得 --}}
                    @php
                        $agriculturalImg = $agricultural->picture;
                    @endphp
                    <a href="#detail-top" class="btns" id="{{ 'btn-' . $agricultural->id }}">
                        {{-- 画像パスデータがある時は画像を表示、ない時はno-img画像を表示 --}}
                        @if ($agriculturalImg != '')
                            <img class="goods-photo" src="{{ asset('/storage/images/' . $agricultural->picture) }}"
                                alt="">
                        @else
                            <img class="goods-photo" src="{{ asset('/storage/images/no-image.png') }}" alt="no img">
                        @endif
                        <h4 class="goods-name">{{ $agricultural->common_name }}</h4>
                    </a>
                </li>
            @endforeach
        </ul>
    </section>

    <section class="seafood-goods">
        <h3 class="headline-seafood">水産物</h3>

        <ul class="goods">
            @foreach ($seafood as $seafood)
                <li class="goods-group">
                    @php
                        $seafoodImg = $seafood->picture;
                    @endphp
                    <a href="#detail-top" class="btns" id="{{ 'btn-' . $seafood->id }}">
                        @if ($seafoodImg != '')
                            <img class="goods-photo" src="{{ asset('/storage/images/' . $seafood->picture) }}"
                                alt="">
                        @else
                            <img class="goods-photo" src="{{ asset('/storage/images/no-image.png') }}" alt="no img">
                        @endif
                        <h4 class="goods-name">{{ $seafood->common_name }}</h4>
                    </a>
                </li>
            @endforeach
        </ul>
    </section>

    <section class="craft-goods">
        <h3 class="headline-craft">工芸品</h3>

        <ul class="goods">
            @foreach ($craft as $craft)
                <li class="goods-group">
                    @php
                        $craftImg = $craft->picture;
                    @endphp
                    <a href="#detail-top" class="btns" id="{{ 'btn-' . $craft->id }}">
                        @if ($craftImg != '')
                            <img class="goods-photo" src="{{ asset('/storage/images/' . $craft->picture) }}"
                                alt="">
                        @else
                            <img class="goods-photo" src="{{ asset('/storage/images/no-image.png') }}" alt="no img">
                        @endif
                        <h4 class="goods-name">{{ $craft->common_name }}</h4>
                    </a>
                </li>
            @endforeach
        </ul>
    </section>

    <section class="gourmet-goods">
        <h3 class="headline-gourmet">グルメ</h3>

        <ul class="goods">
            @foreach ($gourmet as $gourmet)
                <li class="goods-group">
                    @php
                        $gourmetImg = $gourmet->picture;
                    @endphp
                    <a href="#detail-top" class="btns" id="{{ 'btn-' . $gourmet->id }}">
                        @if ($gourmetImg != '')
                            <img class="goods-photo" src="{{ asset('/storage/images/' . $gourmet->picture) }}"
                                alt="">
                        @else
                            <img class="goods-photo" src="{{ asset('/storage/images/no-image.png') }}" alt="no img">
                        @endif
                        <h4 class="goods-name">{{ $gourmet->common_name }}</h4>
                    </a>
                </li>
            @endforeach
        </ul>
    </section>

    <section class="others-goods">
        <h3 class="headline-others">その他</h3>

        <ul class="goods">
            @foreach ($others as $others)
                <li class="goods-group">
                    @php
                        $othersImg = $others->picture;
                    @endphp
                    <a href="#detail-top" class="btns" id="{{ 'btn-' . $others->id }}">
                        @if ($gourmetImg != '')
                            <img class="goods-photo" src="{{ asset('/storage/images/' . $others->picture) }}"
                                alt="">
                        @else
                            <img class="goods-photo" src="{{ asset('/storage/images/no-image.png') }}" alt="">
                        @endif
                        <h4 class="goods-name">{{ $others->common_name }}</h4>
                    </a>
                </li>
            @endforeach
        </ul>
    </section>
    <div id="detail-top"></div>

    <section>
        @foreach ($goods_type as $type)
            <div class="any detail-group" id="{{ 'type-' . $type->id }}">
                <h3 class="headline-item-name">{{ $type->common_name }}</h3>
                <div class="item-group">
                    @php
                        $picture = $type->picture;
                    @endphp
                    @if ($picture != '')
                        <img class="detail-photo" src="{{ asset('/storage/images/' . $type->picture) }}" alt="">
                    @else
                        <img class="detail-photo" src="{{ asset('/storage/images/no-image.png') }}" alt="no img">
                    @endif

                    <div class="item-text-group">
                        @php
                            //  配列$seasonsの中身を表示用に加工
                            $seasons = $type->season;
                            $month = str_replace('|', '月　', $seasons);
                            $month = str_replace('a', '10', $month);
                            $month = str_replace('b', '11', $month);
                            $month = str_replace('c', '12', $month);
                            
                            $category = $type->goods_category_id;
                        @endphp

                        <h4 class="headline-name-comment">＜概要＞</h4>
                        <div class="comment-text"> {!! $type->discription !!}</div>

                        @if ($category == 1 || $category == 2)
                            <h4 class="headline-name-season">＜旬の時期＞</h4>
                            @if ($month != '')
                                <p class="season-text">{{ $month }}月</p>
                            @else
                                <p class="season-text">年中お楽しみ頂けます</p>
                            @endif
                        @endif

                        <h4 class="headline-name">＜利用方法＞</h4>
                        <div class="conditions-text">{!! $type->usage !!}</div>
                    </div>
                </div>

                <h3 class="headline-buy-place">買える道の駅</h3>

                <ul class="roadstation-frame">

                    @php
                        $station_list = $type->station_list;
                        // 文字列から配列に変換
                        $id_list = explode('|', $station_list);
                        // 配列から三野を削除
                        for ($i = 0; $i < count($id_list); $i++) {
                            if ($id_list[$i] == 'b' or $id_list[$i] == 'delete') {
                                unset($id_list[$i]);
                            }
                        }
                        $id_list = array_values($id_list);
                    @endphp

                    @foreach ($id_list as $id_item)
                        @php
                            $id = $id_item;
                            if ($id_item == 'a') {
                                $id = 10;
                            } elseif ($id_item == 'b') {
                                $id = 11;
                            } elseif ($id_item == 'c') {
                                $id = 12;
                            } elseif ($id_item == 'd') {
                                $id = 13;
                            } elseif ($id_item == 'e') {
                                $id = 14;
                            } elseif ($id_item == 'f') {
                                $id = 15;
                            } elseif ($id_item == 'g') {
                                $id = 16;
                            } elseif ($id_item == 'h') {
                                $id = 17;
                            } elseif ($id_item == 'i') {
                                $id = 18;
                            }
                            $name = $type::getRoadstationName($id);
                        @endphp
                        <li class="">
                            <a class="roadstation-name name" href="{{ route('roadstation') }}?id={{ $id }}">
                                {{ $name }}
                            </a>
                        </li>
                    @endforeach

                </ul>
            </div>
        @endforeach
    </section>

    <div class="blog-btn">
        <a href="{{ route('bloglist') }}"><img src="{{ asset('/assets/images/blog-btn01.png') }}" alt=""></a>
    </div>



@endsection

{{-- 該当ページ専用JS --}}
@section('pageJs2')
    <script src="{{ asset('/assets/js/goods_list.js') }}"></script>
@endsection
