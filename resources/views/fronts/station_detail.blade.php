@extends('layouts.layout_front')

{{-- タイトル --}}
@section('title', 'くるくるなると')

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
                    {{ $station->map_url }}
                    {{ $station->longitude }}
                    {{ $station->latitude }}
                    {{ $station->picture1 }}
                    {{ $station->picture2 }}
                    {{ $station->picture3 }}
                    {{ $station->atm_icon }}
                    {{ $station->bed_icon }}
                    {{ $station->restaurant_icon }}
                    {{ $station->lightmeal_icon }}
                    {{ $station->accommodation_icon }}
                    {{ $station->spa_icon }}
                    {{ $station->park_icon }}
                    {{ $station->ev_icon }}
                    {{ $station->lan_icon }}
                    {{ $station->shower_icon }}
                    {{ $station->guide_icon }}
                    {{ $station->disability_icon }}
                    {{ $station->shop_icon }}
                    {{ $station->others_icon }}
                    {{ $station->memo }}
                    {{ $station->is_show }}
                    {{ $station->created_at }}
                    {{ $station->updated_at }}
                    {{ $station->deleted_at }}


                </tr>
            @endforeach
        </tbody>

    </table>
