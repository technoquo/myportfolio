@props(['tag'])

@php
    $classes =
        'bg-blue-600 hover:bg-blue-500 text-white dark:bg-white/10 dark:hover:bg-white/20 rounded-full px-3 py-1 text-xs font-medium text-center uppercase transition-colors duration-300';

@endphp

<a class="{{ $classes }}" href="/tags/{{ $tag }}">{{ $tag }}</a>
