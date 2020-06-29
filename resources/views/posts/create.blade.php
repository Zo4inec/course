@extends('layout.master')

@section('title', 'Создание статьи')

@section('content')
    <h3 class="pb-3 mb-4 font-italic border-bottom">
        Создание статьи
    </h3>
    @include('layout.errors')
    <form method="post" action="/posts">
        @csrf
        <div class="form-group">
            <label for="exampleInputSlug">Символьный код</label>
            <input type="text" class="form-control" id="exampleInputSlug" name="slug">
        </div>
        <div class="form-group">
            <label for="exampleInputTitle">Название статьи</label>
            <input type="text" class="form-control" id="exampleInputTitle" name="title">
        </div>
        <div class="form-group">
            <label for="exampleInputExcerpt">Краткое описание статьи</label>
            <input type="text" class="form-control" id="exampleInputExcerpt" name="excerpt">
        </div>
        <div class="form-group">
            <label for="exampleInputBody">Детальное описание статьи</label>
            <textarea name="body" id="exampleInputBody" class="form-control" rows="3"></textarea>
        </div>
        <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1" name="published">
            <label class="form-check-label" for="exampleCheck1">Опубликовано</label>
        </div>
        <button type="submit" class="btn btn-primary">Создать статью</button>
    </form>
@endsection
