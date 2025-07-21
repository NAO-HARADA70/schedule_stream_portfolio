@extends('layouts.logged_in')

@section('title', $title)

@section('content')
<div class="page_delete">
    <div class="delete_alert">
        <p>本当に削除しますか？</p>
        <p>※削除後は復元できません！</p>
    </div>
    <div>
        <form method="post" class="delete_button" action="{{ route('diaries.destroy', $diary) }}">
            @csrf
            @method('delete')
            <input type="submit" value="削除">
        </form>
        <p><a href="{{ route('diaries.show', $diary->id) }}">戻る</a></p>
    </div>

    <div class="show_button">
        <p><a href="{{route('diaries.index')}}">投稿一覧へ戻る</a></p>
        <p><a href="{{route('diaries.top')}}">TOP</a></p>
    </div>
    <div class="diary_show">
        <h1>{{ $diary->title }}</h1>
        <p class="stream_title">動画タイトル：{{ $diary->stream_title }}</p>
        <p class="stream_url">{{ $diary->stream_url }}</p>
        <p class="stream_start">{{ $diary->stream_start }}</p>
        <p class="before_body">{{ $diary->before_body }}</p>
        <p class="after_body">{{ $diary->after_body }}</p>
        <p class="created_at">（{{ $diary->user->name }}）　　{{ $diary->created_at }}</p>
    </div>
</div>

@endsection
