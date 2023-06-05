@extends('layouts.layout_back')

@section('title', '道の駅管理システム')

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
                <th class="clum-text">概要</th>
                <th>投稿日時</th>
                <th>編集</th>
            </tr>

            @foreach ($news_list as $key => $news)
                <tr>
                    <td>{{ $news->id }}</td>
                    <td>{{ $news->newsCategory->category_name }}</td>
                    <td>{{ $news->title }}</td>
                    <td>{{ $news->overview }}</td>
                    <td class="dt">{{ $news->created_at }}</td>
                    <td class="edit"><a href="{{ route('cms-newsedit') }}?id={{ $news->id }}">編集</a></td>
                </tr>
            @endforeach
        </table>
    </section>

    <section class="mt40">
        <h3>データの件数</h3>
        <table class="info tbl-count">
            <tr>
                <th>ニュース</th>
                <th>ブログ</th>
                <th>道の駅</th>
                <th>特産品の種別</th>
                <th>道駅の特産品</th>
                <th>道駅のアクティビティ</th>
                <th>ユーザー</th>
            </tr>
            <tr>
                <td>{{ $counts['news_count'] }}</td>
                <td>{{ $counts['blog_count'] }}</td>
                <td>{{ $counts['roadStation_count'] }}</td>
                <td>{{ $counts['productType_count'] }}</td>
                <td>{{ $counts['specialGoods_count'] }}</td>
                <td>{{ $counts['activity_count'] }}</td>
                <td>{{ $counts['user_count'] }}</td>
            </tr>
        </table>
    </section>
@endsection

{{-- 該当ページ専用JS --}}
@section('pageJs')

@endsection
