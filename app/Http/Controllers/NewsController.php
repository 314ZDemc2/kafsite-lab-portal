<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller; 
use App\Models\News; 

class NewsController extends Controller
{
    /**
     * Відображення списку всіх новин з пагінацією.
     */
    public function index()
    {
        // Отримати всі новини, відсортовані за датою створення (найновіші перші)
        // Додаємо пагінацію: 8 новин на сторінку
        $news = News::latest()->paginate(8);
        
        return view('news.index', compact('news'));
    }

    /**
     * Відображення конкретної новини (деталі) за slug.
     */
    public function show(string $slug)
    {
        // Знаходимо новину за унікальним slug. 
        // firstOrFail() видасть помилку 404, якщо новини не знайдено.
        $item = News::where('slug', $slug)->firstOrFail();
        
        return view('news.show', compact('item'));
    }
    
    // Ці методи були створені командою Route::resource, але не використовуються для фронтенду:
    public function create() { /* ... */ }
    public function store(Request $request) { /* ... */ }
    public function edit(string $id) { /* ... */ }
    public function update(Request $request, string $id) { /* ... */ }
    public function destroy(string $id) { /* ... */ }
}