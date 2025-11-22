@extends('layouts.app')

@section('title', 'Контакти')

@section('content')
    <h1 class="mb-4">📞 Контакти Навчальної Лабораторії</h1>
    <hr>
    
    <div class="row">
        <div class="col-md-5">
            <h3>Зв'язок</h3>
            <p><strong>Адреса:</strong> вул. Освітня, 42, корпус А, каб. 101</p>
            <p><strong>Телефон:</strong> +38 (067) 555-55-55</p>
            <p><strong>Email:</strong> lab@kafsite.edu</p>
            
            <h3 class="mt-5">Форма Зворотного Зв'язку</h3>
<div id="status-message" class="alert d-none"></div>

<form id="contactForm">
    @csrf {{-- Токен Laravel для захисту від CSRF --}}
    <div class="mb-3">
        <label for="name" class="form-label">Ваше ім'я</label>
        <input type="text" class="form-control" id="name" name="name" required>
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" required>
    </div>
    <div class="mb-3">
        <label for="message" class="form-label">Повідомлення</label>
        <textarea class="form-control" id="message" name="message" rows="3" required></textarea>
    </div>
    <button type="submit" class="btn btn-success" id="submitBtn">Надіслати</button>
</form>
        </div>
        
        <div class="col-md-7">
            <h3>Розташування на Карті</h3>
            <div id="googleMap" style="height: 400px; width: 100%; border: 1px solid #ccc; border-radius: 5px;"></div>
        </div>
    </div>
@endsection

@section('scripts')
<script>
    function initMap() {
        const labLocation = { lat: 49.8397, lng: 24.0297 }; 
        const map = new google.maps.Map(document.getElementById("googleMap"), {
            zoom: 15,
            center: labLocation,
        });
        const marker = new google.maps.Marker({
            position: labLocation,
            map: map,
            title: "Наша Навчальна Лабораторія"
        });
    }

    window.onload = initMap;
</script>

<script>
// AJAX-скрипт для відправки форми
$(document).ready(function(){
    $('#contactForm').on('submit', function(e){
        e.preventDefault(); // Зупиняємо стандартну відправку форми
        
        var form = $(this);
        var btn = $('#submitBtn');
        var status = $('#status-message');

        btn.prop('disabled', true).text('Надсилання...'); 
        status.removeClass().addClass('alert d-none');

        $.ajax({
            url: "{{ url('/submit-contact') }}", // Маршрут для обробки
            type: "POST",
            data: form.serialize(), // Серіалізуємо дані форми
            
            success: function(response) {
                status.removeClass().addClass('alert alert-success').text('Дякуємо! Ваше повідомлення отримано.');
                form[0].reset(); // Очищуємо форму
                btn.prop('disabled', false).text('Надіслати');
            },
            error: function(xhr) {
                var errorMessage = 'Помилка відправки. Спробуйте пізніше.';
                if (xhr.status === 422) { // Помилка валідації
                    errorMessage = 'Будь ласка, заповніть усі поля коректно.';
                }
                status.removeClass().addClass('alert alert-danger').text(errorMessage);
                btn.prop('disabled', false).text('Надіслати');
            }
        });
    });
});
</script>

<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap">
</script>
@endsection