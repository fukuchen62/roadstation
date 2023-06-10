@extends('layouts.layout_back')

@section('title', '阿波道の駅管理システム')

@section('subtitle', '特産品の種別投稿')

@section('login_name', 'QLIP')

{{-- 該当ページのCSS --}}
@section('pageCss')

@endsection


@section('content')
    <h3>種別特産品の投稿画面</h3>

    {{-- 以下はshowのところにはめ込む --}}
    <ul class="menubar">
        <li><a href="{{ route('cms-typeslist') }}">一覧画面へ</a></li>
        <li><a href="{{ route('cms-typesinput') }}">新規登録</a></li>
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

    <form method="post" action="{{ route('cms-newscreate') }}">

        @csrf

        <table class="info new_info">
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
                <th> <span>*</span> 種別特産品名: </th>
                <td><input type="text" name="common_name" required></td>
            </tr>
            <tr>
                <th> <span>*</span> 旬の月 数字を|で区切って</th>
                <td>
                    <input type="text" name="season" placeholder="1|2|a" cols="50" rows="5"></input>
                </td>
            </tr>

            <tr>
                <th> <span>*</span> 利用方法：</th>
                <td>
                    <textarea name="usage" id="usage" cols="50" rows="5" required></textarea>
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
                <td><input type="text" name="station_list" placeholder="1|2|a"></td>
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
            <input type="submit" value="登録" class="submit_btn" onclick="return saveComfirm('種別特産品')">
        </div>

    </form>
@endsection


@section('footer')
    copyright 2020 tuyano.
@endsection
