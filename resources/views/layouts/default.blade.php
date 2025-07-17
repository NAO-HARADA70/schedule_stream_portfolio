<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://unpkg.com/ress@4.0.0/dist/ress.min.css">
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
