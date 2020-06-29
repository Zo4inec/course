@extends('layout.master')

@section('title', 'Список обращений')

@section('content')
    <h3 class="pb-3 mb-4 font-italic border-bottom">
        Список обращений
    </h3>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Email</th>
            <th scope="col">Сообщение</th>
            <th scope="col">Дата получения</th>
        </tr>
        </thead>
        <tbody>
        @if($messages->count())
            @foreach($messages as $message)
                <tr>
                    <td scope="row">{{$message->email}}</td>
                    <td>{{$message->body}}</td>
                    <td>{{$message->created_at->format('d.m.Y H:i:s')}}</td>
                </tr>
            @endforeach
            @else
            <tr>
                <th scope="row" colspan="3">Сообщений нет</th>
            </tr>
            @endif


        </tbody>
    </table>
@endsection
