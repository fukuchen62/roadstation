@extends('layouts.layout_front')

{{-- タイトル --}}
@section('title', 'お問い合わせページ')

@section('pageCss')
    <style>
        table {
            border: 1px solid black;
            width: 500px;
            height: 500px;
        }
    </style>

@endsection


@section('content')

    <form method="POST" action="{{ url('inquiry') }}">
        @csrf

        <table>

            <tr>
                <th>メールアドレス</th>
                <td>
                    <p>{{ $email }}</p>
                    <input name="email" value="{{ $email }}" type="hidden">
                </td>
            </tr>

            <tr>
                <th>タイトル</th>
                <td>
                    <p>{{ $title }}</p>
                    <input name="title" value="{{ $title }}" type="hidden">
                </td>
            </tr>


            <tr>
                <th>お問い合わせ内容</th>
                <td>
                    <p>{{ $content }}</p>
                    <input name="content" type='hidden' value="{{ $content }}">

                </td>
            </tr>

        </table>

        <button type="submit">送信する</button>

    </form>

@endsection
