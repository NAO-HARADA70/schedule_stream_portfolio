@extends('layouts.logged_in')

@section('title', $title)

@section('content')

    <p>現在の時刻 <span>{{ $now }}</span></p>

    <p>今日の予定</p>
        <ul>
        @forelse($diaries as $diary)
            <li class="diary_box">
                <div class="title"><a href="{{route('diaries.show', $diary)}}">{{ $diary->title }}</a></div>

                <div class="stream_url">
                    <p class="diary_tag">配信URL</p>
                    <p><a href="{{ $diary->stream_url }}" target="_blank">{{ $diary->stream_title }}</a></p>
                </div>

                <div class="stream_start">
                    <p class="diary_tag">開始時間</p>
                    <p>{{ $diary->stream_start }}</p>
                </div>

                <div class="before_body">
                    <p class="diary_tag">スタンバイメモ</p>
                    <p>{{ $diary->before_body }}</p>
                </div>

                <div class="after_body">
                    <p class="diary_tag">ふりかえり</p>
                    <p>{{ $diary->after_body }}</p>
                <div>

                <div class="created_at">
                    <p>（{{ $diary->created_at }}）</p>
                <div>
            </li>
        @empty
            <p>ありません！</p>
        @endforelse
        </ul>

@endsection
