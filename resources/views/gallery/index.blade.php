@extends('layouts.app')

@section('title', 'Галерея Картинок')

@section('content')
    <h1 class="mb-5">🖼️ Галерея Навчальної Лабораторії</h1>
    
    <div class="row">
        {{-- Виводимо фото, які ми передали з контролера GalleryController@index --}}
        @foreach ($photos as $photo)
            <div class="col-md-4 col-sm-6 mb-4">
                <div class="card shadow-sm h-100">
                    {{-- Посилання, яке буде перехоплено jQuery --}}
                    <a href="{{ $photo->file_path }}" class="gallery-link" 
                       data-title="{{ $photo->title }}">
                        <img src="{{ $photo->thumbnail_path }}" alt="{{ $photo->title }}" class="img-fluid rounded" style="width: 100%; height: 200px; object-fit: cover;">
                    </a>
                    <div class="card-footer text-center small text-muted">
                        {{ $photo->title }}
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    
    {{-- <div class="d-flex justify-content-center mt-4">
        {{ $photos->links('pagination::bootstrap-5') }}
    </div> --}}

    <div id="photo-dialog" title="Перегляд зображення" style="display: none;">
        <img id="dialog-image" src="" alt="Повнорозмірне зображення" style="max-width: 100%; height: auto;">
        <p class="mt-2 text-center" id="dialog-title"></p>
    </div>
@endsection

@section('scripts')
<script>
    $(function() {
        $(".gallery-link").on('click', function(e) {
            e.preventDefault();
            
            var imageUrl = $(this).attr('href');
            var imageTitle = $(this).data('title');
            
            // Встановлюємо URL та заголовок
            $("#dialog-image").attr('src', imageUrl);
            $("#dialog-title").text(imageTitle);
            
            // Відкриваємо jQuery UI Dialog
            $("#photo-dialog").dialog({
                modal: true,
                width: 800,
                maxHeight: 600,
                resizable: false,
                buttons: {
                    "Закрити": function() {
                        $(this).dialog("close");
                    }
                }
            });
        });
    });
</script>
@endsection