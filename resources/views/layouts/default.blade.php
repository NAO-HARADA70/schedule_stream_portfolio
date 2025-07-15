<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    @vite('resources/css/app.css')
</head>

<body>
    @yield('header')

    {{-- エラーメッセージ --}}
    @foreach($errors->all() as $error)
        <p class="error">{{ $error }}</p>
    @endforeach

    {{-- 成功メッセージ --}}
    @if(\Session::has('success'))
        <div class="success">
            {{ \Session::get('success') }}
        </div>
    @endif
    <div class="main_content">
        @yield('content')
    </div>
</body>

</html>
