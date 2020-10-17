<h1>Sebelum menjalankan project :</h1>

Wajib install composer terlebih dahulu
http://teguhhidayahal.blogspot.com/2017/10/pertemuan-ke-3-laravel-installasi.html

Lalu masukkan syntax ini pada terminal directory project

-        composer install
- duplicate file .env.example jadi .env
- pada .env DB_DATABASE = praktikum_semantik * ganti jadi itu
-        php artisan key:generate
- buat db "praktikum_semantik" di phpmyadmin terlebih dahulu
-        php artisan migrate 
  Kalau saat php artisan migrate muncul error :
    SQLSTATE[42000]: Syntax error or access violation: 1071 Specified key was too long; max key length is 767 bytes (SQL: alter table `users` add unique              `users_email_unique`(`email`)) buka AppServiceProvider.php, tambahkan import dan schema pada function boot():
        
        use Illuminate\Support\Facades\Schema;
            function boot()
            {
                Schema::defaultStringLength(191);
            }
            
            
    drop column yang sudah terbentuk lalu jalankan ```php artisan migrate
-        php artisan serve
- buka link yang tertera pada terminal, misalkan : Starting Laravel development server: http://127.0.0.1:8000 (mengikuti masing masing perangkat)
