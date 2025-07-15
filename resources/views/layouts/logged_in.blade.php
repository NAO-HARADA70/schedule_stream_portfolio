@extends('layouts.default')

@section('header')

<header>
    <ul class="header_nav">
        <li><a href="{{ route('diaries.top') }}">トップ</a></li>
        <li><a href="{{ route('diaries.index') }}">一覧</a></li>
        <li><a href="{{ route('diaries.create') }}">新規投稿</a></li>
        <li>
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <input type="submit" value="ログアウト">
            </form>
        </li>
</header>

@endsection
