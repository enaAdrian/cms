@extends('layouts.navbar')

@section('title', '| Edit Post')

@section('content')
{!! Form::model($post, ['route' => ['posts.update', $post->id], 'method' => 'PUT', 'files' => true ]) !!}
<div class="row">

    <div class="col-md-8">
            {!! Form::label('title', 'Tytul:') !!}
            {!! Form::text('title', null, ['class' => 'form-control input-lg'])!!}
            {!! Form::label('body', 'Tresc:') !!}
            {!! Form::textarea('body', null, ['class' => 'form-control'])!!}
            {!! Form::label('featured_image', 'Edytuj zdjęcie') !!}
            {!! Form::file('featured_image') !!}
    </div>
        <div class="col-md-4">
            <div class="card card-body bg-ligh" style="background-color: #EFEFEF; padding:10px;">
                <dl class="dl-horizontal">
                    <dt>Utworzono:</dt>
                    <dd>{{ date('j-m-Y H:i', strtotime( $post->created_at)) }}</dd>
                </dl>
                <dl class="dl-horizontal">
                    <dt>Ostatnia edycja:</dt>
                    <dd>{{ date('j-m-Y H:i', strtotime( $post->updated_at)) }}</dd>
                </dl>
                <hr>
                <div class="row">
                    <div class="col-md-6">
                    {!! Html::linkRoute('posts.show', 'Anuluj', array($post->id), array('class' => 'btn btn-danger btn-block'))!!}
                    </div>
                    <div class="col-md-6">
                    {!! Form::submit('Zapisz zmiany', ['class'=>('btn btn-success btn-block')]) !!}
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12" style="padding:10px;">
                      {{ Html::linkRoute('posts.index', '<< Wróć do wszystkie newsy', array(), ['class' => 'btn btn-default btn-block btn-h1-spacing']) }}
                    </div>
                </div>
            </div>
        </div>

</div>
{!! Form::close() !!}
@endsection
