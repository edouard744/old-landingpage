@props([
    'description',
    'title',
    'js',
])

<head {{ $attributes }}>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="{{ $description }}" />

    <title>{{ $title }}</title>

    <link rel="preconnect" href="https://fonts.bunny.net" />
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    @vite('resources/css/app.css')
    @if (! empty($js))
        @vite(['resources/js/' . $js])
    @endif
</head>
