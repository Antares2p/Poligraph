<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Полиграфическая компания</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body class="bg-dark">
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom bg-dark">
        <div class="col-md-3 mb-2 mb-md-0">
            <a href="/" class="d-inline-flex link-body-emphasis text-decoration-none">
            <img class="bi" width="100%" height="32" role="img" aria-label="Bootstrap" src="{{ asset('images/logo/Logo vertical_2.jpg') }}" alt="Shwartz Media" onerror="this.onerror=null; this.src='{{ asset('images/logo/fallback_logo.jpg') }}';">
            </a>
        </div>
        <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
            <li><a href="#" class="nav-link px-2 link-secondary">Главная</a></li>
            <li><a href="#" class="nav-link px-2">Услуги</a></li>
            <li><a href="#" class="nav-link px-2">Дизайн</a></li>
            <li><a href="#" class="nav-link px-2">Фото</a></li>
            <li><a href="#" class="nav-link px-2">Отзывы</a></li>
            <li><a href="#" class="nav-link px-2">Контакты</a></li>
        </ul>
        <div class="col-md-3 text-end">
            <button type="button" class="btn btn-outline-primary me-2">Войти</button>
            <button type="button" class="btn btn-primary me-2">Регистрация</button>
        </div>
    </header>
</body>
</html>
