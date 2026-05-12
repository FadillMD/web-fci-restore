@props(['active' => false, 'title' => '', 'href' => '#'])

@php
$classes = ($active ?? false)
            ? 'flex items-center h-full px-4 transition-colors border-b-4 border-red-600 text-red-600 cursor-pointer group'
            : 'flex items-center h-full px-4 transition-colors border-b-4 border-transparent hover:border-red-600 cursor-pointer group';
@endphp

<div {{ $attributes->merge(['class' => $classes]) }}>
    <a href="{{ $href }}" class="group-hover:text-red-600 flex items-center gap-1.5 font-semibold text-sm">
        {{ $title }}
        <svg class="w-4 h-4 transition-transform group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path d="M19 9l-7 7-7-7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
    </a>

    <div class="absolute left-auto z-50 invisible transition-all duration-300 transform translate-y-2 bg-black shadow-2xl opacity-0 top-full w-72 group-hover:opacity-100 group-hover:visible group-hover:translate-y-0">
        <ul class="flex flex-col py-2">
            {{ $slot }}
        </ul>
    </div>
</div>