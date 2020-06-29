@extends('layout.master')

@section('title', 'Контакты')

@section('content')
    <h3 class="pb-3 mb-4 font-italic border-bottom">
        Контакты
    </h3>
    <div class="mb-5">
        <p> sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed posuere consectetur est at lobortis. Cras mattis consectetur purus sit amet fermentum.</p>

        <p>Curabitur blandit tempus porttitor. Nullam quis risus eget urna mollis ornare vel eu leo. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>

        <p>Etiam porta sem malesuada magna mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
    </div>


    <h4 class="pb-3 mb-4 font-italic border-bottom">
        Форма обратной связи
    </h4>
    @include('layout.errors')
    <form method="post" action="/admin/feedbacks">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail">Email</label>
            <input type="text" class="form-control" id="exampleInputEmail" name="email">
        </div>
        <div class="form-group">
            <label for="exampleInputBody">Сообщени</label>
            <textarea name="body" id="exampleInputBody" class="form-control" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Отправить</button>
    </form>

@endsection
