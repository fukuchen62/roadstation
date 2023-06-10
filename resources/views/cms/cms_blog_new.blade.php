@extends('layouts.layout_back')

@section('title', '阿波道の駅管理システム')

@section('subtitle', 'ブログ投稿')

@section('login_name', 'QLIP')

{{-- 該当ページのCSS --}}
@section('pageCss')

@endsection


@section('content')
    <h3>ニュースの投稿画面</h3>

    {{-- 以下はshowのところにはめ込む --}}
    <ul class="menubar">
        <li><a href="{{ route('cms-bloglist') }}">一覧画面へ</a></li>
        <li><a href="{{ route('cms-bloginput') }}">新規登録</a></li>
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

    <form method="post" action="{{ route('cms-blogcreate') }}">

        @csrf

        <table class="info new_info">
            <tr>
                <th width="15%"> <span>*</span> カテゴリー: </th>
                <td>
                    <select name="blog_category_id">
                        @foreach ($category_items as $item)
                            <option value="{{ $item->id }}">{{ $item->category_name }}</option>
                        @endforeach
                    </select>
                </td>
            </tr>
            <tr>
                <th> <span>*</span> タイトル: </th>
                <td><input type="text" name="title" required></td>
            </tr>
            <tr>
                <th> <span>*</span> 概要: </th>
                <td>
                    <textarea name="overview" cols="50" rows="5"></textarea>
                </td>
            </tr>
            <tr>
                <th> <span>*</span> 詳細内容：</th>
                <td>
                    <textarea name="discription" id="content" cols="50" rows="5" required></textarea>
                </td>
            </tr>
            <tr>
                <th>アイキャッチ画像: </th>
                <td><input type="text" name="picture"></td>
            </tr>
            <tr>
                <th>関連道の駅: </th>
                <td><input type="text" name="station_list" placeholder="1|2|a"></td>
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
