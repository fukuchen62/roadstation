@extends('layouts.layout_back')

@section('title', '阿波道の駅管理システム')

@section('subtitle', '道の駅')

@section('login_name', 'QLIP')

{{-- 該当ページのCSS --}}
@section('pageCss')

@endsection


@section('content')
    <h3>道の駅一覧</h3>
    {{-- 以下はshowのところにはめ込む --}}
    <ul class="menubar">
        <li><a href="{{ route('cms-stationlist') }}">HOME</a></li>
        <li><a href="{{ route('cms-stationinput') }}">新規登録</a></li>
    </ul>

    {{-- 検索条件入力フォーム --}}
    <form action="{{ route('cms-stationlist') }}" method="get" class="search">
        検索条件 :&nbsp;<input type="text" name="s" id="s"><br>
        <input type="submit" value="検索" class="search_btn">
    </form>
    <table class="info">
        <tr>
            <th width="5%">ID</th>
            <th>道の駅名</th>
            <th>エリアID</th>
            <th>読み方</th>
            <th>キャッチフレーズ</th>
            <th>レビュー</th>
            <th>概要</th>
            <th>紹介文</th>
            <th>投稿日時</th>
            <th width="100px">修正</th>
        </tr>
        @foreach ($road_stations as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->station_name }}</td>
                <td>{{ $item->area_id }}</td>
                <td>{{ $item->ruby }}</td>
                <td>{{ $item->catchphrase }}</td>
                <td>{{ $item->review }}</td>
                <td>{{ $item->overview }}</td>
                <td>{{ $item->discription }}</td>
                <td>{{ $item->created_at }}</td>
                <td class="edit"><a href="{{ route('cms-stationedit', ['id' => $item->id]) }}">編集</a></td>
            </tr>
        @endforeach
    </table>
@endsection


@section('footer')
    copyright 2020 tuyano.
@endsection
