@extends('layout')

@section('title')Главная страница @endsection

@section('main')
<!-- Основной контент -->
<main class="container my-4 text-white bg-dark">
    <!-- Приветственная секция -->
    <section class="text-center mb-5">
        <h1 class="display-4">Добро пожаловать в Shwartz Media</h1>
        <p class="lead">Профессиональная полиграфия и дизайн на высшем уровне</p>
        <a href="production" class="btn btn-primary btn-lg">Узнать больше</a>
    </section>

    <!-- Секция услуг -->
    <section class="mb-5">
        <h2 class="mb-4">Что мы можем делать</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img src="{{ asset('images/lamination/_DSC0987.jpg') }}" class="card-img-top" alt="Услуга 1">
                    <div class="card-body">
                        <h5 class="card-title">Ламинация</h5>      
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="{{ asset('images/congrev/_DSC1001.jpg') }}" class="card-img-top" alt="Услуга 2">
                    <div class="card-body">
                        <h5 class="card-title">Конгрев</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="{{ asset('images/cashirovka/_DSC1115.jpg') }}" class="card-img-top" alt="Услуга 3">
                    <div class="card-body">
                        <h5 class="card-title">Кашировка</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="{{ asset('images/KBS/IMG_8448.jpg') }}" class="card-img-top" alt="Услуга 4">
                    <div class="card-body">
                        <h5 class="card-title">КБС</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="{{ asset('images/Offset/h1-1920x800.jpg') }}" class="card-img-top" alt="Услуга 4">
                    <div class="card-body">
                        <h5 class="card-title">Офсетная печать</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="{{ asset('images/TampPrint/S1_12.jpg') }}" class="card-img-top" alt="Услуга 4">
                    <div class="card-body">
                        <h5 class="card-title">Тампопечать</h5>
                    </div>
                </div>
            </div>
        </div>
        <h2 class="mb-4 mx-auto d-block">И многое другое!</h2>
    </section>

    <!-- Галерея работ -->
    <section class="mb-5">
        <h2 class="mb-4">Наши работы</h2>
        <div class="row">
            <div class="col-md-4">
                <img src="{{ asset('images/WorksPhotos/01_1450x702_portfel.jpg') }}" class="img-fluid mb-3" alt="Работа 1">
            </div>
            <div class="col-md-4">
                <img src="{{ asset('images/WorksPhotos/02_1450x702_portfel.jpg') }}" class="img-fluid mb-3" alt="Работа 2">
            </div>
            <div class="col-md-4">
                <img src="{{ asset('images/WorksPhotos/03_1450x702_portfel.jpg') }}" class="img-fluid mb-3" alt="Работа 3">
            </div>
            <div class="col-md-4">
                <img src="{{ asset('images/WorksPhotos/04_1450x702_portfel.jpg') }}" class="img-fluid mb-3" alt="Работа 4">
            </div>
            <div class="col-md-4">
                <img src="{{ asset('images/WorksPhotos/08_1450x702_portfel.jpg') }}" class="img-fluid mb-3" alt="Работа 5">
            </div>
            <div class="col-md-4">
                <img src="{{ asset('images/WorksPhotos/08_1450x702_portfel.jpg') }}" class="img-fluid mb-3" alt="Работа 6">
            </div>
            <div class="col-md-4">
                <img src="{{ asset('images/WorksPhotos/10_1450x702_portfel.jpg') }}" class="img-fluid mb-3" alt="Работа 7">
            </div>
            <div class="col-md-4">
                <img src="{{ asset('images/WorksPhotos/12_1450x702_portfel.jpg') }}" class="img-fluid mb-3" alt="Работа 8">
            </div>
        </div>
    </section>
</main>

@endsection