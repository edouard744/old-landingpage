@props([
    'image',
    'hdimage',
    'alt',
    'containerClass',
    'imageClass',
])
<div {{$attributes}} class="{{$containerClass}}">
    @if($hdimage && $image)
    <picture>
        <source class='{{$imageClass}}' media="(min-width:640px)" srcset="{{asset($hdimage)}}">
        <source class='{{$imageClass}}' media="(min-width:465px)" srcset="{{asset($image)}}">
        <img class='{{$imageClass}}'
             src='{{asset($image)}}'
             alt='{{$alt}}'
        >
    </picture>
    @endif
</div>
