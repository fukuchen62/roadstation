@extends('layouts.layout_front')

@section('description', 'プライバシーポリシーページ表示')

@section('keywords', 'キーワード1,キーワード2・・・')

@section('title', 'ページタイトル')

{{-- 該当ページのCSS --}}
@section('pageCss')

@endsection

@section('key_visual')
    <img class="sub-keyvisual" src="{{ asset('assets/images/sub-keyvisual.jpg') }}" alt="サブキービジュアル">
@endsection

{{-- メイン --}}
@section('content')

    <section class="titlesection">
        <div class="titlesection__box">
            <h1 class="pagetitle">ページタイトル</h1>
        </div>
    </section>

    <section class="section">

        <h2 class="section__box--title ">第一セクション</h2>

        <div>
            <h3>サブタイトル</h3>
            <div>
                <tbody>
            @foreach ($special_goods as $goods)
                <tr>
                    <td>{{ $special_goods->category_id }}</td>
                    <td>{{ $special_goods->title }}</td>
                    <td>{{ $special_goods->station_list }}</td>
                    <td>{{ $special_goods->discription }}</td>
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
