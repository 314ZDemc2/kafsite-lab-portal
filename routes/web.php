<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\GalleryController;
use App\Models\News; // Модель для новин

/* Головна сторінка (Вимога 1 та 5) */
Route::get('/', function () {
    // Отримати 10 найновіших новин
    $latestNews = News::latest()->take(10)->get();

    // Передати змінну у шаблон
    return view('welcome', compact('latestNews'));
})->name('home');

/* Статичні сторінки (Меню) */
// 1. Про сайт
Route::get('about', [PageController::class, 'about'])->name('about');
// 2. Контакти (з картою Google)
Route::get('contact', [PageController::class, 'contact'])->name('contact');

/* Динамічні сторінки (Меню) */
// 3. Галерея картинок
Route::get('gallery', [GalleryController::class, 'index'])->name('gallery.index');
// 4. Новини
Route::resource('news', NewsController::class); // Створює всі маршрути для новин (список, деталі, CRUD)

/* Маршрут для AJAX-форми (Етап 11, для 3-го рівня складності) */
Route::post('/submit-contact', [PageController::class, 'submitContact']);