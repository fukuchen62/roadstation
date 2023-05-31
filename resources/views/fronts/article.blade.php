@extends('layouts.layout_front')

@section('title', 'ブログ記事')

@section('content')


    public function show(Blogsas as $blog )
    {
    <div>
        {{--  <h2>{{ $blog->title }}</h2>  --}}
        <p>{{ $blog->category_id }}</p>
        <p>記事制作者：{{ $blog->user_name }}</p>
        <p>内 容：{{ $blog->content }}</p>
        <p>道の駅詳細：{{ $blog->roadstation_id }}</p>
        <p>特産品：{{ $blog->goods_id }}</p>
        <p>体験：{{ $blog->activity_id }}</p>
        {{--  <p>画像：{{ 画像ファイル }}</p>  --}}
        <p>登録日時：{{ $blog->created_at }}</p>
    </div>

    <div>
        <h3>カテゴリー</h3>
        <ul>
            <li>
                <a href=""></a>
            </li>
        </ul>
    </div>
    }
@endsection
