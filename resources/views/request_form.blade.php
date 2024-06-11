<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }
        .card {
            margin: 10px;
        }
    </style>
</head>
<body class="bg-dark">

<!-- Верхняя панель навигации -->
<header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom bg-dark">
    <div class="col-md-3 mb-3 mb-md-0">
        <a href="/" class="d-inline-flex link-body-emphasis text-decoration-none">
            <img class="bi logo" width="300" height="60" role="img" aria-label="Bootstrap" src="{{ asset('images/logo/Logo vertical_2.jpg') }}" alt="Shwartz Media" onerror="this.onerror=null; this.src='{{ asset('images/logo/fallback_logo.jpg') }}';" style="margin-left: 10px;">
        </a>
    </div>
    <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
        <li><a href="/" class="nav-link px-2">Главная</a></li>
        <li><a href="production" class="nav-link px-2">Производство</a></li>
        <li><a href="design" class="nav-link px-2">Дизайн</a></li>
        <li><a href="tool" class="nav-link px-2">Оборудование</a></li>
        <li><a href="comment" class="nav-link px-2">Отзывы</a></li>
        <li><a href="contact" class="nav-link px-2">Контакты</a></li>
    </ul>
    <div class="col-md-3 text-end">
        @guest
            @if (Route::has('login'))
                <a href="{{ route('login') }}" class="btn btn-outline-primary me-2">Войти</a>
            @endif

            @if (Route::has('register'))
                <a href="{{ route('register') }}" class="btn btn-primary me-2">Регистрация</a>
            @endif
        @else
            <a href="{{ route('logout') }}" class="btn btn-primary me-2" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                Выйти
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
            <a href="{{ route('request.form') }}" class="btn btn-success">Оформить заявку</a>
            @endguest
        </div>
    </header>
    
    @yield('main')
    
    <!-- Подвал сайта -->
    <footer class="bg-dark text-white pt-4">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <p>&copy; 2024 Shwartz Media. Все права защищены.</p>
                    <div>
                        <a href="/privacy">Политика конфиденциальности</a><br>
                        <a href="/terms">Условия использования</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <p>Адрес: МО, Одинцовский городской округ, д.Переделки, коттеджный поселок Стольное, 2</p>
                    <p>Телефон: 8 495 755 62 26</p>
                    <p>Email: <a href="mailto:info@7556226.ru">info@7556226.ru</a></p>
                </div>
                <div class="col-md-4">
                    <div class="d-flex flex-column align-items-start">
                        <p>Социальные сети:</p>
                        <a href="https://vk.com/club21135801">Вконтакте</a>
                        <a href="#">Телеграмм</a>
                        <a href="#">Инстаграмм</a>
                    </div>
                    <div class="mt-3">
                        <form action="/subscribe" method="post" class="form-inline">
                            <div class="form-group mb-2">
                                <input type="email" name="email" class="form-control" placeholder="Ваш email">
                            </div>
                            <button type="submit" class="btn btn-primary mb-2 ml-2">Подписаться</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-12 text-center">
                    <button id="toggleThemeBtn" class="btn btn-secondary">Сменить тему</button>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-12">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d919.3153040621115!2d37.34188286721633!3d55.66147620040459!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46b551ec8ba46463%3A0x1245ec77a8555f2e!2zMiwg0KHRgtC-0LvRjNC90L7QtSDQmtC_LCDQnNC-0YHQutC-0LLRgdC60LDRjyDQvtCx0LsuLCAxMTk2MTk!5e0!3m2!1sru!2sru!4v1611690088786!5m2!1sru!2sru" class="embed-responsive-item" allowfullscreen width="100%" height="100%"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    
    <!-- Подключение Bootstrap JS и jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
    <script>
        document.getElementById('toggleThemeBtn').addEventListener('click', function() {
            document.body.classList.toggle('bg-light');
            document.body.classList.toggle('bg-dark');
    
            const header = document.querySelector('header');
            const footer = document.querySelector('footer');
            const main = document.querySelector('main');          
            header.classList.toggle('bg-light');
            header.classList.toggle('bg-dark');
    
            footer.classList.toggle('bg-light');
            footer.classList.toggle('bg-dark');
            footer.classList.toggle('text-dark');
            footer.classList.toggle('text-white');
    
            main.classList.toggle('bg-light');
            main.classList.toggle('bg-dark');
            main.classList.toggle('text-dark');
            main.classList.toggle('text-white');
    
        });
    </script>
    
    </body>
    </html>
    