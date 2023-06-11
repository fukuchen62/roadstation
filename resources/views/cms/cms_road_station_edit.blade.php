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
                    <textarea name="zip_code" id="content" cols="50" rows="5" required>{{ $road_stations->zip_code }}</textarea>
                </td>
            </tr>
            <tr>
                <th>アイキャッチ画像: </th>
                <td><input type="text" name="picture" value="{{ $road_stations->picture }}"></td>
            </tr>
            <tr>
                <th>関連道の駅: </th>
                <td><input type="text" name="station_list" placeholder="1|2|a"
                        value="{{ $road_stations->station_list }}"></td>
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
