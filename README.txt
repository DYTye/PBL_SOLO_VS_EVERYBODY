| Command                                                 | Keterangan                           |
| ------------------------------------------------------- | ------------------------------------ |
| php artisan make:model NamaModel                      | Membuat model baru                   |
| php artisan make:model NamaModel -m                   | Membuat model beserta file migration |
| php artisan make:controller NamaController            | Membuat controller                   |
| php artisan make:controller NamaController --resource | Controller dengan semua method CRUD  |
| php artisan make:migration nama_migration             | Membuat file migrasi                 |
| php artisan make:factory NamaFactory                  | Membuat file factory                 |
| php artisan make:seeder NamaSeeder                    | Membuat file seeder                  |
| php artisan make:request NamaRequest                  | Membuat form request untuk validasi  |
| php artisan make:middleware NamaMiddleware            | Membuat middleware baru              |



| Command                                  | Keterangan                                          |
| ---------------------------------------- | --------------------------------------------------- |
| php artisan migrate                    | Menjalankan semua migrasi                           |
| php artisan migrate:fresh              | Menghapus seluruh tabel dan migrasi ulang dari awal |
| php artisan migrate:rollback           | Membatalkan migrasi terakhir                        |
| php artisan migrate:reset              | Membatalkan semua migrasi                           |
| php artisan db:seed                    | Menjalankan seeder (default DatabaseSeeder)       |
| php artisan db:seed --class=NamaSeeder | Menjalankan seeder tertentu                         |
| php artisan migrate:fresh --seed       | Reset database dan jalankan seeder langsung         |


sambutan kepsek
Guru
berita
Visi misi 
sejarah
ppdb