@props([
    'description',
    'title',
])

<head {{ $attributes }}>
    <script
        id="cookieyes"
        type="text/javascript"
        src="https://cdn-cookieyes.com/client_data/c44cbab59e2503950bda73f6/script.js"
    ></script>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="{{ $description }}" />
    <title>{{ $title }}</title>
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('storage/apple-touch-icon.png') }}" />
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('storage/favicon-32x32.png') }}" />
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('storage/favicon-16x16.png') }}" />
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>
