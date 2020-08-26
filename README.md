## How To Use
Pertama copy file `.env.example` menjadi `.env` config database terlebih dahulu file `.env` ke koneksi mysql local<br>
setelah itu jalankan command berikut:<br>
```sh
    composer install
    php artisan key:generate
    php artisan migrate
```
lalu jalankan query pada file `query.sql` ke database yang digunakan <br>
setelah itu jalankan aplikasi ke port `8000` dengan command:<br>
```sh
    php artisan serve
```
