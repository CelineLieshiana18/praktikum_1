<h1>Sebelum menjalankan project :</h1>

Wajib install composer terlebih dahulu
http://teguhhidayahal.blogspot.com/2017/10/pertemuan-ke-3-laravel-installasi.html

Lalu masukkan syntax ini pada terminal directory project

-    composer install
-    php artisan key:generate
- duplicate file .env.example jadi .env

- pada .env DB_DATABASE = praktikum_semantik * ganti jadi itu
- buat db "praktikum_semantik" di phpmyadmin terlebih dahulu
 
-    php artisan migrate 
  Kalau saat php artisan migrate muncul error :
    SQLSTATE[42000]: Syntax error or access violation: 1071 Specified key was too long; max key length is 767 bytes (SQL: alter table `users` add unique              `users_email_unique`(`email`))
        *  buka AppServiceProvider.php
        *  tambahkan :
        
        use Illuminate\Support\Facades\Schema;
            function boot()
            {
                Schema::defaultStringLength(191);
            }
            
- php artisan serve
