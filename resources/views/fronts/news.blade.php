@extends('layouts.layout_front')

{{-- タイトル --}}
@section('title', '新着情報詳細ページ')

@section('content')

    <h1>新着情報詳細ページ</h1>

    <table border="1">

        <thead>
            <tr>
                <th>カテゴリー</th>
                <th>タイトル</th>
                <th>道の駅ID</th>
                <th>解説テキスト</th>
                {{-- <th>画像ファイル</th> --}}
            </tr>
        </thead>

        <tbody>
            @foreach ($news as $new)
                <tr>
                    <td>{{ $new->category_id }}</td>
                    <td>{{ $new->title }}</td>
                    <td>{{ $new->station_list }}</td>
                    <td>{{ $new->discription }}</td>
                    {{-- <td>{{ $new->title }}</td> --}}
                </tr>
            @endforeach
        </tbody>

    </table>
