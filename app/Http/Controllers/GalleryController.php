<?php

namespace App\Http\Controllers;

use App\Models\GalleryItem;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    /**
     * Відображення галереї з пагінацією.
     */
    public function index()
    {
        // Отримати елементи галереї, відсортовані за датою створення (новіші перші)
        $items = GalleryItem::latest()->paginate(9); // 9 елементів на сторінку
        
        return view('gallery.index', compact('items'));
    }
}