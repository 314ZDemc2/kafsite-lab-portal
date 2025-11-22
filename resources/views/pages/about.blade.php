@extends('layouts.app')

@section('title', 'Про Сайт')

@section('content')
{{-- Головний контейнер з відступами --}}
<div class="row justify-content-center">
    <div class="col-12">
        <h1 class="text-center mb-4 pt-3 pb-2 border-bottom border-primary" style="font-size: 2.5rem; font-weight: 700;">
            <i class="bi bi-info-circle-fill text-primary me-3"></i>Про Навчальний Портал Кафедри
        </h1>
        
        {{-- Секція Вступу та Місії --}}
        <div class="row align-items-center mb-5">
            <div class="col-md-7">
                <h2 class="fw-bold mb-3 text-secondary">Місія та Мета Курсової Роботи</h2>
                <p class="lead text-muted">
                    Цей портал розроблено в рамках курсової роботи для демонстрації навичок у веб-розробці 
                    на основі сучасного PHP-фреймворку Laravel. Головна мета — створити функціональну, 
                    адаптивну та інформативну платформу для потреб студентів та викладачів кафедри.
                </p>
                <p class="text-dark">
                    Портал забезпечує швидкий доступ до актуальних новин кафедри, фотогалерей та контактної інформації. 
                    Всі дані зберігаються у базі даних, керування якою відбувається через модель Eloquent.
                </p>
            </div>
            <div class="col-md-5 text-center">
                {{-- Заглушка для зображення кафедри --}}
                <div class="bg-light p-4 rounded-3 shadow-sm border">
                    <i class="bi bi-building-fill-gear fs-1 text-primary"></i>
                    <p class="mb-0 mt-2 text-muted">Місце для фотографії або логотипу кафедри.</p>
                </div>
            </div>
        </div>

        {{-- Роздільник --}}
        <hr class="my-5">

        {{-- Секція Використані Технології --}}
        <h2 class="text-center fw-bold mb-4">Використані Технології</h2>
        <p class="text-center text-muted mb-5">Проєкт побудований на сучасному стеку, що забезпечує швидкість та надійність.</p>

        <div class="row row-cols-1 row-cols-md-4 g-4 text-center">
            
            <div class="col">
                <div class="card h-100 shadow-sm border-0 py-3">
                    <div class="card-body">
                        <i class="bi bi-file-earmark-code-fill text-danger" style="font-size: 3rem;"></i>
                        <h5 class="card-title mt-3 fw-bold">Laravel 10 / PHP 8.x</h5>
                        <p class="card-text text-muted small">
                            Надійна та масштабована архітектура Model-View-Controller (MVC) для бекенду.
                        </p>
                    </div>
                </div>
            </div>
            
            <div class="col">
                <div class="card h-100 shadow-sm border-0 py-3">
                    <div class="card-body">
                        <i class="bi bi-bootstrap-fill text-primary" style="font-size: 3rem;"></i>
                        <h5 class="card-title mt-3 fw-bold">Bootstrap 5</h5>
                        <p class="card-text text-muted small">
                            Повністю адаптивний та сучасний інтерфейс (Frontend).
                        </p>
                    </div>
                </div>
            </div>
            
            <div class="col">
                <div class="card h-100 shadow-sm border-0 py-3">
                    <div class="card-body">
                        <i class="bi bi-database-fill-check text-success" style="font-size: 3rem;"></i>
                        <h5 class="card-title mt-3 fw-bold">Eloquent ORM</h5>
                        <p class="card-text text-muted small">
                            Ефективне керування базою даних та міграції.
                        </p>
                    </div>
                </div>
            </div>

            {{-- ДОДАНО: Блок для jQuery --}}
            <div class="col">
                <div class="card h-100 shadow-sm border-0 py-3">
                    <div class="card-body">
                        <i class="bi bi-lightning-charge-fill" style="font-size: 3rem; color: #0769AD;"></i>
                        <h5 class="card-title mt-3 fw-bold">jQuery</h5>
                        <p class="card-text text-muted small">
                            Використовується для підвищення інтерактивності фронтенду, динамічної роботи з DOM та реалізації форм зворотного зв'язку (AJAX).
                        </p>
                    </div>
                </div>
            </div>
            {{-- КІНЕЦЬ: Додано блок для jQuery --}}
            
        </div>
        
        {{-- Роздільник --}}
        <hr class="my-5">

        {{-- Секція Контактів --}}
        <h2 class="text-center fw-bold mb-4">Зворотний Зв'язок</h2>
        <p class="text-center mb-5">Якщо у вас є запитання щодо курсової роботи або проєкту, зв'яжіться з нами.</p>

        <div class="row justify-content-center">
            <div class="col-md-6 text-center">
                <ul class="list-unstyled text-muted">
                    <li class="mb-2"><i class="bi bi-envelope me-2 text-primary"></i>Email: eduard.lebid@viti.edu.ua</li>
                    <li class="mb-2"><i class="bi bi-telephone me-2 text-primary"></i>Телефон: +38 073 11 42 391</li>
                </ul>
            </div>
        </div>

    </div>
</div>
@endsection

<style>
/* Додаємо базові іконки для прикладу, якщо вони не підключені у головному макеті */
@import url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css");
</style>


Я оновив сітку в секції "Використані Технології" з `row-cols-md-3` на **`row-cols-md-4`**, щоб усі чотири елементи (Laravel, Bootstrap, Eloquent, jQuery) помістилися в один рядок на десктопі. Це зробить відображення акуратним.