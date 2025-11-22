@extends('layouts.app')

@section('title', 'Галерея Навчальної Лабораторії')

@section('content')
{{-- 
    Контейнер Bootstrap вже існує у layouts.app. 
    Використовуємо row justify-content-center для вмісту.
--}}
<div class="row justify-content-center">
    <div class="col-12">
        <h1 class="text-center mb-5 border-bottom border-primary pb-2" style="font-size: 2.5rem; font-weight: 700;">
            Галерея Навчальної Лабораторії
        </h1>

        {{-- СІТКА ГАЛЕРЕЇ: 3 колонки на великих екранах, 2 на середніх --}}
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
            
            @forelse($items as $item)
                <div class="col d-flex">
                    <div class="card shadow-sm w-100 h-100 border-0 rounded-3 transition-shadow-hover">
                        <a href="{{ $item->file_path }}" data-lightbox="gallery" data-title="{{ $item->title }}">
                            <img 
                                src="{{ $item->thumbnail_path }}" 
                                class="card-img-top" 
                                alt="{{ $item->title }}" 
                                style="height: 250px; object-fit: cover;">
                        </a>
                        
                        <div class="card-body p-3 text-center">
                            <h6 class="card-title fw-semibold text-primary mb-1">{{ $item->title }}</h6>
                            <small class="text-muted">{{ $item->created_at->format('d.m.Y') }}</small>
                        </div>
                    </div>
                </div>
            @empty
                {{-- Повідомлення, якщо немає елементів --}}
                <div class="col-12">
                    <div class="alert alert-info text-center" role="alert">
                        <h4 class="alert-heading">Інформація!</h4>
                        <p>На жаль, у галереї немає фотографій.</p>
                    </div>
                </div>
            @endforelse
        </div>

        {{-- Пагінація --}}
        @if($items->hasPages())
            <div class="d-flex justify-content-center mt-5">
                {{ $items->links('pagination::bootstrap-5') }}
            </div>
        @endif
    </div>
</div>

<style>
/* Додаємо CSS, який ви вже використовували для ефекту тіні */
.transition-shadow-hover {
    transition: box-shadow 0.3s ease;
}
.transition-shadow-hover:hover {
    box-shadow: 0 0.5rem 1.5rem rgba(0,0,0,.15) !important;
}
</style>
@endsection