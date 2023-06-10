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

    {{-- spotが選択された場合・デフォルト --}}

    @if ($stations != null)
        <ul class="card__area flex">
            @foreach ($stations as $key => $station)
                <a href="{{ route('roadstation') }}?id={{ $station->id }}">
                    <li>{{ $station->station_name }}</li>
                    <li>{{ $station->review }}</li>
                </a>
            @endforeach
        </ul>
    @else
        <!-- 以下表示する物がない状態 -->
        <p>まだお気に入りがありません</p>
        <p>お気に入りを探しに行きましょう！</p>
        <a class="btn" href="{{ route('stationlist') }}">道の駅一覧</a>
    @endif

@endsection
