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
            
            <p class="mt-4 text-secondary">
                *Тут буде функціонал AJAX/jQuery для 3-го ступеня складності.*
            </p>
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

<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap">
</script>
@endsection