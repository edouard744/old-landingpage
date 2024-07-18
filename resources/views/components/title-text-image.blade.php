@props([
    'text',
    'title',
    'image',
    'hdimage',
    'alt'
])
<div class='py-4' {{ $attributes }}>
    <span class='text-xl block mb-4'>{{$title}}</span>
    <p class='mb-8'>{{$text}}</p>
    @if($hdimage && $image)
    <picture>
        <source media="(min-width:640px)" srcset="{{asset($hdimage)}}">
        <source media="(min-width:465px)" srcset="{{asset($image)}}">
        <img class='rounded-lg'
             src='{{asset($image)}}'
             alt='{{$alt}}'
        >
    </picture>
    @endif
</div>
