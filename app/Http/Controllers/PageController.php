<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactMessage; // Імпорт моделі контактних повідомлень
use App\Http\Controllers\Controller; 

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

    // Метод для AJAX-форми 
    public function submitContact(Request $request)
    {
        // 1. Валідація даних
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);
        
        // 2. КРИТИЧНО: ЗБЕРЕЖЕННЯ ПОВІДОМЛЕННЯ У БАЗУ ДАНИХ
        ContactMessage::create($validatedData);
        
        // 3. Повертаємо успішну відповідь.
        return response()->json(['success' => true, 'message' => 'Повідомлення успішно надіслано.']);
    }

    // Якщо ви використовуєте PageController для адмінки, логіка має бути тут:
    // public function showAdminMessages() { ... }
    // public function markMessageAsRead(ContactMessage $message) { ... }
}