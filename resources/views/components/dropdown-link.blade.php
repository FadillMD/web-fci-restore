<li>
    <a {{ $attributes->merge(['class' => 'block px-6 py-3 text-sm text-gray-300 hover:text-white hover:bg-red-600 transition-colors']) }}>
        {{ $slot }}
    </a>
</li>