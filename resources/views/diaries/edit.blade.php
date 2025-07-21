@extends('layouts.logged_in')

@section('title', $title)

@section('content')
<div class="page_edit">
    <h1>{{ $title }}</h1>
    <form method="POST" action="{{ route('diaries.update', $diary) }}">
        @csrf
        @method('patch')
        <div class="diary_edit">

            <div>
                <label>
                    記事タイトル
                    <input type="text" name="title" value="{{ $diary->title }}">
                </label>
            </div>

            <div>
                <label>
                    配信タイトル
                    <input type="text" name="stream_title" value="{{ $diary->stream_title }}">
                </label>
            </div>

            <div>
                <label>
                    配信URL
                    <input type="text" name="stream_url" value="{{ $diary->stream_url }}">
                </label>
            </div>

            <div>
                <label>
                    配信時刻
                    <input type="datetime-local" name="stream_start"  value="{{ $diary->stream_start }}">
                </label>
            </div>

            <div>
                <label>
                    <p>スタンバイメモ</p>
                    <textarea name="before_body" cols="50" rows="5">{{ $diary->before_body }}</textarea>
                </label>
            </div>

            <div>
                <label>
                    <p>ふりかえり</p>
                    <textarea name="after_body" cols="50" rows="5">{{ $diary->after_body }}</textarea>
                </label>
            </div>

        </div>

        <input type="submit" value="更新">
    </form>

    <p><a href="{{route('diaries.show', $diary)}}">戻る</a></p>
</div>
@endsection
