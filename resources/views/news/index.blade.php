@extends('layouts.app')

@section('title', 'Усі Новини')

@section('content')
{{--
Контейнер Bootstrap вже існує у layouts.app (всередині <main>),
тому ми починаємо без зовнішнього контейнера, використовуючи його переваги:
обмеження ширини та центрування.
--}}

<h1 class="text-center mb-5 border-bottom border-primary pb-2" style="font-size: 2.5rem; font-weight: 700;">
ВСІ АКТУАЛЬНІ НОВИНИ ПОРТАЛУ
</h1>

{{-- СІТКА: Bootstrap Grid. Клас g-4 додає відступи (gap) між картками. --}}

<div class="row g-4">

@forelse($news as $item)
    {{-- 
        Кожен елемент займає:
        col-12: 100% ширини на мобільних пристроях
        col-md-6: 50% ширини на середніх (2 колонки)
        col-lg-4: 33.3% ширини на великих (3 колонки)
        Клас d-flex забезпечує, що всі картки будуть однакової висоти.
    --}}
    <div class="col-12 col-md-6 col-lg-4 d-flex">
        {{-- Картка Новини --}}
        <div class="card shadow-sm w-100 h-100 transition-shadow-hover">
            
            @if($item->image_path)
                {{-- Якщо є зображення, відображаємо його --}}
                <img src="{{ $item->image_path }}" class="card-img-top" alt="Зображення для {{ $item->title }}" style="height: 200px; object-fit: cover;">
            @else
                {{-- Заглушка, якщо зображення відсутнє --}}
                <div class="bg-light d-flex align-items-center justify-content-center" style="height: 200px;">
                    <svg width="40" height="40" fill="currentColor" class="text-secondary" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4 16h12a2 2 0 002-2V4a2 2 0 00-2-2H4a2 2 0 00-2 2v12a2 2 0 002 2zM12.5 10a.5.5 0 11-1 0 .5.5 0 011 0zm-1.5 1.5a.5.5 0 11-1 0 .5.5 0 011 0zm-1.5 1.5a.5.5 0 11-1 0 .5.5 0 011 0zm-1.5 1.5a.5.5 0 11-1 0 .5.5 0 011 0zM14 14H4V4h10v10zM11 5H5v7h6V5z"/>
                    </svg>
                </div>
            @endif
            
            <div class="card-body d-flex flex-column">
                {{-- Дата публікації --}}
                <small class="text-muted mb-2">Опубліковано: {{ $item->created_at->format('d.m.Y') }}</small>

                {{-- Заголовок --}}
                <h5 class="card-title fw-bold mb-3">
                    <a href="{{ route('news.show', $item->slug) }}" class="text-decoration-none text-dark">{{ $item->title }}</a>
                </h5>
                
                {{-- Короткий опис --}}
                <p class="card-text text-muted mb-4 flex-grow-1">
                    {{ \Illuminate\Support\Str::limit($item->body, 120) }}
                </p>
                
                {{-- Кнопка "Читати далі". mt-auto та align-self-start забезпечують вирівнювання кнопки до низу картки --}}
                <a href="{{ route('news.show', $item->slug) }}" class="btn btn-primary mt-auto align-self-start">
                    Читати далі &raquo;
                </a>
            </div>
        </div>
    </div>
@empty
    {{-- Повідомлення, якщо новин немає --}}
    <div class="col-12">
        <div class="alert alert-warning text-center" role="alert">
            <h4 class="alert-heading">Увага!</h4>
            <p>На жаль, новин поки що немає. Будь ласка, створіть тестові дані командою:</p>
            <code class="d-block mt-3 p-2 bg-warning-subtle rounded">php artisan migrate:fresh --seed</code>
        </div>
    </div>
@endforelse


</div>

{{-- Пагінація --}}
@if($news->hasPages())
<div class="d-flex justify-content-center mt-5">
{{ $news->links('pagination::bootstrap-5') }}
</div>
@endif

<style>
/* Додаємо невеликий CSS для красивого ефекту тіні при наведенні */
.transition-shadow-hover {
transition: box-shadow 0.3s ease;
}
.transition-shadow-hover:hover {
box-shadow: 0 0.5rem 1.5rem rgba(0,0,0,.15) !important;
}
</style>

@endsection