@extends('layouts.layout_back')

@section('title', '阿波道の駅管理システム')

@section('subtitle', 'アクティビティ')

@section('login_name', 'QLIP')

{{-- 該当ページのCSS --}}
@section('pageCss')

@endsection


@section('content')

    <h3>アクティビティ一覧 ({{ $count }})</h3>
    {{-- 以下はshowのところにはめ込む --}}

    <ul class="menubar">
        <li>
            <a href="{{ route('cms-activitylist') }}">一覧画面へ</a>
        </li>
        <li>
            <a href="{{ route('cms-activityinput') }}">新規登録</a>
        </li>
    </ul>

    {{-- 検索条件入力フォーム --}}
    <form action="{{ route('cms-activitylist') }}" method="get" class="search">

        <div>
            検索条件&nbsp;<input type="text" name="s" id="s">
            <input type="submit" value="検索" class="search_btn">
        </div>

    </form>

    <table class="info">

        <tr>
            <th width="5%">ID</th>
            <th>アクティビティ名</th>
            <th class="clum-text">解説文</th>
            <th>投稿日時</th>
            <th>表示</th>
            <th width="100px">編集</th>
        </tr>

        @foreach ($activity_list as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->activity_name }}</td>
                <td>{{ $item->discription }}</td>
                <td>{{ $item->created_at }}</td>
                <td>{{ $item->is_show }}</td>
                <td class="edit">
                    <a href="{{ route('cms-activityedit', ['id' => $item->id]) }}">編集</a>
                </td>
            </tr>
        @endforeach

    </table>
@endsection

@section('footer')
    copyright 2020 tuyano.
@endsection
