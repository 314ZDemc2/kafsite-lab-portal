<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                <span style="font-size: 1.5rem;">🔬</span> Лабораторія Кафедри
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainMenu" aria-controls="mainMenu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="mainMenu">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('about') }}">Про сайт</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('gallery') }}">Галерея картинок</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('news') }}">Новини</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('contact') }}">Контакти</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>