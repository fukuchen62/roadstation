{{-- @php

    return [
        'name.required' => '名前は必ず入力して下さい。',
        'email.required' => 'メールアドレスは必ず入力して下さい。',
        'email.email' => 'メールアドレスを入力して下さい。',
        'title.required' => 'タイトルは必ず入力して下さい。',
        'title.string' => 'タイトルは、文字で入力して下さい。',
        'title.max' => 'タイトルは、50文字以内で入力して下さい。',
        'content.required' => '内容は必ず入力して下さい。',
        'content.string' => '内容は、文字で入力して下さい。',
        'content.max' => '内容は、1000文字以内で入力して下さい。',
    ];

@endphp --}}

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

        tr {
            border: 1px solid black;
        }

        td {
            border: 1px solid black;

        }

        .error {
            color: red;
            font-weight: bold;
        }
    </style>

@endsection


@section('content')

    <form method="POST" action="{{ url('contact-check') }}">
        @csrf

        @if (count($errors) > 0)
            <div>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li class="error">
                            {{ $error }}
                        </li>
                    @endforeach
                </ul>
            </div>
        @endif

        <table>
            <tr>
                <th>お名前</th>
                <td>
                    <input type="text" name="name" value="{{ old('name') }}">
                </td>
            </tr>

            <tr>
                <th>メールアドレス</th>
                <td>
                    <input type="email" name="email" value="{{ old('email') }}">
                </td>
            </tr>

            <tr>
                <th>タイトル</th>
                <td>
                    <input type="text" name="title" value="{{ old('title') }}">
                </td>
            </tr>


            <tr>
                <th>お問い合わせ内容</th>
                <td>
                    <textarea name="content">{{ old('content') }}</textarea>
                </td>
            </tr>

        </table>

        <button type="reset">書き直す</button>
        <button type="submit">入力内容確認</button>

    </form>

@endsection
