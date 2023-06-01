@extends('layouts.layout_front')

@section('title', 'ブログ記事一覧')

@section('content')




    @foreach ($blogs as $blog)
        <a href="">
            <h2>{{ $blog->title }}</h2>
            <p>カテゴリー：{{ $blog->category_id }}</p>
            <p>内 容：{{ $blog->content }}</p>
            {{-- <p>画像：</p>{{ roadstation/storage/app/ }}  --}}
            <p>登録日時：{{ $blog->created_at }}</p>
            <p>カテゴリー名：{{ $blog->blogCategory->getName() }}</p>
        </a>
        {{-- <td>{{ $result->id }}</td>
    <td>{{ $result->name }}</td>
    <td>{{ $result->post_name }}</td> --}}
    @endforeach

@endsection
