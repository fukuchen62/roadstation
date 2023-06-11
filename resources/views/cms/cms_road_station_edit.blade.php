@extends('layouts.layout_back')

@section('title', '阿波道の駅管理システム')

@section('subtitle', '道の駅編集')

@section('login_name', 'QLIP')

{{-- 該当ページのCSS --}}
@section('pageCss')

@endsection


@section('content')
    <h3>道の駅の編集画面</h3>

    {{-- 以下はshowのところにはめ込む --}}
    <ul class="menubar">
        <li><a href="{{ route('cms-stationlist') }}">HOME</a></li>
        <li><a href="{{ route('cms-stationinput') }}">新規登録</a></li>
    </ul>

    {{-- バリデーションのエラーを表示する --}}
    @if (count($errors) > 0)
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li class="error">{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="post" action="{{ route('cms-stationedit') }}">
        @csrf
        {{-- ニュースのidを隠しinputに保持する --}}
        <input type="hidden" name="id" value="{{ $road_stations->id }}">

        <table class="info new_info">
            <tr>
                <th width="15%"> <span>*</span> エリア: </th>
                <td>
                    <select name="news_category_id">
                        @foreach ($area as $item)
                            {{-- 選んでいる選択肢にselectedをつける --}}
                            @if ($item->id == $road_stations->area_id)
                                <option value="{{ $item->id }}" selected>{{ $item->area_name }}</option>
                            @else
                                <option value="{{ $item->id }}">{{ $item->area_name }}</option>
                            @endif
                        @endforeach
                    </select>
                </td>
            </tr>
            <tr>
                <th> <span>*</span> 道の駅名: </th>
                <td><input type="text" name="station_name" value="{{ $road_stations->station_name }}" required></td>
            </tr>
            <tr>
                <th> <span>*</span> 道の駅名ふりがな: </th>
                <td>
                    <textarea name="ruby" cols="50" rows="5">{{ $road_stations->ruby }}</textarea>
                </td>
            </tr>
            <tr>
                <th> <span>*</span> キャッチフレーズ：</th>
                <td>
                    <textarea name="catchphrase" id="content" cols="50" rows="5" required>{{ $road_stations->catchphrase }}</textarea>
                </td>
            </tr>
            <tr>
                <th> <span>*</span> 道の駅レビュー：</th>
                <td>
                    <textarea name="review" id="content" cols="50" rows="5" required>{{ $road_stations->review }}</textarea>
                </td>
            </tr>
            <tr>
                <th> <span>*</span> 概要：</th>
                <td>
                    <textarea name="overview" id="content" cols="50" rows="5" required>{{ $road_stations->overview }}</textarea>
                </td>
            </tr>
            <tr>
                <th> <span>*</span> 紹介文：</th>
                <td>
                    <textarea name="discription" id="content" cols="50" rows="5" required>{{ $road_stations->discription }}</textarea>
                </td>
            </tr>
            <tr>
                <th> <span>*</span> 郵便番号：</th>
                <td>
                    <input type="text" name="zip_code" id="content" required value="{{ $road_stations->zip_code }}">
                </td>
            </tr>
            <tr>
                <th>住所: </th>
                <td><input type="text" name="address" required value="{{ $road_stations->address }}"></td>
            </tr>
            <tr>
                <th> <span>*</span> 営業時間：</th>
                <td>
                    <input type="text" name="business_hours" id="content" required
                        value="{{ $road_stations->business_hours }}">
                </td>
            </tr>
            <tr>
                <th> <span>*</span> 定休日：</th>
                <td>
                    <input type="text" name="regular_holiday" id="content" required
                        value="{{ $road_stations->regular_holiday }}">
                </td>
            </tr>
            <tr>
                <th> <span>*</span> 駐車場：</th>
                <td>
                    <input type="text" name="parking" id="content" required value="{{ $road_stations->parking }}">
                </td>
            </tr>
            <tr>
                <th> <span>*</span> 電話番号：</th>
                <td>
                    <input type="text" name="tel" id="content" required value="{{ $road_stations->tel }}">
                </td>
            </tr>
            <tr>
                <th> <span>*</span> 道の駅公式ＵＲＬ：</th>
                <td>
                    <input type="text" name="url" id="content" required value="{{ $road_stations->url }}">
                </td>
            </tr>
            <tr>
                <th> <span>*</span> SNS：</th>
                <td>
                    <input type="text" name="sns" id="content" required value="{{ $road_stations->sns }}">
                </td>
            </tr>
            <tr>
                <th> <span>*</span> マップURL：</th>
                <td>
                    <textarea name="map_url" id="" cols="30" rows="10" required>{{ $road_stations->map_url }}</textarea>
                    {{-- <input type="text" name="zip_code" id="content" required value="{{ $road_stations->zip_code }}"> --}}
                </td>
            </tr>
            <tr>
                <th> <span>*</span> 経度：</th>
                <td>
                    <input type="text" name="longitude" id="content" required value="{{ $road_stations->longitude }}">
                </td>
            </tr>
            <tr>
                <th> <span>*</span> 緯度：</th>
                <td>
                    <input type="text" name="latitude" id="content" required value="{{ $road_stations->latitude }}">
                </td>
            </tr>
            <tr>
                <th> <span>*</span> KV画像1：</th>
                <td>
                    <input type="text" name="picture1" id="content" required value="{{ $road_stations->picture1 }}">
                </td>
            </tr>
            <tr>
                <th> <span>*</span> KV画像2：</th>
                <td>
                    <input type="text" name="picture2" id="content" required value="{{ $road_stations->picture2 }}">
                </td>
            </tr>
            <tr>
                <th> <span>*</span> KV画像2：</th>
                <td>
                    <input type="text" name="picture2" id="content" required value="{{ $road_stations->picture2 }}">
                </td>
            </tr>
            <tr>
                <th> <span>*</span> ATM: </th>
                <td>
                    <input type="boolean" name="atm_icon" value="1" value="{{ $road_stations->atm_icon }}" required>
                </td>
            </tr>
            <tr>
                <th> <span>*</span> ベビーベッド: </th>
                <td>
                    <input type="boolean" name="bed_icon" value="1" value="{{ $road_stations->bed_icon }}" required>
                </td>
            </tr>
            <tr>
                <th> <span>*</span> レストラン: </th>
                <td>
                    <input type="boolean" name="restaurant_icon" value="1"
                        value="{{ $road_stations->restaurant_icon }}" required>
                </td>
            </tr>
            <tr>
                <th> <span>*</span> 軽食・喫茶: </th>
                <td>
                    <input type="boolean" name="lightmeal_icon" value="1"
                        value="{{ $road_stations->lightmeal_icon }}" required>
                </td>
            </tr>
            <tr>
                <th> <span>*</span> 宿泊施設: </th>
                <td>
                    <input type="boolean" name="accommodation_icon" value="1"
                        value="{{ $road_stations->accommodation_icon }}" required>
                </td>
            </tr>
            <tr>
                <th> <span>*</span> 温泉施設: </th>
                <td>
                    <input type="boolean" name="spa_icon" value="1" value="{{ $road_stations->spa_icon }}"
                        required>
                </td>
            </tr>
            <tr>
                <th> <span>*</span> 公園: </th>
                <td>
                    <input type="boolean" name="park_icon" value="1" value="{{ $road_stations->park_icon }}"
                        required>
                </td>
            </tr>
            <tr>
                <th> <span>*</span> EV充電施設: </th>
                <td>
                    <input type="boolean" name="ev_icon" value="1" value="{{ $road_stations->ev_icon }}" required>
                </td>
            </tr>
            <tr>
                <th> <span>*</span> 無線LAN: </th>
                <td>
                    <input type="boolean" name="lan_icon" value="1" value="{{ $road_stations->lan_icon }}"
                        required>
                </td>
            </tr>
            <tr>
                <th> <span>*</span> シャワー: </th>
                <td>
                    <input type="boolean" name="shower_icon" value="1" value="{{ $road_stations->shower_icon }}"
                        required>
                </td>
            </tr>
            <tr>
                <th> <span>*</span> 体験施設: </th>
                <td>
                    <input type="boolean" name="experience_icon" value="1"
                        value="{{ $road_stations->experience_icon }}" required>
                </td>
            </tr>
            <tr>
                <th> <span>*</span> 観光案内: </th>
                <td>
                    <input type="boolean" name="guide_icon" value="1" value="{{ $road_stations->guide_icon }}"
                        required>
                </td>
            </tr>
            <tr>
                <th> <span>*</span> 身障者トイレ: </th>
                <td>
                    <input type="boolean" name="disability_icon" value="1"
                        value="{{ $road_stations->disability_icon }}" required>
                </td>
            </tr>
            <tr>
                <th> <span>*</span> ショップ: </th>
                <td>
                    <input type="boolean" name="shop_icon" value="1" value="{{ $road_stations->shop_icon }}"
                        required>
                </td>
            </tr>
            <tr>
                <th> <span>*</span> 展望台: </th>
                <td>
                    <input type="boolean" name="observatory_icon" value="1"
                        value="{{ $road_stations->observatory_icon }}" required>
                </td>
            </tr>
            <tr>
                <th> <span>*</span> 美術館・博物館: </th>
                <td>
                    <input type="boolean" name="museum_icon" value="1" value="{{ $road_stations->museum_icon }}"
                        required>
                </td>
            </tr>
            <tr>
                <th> 備考欄：</th>
                <td>
                    <textarea name="memo" id="content" cols="50" rows="5">{{ $road_stations->memo }}</textarea>
                </td>
            </tr>
            <tr>
                <th> <span>*</span> 表示フラグ: </th>
                <td><input type="boolean" name="is_show" value="1" value="{{ $road_stations->is_show }}" required>
                </td>
            </tr>
        </table>

        <div class="change_btn">
            {{-- url作成 --}}
            @php
                $name = $road_stations->station_name;
                $url = route('cms-newsremove', ['id' => $road_stations->id]);
            @endphp

            <input type="submit"value="修正" class="submit_btn"
                onclick="return saveComfirm('{{ $road_stations->station_name }}')">

            <input type="button"value="削除" class="delete_btn"
                onclick="return deleteComfirm('{{ $name }}','{{ $url }}')">
        </div>

    </form>
@endsection


@section('footer')
    copyright 2020 tuyano.
@endsection
