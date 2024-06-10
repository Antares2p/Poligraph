@extends('layout')

@section('title')Отзывы @endsection

@section('main')
<main class="text-white bg-dark my-4 container">
    <h1>Отзывы</h1>
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form method="post" action="/comment/check">
        @csrf
        <input type="email" name="email" id="email" placeholder="Введите ваш email" class="form-control"><br>
        <input type="text" name="subject"id="subject" placeholder="Введите отзыв" class="form-control"><br>
        <textarea name="message" id="message" placeholder="Введите сообщение" class="form-control"></textarea><br>
        <button type="submit" class="btn btn-primary">Отправить</button>
    </form>
</main>
@endsection