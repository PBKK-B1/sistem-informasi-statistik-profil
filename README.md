# Sistem Informasi Statik Profil Kelompok 1

Website profil akademik enam anggota Kelompok 1, Teknik Informatika ITS.

## Arsitektur

URL → routes/web.php → PageController → Blade View.
Semua route halaman menggunakan PageController. Layout bersama memakai Bootstrap 5, sedangkan stylesheet dan interaksi khusus dibangun melalui Vite.

## Menjalankan

Persyaratan: PHP 8.3 atau lebih baru dan Composer. Dependensi yang terkunci saat ini membutuhkan PHP 8.4; pengembangan dan pengujian menggunakan PHP 8.4.

Folder awal hanya berisi Git, sehingga kerangka Laravel ditambahkan. File .env tidak dibuat atau diubah oleh implementasi ini dan sudah diabaikan oleh .gitignore.

Untuk setup pertama di PowerShell, jika .env belum tersedia:

```powershell
composer install
if (!(Test-Path .env)) { Copy-Item .env.example .env }
php artisan key:generate
if (!(Test-Path database/database.sqlite)) { New-Item database/database.sqlite -ItemType File }
php artisan migrate
npm install
npm run build
php artisan serve
```

Setelah setup, jalankan `npm run build` saat aset frontend berubah, kemudian `php artisan serve`.
Koneksi internet diperlukan untuk memuat Bootstrap, Bootstrap Icons, dan webfont.

## URL

- http://127.0.0.1:8000/
- http://127.0.0.1:8000/about
- http://127.0.0.1:8000/project-idea
- http://127.0.0.1:8000/hitung/10/5/kali
- http://127.0.0.1:8000/hitung/10/5/tambah
- http://127.0.0.1:8000/hitung/10/5/kurang
- http://127.0.0.1:8000/hitung/10/5/bagi
- http://127.0.0.1:8000/hitung/10/0/bagi (pesan pembagian nol)
- http://127.0.0.1:8000/hitung/10/5/pangkat (pesan operasi tidak valid)
- http://127.0.0.1:8000/hitung/abc/5/tambah (pesan input bukan angka)

## Pengujian

```powershell
php artisan test
```

Pengujian mencakup halaman profil Kelompok 1 dengan enam biodata, layout, empat operasi, angka negatif/desimal, hasil nol, dan input tidak valid. Kalkulator menggunakan aritmetika floating point PHP untuk perhitungan sederhana.
