<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactMessage; // Імпорт моделі повідомлень

class AdminController extends Controller
{
    /**
     * Відображає список усіх повідомлень з контактної форми.
     */
    public function showMessages()
    {
        $messages = ContactMessage::latest()->paginate(15);
        return view('admin.messages', compact('messages'));
    }

    /**
     * Позначає повідомлення як прочитане.
     */
    public function markAsRead(ContactMessage $message)
    {
        $message->is_read = true;
        $message->save();
        
        return redirect()->route('admin.messages')->with('success', 'Повідомлення позначено як прочитане.');
    }

    /**
     * Видаляє повідомлення.
     */
    public function destroy(ContactMessage $message)
    {
        $message->delete();
        
        return redirect()->route('admin.messages')->with('success', 'Повідомлення успішно видалено.');
    }
}