@extends('template')
@section('content')
    <h2>Resultats</h2>

    <h3>Title</h3>
    <p>{{$news['title']}}</p>

    <h3>Content</h3>
    <p>{{$news['content']}}</p>

@endsection
