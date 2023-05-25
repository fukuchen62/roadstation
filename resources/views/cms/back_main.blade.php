@extends('layouts.layout_back')

@section('title', '釣徳コンテンツ管理システム')

@section('subtitle', 'ダッシュボード')

@section('login_name', 'QLIP')

{{-- 該当ページのCSS --}}
@section('pageCss')

@endsection

{{-- ワークスペース
    一覧画面、新規入力・編集画面など --}}
@section('content')

    <section>
        <h3>直近投稿</h3>
        <table class="info">
            <tr>
                <th>ID</th>
                <th>カテゴリ</th>
                <th>タイトル</th>
                <th>概要</th>
                <th>投稿日時</th>
                <th>編集</th>
            </tr>

            @foreach ($news_list as $key => $news)
                <tr>
                    <td>{{ $news->id }}</td>
                    <td>{{ $news->name }}</td>
                    <td>{{ $news->title }}</td>
                    <td>{{ $news->overview }}</td>
                    <td class="dt">{{ $news->created_at }}</td>
                    <td class="edit"><a href="{{ route('newsupdate') }}?id={{ $news->id }}">編集</a></td>
                </tr>
            @endforeach
        </table>
    </section>

    <section class="mt40">
        <h3>データの件数</h3>
        <table class="info tbl-count">
            <tr>
                <th>ニュース</th>
                <th>魚</th>
                <th>スポット</th>
                <th>釣具屋</th>
                <th>体験プラン</th>
                <th>避難場所</th>
                <th>入門知識</th>
                <th>周辺施設</th>
            </tr>
            <tr>
                <td>{{ $counts['news_count'] }}</td>
                <td>{{ $counts['fish_count'] }}</td>
                <td>{{ $counts['spot_count'] }}</td>
                <td>{{ $counts['shop_count'] }}</td>
                <td>{{ $counts['plan_count'] }}</td>
                <td>{{ $counts['excape_count'] }}</td>
                <td>{{ $counts['knowledge_count'] }}</td>
                <td>{{ $counts['facility_count'] }}</td>
            </tr>
        </table>
    </section>
@endsection

{{-- 該当ページ専用JS --}}
@section('pageJs')

@endsection
