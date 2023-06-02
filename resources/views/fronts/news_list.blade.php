@extends('layouts.layout_front')

{{-- タイトル --}}
@section('title', '新着情報詳細ページ')

@section('pageCss')
    <style>
        main {
            margin: 50px;
            overflow: hidden;
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

        .cards {
            /* display: flex; */
            float: left;
            width: 1200px;
            height: auto;
        }

        .card {
            border: 1px solid #949393;
            padding: 20px;
            margin: 30px 5px;
            width: 400px;
            height: auto;

            float: left;
        }

        img {
            width: 300px;
            height: 300px;
            object-fit: contain;
        }

        .category {
            float: right;
        }

        li {
            padding: 5px;
        }

        .link {
            clear: both;
        }
    </style>
@endsection

@section('content')



    <h1>新着情報詳細ページ</h1>


    <div class="cards">

        @foreach ($news as $new)
            <a href="{{ url('news-detail') }}?id={{ $new->id }}&news_category_id={{ $new->news_category_id }}">

                <div class="card">

                    <img src="{{ asset('/storage/images/' . $new->picture) }}" alt="">

                    <h2>{{ $new->title }} </h2>

                    <p>{!! $new->overview !!}</p>

                    <small>{{ $new->created_at }}</small>

                    <span>
                        {{-- {!! $new->getCategoryName() !!} --}}
                        {{ $new->newsCategory->category_name }}
                    </span>

                </div>
            </a>
        @endforeach

    </div>

    <div class="category">

        <h2>カテゴリー</h2>

        <ul>
            @foreach ($news_categories as $category)
                <li><a href="{{ url('news') }}?id={{ $category->id }}">{{ $category->category_name }}</a></li>
            @endforeach
        </ul>

    </div>

    <div class="link">{{ $news->links() }}</div>



@endsection
