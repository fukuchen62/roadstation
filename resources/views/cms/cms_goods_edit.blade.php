@extends('layouts.layout_back')

@section('title', '阿波道の駅管理システム')

@section('subtitle', '道の駅特産品編集')

@section('login_name', 'QLIP')

{{-- 該当ページのCSS --}}
@section('pageCss')

@endsection


@section('content')
    <h3>道の駅特産品の編集画面</h3>

    {{-- 以下はshowのところにはめ込む --}}
    <ul class="menubar">
        <li><a href="{{ route('cms-goodslist') }}">一覧画面へ</a></li>
        <li><a href="{{ route('cms-goodsinput') }}">新規登録</a></li>
    </ul>

    {{-- バリデーションのエラーを表示する --}}
    @if (count($errors) > 0)
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- <form action="admin/newsedit" method="post"> -->
    <form method="post" action="{{ route('cms-goodsupdate') }}">
        <table class="info edit_info">
            @csrf
            <input type="hidden" name="id" value="{{ $goods->id }}">

            <tr>
                <th width="15%"> <span>*</span> カテゴリー名: </th>
                <td>
                    <select name="goods_category_id" class="selectcategory">
                        @foreach ($category_items as $item)
                            {{-- 選んでいる選択肢にselectedをつける --}}
                            @if ($item->id == $goods->goods_category_id)
                                <option value="{{ $item->id }}" selected>{{ $item->category_name }}</option>
                            @else
                                <option value="{{ $item->id }}">{{ $item->category_name }}</option>
                            @endif
                        @endforeach
                    </select>
                </td>
            </tr>

            <tr>
                <th> <span>*</span> 道の駅特産品名: </th>
                <td><input type="text" name="goods_name" value="{{ $goods->goods_name }}" required></td>
            </tr>

            <tr>
                <th>旬の月: 数字を|で区切って</th>
                <td><input type="text" name="month" value="{{ $goods->month }}"></td>
            </tr>

            <tr>
                <th>利用方法: </th>
                <td>
                    <textarea name="usage" cols="50" rows="5"> {{ $goods->usage }} </textarea>
                </td>
            </tr>
            <tr>
                <th> <span>*</span> 解説文:</th>
                <td>
                    <textarea name="discription" id="content" cols="50" rows="5" required> {{ $goods->discription }} </textarea>
                </td>
            </tr>

            <tr>
                <th>画像:</th>
                <td>
                    <input type="text" name="picture" value="{{ $goods->picture }}">
                </td>
            </tr>

            <tr>
                <th width="15%"> <span></span> 関連道の駅: </th>
                <td>
                    <input type="text" name="road_station_id" value="{{ $goods->road_station_id }}">
                </td>
            </tr>

            <tr>
                <th width="15%"> <span></span> 関連ブログ(1|2): </th>
                <td>
                    <input type="text" name="blog_list" value="{{ $goods->blog_list }}">
                </td>
            </tr>

            <tr>
                <th>価格:</th>
                <td>
                    <input type="text" name="price" value="{{ $goods->price }}">
                </td>
            </tr>

            <tr>
                <th> <span>*</span> 表示フラグ:</th>
                <td>
                    <input type="boolean" name="is_show" value="{{ $goods->is_show }}" required>
                </td>
            </tr>
        </table>

        <div class="change_btn">
            @php
                $title = $goods->title;
                $url = route('cms-goodsremove', ['id' => $goods->id]);
            @endphp
            <input type="submit"value="修正" class="submit_btn"
                onclick="return saveComfirm('{{ $goods->goods_name }}')">

            <input type="button"value="削除" class="delete_btn"
                onclick="return deleteComfirm('{{ $goods->goods_name }}','{{ $url }}')">
        </div>

    </form>
@endsection

@section('footer')
    copyright 2020 tuyano.
@endsection
