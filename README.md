<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

## Tes_Intern_Alita

Sebuah aplikasi sederhana untuk memanipulasi data seperti cread,read,update,delete,dan search data berbasis web dengan php laravel

## Struktur Aplikasi

-   **`app/`**: Berisi logika aplikasi utama.
-   **`Http/Controllers/`**: Berisi controller aplikasi.
-   **`Models/`**: Berisi model aplikasi.
-   **`Providers/`**: Berisi provider layanan.
-   **`config/`**: Berisi file konfigurasi aplikasi.

-   **`database/`**: Berisi migrasi dan seed data.

    -   **`migrations/`**: Berisi file migrasi database.
    -   **`seeds/`**: Berisi file seed data.

-   **`public/`**: Berisi file publik seperti gambar, CSS, dan JavaScript.

-   **`resources/`**: Berisi file view, bahasa, dan file sumber daya lainnya.

    -   **`views/`**: Berisi template blade untuk tampilan.
    -   **`lang/`**: Berisi file bahasa.

-   **`routes/`**: Berisi file rute aplikasi.

-   **`storage/`**: Berisi file log dan file yang diunggah pengguna.

-   **`tests/`**: Berisi file pengujian aplikasi.

-   **`.env`**: File konfigurasi lingkungan aplikasi.

-   **`composer.json`**: File dependensi PHP.

-   **`artisan`**: Command-line tool untuk Laravel.

## Intruksi Menjalankan Aplikasi

**Clone Repository:**

`bash` -**[GitHub](git clone https://github.com/username/repository-name.git)**

cd repositiry

**Instal Depedensi:**

composer install

**Buat File Environment: Salin file .env.example menjadi .env**

cp .env.example .env

**Konfigurasi .env: Buka file .env dan sesuaikan pengaturan database dengan konfigurasi lokal Anda. Contoh pengaturan:**

DB_CONNECTION=mysql

DB_HOST=127.0.0.1

DB_PORT=3306

DB_DATABASE=nama_database

DB_USERNAME=root

DB_PASSWORD=

**Jalankan Migrasi Database: Buat tabel-tabel yang diperlukan dengan menjalankan migrasi:**

php artisan migrate

**Jalankan Server:Mulai server pengembang laravel:**

php artisan serve

atau gunakan laragon sebagai alternatif

**Akses Aplikasi**

Halaman utama: '/'

Halaman Daftar employee: /employees

Formulir Tambah employee: /employees/add

Formulir Edit employee: /employees/edit/{id}

Pencarian data employee: Gunakan formulir pencarian di halaman daftar employee untuk mencari data berdasarkan umur atau kota tertentu

Hapus data employee: Fitur untuk menghapus data employee berdasarkan id employee

Halaman Daftar location: /location

Formulir Tambah location: /location/add

Formulir Edit location: /location/edit/{id}

Hapus data location: Fitur untuk menghapus data lokasi berdasarkan id lokasi

### Catatan

Pastikan Anda sudah menginstal PHP, Composer, dan MySQL di sistem Anda.
Anda dapat menambahkan lebih banyak fitur atau menyesuaikan aplikasi sesuai dengan kebutuhan Anda.
