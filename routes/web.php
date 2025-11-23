<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\AdminController; 
use App\Models\News; 
use App\Http\Controllers\Auth\LoginController; // <--- ІМПОРТ КОНТРОЛЕРА ВХОДУ

/* --- СТАНДАРТНІ МАРШРУТИ ПОРТАЛУ --- */
Route::get('/', function () {
    $latestNews = App\Models\News::latest()->take(10)->get();
    return view('welcome', compact('latestNews'));
})->name('home');

// Статичні та динамічні сторінки
Route::get('about', [PageController::class, 'about'])->name('about');
Route::get('contact', [PageController::class, 'contact'])->name('contact');

Route::get('gallery', [GalleryController::class, 'index'])->name('gallery.index');
Route::resource('news', NewsController::class);
Route::post('/submit-contact', [PageController::class, 'submitContact']);


/* --- МАРШРУТИ АВТЕНТИФІКАЦІЇ (ПРИХОВАНІ) --- */

// 1. ВИМКНЕННЯ стандартних маршрутів: залишаємо тільки register і reset
Auth::routes(['login' => false, 'logout' => false, 'register' => false]); 

// 2. СТВОРЕННЯ ПРИХОВАНОГО МАРШРУТУ /admin, який веде на сторінку входу
Route::get('/admin', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/admin', [LoginController::class, 'login']);

// 3. СТВОРЕННЯ МАРШРУТУ ВИХОДУ (Logout)
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');


/* --- ЗАХИЩЕНА АДМІН-ПАНЕЛЬ --- */

Route::prefix('admin/messages')->middleware('auth')->group(function () {
    // Головна сторінка адмінки (список повідомлень)
    Route::get('/', [AdminController::class, 'showMessages'])->name('admin.messages');
    
    // Маршрут для позначення повідомлення як прочитаного (POST для безпеки)
    Route::post('{message}/read', [AdminController::class, 'markAsRead'])->name('admin.messages.read');
    
    // Маршрут для видалення повідомлення (DELETE)
    Route::delete('{message}', [AdminController::class, 'destroy'])->name('admin.messages.destroy');
});