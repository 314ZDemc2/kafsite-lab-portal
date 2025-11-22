<!DOCTYPE html>
<html lang="uk" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Навчальна Лабораторія Кафедри')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.3/themes/base/jquery-ui.css">
    
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    
</head>
<body class="d-flex flex-column h-100">

    @include('includes.header') 

    <main class="flex-shrink-0 py-4">
        <div class="container">
            @yield('content')
        </div>
    </main>

    @include('includes.footer') 

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    
    <script src="https://code.jquery.com/ui/1.13.3/jquery-ui.min.js"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <script src="{{ asset('js/script.js') }}"></script>
    
    @yield('scripts') 

</body>
</html>