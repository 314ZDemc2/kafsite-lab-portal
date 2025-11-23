<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    /**
     * Шлях, куди користувачів буде перенаправлено після входу.
     * МИ ЗМІНЮЄМО ЦЕ З '/home' НА КОРЕНЕВИЙ ШЛЯХ АБО АДМІН-ПАНЕЛЬ.
     *
     * @var string
     */
    protected $redirectTo = '/'; // <--- ЗМІНИТИ З '/home' НА '/'

    /**
     * Створити новий екземпляр контролера.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}