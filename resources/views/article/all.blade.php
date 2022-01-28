@extends('main')
{{--title--}}
@section('content')
    @foreach($articles as $article)
        <p>{{$article->title}}</p>
        <hr>
        <p>{{$article->description}}</p>
        <p>{{$article->article_text}}</p>
        <hr>
    @endforeach
@endsection
