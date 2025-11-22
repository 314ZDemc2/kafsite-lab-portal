<footer class="mt-auto pt-4 pb-3 bg-dark text-light">
    <div class="container">
        
        <div class="row pt-2 pb-3 align-items-center">
            
            {{-- Колонка 1: Навігація --}}
            <div class="col-md-6 mb-3 mb-md-0">
                <h6 class="fw-bold text-uppercase text-primary mb-2">Швидка Навігація</h6>
                <ul class="list-unstyled d-flex flex-wrap m-0 p-0">
                    <li class="me-3"><a href="{{ url('/') }}" class="text-light text-decoration-none small">Головна</a></li>
                    <li class="me-3"><a href="{{ route('news.index') }}" class="text-light text-decoration-none small">Новини</a></li>
                    <li class="me-3"><a href="{{ route('gallery.index') }}" class="text-light text-decoration-none small">Галерея</a></li>
                    <li><a href="{{ url('/about') }}" class="text-light text-decoration-none small">Про сайт</a></li>
                </ul>
            </div>

            {{-- Колонка 2: Контакти та Соцмережі --}}
            <div class="col-md-6 text-md-end">
                <p class="mb-1 small text-muted">Email: info@labkafedra.ua</p>
                <div class="d-inline-flex">
                    <a href="#" class="text-white-50 me-2" title="Facebook"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="text-white-50 me-2" title="Instagram"><i class="bi bi-instagram"></i></a>
                    <a href="#" class="text-white-50" title="Telegram"><i class="bi bi-telegram"></i></a>
                </div>
            </div>
            
        </div>
        
        {{-- НИЖНЯ СЕКЦІЯ: Авторське право --}}
        <div class="border-top border-secondary pt-3 mt-2">
            <p class="text-center text-muted mb-0 small">
                &copy; {{ date('Y') }} Навчальна Лабораторія Кафедри. Курсова робота.
            </p>
        </div>
        
    </div>
</footer>

<style>
    /* Підключаємо іконки та додаємо ефект прозорості для білих іконок */
    @import url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css");
    .text-white-50:hover {
        color: #fff !important; /* Білий колір при наведенні */
        transition: color 0.2s;
    }
</style>