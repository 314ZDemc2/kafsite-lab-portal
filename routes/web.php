<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\AdminController; 
use App\Models\News; 

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

/* --- ЗАХИЩЕНА АДМІН-ПАНЕЛЬ --- */
Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('messages', [AdminController::class, 'showMessages'])->name('admin.messages');
    Route::post('messages/{message}/read', [AdminController::class, 'markAsRead'])->name('admin.messages.read');
});

/* --- МАРШРУТИ АВТЕНТИФІКАЦІЇ --- */
// Цей рядок реєструє маршрути /login, /logout, /register
Auth::routes();