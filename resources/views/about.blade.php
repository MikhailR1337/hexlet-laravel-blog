
@extends('layouts.app')

@section('title', 'О блоге')

@section('header', 'Это вот Header')

@section('content')
    <h1>О блоге</h1>
    <p>Эксперименты с Laravel на Хекслете</p>
    <p>{{ implode(', ', $tags) }}</p>

    @foreach ($articles as $article)
        <h1>{{ $article->name }}</h1>
        <div>{{ $article->body }}</div>
    @endforeach
@endsection

