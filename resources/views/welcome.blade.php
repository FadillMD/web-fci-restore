<x-layout title="Beranda | PT. First Cable Industries">
    <!-- ==========================================
         HERO SECTION
    =========================================== -->
    <section class="relative bg-gray-900 overflow-hidden h-[800px] group">

        <div id="hero-slider" class="flex w-full h-full transition-transform duration-700 ease-in-out">

            <div class="relative h-full min-w-full">
                <div class="absolute inset-0 bg-center bg-cover"
                    style="background-image: url('{{ asset('images/slider/slide1.png') }}');">
                </div>
            </div>

            <div class="relative h-full min-w-full">
                <div class="absolute inset-0 bg-center bg-cover"
                    style="background-image: url('{{ asset('images/slider/slide2.png') }}');">
                </div>
            </div>

            <div class="relative h-full min-w-full">
                <div class="absolute inset-0 bg-center bg-cover"
                    style="background-image: url('{{ asset('images/slider/slide3.png') }}');">
                </div>
            </div>

        </div>

        <button onclick="prevSlide()"
            class="absolute z-20 p-4 text-white transition-all duration-300 transform -translate-y-1/2 border rounded-full shadow-lg opacity-0 left-4 top-1/2 bg-black/30 hover:bg-red-600 backdrop-blur-sm group-hover:opacity-100 border-white/30">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M15 19l-7-7 7-7"></path>
            </svg>
        </button>
        <button onclick="nextSlide()"
            class="absolute z-20 p-4 text-white transition-all duration-300 transform -translate-y-1/2 border rounded-full shadow-lg opacity-0 right-4 top-1/2 bg-black/30 hover:bg-red-600 backdrop-blur-sm group-hover:opacity-100 border-white/30">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M9 5l7 7-7 7"></path>
            </svg>
        </button>

        <div
            class="absolute z-20 flex px-4 py-2 space-x-3 transform -translate-x-1/2 rounded-full bottom-6 left-1/2 bg-black/20 backdrop-blur-sm">
            <button onclick="goToSlide(0)" class="w-3 h-3 bg-red-600 rounded-full" id="dot-0"></button>
            <button onclick="goToSlide(1)" class="w-3 h-3 rounded-full bg-white/80" id="dot-1"></button>
            <button onclick="goToSlide(2)" class="w-3 h-3 rounded-full bg-white/80" id="dot-2"></button>
        </div>
    </section>


    <!-- ==========================================
         TENTANG KAMI
    =========================================== -->
    <section class="py-24 bg-white">
        <div class="px-6 mx-auto max-w-7xl">
            <div class="flex flex-col items-center gap-16 md:flex-row">
                <div class="relative w-full md:w-1/2">
                    <img src="https://images.unsplash.com/photo-1593941707882-a5bba14938c7?q=80&w=800"
                        alt="Solusi EV Charging"
                        class="rounded-3xl shadow-2xl w-full h-[500px] object-cover relative z-10 border-b-8 border-red-600">
                    <div class="absolute z-0 w-40 h-40 rounded-full -bottom-8 -right-8 bg-red-600/10"></div>
                </div>
                <div class="w-full md:w-1/2">
                    <span
                        class="inline-block px-4 py-1.5 rounded-full bg-red-50 text-red-600 text-xs font-bold uppercase tracking-wider mb-6 border border-red-100">
                        Tentang Kami
                    </span>
                    <h2 class="mb-6 text-4xl font-extrabold leading-tight md:text-5xl text-slate-900">
                        Solusi kabel rumahan dan industri
                    </h2>
                    <p class="mb-10 text-lg leading-relaxed text-gray-600">
                        PT. First Cable Industries adalah produsen kabel premium yang memproduksi
                        beragam jenis kabel kualitas tinggi dengan service purna jual terdepan. Dengan dukungan dari tim
                        kami yang professional, First Cable terus meningkatkan kualitas atas produk dan servis kami
                        untuk kepuasan pelanggan.
                    </p>
                    <a href="#"
                        class="inline-flex items-center justify-center px-8 py-4 font-bold text-white transition duration-300 bg-red-600 rounded-lg shadow-lg hover:bg-red-700 shadow-red-600/30">
                        Pelajari Lebih Lanjut
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- ==========================================
         PRODUK KAMI
    =========================================== -->

    <section class="py-24 border-t border-gray-200 bg-gray-50">
        <div class="px-6 mx-auto max-w-7xl">

            <div class="mb-16 text-center">
                <span
                    class="bg-gray-200 text-gray-800 px-4 py-1.5 rounded-full text-xs font-bold uppercase tracking-wider">
                    Katalog Produk
                </span>
                <h2 class="mt-6 text-3xl font-bold tracking-wide text-gray-900 uppercase md:text-4xl">
                    Solusi Kabel <span class="text-red-600">Terintegrasi</span>
                </h2>
                <p class="max-w-2xl mx-auto mt-4 text-gray-600">Menyediakan berbagai tipe kabel berkualitas tinggi
                    dengan standar internasional untuk mendukung infrastruktur dan industri global.</p>
            </div>

            <div class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">

                <div
                    class="flex flex-col overflow-hidden transition-all duration-300 bg-white border-b-4 border-transparent shadow-md group rounded-2xl hover:shadow-2xl hover:border-red-600">
                    <div class="relative overflow-hidden h-52">
                        <img src="{{ asset('images/power-cable.png') }}"
                            alt="Power Cable"
                            class="object-cover w-full h-full transition duration-700 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-gray-900/90 via-gray-900/20 to-transparent">
                        </div>
                        <h3 class="absolute text-lg font-bold text-white bottom-4 left-5">Power Cable</h3>
                    </div>
                    <div class="flex-grow p-6">
                        <p class="text-sm leading-relaxed text-gray-600">Kabel transmisi daya voltase rendah hingga
                            tinggi untuk distribusi energi yang aman dan stabil.</p>
                    </div>
                </div>

                <div
                    class="flex flex-col overflow-hidden transition-all duration-300 bg-white border-b-4 border-transparent shadow-md group rounded-2xl hover:shadow-2xl hover:border-red-600">
                    <div class="relative overflow-hidden h-52">
                        <img src="{{ asset('images/control-cable.png') }}"
                            alt="Control Cable"
                            class="object-cover w-full h-full transition duration-700 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-gray-900/90 via-gray-900/20 to-transparent">
                        </div>
                        <h3 class="absolute text-lg font-bold text-white bottom-4 left-5">Control Cable</h3>
                    </div>
                    <div class="flex-grow p-6">
                        <p class="text-sm leading-relaxed text-gray-600">Dirancang untuk mengirimkan sinyal kontrol pada
                            peralatan otomatisasi dan mesin industri.</p>
                    </div>
                </div>

                <div
                    class="flex flex-col overflow-hidden transition-all duration-300 bg-white border-b-4 border-transparent shadow-md group rounded-2xl hover:shadow-2xl hover:border-red-600">
                    <div class="relative overflow-hidden h-52">
                        <img src="{{ asset('images/instrumentation-cable.png') }}"
                            alt="Instrumentation Cable"
                            class="object-cover w-full h-full transition duration-700 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-gray-900/90 via-gray-900/20 to-transparent">
                        </div>
                        <h3 class="absolute text-lg font-bold text-white bottom-4 left-5">Instrumentation Cable</h3>
                    </div>
                    <div class="flex-grow p-6">
                        <p class="text-sm leading-relaxed text-gray-600">Kabel dengan perlindungan *shielding* maksimal
                            untuk transmisi sinyal data akurat tanpa gangguan interferensi.</p>
                    </div>
                </div>

                <div
                    class="flex flex-col overflow-hidden transition-all duration-300 bg-white border-b-4 border-transparent shadow-md group rounded-2xl hover:shadow-2xl hover:border-red-600">
                    <div class="relative overflow-hidden h-52">
                        <img src="{{ asset('images/thermocouple-cable.png') }}"
                            alt="Thermocouple Cable"
                            class="object-cover w-full h-full transition duration-700 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-gray-900/90 via-gray-900/20 to-transparent">
                        </div>
                        <h3 class="absolute text-lg font-bold text-white bottom-4 left-5">Thermocouple Cable</h3>
                    </div>
                    <div class="flex-grow p-6">
                        <p class="text-sm leading-relaxed text-gray-600">Menghubungkan sensor suhu ke alat ukur dengan
                            akurasi tinggi untuk monitoring panas industri.</p>
                    </div>
                </div>

                <div
                    class="flex flex-col overflow-hidden transition-all duration-300 bg-white border-b-4 border-transparent shadow-md group rounded-2xl hover:shadow-2xl hover:border-red-600">
                    <div class="relative overflow-hidden h-52">
                        <img src="{{ asset('images/fire-resistant-cable.png') }}"
                            alt="Fire Resistant Cable"
                            class="object-cover w-full h-full transition duration-700 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-gray-900/90 via-gray-900/20 to-transparent">
                        </div>
                        <h3
                            class="absolute text-lg italic font-bold font-black text-white text-red-500 bottom-4 left-5">
                            Fire Resistant</h3>
                    </div>
                    <div class="flex-grow p-6">
                        <p class="text-sm leading-relaxed text-gray-600">Kabel khusus yang tetap berfungsi saat terjadi
                            kebakaran untuk sistem keamanan dan darurat.</p>
                    </div>
                </div>

                <div
                    class="flex flex-col overflow-hidden transition-all duration-300 bg-white border-b-4 border-transparent shadow-md group rounded-2xl hover:shadow-2xl hover:border-red-600">
                    <div class="relative overflow-hidden h-52">
                        <img src="{{ asset('images/marine-cable.png') }}"
                            alt="Marine Cable"
                            class="object-cover w-full h-full transition duration-700 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-gray-900/90 via-gray-900/20 to-transparent">
                        </div>
                        <h3 class="absolute text-lg font-bold text-white bottom-4 left-5">Marine Cable</h3>
                    </div>
                    <div class="flex-grow p-6">
                        <p class="text-sm leading-relaxed text-gray-600">Tahan terhadap korosi air laut dan lingkungan
                            ekstrim untuk aplikasi perkapalan dan lepas pantai.</p>
                    </div>
                </div>

                <div
                    class="flex flex-col overflow-hidden transition-all duration-300 bg-red-600 shadow-md group rounded-2xl hover:shadow-2xl md:col-span-2 lg:col-span-1 xl:col-span-2">
                    <div class="flex flex-col h-full md:flex-row">
                        <div class="relative overflow-hidden md:w-1/2 h-52 md:h-full">
                            <img src="https://images.unsplash.com/photo-1581092160562-40aa08e78837?q=80&w=600"
                                alt="Custom Design Cable"
                                class="object-cover w-full h-full transition duration-700 group-hover:scale-110">
                        </div>
                        <div class="flex flex-col justify-center p-8 text-white md:w-1/2">
                            <h3 class="mb-4 text-2xl italic font-black uppercase">Custom Design</h3>
                            <p class="mb-6 text-sm leading-relaxed text-red-100">Kami memproduksi kabel sesuai
                                spesifikasi teknis khusus Anda. Solusi tepat untuk kebutuhan proyek unik.</p>
                            <a href="#"
                                class="inline-block px-4 py-2 font-bold text-center text-red-600 transition bg-white rounded-lg hover:bg-gray-100">Konsultasi
                                Desain &rarr;</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- <section class="py-24 border-t border-gray-100 bg-gray-50">
        <div class="px-6 mx-auto max-w-7xl">
            <div class="mb-16 text-center">
                <span
                    class="bg-gray-200 text-gray-800 px-4 py-1.5 rounded-full text-xs font-bold uppercase tracking-wider">
                    Produk Kami
                </span>
                <h2 class="mt-6 text-3xl font-bold tracking-wide text-gray-900 uppercase md:text-4xl">
                    Solusi Kabel Berkualitas untuk Setiap Kebutuhan
                </h2>
            </div>
            <div class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-4">
                <!-- Card 1 -->
                <div
                    class="flex flex-col overflow-hidden transition-all duration-300 bg-white border-b-4 border-transparent shadow-md group rounded-2xl hover:shadow-2xl hover:border-red-600">
                    <div class="relative h-56 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1558484663-f0923f030999?q=80&w=600"
                            alt="Power Cable"
                            class="object-cover w-full h-full transition duration-700 ease-in-out group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-gray-900/90 via-gray-900/30 to-transparent">
                        </div>
                        <h3 class="absolute text-xl font-bold text-white bottom-4 left-5">Power Cable</h3>
                    </div>
                    <div class="flex-grow p-6">
                        <p class="text-sm leading-relaxed text-gray-600">Kabel yang andal dan tahan lama untuk
                            transmisi energi yang efisien dalam berbagai aplikasi.</p>
                    </div>
                </div>
                <!-- Card 2 -->
                <div
                    class="flex flex-col overflow-hidden transition-all duration-300 bg-white border-b-4 border-transparent shadow-md group rounded-2xl hover:shadow-2xl hover:border-red-600">
                    <div class="relative h-56 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1544724569-5f546fd6f2b5?q=80&w=600"
                            alt="Telecom Cable"
                            class="object-cover w-full h-full transition duration-700 ease-in-out group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-gray-900/90 via-gray-900/30 to-transparent">
                        </div>
                        <h3 class="absolute text-xl font-bold text-white bottom-4 left-5">Telecom Cable</h3>
                    </div>
                    <div class="flex-grow p-6">
                        <p class="text-sm leading-relaxed text-gray-600">Kabel berkecepatan tinggi yang memastikan
                            komunikasi data yang lancar dan andal.</p>
                    </div>
                </div>
                <!-- Card 3 -->
                <div
                    class="flex flex-col overflow-hidden transition-all duration-300 bg-white border-b-4 border-transparent shadow-md group rounded-2xl hover:shadow-2xl hover:border-red-600">
                    <div class="relative h-56 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1621501103258-3e135c8c1873?q=80&w=600"
                            alt="Submarine Cable"
                            class="object-cover w-full h-full transition duration-700 ease-in-out group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-gray-900/90 via-gray-900/30 to-transparent">
                        </div>
                        <h3 class="absolute text-xl font-bold text-white bottom-4 left-5">Submarine Cable</h3>
                    </div>
                    <div class="flex-grow p-6">
                        <p class="text-sm leading-relaxed text-gray-600">Kabel bawah laut yang kuat yang dirancang
                            untuk transmisi daya dan data jarak jauh.</p>
                    </div>
                </div>
                <!-- Card 4 -->
                <div
                    class="flex flex-col overflow-hidden transition-all duration-300 bg-white border-b-4 border-transparent shadow-md group rounded-2xl hover:shadow-2xl hover:border-red-600">
                    <div class="relative h-56 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1517420879255-ae4658c191c1?q=80&w=600"
                            alt="Special Cables"
                            class="object-cover w-full h-full transition duration-700 ease-in-out group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-gray-900/90 via-gray-900/30 to-transparent">
                        </div>
                        <h3 class="absolute text-xl font-bold leading-tight text-white bottom-4 left-5">Special Cables
                            <br>& Wires
                        </h3>
                    </div>
                    <div class="flex-grow p-6">
                        <p class="text-sm leading-relaxed text-gray-600">Kabel canggih yang mendukung solusi energi
                            yang berkelanjutan dan ramah lingkungan.</p>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <!-- ==========================================
         PRODUK BARU / INOVASI SECTION
    =========================================== -->
    {{-- <section class="relative py-24 overflow-hidden text-white bg-gray-900">
        <!-- Dekorasi Latar Belakang (Elemen Merah Samar) -->
        <div
            class="absolute top-0 right-0 w-[500px] h-[500px] bg-red-600/20 rounded-full blur-[120px] pointer-events-none transform translate-x-1/2 -translate-y-1/2">
        </div>
        <div
            class="absolute bottom-0 left-0 w-[500px] h-[500px] bg-red-800/20 rounded-full blur-[120px] pointer-events-none transform -translate-x-1/2 translate-y-1/2">
        </div>

        <div class="relative z-10 px-6 mx-auto max-w-7xl">

            <!-- Header Section -->
            <div class="mb-16 text-center">
                <span
                    class="px-5 py-2 text-xs font-bold tracking-widest text-white uppercase bg-red-600 rounded-full shadow-lg shadow-red-600/30">
                    Produk Baru
                </span>
                <h2 class="mt-8 text-3xl font-extrabold tracking-tight text-white md:text-5xl">
                    Jelajahi Inovasi Terbaru Kami
                </h2>
            </div>

            <!-- Grid 3 Kolom -->
            <div class="grid grid-cols-1 gap-10 md:grid-cols-3">

                <!-- Card 1: Building Wire -->
                <div
                    class="flex flex-col overflow-hidden transition duration-300 transform bg-white border-b-8 border-red-600 shadow-2xl rounded-2xl hover:-translate-y-3">
                    <!-- Area Gambar -->
                    <div class="relative flex items-center justify-center h-64 p-8 overflow-hidden bg-gray-100">
                        <!-- Background aksen miring di belakang gambar (meniru desain referensi) -->
                        <div class="absolute bottom-0 left-0 w-full transform translate-y-4 -skew-y-6 bg-white h-1/3">
                        </div>
                        <img src="https://images.unsplash.com/photo-1558484663-f0923f030999?q=80&w=400"
                            alt="Building Wire"
                            class="relative z-10 object-contain h-full transition duration-500 mix-blend-multiply drop-shadow-xl hover:scale-110">
                    </div>
                    <!-- Area Teks & Tombol -->
                    <div class="flex flex-col flex-grow p-8 text-left">
                        <h3 class="mb-3 text-2xl font-extrabold text-gray-900">Building Wire</h3>
                        <p class="flex-grow mb-8 text-sm leading-relaxed text-gray-600">
                            Kabel kami mencakup produk yang cocok untuk semua sirkuit kabel rumah tangga dan komersial.
                            Memastikan distribusi listrik yang aman.
                        </p>
                        <a href="#"
                            class="block w-full text-center bg-gray-900 hover:bg-red-600 text-white font-bold py-3.5 rounded-lg transition-colors duration-300">
                            Unduh Katalog PDF
                        </a>
                    </div>
                </div>

                <!-- Card 2: ACCC -->
                <div
                    class="flex flex-col overflow-hidden transition duration-300 transform bg-white border-b-8 border-red-600 shadow-2xl rounded-2xl hover:-translate-y-3">
                    <div class="relative flex items-center justify-center h-64 p-8 overflow-hidden bg-gray-100">
                        <div class="absolute bottom-0 left-0 w-full transform translate-y-4 -skew-y-6 bg-white h-1/3">
                        </div>
                        <img src="https://images.unsplash.com/photo-1544724569-5f546fd6f2b5?q=80&w=400" alt="ACCC"
                            class="relative z-10 object-contain h-full transition duration-500 mix-blend-multiply drop-shadow-xl hover:scale-110">
                    </div>
                    <div class="flex flex-col flex-grow p-8 text-left">
                        <h3 class="mb-3 text-2xl font-extrabold text-gray-900">ACCC</h3>
                        <p class="flex-grow mb-8 text-sm leading-relaxed text-gray-600">
                            Konduktor berkapasitas tinggi dengan kekuatan luar biasa, kendur rendah suhu tinggi (HTLS),
                            dan ketahanan korosi yang sangat baik.
                        </p>
                        <a href="#"
                            class="block w-full text-center bg-gray-900 hover:bg-red-600 text-white font-bold py-3.5 rounded-lg transition-colors duration-300">
                            Unduh Katalog PDF
                        </a>
                    </div>
                </div>

                <!-- Card 3: Special Cables and Wires -->
                <div
                    class="flex flex-col overflow-hidden transition duration-300 transform bg-white border-b-8 border-red-600 shadow-2xl rounded-2xl hover:-translate-y-3">
                    <div class="relative flex items-center justify-center h-64 p-8 overflow-hidden bg-gray-100">
                        <div class="absolute bottom-0 left-0 w-full transform translate-y-4 -skew-y-6 bg-white h-1/3">
                        </div>
                        <img src="https://images.unsplash.com/photo-1517420879255-ae4658c191c1?q=80&w=400"
                            alt="Special Cables"
                            class="relative z-10 object-contain h-full transition duration-500 mix-blend-multiply drop-shadow-xl hover:scale-110">
                    </div>
                    <div class="flex flex-col flex-grow p-8 text-left">
                        <h3 class="mb-3 text-2xl font-extrabold leading-tight text-gray-900">Special Cables and Wires
                        </h3>
                        <p class="flex-grow mb-8 text-sm leading-relaxed text-gray-600">
                            Dirancang untuk menahan sinar UV, cuaca, dan suhu ekstrem, kabel ini memastikan penyaluran
                            daya yang andal di berbagai kondisi.
                        </p>
                        <a href="#"
                            class="block w-full text-center bg-gray-900 hover:bg-red-600 text-white font-bold py-3.5 rounded-lg transition-colors duration-300">
                            Unduh Katalog PDF
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section> --}}

    <script>
        let currentSlide = 0;
        const totalSlides = 3;
        const slider = document.getElementById('hero-slider');

        function updateSlider() {
            slider.style.transform = `translateX(-${currentSlide * 100}%)`;
            for (let i = 0; i < totalSlides; i++) {
                const dot = document.getElementById(`dot-${i}`);
                if (i === currentSlide) {
                    dot.classList.remove('bg-white/80');
                    dot.classList.add('bg-red-600');
                } else {
                    dot.classList.remove('bg-red-600');
                    dot.classList.add('bg-white/80');
                }
            }
        }

        function nextSlide() {
            currentSlide = (currentSlide + 1) % totalSlides;
            updateSlider();
        }

        function prevSlide() {
            currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
            updateSlider();
        }

        function goToSlide(index) {
            currentSlide = index;
            updateSlider();
        }
        setInterval(nextSlide, 5000);
    </script>
</x-layout>
