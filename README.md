# SIJAGO

Website yang berbasis PHP dan menggunakan database MYSQL.

## Persyaratan

1. **XAMPP**:
   - Pastikan Anda sudah menginstal XAMPP di komputer Anda. XAMPP adalah perangkat lunak sumber terbuka yang menyediakan paket Apache, MySQL, PHP, dan Perl.

## Langkah-langkah Instalasi

1. **Buat Database MySQL**:
   - Buka XAMPP dan jalankan Apache dan MySQL.
   - Buka browser dan akses [phpMyAdmin](http://localhost/phpmyadmin).
   - Buat database baru dengan nama yang Anda inginkan. Contoh: `nama_database`.

2. **Import File SQL**:
   - Buka tab `Import` di phpMyAdmin.
   - Klik tombol `Choose File` dan pilih file SQL yang berada dalam folder `database`.
   - Klik tombol `Go` dan tunggu hingga tabel terimport dengan sukses.

3. **Konfigurasi Koneksi Database**:
   - Buka file konfigurasi koneksi database di proyek Anda. Contoh: `config.php` atau `db_connect.php`.
   - Ubah bagian berikut sesuai dengan konfigurasi database Anda:

     ```php
     $conn = mysqli_connect("database_host", "username", "password", "database_name");
     ```

     Contoh:

     ```php
     $conn = mysqli_connect("localhost", "root", "", "nama_database");
     ```

4. **Jalankan Aplikasi**:
   - Buka browser dan akses proyek Anda. Contoh: `http://localhost/nama_proyek`.
   - Proyek Anda sekarang sudah berjalan dan terhubung dengan database.

## Troubleshooting

- Jika mengalami masalah saat mengimport file SQL, pastikan file tersebut tidak corrupt dan memiliki struktur yang benar.
- Pastikan detail koneksi database Anda (host, username, password, nama database) benar dan server database berjalan.

