@extends('layout.master')

@section('title', 'Статья - ' . $post->title)

@section('content')
    <h3 class="pb-3 mb-4 font-italic border-bottom">
        {{$post->title}}
    </h3>
    <p class="blog-post-meta">{{$post->created_at->format('d.m.Y')}}</p>
    <p>{{$post->body}}</p>
    <a href="/">На главную</a>
@endsection
