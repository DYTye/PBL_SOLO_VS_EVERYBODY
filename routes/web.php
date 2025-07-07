<?php

use App\Models\SPP;
use App\Models\Berita;
use App\Models\Caraosel;
use App\Models\VisiMisi;
use App\Models\Guru\Guru;
use App\Models\Tahun_ajar;
use App\Models\siswa\Kelas;
use App\Models\InfoAkademik;
use App\Models\KenanganItem;
use App\Models\BiodataSekolah;
use App\Models\RaportKenangan;
use App\Models\SambutanKepsek;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SPPController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\Quillcontroller;
use App\Http\Controllers\SuratController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\ExampleController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CaraoselController;
use App\Http\Controllers\HakaksesController;
use App\Http\Controllers\VisiMisiController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Guru\GuruController;
use App\Http\Controllers\TahunAjarController;
use App\Http\Controllers\Siswa\SiswaController;
use App\Http\Controllers\InfoAkademikController;
use App\Http\Controllers\KenanganItemController;
use App\Http\Controllers\BiodataSekolahController;
use App\Http\Controllers\RaportKenanganController;
use App\Http\Controllers\SambutanKepsekController;
use App\Http\Controllers\KelebihanSekolahController;


Route::get('/', function () {
return redirect('dashboard');
});


Route::resource('dashboard',DashboardController::class);
Route::resource('dashboard/profil',DashboardController::class);
// routes/web.php

Route::get('/sejarah', [DashboardController::class, 'sejarah'])->name('sejarah');
Route::get('/beritafe', [DashboardController::class, 'berita'])->name('berita');
Route::get('/kelebihanfe', [DashboardController::class, 'kelebihanfe'])->name('kelebihanfe');
Route::get('/profil', [BiodataSekolahController::class, 'profil'])->name('profil');
Route::get('beritafe/{id}', [BeritaController::class, 'beritashow'])->name('beritafe.show');
Route::get('/kenangan-pdf/{id}', [RaportKenanganController::class, 'exportPdf'])->name('kenangan.pdf');
Route::post('/kenanganitem', [KenanganItemController::class, 'store'])->name('kenanganitem.store');
Route::get('/kenanganitem/index/{raport_id}', [KenanganItemController::class, 'index'])->name('kenanganitem.index');
// Route::get('/kenang/{id}', [RaportKenanganController::class, 'show'])->name('kenang.show')
// ->withoutMiddleware(['auth']) 
// ->name('kenangan.pdf');
Route::get('/kenangfe',[RaportKenanganController::class,'fe'])->name('kenangfe');




Auth::routes();
Route::get('/editor', function () {
    return view('editor');
});


Route::middleware(['auth'])->group(function () {
    Route::resource('visi',VisiMisiController::class);
    Route::resource('caraosel', CaraoselController::class);
    Route::resource('biodata', BiodataSekolahController::class);
    Route::resource('berita', BeritaController::class);
    Route::resource('guru', GuruController::class);
    Route::get('/guru/{id}/detail', [GuruController::class, 'detail'])->name('guru.detail');
    Route::post('/ckeditor/upload', [UploadController::class, 'upload'])->name('ckeditor.upload');
    Route::resource('sambutan', SambutanKepsekController::class);
    Route::resource('kelebihan', KelebihanSekolahController::class);
    Route::resource('info',InfoAkademikController::class);
    Route::resource('/tahunajar', TahunAjarController::class);
    Route::resource('/kelas', KelasController::class);
    Route::resource('/kenang', RaportKenanganController::class);

Route::get('/kenanganitem/create/{kenangan_id}', [KenanganItemController::class, 'create'])->name('kenanganitem.create');
Route::get('/kenanganitem/{id}/edit', [KenanganItemController::class, 'edit'])->name('kenanganitem.edit');
Route::put('/kenanganitem/{id}', [KenanganItemController::class, 'update'])->name('kenanganitem.update');
Route::delete('/kenanganitem/{id}', [KenanganItemController::class, 'destroy'])->name('kenanganitem.destroy');














    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::put('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
    Route::get('/profile/change-password', [ProfileController::class, 'changepassword'])->name('profile.change-password');
    Route::put('/profile/password', [ProfileController::class, 'password'])->name('profile.password');
    Route::get('/blank-page', [App\Http\Controllers\HomeController::class, 'blank'])->name('blank');

    Route::get('/hakakses', [App\Http\Controllers\HakaksesController::class, 'index'])->name('hakakses.index')->middleware('superadmin');
    Route::get('/hakakses/edit/{id}', [App\Http\Controllers\HakaksesController::class, 'edit'])->name('hakakses.edit')->middleware('superadmin');
    Route::put('/hakakses/update/{id}', [App\Http\Controllers\HakaksesController::class, 'update'])->name('hakakses.update')->middleware('superadmin');
    Route::delete('/hakakses/delete/{id}', [App\Http\Controllers\HakaksesController::class, 'destroy'])->name('hakakses.delete')->middleware('superadmin');

    Route::get('/table-example', [App\Http\Controllers\ExampleController::class, 'table'])->name('table.example');
    Route::get('/clock-example', [App\Http\Controllers\ExampleController::class, 'clock'])->name('clock.example');
    Route::get('/chart-example', [App\Http\Controllers\ExampleController::class, 'chart'])->name('chart.example');
    Route::get('/form-example', [App\Http\Controllers\ExampleController::class, 'form'])->name('form.example');
    Route::get('/map-example', [App\Http\Controllers\ExampleController::class, 'map'])->name('map.example');
    Route::get('/calendar-example', [App\Http\Controllers\ExampleController::class, 'calendar'])->name('calendar.example');
    Route::get('/gallery-example', [App\Http\Controllers\ExampleController::class, 'gallery'])->name('gallery.example');
    Route::get('/todo-example', [App\Http\Controllers\ExampleController::class, 'todo'])->name('todo.example');
    Route::get('/contact-example', [App\Http\Controllers\ExampleController::class, 'contact'])->name('contact.example');
    Route::get('/faq-example', [App\Http\Controllers\ExampleController::class, 'faq'])->name('faq.example');
    Route::get('/news-example', [App\Http\Controllers\ExampleController::class, 'news'])->name('news.example');
    Route::get('/about-example', [App\Http\Controllers\ExampleController::class, 'about'])->name('about.example');
});
