@props(['active' => false])

@php
// Logika: Jika aktif, beri warna merah, jika tidak, beri warna abu-abu
$classes = ($active ?? false)
            ? 'h-full flex items-center px-4 border-b-4 border-red-600 text-red-600 transition-colors font-bold'
            : 'h-full flex items-center px-4 border-b-4 border-transparent hover:border-red-600 hover:text-red-600 text-gray-700 transition-colors font-semibold';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>