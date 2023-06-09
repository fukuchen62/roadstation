@extends('layouts.layout_back')

@section('title', '阿波道の駅管理システム')

@section('subtitle', 'ニュース編集')

@section('login_name', 'QLIP')

{{-- 該当ページのCSS --}}
@section('pageCss')

@endsection


@section('content')
    <h3>ニュースの編集画面</h3>

    {{-- 以下はshowのところにはめ込む --}}
    <ul class="menubar">
        <li><a href="{{ route('cms-newslist') }}">一覧画面へ</a></li>
        <li><a href="{{ route('cms-newsinput') }}">新規登録</a></li>
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

    <form method="post" action="{{ route('cms-newsupdate') }}">
        @csrf
        {{-- ニュースのidを隠しinputに保持する --}}
        <input type="hidden" name="id" value="{{ $news->id }}">

        <table class="info new_info">
            <tr>
                <th width="15%"> <span>*</span> カテゴリー: </th>
                <td>
                    <select name="news_category_id">
                        @foreach ($category_items as $item)
                            {{-- 選んでいる選択肢にselectedをつける --}}
                            @if ($item->id == $news->news_category_id)
                                <option value="{{ $item->id }}" selected>{{ $item->category_name }}</option>
                            @else
                                <option value="{{ $item->id }}">{{ $item->category_name }}</option>
                            @endif
                        @endforeach
                    </select>
                </td>
            </tr>
            <tr>
                <th> <span>*</span> タイトル: </th>
                <td><input type="text" name="title" value="{{ $news->title }}" required></td>
            </tr>
            <tr>
                <th> <span>*</span> 概要: </th>
                <td>
                    <textarea name="overview" cols="50" rows="5">{{ $news->overview }}</textarea>
                </td>
            </tr>
            <tr>
                <th> <span>*</span> 詳細内容：</th>
                <td>
                    <textarea name="discription" id="content" cols="50" rows="5" required>{{ $news->discription }}</textarea>
                </td>
            </tr>
            <tr>
                <th>アイキャッチ画像: </th>
                <td><input type="text" name="picture" value="{{ $news->picture }}"></td>
            </tr>
            <tr>
                <th>関連道の駅: </th>
                <td><input type="text" name="station_list" placeholder="1|2|a" value="{{ $news->station_list }}"></td>
            </tr>
            <tr>
                <th> <span>*</span> 表示フラグ: </th>
                <td><input type="boolean" name="is_show" value="1" value="{{ $news->is_show }}" required></td>
            </tr>
        </table>

        <div class="change_btn">
            {{-- url作成 --}}
            @php
                $title = $news->title;
                $url = route('cms-newsremove', ['id' => $news->id]);
            @endphp

            <input type="submit"value="修正" class="submit_btn" onclick="return saveComfirm('{{ $title }}')">

            <input type="button"value="削除" class="delete_btn"
                onclick="return deleteComfirm('{{ $title }}','{{ $url }}')">
        </div>

    </form>
@endsection


@section('footer')
    copyright 2020 tuyano.
@endsection
