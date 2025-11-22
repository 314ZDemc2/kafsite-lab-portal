@extends('layouts.app')

@section('title', $item->title ?? 'Деталі Новини')

@section('content')
{{--
Використовуємо row justify-content-center для центрування контенту,
який вже обгорнутий у контейнер у вашому основному макеті layouts.app.blade.php.
--}}

<div class="row justify-content-center">
<div class="col-lg-10 col-xl-8">

    {{-- Кнопка "Назад до новин" --}}
    <div class="mb-4">
        <a href="{{ route('news.index') }}" class="btn btn-outline-primary btn-sm">
            &laquo; Назад до усіх новин
        </a>
    </div>

    {{-- Заголовок Новини --}}
    <h1 class="mb-3" style="font-weight: 700;">
        {{ $item->title }}
    </h1>

    {{-- Метаінформація (Дата) --}}
    <p class="text-muted border-bottom pb-3 mb-4">
        <small>Опубліковано: <span class="fw-bold">{{ $item->created_at->format('d.m.Y H:i') }}</span></small>
    </p>

    {{-- Зображення Новини --}}
    @if($item->image_path)
        <div class="mb-5 overflow-hidden rounded-3 shadow-lg">
            <img src="{{ $item->image_path }}" alt="Головне зображення для {{ $item->title }}" class="img-fluid w-100" style="object-fit: cover; max-height: 400px;">
        </div>
    @else
        {{-- Заглушка, якщо зображення відсутнє --}}
        <div class="bg-light d-flex align-items-center justify-content-center mb-5 border rounded-3" style="height: 300px;">
            <p class="text-secondary mb-0">Зображення відсутнє</p>
        </div>
    @endif

    {{-- Основний текст Новини --}}
    <div class="lead text-dark" style="line-height: 1.8;">
        {{-- 
            Використовуємо nl2br для форматування переносів рядків з бази даних.
            e() використовується для екранування (безпеки).
        --}}
        <p>{!! nl2br(e($item->body)) !!}</p>
    </div>
    
    {{-- Додатковий роздільник та кнопка --}}
    <div class="mt-5 pt-4 border-top text-center">
        <a href="{{ route('news.index') }}" class="btn btn-lg btn-success shadow">
            Повернутися до списку новин
        </a>
    </div>

</div>


</div>
@endsection