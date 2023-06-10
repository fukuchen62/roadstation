@extends('layouts.layout_back')

@section('title', '阿波道の駅管理システム')

@section('subtitle', '道の駅特産品投稿')

@section('login_name', 'QLIP')

{{-- 該当ページのCSS --}}
@section('pageCss')

@endsection


@section('content')
    <h3>道の駅特産品の新規登録画面</h3>

    {{-- 以下はshowのところにはめ込む --}}
    <ul class="menubar">
        <li><a href="{{ route('cms-goodslist') }}">HOME</a></li>
        <li><a href="{{ route('cms-goodsinput') }}">新規登録</a></li>
    </ul>

    <form method="post" action="{{ route('cms-goodscreate') }}">
        <table class="info new_info">
            @csrf
            <tr>
                <th width="15%"> <span>*</span> カテゴリー: </th>
                <td>
                    <select name="goods_category_id">
                        @foreach ($category_items as $item)
                            <option value="{{ $item->id }}">{{ $item->category_name }}</option>
                        @endforeach
                    </select>
                </td>
            </tr>
            <tr>
                <th> <span>*</span> 道の駅特産品名: </th>
                <td><input type="text" name="goods_name" required></td>
            </tr>
            <tr>
                <th> <span>*</span> 旬の月: 数字を|で区切って</th>
                <td><input type="text" name="month" placeholder="1|2|a" required></td>
            </tr>

            <tr>
                <th> <span>*</span> 利用方法: </th>
                <td>
                    <textarea name="usage" cols="50" rows="5" required></textarea>
                </td>
            </tr>

            <tr>
                <th> <span>*</span> 解説文：</th>
                <td>
                    <textarea name="discription" id="discription" cols="50" rows="5" required></textarea>
                </td>
            </tr>
            <tr>
                <th>画像: </th>
                <td><input type="text" name="picture"></td>
            </tr>
            <tr>
                <th>関連道の駅: </th>
                <td><input type="text" name="road_station_id"></td>
            </tr>
            <tr>
                <th>価格: </th>
                <td><input type="number" name="price"></td>
            </tr>
            <tr>
                <th> <span>*</span> 表示フラグ: </th>
                <td><input type="boolean" name="is_show" value="1" required></td>
            </tr>
        </table>

        <div class="submit">
            <input type="submit" value="登録" class="submit_btn" onclick="return saveComfirm('道の駅特産品')">
        </div>

    </form>
@endsection


@section('footer')
    copyright 2020 tuyano.
@endsection
