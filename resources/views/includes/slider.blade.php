<div id="mainslider" class="carousel slide carousel-fade mb-5 rounded shadow-lg" data-bs-ride="carousel">
    <div class="carousel-inner rounded shadow">
        
        {{-- Слайд 1 --}}
        <div class="carousel-item active">
            <!-- ЗМІНА: Додано стиль max-height та object-fit: cover -->
            <img src="{{ asset('img/welcome.png') }}" class="d-block w-100" alt="Слайд 1" style="max-height: 500px; object-fit: cover;">
            <div class="carousel-caption d-none d-md-block text-dark">
                <h5>Ласкаво просимо!</h5>
                <p>Передові технології та наукові дослідження.</p>
            </div>
        </div>
        
        {{-- Слайд 2 --}}
        <div class="carousel-item">
            <!-- ЗМІНА: Додано стиль max-height та object-fit: cover -->
            <img src="{{ asset('img/prjct.png') }}" class="d-block w-100" alt="Слайд 2" style="max-height: 500px; object-fit: cover;">
            <div class="carousel-caption d-none d-md-block text-light">
                <h5>Навчальний процес</h5>
                <p>Практичні знання та сучасні методики.</p>
            </div>
        </div>
        
        {{-- Слайд 3 --}}
        <div class="carousel-item">
            <!-- ЗМІНА: Додано стиль max-height та object-fit: cover -->
            <img src="{{ asset('img/graf.png') }}" class="d-block w-100" alt="Слайд 3" style="max-height: 500px; object-fit: cover;">
            <div class="carousel-caption d-none d-md-block text-muted">
                <h5>Наші Досягнення</h5>
                <p>Результати роботи нашої команди.</p>
            </div>
        </div>
    </div>

    <!-- Кнопки навігації -->
    <button class="carousel-control-prev" type="button" data-bs-target="#mainslider" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    
    <button class="carousel-control-next" type="button" data-bs-target="#mainslider" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>