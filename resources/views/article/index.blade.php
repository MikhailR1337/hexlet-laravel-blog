@extends('layouts.app')

@section('content')
    <h1>Список статей</h1>
    @foreach ($articles as $article)
        <a href="{{ route('articles.show', ['id' => $article->id]) }}">
            <h2>{{$article->name}}</h2>
        </a>
        {{-- Str::limit – функция-хелпер, которая обрезает текст до указанной длины --}}
        {{-- Используется для очень длинных текстов, которые нужно сократить --}}
        <div>{{Str::limit($article->body, 200)}}</div>
        <a href="{{ route('articles.edit', ['id' => $article->id]) }}">
            <h3>Изменить</h3>
        </a>
        {{ Form::model($article, ['url' => route('articles.destroy', $article), 'method' => 'DELETE']) }}
            {{ Form::submit('Удалить') }}
        {{ Form::close() }}
    @endforeach
    {{ $articles->links() }}
@endsection