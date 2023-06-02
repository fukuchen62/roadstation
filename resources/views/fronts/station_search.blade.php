@extends('layouts.layout_front')

@section('description', '詳細検索')

@section('keywords', 'キーワード1,キーワード2・・・')

@section('title', '詳細検索')

{{-- 該当ページのCSS --}}
@section('pageCss')
    <link rel="stylesheet" href="{{ asset('assets/css/fstyle_station_detail.css') }}">
@endsection

@section('key_visual')
    <img class="sub-keyvisual" src="{{ asset('assets/images/sub-keyvisual.jpg') }}" alt="サブキービジュアル">
@endsection

{{-- メイン --}}
@section('content')

    <section class="titlesection">
        <div class="titlesection__box">
            <h1 class="pagetitle">詳細検索</h1>
        </div>
    </section>
    <form action="" method="get">
        <p>地域</p>
        <input type="checkbox" name="area[]" id="east" value="1">
        <label for="east">東部</label>
        <input type="checkbox" name="area[]" id="west" value="2">
        <label for="west">西部</label>
        <input type="checkbox" name="area[]" id="south" value="3">
        <label for="south">南部</label>
        <input type="checkbox" name="area[]" id="all" value="">
        <label for="all">全域</label>
        <p>設備</p>
        <input type="checkbox" name="" id="">
        <label for="">観光案内</label>
        <input type="checkbox" name="" id="">
        <label for="">ショップ</label>
        <input type="checkbox" name="" id="">
        <label for="">軽食・喫茶</label>
        <input type="checkbox" name="" id="">
        <label for="">レストラン</label>
        <input type="checkbox" name="" id="">
        <label for="">体験施設</label>
        <input type="checkbox" name="" id="">
        <label for="">身障者トイレ</label>
        <input type="checkbox" name="" id="">
        <label for=""></label>
        <input type="checkbox" name="" id="">
        <label for=""></label>
        <input type="checkbox" name="" id="">
        <label for=""></label>
        <input type="checkbox" name="" id="">
        <label for=""></label>
        <input type="checkbox" name="" id="">
        <label for=""></label>
        <input type="checkbox" name="" id="">
        <label for=""></label>
    </form>

@endsection

{{-- 該当ページ専用JS --}}
@section('pageJs')

@endsection
