<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold" href="{{ url('/') }}">
                {{ config('app.name', 'Лабораторія Кафедри') }}
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                
                {{-- ЛІВА ЧАСТИНА: Основні Посилання --}}
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link @if(Route::is('home')) active @endif" href="{{ route('home') }}">Головна</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @if(Route::is('news.index')) active @endif" href="{{ route('news.index') }}">Новини</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @if(Route::is('gallery.index')) active @endif" href="{{ route('gallery.index') }}">Галерея картинок</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @if(Route::is('about')) active @endif" href="{{ route('about') }}">Про сайт</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @if(Route::is('contact')) active @endif" href="{{ route('contact') }}">Контакти</a>
                    </li>
                </ul>
                
                {{-- ПРАВА ЧАСТИНА: АВТЕНТИФІКАЦІЯ ТА АДМІН-ПАНЕЛЬ --}}
                <ul class="navbar-nav ms-auto">
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">Вхід</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">Реєстрація</a>
                            </li>
                        @endif
                    @else
                        {{-- Посилання на Адмін-панель (Тільки для авторизованих) --}}
                        <li class="nav-item">
                            <a class="nav-link btn btn-sm btn-outline-primary me-2" href="{{ route('admin.messages') }}">
                                <i class="bi bi-gear-fill"></i> Адмін-панель
                            </a>
                        </li>
                        
                        {{-- Випадаюче меню Користувача --}}
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                {{-- Посилання на Профіль (якщо потрібно) --}}
                                <a class="dropdown-item" href="#">Профіль</a> 

                                {{-- Кнопка Виходу --}}
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    Вихід
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
</header>
<style>
    /* Додаємо базові іконки для прикладу */
    @import url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css");
</style>