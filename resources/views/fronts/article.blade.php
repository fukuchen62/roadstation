@extends('layouts.layout_front')

@section('title')
{{ $blogs[3]->title }} | 徳島まるっと道の駅
@endsection

@section('content')


    
    <div>
        <h2>{{ $blogs[3]->title }}</h2> 
        <p>{{ $blogs[3]->blog_category_id }}</p>
        <p>記事制作者：{{ $blogs[3]->user_name }}</p>
        <p>内 容：<?= htmlspecialchars_decode( $blogs[3]->content ); ?></p>
        <p>道の駅詳細：{{ $blogs[3]->roadstation_id  }} </p>
        <p>特産品：{{ $blogs[3]->special_goods_id }}</p>
        <p>体験：{{ $blogs[3]->activity_id }}</p>
        {{--  <p>画像：{{ 画像ファイル }}</p>  --}}
        <p>登録日時：{{ $blogs[3]->created_at }}</p>
    </div>

    <div>
        <h3>カテゴリー</h3>
        <ul>
            <li>
                <a href=""></a>
            </li>
        </ul>
    </div>
@endsection
