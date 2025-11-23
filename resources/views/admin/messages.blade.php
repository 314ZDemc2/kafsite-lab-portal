@extends('layouts.app')

@section('title', 'Адмін-Панель | Повідомлення')

@section('content')
<div class="row justify-content-center">
    <div class="col-12">
        <h1 class="mb-4 pt-3 pb-2 border-bottom border-primary" style="font-size: 2rem; font-weight: 700;">
            Адмін-Панель: Повідомлення
        </h1>

        {{-- Повідомлення про успіх --}}
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        
        @if($messages->isEmpty())
            <div class="alert alert-info text-center mt-4">
                Наразі нових повідомлень немає.
            </div>
        @else
            <div class="table-responsive">
                <table class="table table-striped table-hover shadow-sm">
                    <thead class="bg-primary text-white">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Статус</th>
                            <th scope="col">Ім'я</th>
                            <th scope="col">Email</th>
                            <th scope="col" style="width: 40%;">Повідомлення</th>
                            <th scope="col">Дата</th>
                            <th scope="col">Дія</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($messages as $message)
                            {{-- Виділяємо непрочитані повідомлення --}}
                            <tr class="@if(!$message->is_read) table-warning fw-bold @endif">
                                <th scope="row">{{ $message->id }}</th>
                                <td>
                                    @if($message->is_read)
                                        <span class="badge bg-success">Прочитано</span>
                                    @else
                                        <span class="badge bg-danger">Нове</span>
                                    @endif
                                </td>
                                <td>{{ $message->name }}</td>
                                <td>{{ $message->email }}</td>
                                {{-- Використання повного шляху для коректної роботи --}}
                                <td>{{ \Illuminate\Support\Str::limit($message->message, 100) }}</td>
                                <td>{{ $message->created_at->format('d.m.Y H:i') }}</td>
                                <td>
                                    @if(!$message->is_read)
                                        {{-- Форма для позначення як прочитане --}}
                                        <form method="POST" action="{{ route('admin.messages.read', $message) }}">
                                            @csrf
                                            <button type="submit" class="btn btn-sm btn-outline-success">
                                                Позначити як прочитане
                                            </button>
                                        </form>
                                    @else
                                        —
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            {{-- Пагінація --}}
            <div class="d-flex justify-content-center mt-4">
                {{ $messages->links('pagination::bootstrap-5') }}
            </div>
        @endif

    </div>
</div>
@endsection