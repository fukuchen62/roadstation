@extends('layouts.layout_front')

@section('pageCss')
    <style>
        img {
            width: 320px;
            height: 180px;
        }
    </style>
@endsection

@section('title', 'ブログ記事')
{{-- @foreach ($blogs as $blog)
        {{ $blogs->title }} | 徳島まるっと道の駅
    @endforeach --}}

{{-- @endsection --}}

@section('content')

    {{-- <div>
    <h2>{{ $blogs[3]->title }}</h2>
    <p>{{ $blogs[3]->blog_category_id }}</p>
    <p>記事制作者：{{ $blogs[3]->user_name }}</p>
    <p>内 容：</p>{!! $blogs[3]->content !!}
    <p>道の駅詳細：{{ $blogs[3]->roadstation_id }} </p>
    <p>特産品：{{ $blogs[3]->special_goods_id }}</p>
    <p>体験：{{ $blogs[3]->activity_id }}</p>
    <p>登録日時：{{ $blogs[3]->created_at }}</p>
</div> --}}

    @foreach ($blogs as $blog)
        <div>
            <h2>{{ $blog->title }}</h2>
            <p>カテゴリー名：{{ $blog->blogCategory->getName() }}</p>
            <img src="{{ asset('/storage/images') }}/test-picture/{{ $blog->picture }}" alt="">
            <p>内 容：</p>{!! $blog->content !!}
            {{--  <p>道の駅URL：<a href="{{ $blog->roadstation->getUrl() }}">各道の駅詳細ページリンク{{ $blog->roadstation->getUrl() }} </a></p>  --}}
            <p>登録日時：{{ $blog->created_at }}</p>
        </div>
    @endforeach


    {{--  道の駅情報の表示部分  --}}

    @foreach ($blogs as $blog)
        <h3>道の駅情報</h3>
        <p>各道の駅詳細ページリンク</p>
        <P><a
                href="{{ url('station-detail') }}?id={{ $blog->roadStation->getId() }}">{{ url('station-detail') }}?d={{ $blog->roadStation->getId() }}</a>
        </P>
    @endforeach


    関連記事の表示部分

    @foreach ($blogcategriess as $blogcategory)
        <ul>
            <li>
                {{--  <a href="{{ url('blog-detail') }}?id={{ }}"></a>  --}}
                {{--  <img src="{{ asset('/storage/images') }}/test-picture/{{ $blogCategory->blog->picture }}" alt="">
                <h3>{{ $blogCategory->blog->title }}</h3>
                <p>日付{{ $blogCategory->blog->created_at }}</p>  --}}
                <p>{{ $blogCategory->category_name }}</p>

            </li>
        </ul>
    @endforeach

    {{--  サイドバーのカテゴリーの表示部分  --}}

    {{--  カテゴリーのIDを渡して、一覧表示させる  --}}

    <div>
        <h3>
            カテゴリー一覧
        </h3>
        <ul>
            <li>
                {{-- <a href="{{ route('ルート名',['パラメータ名'=>'値']) }}"> --}}
                体験
                <p><a href="{{ url('blog') }}?id={{ $blog->id }}"></a>
                    </a>
            </li>
            <li>
                <a href="">
                    特産品
                </a>
            </li>
            <li>
                <a href="">
                    グルメ
                </a>
            </li>
            <li>
                <a href="">
                    その他
                </a>
            </li>
        </ul>
    </div>

@endsection
