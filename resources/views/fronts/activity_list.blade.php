@extends('layouts.layout_front')

@section('title', '体験一覧')

@section('content')

    <h1>体験一覧</h1>

    @foreach ($activities as $activity)
        <div>
            <h3>{{ $activity->activity_name }}</h3>
            <p>営業時間：{{ $activity->business_hours }}</p>
            <p>料 金：{{ $activity->price }}</p>
            <p>利用条件：{{ $activity->conditions }}</p>
            <p>解 説：{{ $activity->discription }}</p>
        </div>
    @endforeach

@endsection
