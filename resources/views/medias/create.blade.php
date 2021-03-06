@extends('layouts.navbar')

@section('title', '| Create New Media')

@section('content')

<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <h1>Dodaj Media</h1>
        {!! Form::open(['route' => 'media.store', 'files' =>true]) !!}
            {{Form::label('title', 'Title:')}}
            {{Form::text('title', null, array('class' => 'form-control'))}}
            {{Form::label('link', "Podaj link:")}}
            {{Form::text('link', null, array('class' => 'form-control'))}}
            {{Form::label('media_image', 'Dodaj zdjęcie:')}}
            {{Form::file('media_image')}}
            {{Form::submit('Dodaj media', array('class' => 'btn btn-success btn-lg btn-block', 'style' => 'margin-top:5%;'))}}
            <div class="row">
                <div class="col-md-12" style="padding:10px;">
                  {{ Html::linkRoute('media.index', '<< Wróć do wszystkie media', array(), ['class' => 'btn btn-default btn-block btn-h1-spacing']) }}
                </div>
            </div>
        {!! Form::close() !!}
    </div>
</div>

@endsection
