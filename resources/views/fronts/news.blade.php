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
    </style>
@endsection

@section('content')

    <div class="wrap">

        @foreach ($news as $new)
            <h1>{{ $new->title }}</h1>

            <div>
                <span>{{ $new->updated_at }}</span>
                <span>{{ $new->news_category_id }}</span>
            </div>

            <img src="{{ asset('/storage/images/' . $new->picture) }}" alt="">

            <p>{{ $new->discription }}</p>

            <span>前のページへ</span>
            <span>次のページへ</span>

            <p class="station">
                <a href="{{ url('station-detail') }}">道の駅詳細ページへ</a>
            </p>
        @endforeach


        <div>
            <h2>関連記事</h2>
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
