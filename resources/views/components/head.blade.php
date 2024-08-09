@props([
    'description',
    'title',
])

<head {{ $attributes }}>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="{{ $description }}" />
    <title>{{ $title }}</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>
