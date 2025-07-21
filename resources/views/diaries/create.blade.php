@extends('layouts.logged_in')

@section('title', $title)

@section('content')
<div class="page_diary_create">
    <h1>{{ $title }}</h1>
    <form method="POST" action="{{ route('diaries.store') }}">
        @csrf
        <div class="diary_create">

            <div>
                <label>
                    記事タイトル
                    <input type="text" name="title">
                </label>
            </div>

            <div>
                <label>
                    配信タイトル
                    <input type="text" name="stream_title">
                </label>
            </div>

            <div>
                <label>
                    配信URL
                    <input type="text" name="stream_url">
                </label>
            </div>

            <div>
                <label>
                    配信時刻
                    <input type="datetime-local" name="stream_start">
                </label>
            </div>

            <div>
                <label>
                    <p>スタンバイメモ</p>
                    <textarea name="before_body" cols="50" rows="5">配信前記入欄</textarea>
                </label>
            </div>

            <div>
                <label>
                    <p>ふりかえり</p>
                    <textarea name="after_body" cols="50" rows="5">配信後記入欄</textarea>
                </label>
            </div>

        </div>

        <input type="submit" value="投稿">
    </form>
</div>
@endsection
