@extends('layouts.layout_front')

@section('description', 'プライバシーポリシーページ表示')

@section('keywords', 'キーワード1,キーワード2・・・')

@section('title', 'ページタイトル')

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
            <h1 class="pagetitle">特産品のページ</h1>
        </div>
    </section>

    <section class="section">

        <h2 class="section__box--title ">第一セクション</h2>

        <div class="testspace">
            <h3>テストスペース</h3>
            <div class="container">
            <tbody>
            @foreach ($special_goods as $goods)
                <tr>
                    <div class="card">
                    <div class="cardContainer">
                    <img src="{{ asset('assets/images/news_1_1_300×300.png')}}" alt="ダミー" class="dummyimg">


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
        </div>
    </section>

@endsection

{{-- 該当ページ専用JS --}}
@section('pageJs')

@endsection
