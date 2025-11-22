<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller; // ❗ ПОТРІБНИЙ ІМПОРТ ❗

class PageController extends Controller
{
    // ... ваш метод about() ...
    public function about()
    {
        return view('pages.about');
    }

    // ... ваш метод contact() ...
    public function contact()
    {
        return view('pages.contact');
    }

    // Метод для AJAX-форми (Етап 11)
    public function submitContact(Request $request)
    {
        // 1. Валідація даних
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);
        
        // 2. Для цілей курсової роботи просто повертаємо успішну відповідь.
        return response()->json(['success' => true, 'message' => 'Повідомлення успішно надіслано.']);
    }
}