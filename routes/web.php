<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Auth::routes();

Route::get('/', function () {
    return view('login');
});

Route::get('/dashboard', [LoginController::class, 'dashboard'])->name('dashboard');

Route::post('/login', [LoginController::class, 'login'])->name('login');

Route::get('/change-password', [LoginController::class, 'changePassword'])->name('change-password');

Route::get('/edit-profile', [LoginController::class, 'editProfile'])->name('edit-profile');

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    return "Cache is cleared";
});

// 404 for undefined routes
Route::any('/{page?}',function(){
    return View::make('pages.error-pages.error-404');
})->where('page','.*');