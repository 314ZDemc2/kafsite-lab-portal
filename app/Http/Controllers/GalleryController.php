<?php

// kafsite/app/Http/Controllers/GalleryController.php
namespace App\Http\Controllers;

use App\Models\GalleryItem; // ❗ Додайте це
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        // Отримуємо всі фото
        $photos = GalleryItem::latest()->get(); 
        return view('gallery.index', compact('photos'));
    }
}