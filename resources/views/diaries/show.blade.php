@extends('layouts.logged_in')

@section('title', $title)

@section('content')
<div class="page_diary_show">
    <div class="diary_show">
        <h1>{{ $diary->title }}</h1>
        <p class="stream_url"><a href="{{ $diary->stream_url }}" target="_blank">{{ $diary->stream_title }}</a></p>
        <p class="stream_start">{{ $diary->stream_start }}</p>
        <p class="before_body">{{ $diary->before_body }}</p>
        <p class="after_body">{{ $diary->after_body }}</p>
        <p class="created_at">（{{ $diary->user->name }}）　　{{ $diary->created_at }}</p>
    </div>

    <div>
        <p><a href="{{ route('diaries.edit', $diary->id) }}">編集</a>　　<a href="{{ route('diaries.delete', $diary->id) }}">削除</a></p>
        </form>
    </div>

    <div class="show_button">
        <p><a href="{{route('diaries.index')}}">投稿一覧へ戻る</a>　　<a href="{{route('diaries.top')}}">TOP</a></p>
    </div>
</div>
@endsection
