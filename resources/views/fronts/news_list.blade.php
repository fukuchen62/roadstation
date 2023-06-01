@extends('layouts.layout_front')

{{-- タイトル --}}
@section('title', '新着情報詳細ページ')

@section('pageCss')
    <style>
        main {
            margin: 50px;
            display: flex;
        }

        h1 {
            font-size: 3rem;
            font-weight: bold;
            margin: 30px 0;
        }

        h2 {
            font-size: 1.2rem;
            font-weight: bold;
            margin: 10px;
        }

        .card {
            margin: 30px;
            width: 300px;
            height: auto;
        }

        img {
            width: 300px;
            height: 300px;
        }
    </style>
@endsection

@section('content')

    <h1>新着情報詳細ページ</h1>


    @foreach ($news as $new)
        <div class="card">

            <img src="{{ asset('/storage/images/' . $new->picture) }}" alt="">

            <h2>{{ $new->title }} </h2>

            <p>{!! $new->overview !!}</p>

            <small>{{ $new->created_at }}</small>
            <span>{{ $new->news_category_id }}</span>


        </div>
    @endforeach


@endsection
