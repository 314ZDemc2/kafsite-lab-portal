<?php

use Illuminate\Support\Facades\Route;
// kafsite/routes/web.php
use App\Http\Controllers\PageController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\GalleryController;

/* Головна сторінка (Вимога 1) */
Route::get('/', function () {
    // Поки що повертаємо лише шаблон. Логіку додамо пізніше.
    return view('welcome');
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

Route::get('/', function () {
    return view('welcome');
});
