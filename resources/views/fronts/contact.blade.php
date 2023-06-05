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
    </style>

@endsection


@section('content')

    <form method="POST" action="{{ url('contact-check') }}">
        @csrf

        <table>

            <tr>
                <th>メールアドレス</th>
                <td>
                    <input name="email" value="{{ old('email') }}" type="text">
                    @if ($errors->has('email'))
                        <p class="error-message">{{ $errors->first('email') }}</p>
                    @endif
                </td>
            </tr>

            <tr>
                <th>タイトル</th>
                <td>
                    <input name="title" value="{{ old('title') }}" type="text">
                    @if ($errors->has('title'))
                        <p class="error-message">{{ $errors->first('title') }}</p>
                    @endif
                </td>
            </tr>


            <tr>
                <th>お問い合わせ内容</th>
                <td>
                    <textarea name="content">{{ old('content') }}</textarea>
                    @if ($errors->has('content'))
                        <p class="error-message">{{ $errors->first('content') }}</p>
                    @endif
                </td>
            </tr>

        </table>

        <button type="reset">書き直す</button>
        <button type="submit">入力内容確認</button>

    </form>

@endsection
