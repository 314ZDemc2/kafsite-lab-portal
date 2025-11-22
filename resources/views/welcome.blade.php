@extends('layouts.app')

@section('title', 'Головна Сторінка')

@section('content')
    @include('includes.slider')

    <div class="row mt-5">
        <div class="col-12">
            <h2 class="mb-4">📰 Останні 10 Головних Новин Порталу</h2>
            
            <div class="p-3 bg-light rounded">
                Тут буде **динамічний вивід 10 новин**, які ми отримаємо з бази даних на наступному етапі (Етап 5.2).
            </div>
        </div>
    </div>
@endsection