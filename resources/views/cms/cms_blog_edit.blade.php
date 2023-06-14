@extends('layouts.layout_back')

@section('title', '阿波道の駅管理システム')

@section('subtitle', 'ブログ編集')

@section('login_name', 'QLIP')

{{-- 該当ページのCSS --}}
@section('pageCss')

@endsection


@section('content')
    <h3>ブログの編集画面</h3>

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

    <form method="post" action="{{ route('cms-blogupdate') }}">
        @csrf
        {{-- ニュースのidを隠しinputに保持する --}}
        <input type="hidden" name="id" value="{{ $blog->id }}">

        <table class="info new_info">
            <tr>
                <th width="15%"> <span>*</span> カテゴリー名: </th>
                <td>
                    <select name="blog_category_id">
                        @foreach ($category_items as $item)
                            {{-- 選んでいる選択肢にselectedをつける --}}
                            @if ($item->id == $blog->blog_category_id)
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
                <td><input type="text" name="title" value="{{ $blog->title }}" required></td>
            </tr>

            <tr>
                <th> <span>*</span> ニックネーム: </th>
                {{-- <td><input type="text" name="user_name" required></td> --}}
                <td>
                    {{-- <select name="user_id">
                        @foreach ($users as $user)
                            <option value="{{ $user->id }}" selected>{{ $user->name }}</option>
                        @endforeach
                    </select> --}}
                    <input type="text" name="user_name" value="{{ $blog->user_name }}" required>
                </td>
            </tr>

            <tr>
                <th> <span>*</span> 概要: </th>
                <td>
                    <textarea name="overview" cols="50" rows="5" required>{{ $blog->overview }}</textarea>
                </td>
            </tr>
            <tr>
                <th> <span>*</span> 内容：</th>
                <td>
                    <textarea name="content" id="content" cols="50" rows="5" required>{{ $blog->content }}</textarea>
                </td>
            </tr>
            <th> 道の駅ID: </th>
            <td><input type="number" name="road_station_id" value="{{ $blog->road_station_id }}"></td>
            </tr>
            <tr>
                <th> 特産品ID: </th>
                <td><input type="text" name="special_goods_id" value="{{ $blog->special_goods_id }}"></td>
            </tr>
            <tr>
                <th> 体験ID: </th>
                <td><input type="text" name="activity_id" value="{{ $blog->activity_id }}"></td>
            </tr>
            <tr>
                <th>アイキャッチ画像: </th>
                <td><input type="text" name="picture" value="{{ $blog->picture }}"></td>
            </tr>
            <tr>
                <th> <span>*</span> 表示フラグ: </th>
                <td><input type="boolean" name="is_show" value="{{ $blog->is_show }}" required></td>
            </tr>
            <tr>
                <th> <span>*</span> 特集記事フラグ: </th>
                <td><input type="boolean" name="is_highlight" value="{{ $blog->is_highlight }}" required></td>
            </tr>
        </table>

        <div class="change_btn">
            {{-- url作成 --}}
            @php
                $title = $blog->title;
                $url = route('cms-blogremove', ['id' => $blog->id]);
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
