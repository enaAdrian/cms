@extends('main')

@section('title', '| Create New Post')

@section('content')

<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <h1>Dodaj Newsa</h1>
        {!! Form::open(['route' => 'posts.store']) !!}
            {{Form::label('title', 'Title:')}}
            {{Form::text('title', null, array('class' => 'form-control'))}}
            {{Form::label('body', "Wpisz tekst:")}}
            {{Form::textarea('body', null, array('class' => 'form-control'))}}
            {{Form::submit('Dodaj', array('class' => 'btn btn-success btn-lg btn-block', 'style' => 'margin-top:5%;'))}}
        {!! Form::close() !!}
    </div>
</div>

@endsection