@extends('layouts.layout_front')

{{-- タイトル --}}
@section('title', '新着情報詳細ページ')

@section('pageCss')
    <style>
        main {
            margin: 30px;
        }

        .wrap {
            width: 800px;
            height: auto;
        }

        h1 {
            font-size: 2rem;
            font-weight: bold;
        }

        .station {
            font-weight: bold;
        }

        span {
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
    </style>
@endsection

@section('content')

    <div class="wrap">

        @foreach ($news as $new)
            <h1>{{ $new->title }}</h1>

            <div>
                <span>{{ $new->updated_at }}</span>
                <span>{{ $new->newsCategory->category_name }}</span>
            </div>

            <img src="{{ asset('/storage/images/' . $new->picture) }}" alt="">

            <p>{!! $new->discription !!}</p>

            <span>
                <a href="{{ url('news-detail') }}?id={{ $new->id - 1 }}">前のページへ</a>
            </span>
            <span>
                <a href="{{ url('news-detail') }}?id={{ $new->id + 1 }}">次のページへ</a>
            </span>

            <p class="station">
                <a href="{{ url('station-detail') }}">道の駅詳細ページへ</a>
            </p>
        @endforeach


        <div>
            <h2>関連記事</h2>
        </div>

        <div class="cards">

            @foreach ($news as $new)
                <a href="{{ url('news-detail') }}?id={{ $new->id }}">

                    <div class="card">

                        <img src="{{ asset('/storage/images/' . $new->picture) }}" alt="">

                        <h2>{{ $new->title }} </h2>

                        <p>{!! $new->overview !!}</p>

                        <small>{{ $new->created_at }}</small>

                        <span>
                            {{ $new->newsCategory->category_name }}
                        </span>

                    </div>
                </a>
            @endforeach

        </div>


        {{-- @foreach ($news as $new)
                <tr>
                    <td>{{ $new->news_category_id }}</td>
                    <td>{{ $new->title }}</td>
                    <td>{{ $new->station_list }}</td>
                    <td>{!! $new->discription !!}</td>
                    <td>
                        <img src="{{ asset('/storage/images/' . $new->picture) }}" alt="">
                    </td>
                </tr>
            @endforeach --}}

    </div>

@endsection
