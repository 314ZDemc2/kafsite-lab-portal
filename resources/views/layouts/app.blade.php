<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-100">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    {{-- CSRF Token --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', config('app.name', 'Лабораторія'))</title>

    {{-- Bootstrap CSS --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    {{-- jQuery UI CSS (Якщо використовується) --}}
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.3/themes/base/jquery-ui.css">
    
    {{-- Власні CSS стилі --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    
</head>
<body class="d-flex flex-column h-100">

    {{-- Хедер з меню та посиланнями автентифікації --}}
    @include('includes.header') 

    <main class="flex-shrink-0 py-4">
        <div class="container">
            @yield('content')
        </div>
    </main>

    {{-- Футер --}}
    @include('includes.footer') 

    {{-- СКРИПТИ --}}

    {{-- jQuery --}}
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script> 
    <script src="https://code.jquery.com/ui/1.13.3/jquery-ui.min.js"></script> 
    
    {{-- Bootstrap JS (Bundle) --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    {{-- Власний JS --}}
    <script src="{{ asset('js/script.js') }}"></script>
    
    @yield('scripts') 

</body>
</html>