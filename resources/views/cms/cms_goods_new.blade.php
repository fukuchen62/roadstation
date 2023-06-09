@extends('layouts.layout_back')

@section('title', '釣徳コンテンツ管理システム')

@section('subtitle', 'ニュース')

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
                <td><input type="text" name="month" required></td>
            </tr>




            <tr>
                <th> <span>*</span> タイトル: </th>
                <td><input type="text" name="title" required></td>
            </tr>
            <tr>
                <th> <span>*</span> 概要: </th>
                <td>
                    <textarea name="overview" cols="50" rows="5" required></textarea>
                </td>
            </tr>
            <tr>
                <th> <span>*</span> 詳細内容：</th>
                <td>
                    <textarea name="content" id="content" cols="50" rows="5" required></textarea>
                </td>
            </tr>
            <tr>
                <th>アイキャッチ画像: </th>
                <td><input type="text" name="eyecatch"></td>
            </tr>
            <tr>
                <th> <span>*</span> 表示フラグ: </th>
                <td><input type="boolean" name="is_show" value="1" required></td>
            </tr>
        </table>

        <div class="submit">
            <input type="submit" value="登録" class="submit_btn" onclick="return saveComfirm('ニュース')">
        </div>

    </form>
@endsection


@section('footer')
    copyright 2020 tuyano.
@endsection