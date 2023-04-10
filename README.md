### Cara Install

1. Clone atau download source code
    - Pada gitbash, clone repository `https://github.com/Widyarhn/proyek2_sianton.git`
    - Jika tidak menggunakan Git, silakan **Download Zip** dan *extract* pada direktori web server (misal: xampp/htdocs)
2. Setelah selesai download, buka source code yang telah di unduh pada code editor (misal: Visual Studio Code)

### Cara Menjalankan

1. Pada terminal `composer install`
2. `cp .env.example .env`
     - Jika tidak menggunakan Git, bisa rename file `.env.example` menjadi `.env`
3. `php artisan key:generate`
4. `php artisan storage:link`
5. Lalu buat **database pada mysql** untuk aplikasi ini (`dbsianton`)
     - Atau bisa impor dari file database yang telah tersedia didalam folder ini pada mysql (`dbsianton.sql`)
6. `php artisan migrate --seed`
     - Jika sudah ada data didalam database `dbsianton`, bisa menggunakan `php artisan migrate:refresh --seed`
7. `php artisan serve`
8. Selesai
