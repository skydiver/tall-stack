<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>TALL Stack</title>
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet">
    <livewire:styles />
</head>
<body class="bg-gray-200 text-gray-800">
    <div class="h-screen flex flex-row overflow-hidden">
        @yield('content')
    </div>
    <livewire:scripts />
    <script src="{{ mix('/js/app.js') }}"></script>
    @stack('scripts')
</body>
</html>
