@extends('layouts.layout_back')

@section('title', '阿波道の駅管理システム')

@section('subtitle', '道の駅特産品リスト')

@section('login_name', 'QLIP')

{{-- 該当ページのCSS --}}
@section('pageCss')

@endsection


@section('content')
    <h3>道の駅特産品一覧</h3>
    {{-- 以下はshowのところにはめ込む --}}
    <ul class="menubar">
        <li><a href="{{ route('cms-goodslist') }}">一覧画面へ</a></li>
        <li><a href="{{ route('cms-goodsinput') }}">新規登録</a></li>
    </ul>

    {{-- 検索条件入力フォーム --}}
    <form action=" {{ route('cms-goodslist') }}" method="get" class="search">
        検索条件 :&nbsp;<input type="text" name="s" id="s"><br>
        <input type="submit" value="検索" class="search_btn">

    </form>
    <table class="info">
        <tr>
            <th width="5%">ID</th>
            <th>カテゴリー</th>
            <th>特産品名</th>
            <th>説明文</th>
            <th>投稿日時</th>
            <th width="100px">修正</th>
        </tr>
        @foreach ($goods as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->goodsCategory->category_name }}</td>
                <td>{{ $item->goods_name }}</td>
                <td>{!! $item->discription !!}</td>
                <td>{{ $item->created_at }}</td>
                <td class="edit"><a href="{{ route('cms-goodsedit', ['id' => $item->id]) }}">編集</a></td>
            </tr>
        @endforeach
    </table>
@endsection


@section('footer')
    copyright 2020 tuyano.
@endsection
