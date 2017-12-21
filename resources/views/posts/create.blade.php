@extends('layouts.navbar')

@section('title', '| Create New News')

@section('content')

<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <h1>Dodaj Newsa</h1>
        {!! Form::open(['route' => 'posts.store', 'files' =>true]) !!}
            {{Form::label('title', 'Title:')}}
            {{Form::text('title', null, array('class' => 'form-control'))}}
            {{Form::label('body', "Wpisz tekst:")}}
            {{Form::textarea('body', null, array('class' => 'form-control'))}}
            {{Form::label('featured_image', 'Dodaj zdjęcie:')}}
            {{Form::file('featured_image')}}
            {{Form::submit('Dodaj', array('class' => 'btn btn-success btn-lg btn-block', 'style' => 'margin-top:5%;'))}}
            <div class="row">
                <div class="col-md-12" style="padding:10px;">
                  {{ Html::linkRoute('posts.index', '<< Wróć do wszystkie newsy', array(), ['class' => 'btn btn-default btn-block btn-h1-spacing']) }}
                </div>
            </div>
        {!! Form::close() !!}
    </div>
</div>

@endsection
