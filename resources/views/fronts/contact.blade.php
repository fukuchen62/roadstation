@extends('layouts.layout_front')

{{-- タイトル --}}
@section('title', 'お問い合わせページ | 徳島まるっと道の駅')

@section('pageCss')
    <link rel="stylesheet" href="{{ asset('assets/css/contact.css') }}">
@endsection

@section('key_visual')
    <!-- キービジュアル -->
    <div class="kv">
        <figure><img src="{{ asset('assets/images/goods_list/goods_list_header.jpg') }}" alt="特産品ページ"></figure>
    </div>
@endsection

@section('content')

    <h2>お問い合わせ</h2>

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
            <tbody>
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
            </tbody>
        </table>

        <div class="push">
            <button type="reset">書き直す</button>
            <button type="submit">入力内容確認</button>
        </div>

    </form>

@endsection
