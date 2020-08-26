## How To Use
Pertama config database terlebih dahulu file `.env` ke koneksi mysql local <br>
setelah itu jalankan command berikut:<br>
```sh
    php artisan migrate
```
lalu jalankan query pada file `query.sql` ke database yang digunakan <br>
setelah itu jalankan aplikasi ke port `8000` dengan command:<br>
```sh
    php artisan serve
```
