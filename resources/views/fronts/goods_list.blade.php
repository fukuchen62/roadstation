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

        <div>
            <h3 style="color: red">コンテンツスペース</h3>
            <div>
                <tbody>
            @foreach ($special_goods as $goods)
                <tr>
                    <td>{{ $goods->category_id }}</td>
                    <td>{{ $goods->title }}</td>
                    <td>{{ $goods->station_list }}</td>
                    <td>{{ $goods->discription }}</td>
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
