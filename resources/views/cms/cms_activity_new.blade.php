@extends('layouts.layout_back')

@section('title', '阿波道の駅管理システム')

@section('subtitle', 'アクティビティ新規投稿')

@section('login_name', 'QLIP')

{{-- 該当ページのCSS --}}
@section('pageCss')

@endsection


@section('content')
    <h3>アクティビティの新規登録画面</h3>

    {{-- 以下はshowのところにはめ込む --}}
    <ul class="menubar">
        <li><a href="{{ route('cms-activitylist') }}">一覧画面へ</a></li>
        <li><a href="{{ route('cms-activityinput') }}">新規登録</a></li>
    </ul>

    {{-- バリデーションのエラーを表示する --}}
    @if (count($errors) > 0)
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li class="error">{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="post" action="{{ route('cms-activitycreate') }}">

        @csrf

        <table class="info new_info">
            <tr>
                <th width="15%"> <span>*</span> アクティビティ名: </th>
                <td>
                    <input type="text" name="activity_name" required>
                </td>
            </tr>
            <tr>
                <th> <span>*</span> 解説文: </th>
                <td>
                    <textarea name="discription" id="content" cols="50" rows="5" required></textarea>
                </td>
            </tr>
            <tr>
                <th> <span>*</span> 利用条件: </th>
                <td>
                    <textarea name="conditions" id="conditions" cols="50" rows="5" required></textarea>
                </td>
            </tr>
            <tr>
                <th> <span>*</span> 営業時間:</th>
                <td>
                    <input type="text" name="business_hours" required>
                </td>
            </tr>
            <tr>
                <th><span>*</span>価格: </th>
                <td><input type="text" name="price" required></td>
            </tr>
            <tr>
                <th><span>*</span>画像１: </th>
                <td><input type="text" name="picture1" required></td>
            </tr>
            <tr>
                <th>画像２: </th>
                <td><input type="text" name="picture2"></td>
            </tr>
            <tr>
                <th>画像３: </th>
                <td><input type="text" name="picture3"></td>
            </tr>
            <tr>
                <th>関連道の駅id: </th>
                <td><input type="text" name="road_station_id"></td>
            </tr>
            <tr>
                <th>関連ブログid: </th>
                <td><input type="text" name="blog_list" placeholder="1|2|a"></td>
            </tr>
            <tr>
                <th> <span>*</span> 表示フラグ: </th>
                <td><input type="boolean" name="is_show" value="1" required></td>
            </tr>
        </table>

        <div class="submit">
            <input type="submit" value="登録" class="submit_btn" onclick="return saveComfirm('アクティビティ')">
        </div>

    </form>
@endsection


@section('footer')
    copyright 2020 tuyano.
@endsection
