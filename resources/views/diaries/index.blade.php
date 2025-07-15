@extends('layouts.logged_in')

@section('title', $title)

@section('content')
    <div class="diaries_index">
        <h1>{{ $title }}</h1>
        <ul>
            @forelse($diaries as $diary)
                <li class="diary_box">
                    <div class="title"><a href="{{route('diaries.show', $diary)}}">{{ $diary->title }}</a></div>

                    <div class="stream_url">
                        <p class="diary_tag">配信URL</p>
                        <p><a href="{{ $diary->stream_url }}" target="_blank">{{ $diary->stream_title }}</a></p>
                    </div>

                    <div>
                        <p class="diary_tag">開始時間</p>
                        <p>{{ $diary->stream_start }}</p>
                    </div>

                    <div class="stream_start">
                        <p class="diary_tag">スタンバイメモ</p>
                        <p class="before_body">{{ $diary->before_body }}</p>
                    </div>

                    <div>
                        <p class="diary_tag">ふりかえり</p>
                        <p class="after_body">{{ $diary->after_body }}</p>
                    <div>

                    <div>
                        <p class="diary_tag">{{ $diary->created_at }}）</p>
                    <div>
                </li>
            @empty
                <li>投稿はありません。</li>
            @endforelse
        </ul>
    </div>
@endsection
