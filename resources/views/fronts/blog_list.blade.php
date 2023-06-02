@extends('layouts.layout_front')

@section('title', 'ブログ記事一覧')

@section('content')




    @foreach ($blogs as $blog)
        <a href="{{ url('blog-detail') }}?id={{ $blog->id }}">
            <h2>{{ $blog->title }}</h2>
            <p>内 容：{!! $blog->content !!}</p>
            {{-- <p>画像：</p>{{ roadstation/storage/app/ }}  --}}
            <p>登録日時：{{ $blog->created_at }}</p>
            <p>カテゴリー名：{{ $blog->blogCategory->getName() }}</p>
        </a>
    @endforeach

    <div>
        <h3>
            カテゴリー一覧
        </h3>
            <ul>
                <li>
                    {{-- <a href="{{ url('blog') }}?id={{ $blog_categories[1]->id }}">
                        体験
                    </a> --}}
                    {{-- 上手くいかない場合、$url = route('routeName', ['id' => 1]); または {{ $blog->blogCategory->getName() }}--}}
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
                <li>
                    <a href="">
                        ニュース
                    </a>
                </li>
            </ul>
    </div>

    {{-- {{ $items->links() }} --}}
@endsection
