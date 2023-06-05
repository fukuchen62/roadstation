@extends('layouts.layout_front')

@section('description', 'area検索')

@section('keywords', 'キーワード1,キーワード2・・・')

@section('title', 'エリア検索')

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
            <h1 class="pagetitle">エリア検索</h1>
        </div>
    </section>
    <div class="area_only">
        <div class="flex area_in">
            <form action="#" method="GET">
                <div class="search_area">
                    <button type="submit" name="area[]" id="east" value="1">県東部</button>
                    <button type="submit" name="area[]" id="west" value="2">県西部</button>
                    <button type="submit" name="area[]" id="south" value="3">県南部</button>

                </div>
            </form>
            <button onclick="location.href='{{ url('detail-search') }}'">詳細検索</button>
        </div>
    </div>
    <?php
    if (isset($_GET['area'])) {
        $area = $_GET['area'];
        var_dump($area);
    }
    
    ?>
@endsection

{{-- 該当ページ専用JS --}}
@section('pageJs')

@endsection
