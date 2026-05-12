# PT. First Cable Industries - Corporate Website

[![Laravel Version](https://img.shields.io/badge/Laravel-13.x-red.svg)](https://laravel.com)
[![TailwindCSS Version](https://img.shields.io/badge/TailwindCSS-3.x-blue.svg)](https://tailwindcss.com)
[![Alpine.js](https://img.shields.io/badge/Alpine.js-3.x-orange.svg)](https://alpinejs.dev)

Website profil perusahaan resmi PT. First Cable Industries yang dibangun menggunakan framework Laravel. Project ini dirancang dengan pendekatan modular menggunakan Blade Components untuk memastikan kode yang bersih, mudah dikelola, dan performa yang optimal.

## 🚀 Fitur Utama

- **Dynamic Product Routing**: Sistem routing otomatis untuk katalog produk kabel.
- **Reusable Blade Components**: Komponen UI (Navbar, Cards, Link) yang dapat digunakan berulang kali untuk efisiensi koding.
- **Responsive Navigation**: Hamburger menu dan dropdown yang dioptimalkan untuk perangkat mobile menggunakan Alpine.js.
- **Dynamic SEO Title**: Judul tab browser yang berubah otomatis sesuai halaman yang aktif.
- **Interactive UI**: Animasi hover dan transisi halus menggunakan Tailwind CSS.

## 🛠️ Tech Stack

- **Framework:** Laravel 13
- **Styling:** Tailwind CSS (via Vite)
- **Interactivity:** Alpine.js
- **Icons:** Heroicons (SVG)

## 📁 Struktur Project (Penting)

Berikut adalah beberapa lokasi file kunci yang dikembangkan dalam project ini:

- `resources/views/components/layout.blade.php` : Master layout website.
- `resources/views/components/nav-link.blade.php` : Komponen link navigasi pintar.
- `resources/views/components/nav-dropdown.blade.php` : Komponen dropdown menu universal.
- `resources/views/produk/` : Folder berisi halaman detail teknis setiap jenis kabel.
- `routes/web.php` : Konfigurasi routing yang efisien dengan grouping.

## ⚙️ Cara Instalasi

1. **Clone Repository**
   ```bash
   git clone [https://github.com/FadillMD/web-fci.git](https://github.com/FadillMD/web-fci.git)
   cd first-cable-web

2. **Instal Dependensi PHP**
    <br>Gunakan Composer untuk mengunduh semua library Laravel yang dibutuhkan:
    ```Bash
    composer install

3. **Instal Dependensi Frontend**
    <br>Project ini menggunakan Vite untuk mengelola aset CSS dan JS. Instal dan jalankan compiler-nya:
    ```Bash
    npm install
    npm run dev

4. **Konfigurasi Environment**
    <br>Salin file contoh konfigurasi dan buat application key baru:
    ```Bash
    cp .env.example .env
    php artisan key:generate

5. **Jalankan Server**
    <br>Terakhir, jalankan server lokal untuk melihat hasilnya di browser:
    ```Bash
    php artisan serve

📄 Lisensi
Project ini dibuat untuk tujuan portofolio dan pengembangan internal PT. First Cable Industries.

### Sedikit Tips Tambahan:
Jika kamu menggunakan Windows dan tidak memiliki perintah `cp` (copy), kamu bisa mengganti langkah nomor 4 secara manual dengan melakukan **Copy & Paste** file `.env.example` lalu mengubah namanya menjadi `.env`.



