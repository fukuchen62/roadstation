@extends('layouts.layout_front')

{{-- タイトル --}}
@section('title', '新着情報詳細ページ')

@section('content')

    <h1>新着情報詳細ページ</h1>

    <table border="1">

        <thead>
            <tr>
                <th>カテゴリー</th>
                <th>タイトル</th>
                <th>道の駅ID</th>
                <th>解説テキスト</th>
                {{-- <th>画像ファイル</th> --}}
            </tr>
        </thead>

        <tbody>
            @foreach ($road_stations as $station)
                <tr>
                    {{ $station->stations_name }}
                    {{ $station->ruby }}
                    {{ $station->area_id }}
                    {{ $station->catchphrase }}
                    {{ $station->review }}
                    {{ $station->discription }}
                    {{ $station->zip_code }}
                    {{ $station->address }}
                    {{ $station->business_hours }}
                    {{ $station->regular_holiday }}
                    {{ $station->parking }}
                    {{ $station->tel }}
                    {{ $station->url }}
                    {{ $station->sns }}
                    {{ $station->stations_name }}
                    {{ $station->stations_name }}
                    {{ $station->stations_name }}
                    {{ $station->stations_name }}
                    {{ $station->stations_name }}
                    {{ $station->stations_name }}
                    {{ $station->stations_name }}
                    {{ $station->stations_name }}
                    {{ $station->picture1 }}
                    {{ $station->stations_name }}
                    {{ $station->stations_name }}
                    {{ $station->stations_name }}
                    {{ $station->stations_name }}
                    {{ $station->stations_name }}
                    {{ $station->stations_name }}
                    {{ $station->stations_name }}
                    {{ $station->stations_name }}
                </tr>
            @endforeach
        </tbody>

    </table>
