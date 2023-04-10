![Aplikasi SIANTON](public/admin/assets/img/logo_sianton.png "Aplikasi SIANTON")

Aplikasi SIANTON adalah

<hr>

## Daftar Isi
1. [Fitur](#fitur)
3. [Instalasi](#instalasi)
    - [Spesifikasi dan Kebutuhan Software](#spesifikasi-dan-kebutuhan-software)
    - [Cara Install](#cara-install)
    - [Cara Menjalankan](#cara-menjalankan)
4. [Info Credential](#info-credential)
    - [Login Admin](#login-admin)
    - [Login Dokter](#login-dokter)
    - [Proses Entry Antrian](#proses-entry-antrian)
5. [Demo Aplikasi](#demo-aplikasi)

<hr>

## Fitur

Fitur pada Aplikasi ini meliputi:

1. Akun Login
    - Login dan Logout User
    - Ganti Password User
2. Manajemen Antrian
    - List Antrian
    - Pencarian Pasien
    - Entry Antri
    - Cetak Kartu Antri (PDF; Format A4)
3. Manajemen Pasien
    - List Pasien
    - Input User Baru
    - Edit Pasien
    - Hapus Pasien (Jika tidak ada verifikasi antrian)
    - Verifikasi Antrian (Menambahkan hasil diagnosa, dan dosis obat setelah diperiksa Dokter)
    - Rekam Medis Pasien
4. Laporan
    - Data Pasien

<hr>

## Instalasi

### Spesifikasi dan Kebutuhan Software

- PHP ^7.2
- Laravel 6.x
- Database MySQL atau MariaDB

### Cara Install

1. Clone atau download source code
    - Buka CMD/git bash, clone repo dengan mengetikkan `git clone https://github.com/Widyarhn/proyek2_sianton.git`
    - Jika tidak menggunakan Git, silakan **Download Zip** dan *extract* pada direktori web server (misal: xampp/htdocs)
2. Setelah selesai download, buka source code yang telah di unduh pada code editor (misal: Visual Studio Code) Berikut cara membuka pada CMD
    - Ketik `cd proyek2_sianton` untuk masuk ke folder hasil clone tadi
    - Ketik `code .` untuk masuk ke vscode melalui CMD

### Cara Menjalankan

1. Pada terminal ketik `composer install` (tunggu sampai selesai install)
2. `cp .env.example .env`
    - Jika tidak menggunakan Git, bisa rename file `.env.example` menjadi `.env`
3. Pada terminal `php artisan key:generate`
4. Buat **database pada mysql** untuk aplikasi ini (`dbsianton`)
     - Atau bisa impor dari file database yang telah tersedia didalam folder ini pada mysql (`dbsianton.sql`)
5. **Setting database** pada file `.env`
6. Samakan kode berikut pada pada file `.env` yang sudah ada (jika belum ada tambahkan)
    ```
    APP_NAME=SIANTON

    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=dbsianton
    DB_USERNAME=root
    
    VITE_PUSHER_APP_KEY="${PUSHER_APP_KEY}"
    VITE_PUSHER_HOST="${PUSHER_HOST}"
    VITE_PUSHER_PORT="${PUSHER_PORT}"
    VITE_PUSHER_SCHEME="${PUSHER_SCHEME}"
    VITE_PUSHER_APP_CLUSTER="${PUSHER_APP_CLUSTER}"

    FILESYSTEM_DISK = public
    ```
7. Ketik `php artisan migrate --seed`
    - Jika sudah ada data didalam database `dbsianton`, bisa menggunakan `php artisan migrate:refresh --seed`
8. Ketik `php artisan storage:link`
    - Pastikan pada folder public tidak ada folder storage (jika ada, folder storage pada public/storage bisa dihapus saja)
9. Ketik `php artisan serve`
10. Selesai

<hr>

## Info Credential

### Login Admin

Akun admin sudah tersedia yaitu:
```
Email: admin@gmail.com
Password: password
```

### Login Dokter

1. Akun dokter harus dibuat terlebih dahulu oleh admin
2. Untuk log in hanya perlu input email yang telah dibuat oleh admin, dengan password default yaitu:
```
password
```

Catatan:
- Password **Akun User** adalah default yaitu `password`.


### Proses Entry Antrian

Proses Entry Antrian baru:

1. User klik tombol **Daftar Antrian**
3. Cari nik user (jika tidak nik yang sesuai artinya belum pernah melakukan pemeriksaan disini. Sehingga bisa membuat antrian baru dengan klik tombol **Daftar Antrian**)
4. Isi data pasien sesuai formulir, kemudian klik tombol **Simpan**
5. Isi **Jumlah Item**, klik **Tambah**
6. Kartu antrian dalam format PDF ukuran A4 akan otomatis terdownload
7. Antrian selesai dibuat

<hr>

## Demo Aplikasi

| URL | http://127.0.0.1:8000/login |
| --- | --- |
| email | admin@gmail.com |
| password | pasword |
