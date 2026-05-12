<x-layout title="Katalog Produk | PT. First Cable Industries">
    
    <section class="relative py-24 overflow-hidden text-white bg-gray-900">
        <div class="absolute inset-0 opacity-10 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')]"></div>
        <div class="relative z-10 px-6 mx-auto text-center max-w-7xl">
            <h1 class="mb-4 text-4xl italic font-black uppercase md:text-6xl">Katalog <span class="text-red-600">Produk</span></h1>
            <p class="max-w-2xl mx-auto text-gray-400">Jelajahi berbagai solusi pengabelan mutakhir kami yang dirancang untuk keandalan maksimal di setiap sektor industri.</p>
        </div>
    </section>

    <section class="py-20 bg-white">
        <div class="px-6 mx-auto max-w-7xl">
            
            <div class="grid grid-cols-1 gap-10 md:grid-cols-2 lg:grid-cols-3">
                
                <x-product-card 
                    title="Power Cable" 
                    desc="Kabel transmisi energi untuk sistem distribusi listrik voltase rendah hingga menengah."
                    img="https://images.unsplash.com/photo-1558484663-f0923f030999?q=80&w=600"
                    link="{{ route('produk.detail', 'power-cable') }}"
                />

                <x-product-card 
                    title="Control Cable" 
                    desc="Kabel fleksibel untuk pengiriman sinyal kontrol pada mesin dan sistem otomasi industri."
                    img="https://images.unsplash.com/photo-1517420879255-ae4658c191c1?q=80&w=600"
                    link="{{ route('produk.detail', 'control-cable') }}"
                />

                <x-product-card 
                    title="Instrumentation Cable" 
                    desc="Perlindungan maksimal terhadap gangguan elektromagnetik untuk akurasi data instrumen."
                    img="https://images.unsplash.com/photo-1581092580497-e0d23cbdf1dc?q=80&w=600"
                    link="{{ route('produk.detail', 'instrumentation-cable') }}"
                />

                <x-product-card 
                    title="Thermocouple Cable" 
                    desc="Kabel khusus untuk transmisi sinyal suhu presisi tinggi pada berbagai tipe sensor."
                    img="https://images.unsplash.com/photo-1531986346696-4bbdb40b934d?q=80&w=600"
                    link="{{ route('produk.detail', 'thermocouple-cable') }}"
                />

                <x-product-card 
                    title="Fire Resistant Cable" 
                    desc="Menjaga integritas sirkuit listrik tetap berjalan saat kondisi kebakaran darurat."
                    img="https://images.unsplash.com/photo-1542013936693-884638332954?q=80&w=600"
                    link="{{ route('produk.detail', 'fire-resistant-cable') }}"
                    isHot="true"
                />

                <x-product-card 
                    title="Marine Cable" 
                    desc="Ketahanan terhadap korosi air laut untuk aplikasi perkapalan dan lepas pantai."
                    img="https://images.unsplash.com/photo-1520038410233-7141f77e49aa?q=80&w=600"
                    link="{{ route('produk.detail', 'marine-cable') }}"
                />

                <div class="lg:col-span-3">
                    <div class="flex flex-col overflow-hidden bg-gray-900 border-l-8 border-red-600 shadow-xl rounded-3xl md:flex-row">
                        <div class="h-64 md:w-1/2 md:h-auto">
                            <img src="https://images.unsplash.com/photo-1581092160562-40aa08e78837?q=80&w=800" class="object-cover w-full h-full opacity-80" alt="Custom">
                        </div>
                        <div class="flex flex-col justify-center p-10 text-white md:w-1/2">
                            <h3 class="mb-4 text-3xl italic font-black uppercase">Custom Design Cable</h3>
                            <p class="mb-8 leading-relaxed text-gray-400">Tidak menemukan spesifikasi yang Anda butuh? Kami siap memproduksi kabel tailor-made sesuai kebutuhan teknis proyek Anda.</p>
                            <a href="{{ route('produk.detail', 'custom-design-cable') }}" class="inline-block px-8 py-4 font-bold tracking-widest text-center text-white uppercase transition bg-red-600 hover:bg-red-700 rounded-xl">Konsultasi Desain</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
</x-layout>