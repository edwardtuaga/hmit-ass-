<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

HMIT Information System (Membership & Aspiration)
Aplikasi web sederhana berbasis Laravel yang dirancang untuk mengelola pendaftaran anggota Himpunan Mahasiswa Informatika (HMIT) serta menyediakan kanal bagi mahasiswa untuk menyampaikan aspirasi.

Fitur Utama
Pendaftaran Anggota: Form bagi mahasiswa untuk mendaftar menjadi anggota HMIT secara mandiri.

Kanal Aspirasi: Wadah bagi mahasiswa untuk mengirimkan saran, keluhan, atau ide secara terbuka (mendukung mode anonim).

Panel Admin (CRUD): Halaman khusus pengurus untuk melihat, mengelola, dan menghapus data anggota serta aspirasi yang masuk.

Sistem Navigasi: Menu navigasi yang memudahkan perpindahan antar halaman.

Database SQLite: Menggunakan database file lokal yang ringan dan mudah dipindahkan.

Tech Stack
Framework: Laravel 11 / 12

Database: SQLite

Styling: Tailwind CSS (via CDN)

Icons/Layout: Blade Templating Engine

Instalasi & Persiapan
Ikuti langkah-langkah berikut untuk menjalankan proyek di komputer lokal Anda:

1. Persiapan Awal
Pastikan Anda sudah menginstal PHP, Composer, dan memiliki ekstensi SQLite yang aktif di PHP Anda.

2. Konfigurasi Environment
Salin file .env.example menjadi .env:

Bash
cp .env.example .env
Buka file .env dan pastikan bagian database diatur ke SQLite:

Cuplikan kode
DB_CONNECTION=sqlite
# Kosongkan atau hapus baris DB_HOST, DB_PORT, dll untuk SQLite
3. Buat File Database
Laravel membutuhkan file fisik .sqlite untuk menyimpan data.

Windows (PowerShell): echo "" > database/database.sqlite

Linux/Mac/Git Bash: touch database/database.sqlite

4. Instal Dependensi & Migrasi
Jalankan perintah berikut di terminal:

Bash
composer install
php artisan key:generate
php artisan migrate
5. Jalankan Server
Bash
php artisan serve
Akses aplikasi di browser melalui: [http://127.0.0.1:8000](http://127.0.0.1:8000)

Struktur Folder Penting
app/Models/ - Berisi model Member dan Aspiration.

app/Http/Controllers/HmitController.php - Logika utama aplikasi.

database/migrations/ - Struktur tabel database.

resources/views/ - Berisi file tampilan (Blade):

layouts/app.blade.php - Layout utama & navigasi.

pendaftaran.blade.php - Halaman awal.

aspirasi.blade.php - Form aspirasi.

admin.blade.php - Panel pengelolaan data.

routes/web.php - Daftar rute URL aplikasi.

Lisensi
Proyek ini dibuat untuk keperluan pembelajaran dan pengembangan organisasi internal HMIT. Silakan dikembangkan lebih lanjut!

Dibuat dengan ❤️ untuk HMIT Informatika.