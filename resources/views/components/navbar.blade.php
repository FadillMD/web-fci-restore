<nav class="sticky top-0 z-50 bg-white shadow-md" x-data="{ mobileMenuOpen: false }">
    <div class="relative flex items-center justify-between h-20 px-6 mx-auto max-w-7xl">

        <a href="{{ url('/') }}" class="z-10 text-2xl italic font-black tracking-tighter text-red-600">
            FIRST<span class="text-gray-900">CABLE</span>
        </a>

        <div class="hidden h-full text-sm font-semibold text-gray-700 md:flex">
            <x-nav-link href="/" :active="request()->is('/')">
                Beranda
            </x-nav-link>

            <x-nav-link href="/tentang-kami" :active="request()->is('tentang-kami')">
                Tentang Kami
            </x-nav-link>

            <x-nav-dropdown title="Produk" :href="route('produk.index')" :active="request()->is('produk*')">
                <x-dropdown-link href="{{ route('produk.detail', 'power-cable') }}">
                    Power Cable
                </x-dropdown-link>
                <x-dropdown-link href="{{ route('produk.detail', 'control-cable') }}">
                    Control Cable
                </x-dropdown-link>
                <x-dropdown-link href="{{ route('produk.detail', 'instrumentation-cable') }}">
                    Instrumentation Cable
                </x-dropdown-link>
                <x-dropdown-link href="{{ route('produk.detail', 'thermocouple-cable') }}">
                    Thermocouple Extension Cable
                </x-dropdown-link>
                <x-dropdown-link href="{{ route('produk.detail', 'fire-resistant-cable') }}">
                    Fire Resistant Cable
                </x-dropdown-link>
                <x-dropdown-link href="{{ route('produk.detail', 'marine-cable') }}">
                    Marine Cable
                </x-dropdown-link>
                <x-dropdown-link href="{{ route('produk.detail', 'custom-design-cable') }}">
                    Custom Design Cable
                </x-dropdown-link>
            </x-nav-dropdown>

            <x-nav-link href="/karir" :active="request()->is('karir')">
                Karir
            </x-nav-link>

            <x-nav-link href="/hubungi-kami" :active="request()->is('hubungi-kami')">
                Hubungi Kami
            </x-nav-link>

        </div>

        <div class="z-10 flex items-center space-x-4">
            <button class="hidden text-gray-500 transition hover:text-red-600 md:block">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" stroke-width="2" stroke-linecap="round" />
                </svg>
            </button>

            <div class="hidden space-x-2 md:flex">
                <button class="px-3 py-1 text-xs bg-gray-100 border border-gray-300 rounded">ENG</button>
                <button class="px-3 py-1 text-xs text-white bg-red-600 border border-red-600 rounded">ID</button>
            </div>

            <button class="text-gray-700 md:hidden focus:outline-none" @click="mobileMenuOpen = !mobileMenuOpen">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path x-show="!mobileMenuOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M4 6h16M4 12h16M4 18h16" />
                    <path x-show="mobileMenuOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
    </div>

    <div class="overflow-hidden transition-all duration-300 bg-white border-t border-gray-100 md:hidden"
        x-show="mobileMenuOpen" x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0 -translate-y-4" x-transition:enter-end="opacity-100 translate-y-0"
        @click.away="mobileMenuOpen = false">

        <div class="flex flex-col p-6 space-y-4 font-semibold text-gray-700">

            <a href="{{ url('/') }}"
                class="{{ request()->is('/') ? 'text-red-600' : 'hover:text-red-600' }} transition">
                Beranda
            </a>

            <a href="{{ route('about') }}"
                class="{{ request()->is('tentang-kami') ? 'text-red-600' : 'hover:text-red-600' }} transition">
                Tentang Kami
            </a>

            <div x-data="{ open: false }">
                <button @click="open = !open"
                    class="flex items-center justify-between w-full transition {{ request()->is('produk*') ? 'text-red-600' : 'hover:text-red-600' }}">
                    Produk
                    <svg class="w-4 h-4 transition-transform duration-200" :class="open ? 'rotate-180' : ''"
                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path d="M19 9l-7 7-7-7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </button>

                <div x-show="open" x-collapse
                    class="pl-4 mt-3 space-y-3 text-sm font-normal text-gray-500 border-l-2 border-red-100">
                    <a href="{{ route('produk.detail', 'power-cable') }}" class="block hover:text-red-600">Power
                        Cable</a>
                    <a href="{{ route('produk.detail', 'control-cable') }}" class="block hover:text-red-600">Control
                        Cable</a>
                    <a href="{{ route('produk.detail', 'instrumentation-cable') }}"
                        class="block hover:text-red-600">Instrumentation Cable</a>
                    <a href="{{ route('produk.detail', 'thermocouple-cable') }}"
                        class="block hover:text-red-600">Thermocouple Extension Cable</a>
                    <a href="{{ route('produk.detail', 'fire-resistant-cable') }}"
                        class="block hover:text-red-600">Fire Resistant Cable</a>
                    <a href="{{ route('produk.detail', 'marine-cable') }}" class="block hover:text-red-600">Marine
                        Cable</a>
                    <a href="{{ route('produk.detail', 'custom-design-cable') }}"
                        class="block hover:text-red-600">Custom Design Cable</a>
                </div>
            </div>

            <a href="{{ route('career') }}"
                class="{{ request()->is('karir') ? 'text-red-600' : 'hover:text-red-600' }} transition">
                Karir
            </a>

            <a href="{{ route('contact') }}"
                class="{{ request()->is('hubungi-kami') ? 'text-red-600' : 'hover:text-red-600' }} transition">
                Hubungi Kami
            </a>

            <div class="flex flex-col pt-6 space-y-4 border-t border-gray-100">
                <div
                    class="flex items-center justify-between text-sm font-bold tracking-widest text-gray-400 uppercase">
                    Pilih Bahasa
                    <div class="flex pt-4 space-x-4 border-t border-gray-100">
                        <button class="text-sm font-bold text-red-600">ID</button>
                        <button class="text-sm font-bold text-gray-400">ENG</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
