@extends('layout')

@section('title')Наш Дизайн @endsection

@section('main')
<main class="bg-dark text-white container my-4">
    <section class="mb-5">
        <h1 class="text-center mb-4" style="font-size: 2.5rem;">Разработка дизайна по брифу заказчика</h1>
        <p style="font-size: 1.25rem;">
            Если вы совсем не представляете, как должен выглядеть ваш продукт, как он должен называться и кому он предназначен, Издательский Дом <strong>SHWARTZ Media</strong> поможет вам сориентироваться и найти своё место на плотном российском рынке товаров и услуг.
        </p>
        <p style="font-size: 1.25rem;">
            Яркая упаковка и правильное позиционирование — это важная составляющая успеха!
        </p>    
    </section>
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