@extends('layouts.navbar')

@section('title', '| Edit Media')

@section('content')
{!! Form::model($media, ['route' => ['media.update', $media->id], 'method' => 'PUT', 'files' => true ]) !!}
<div class="row">

    <div class="col-md-8">
            {!! Form::label('title', 'Tytul:') !!}
            {!! Form::text('title', null, ['class' => 'form-control input-lg'])!!}
            {!! Form::label('link', 'Link:') !!}
            {!! Form::text('link', null, ['class' => 'form-control'])!!}
            {!! Form::label('media_image', 'Edytuj zdjęcie') !!}
            {!! Form::file('media_image') !!}
    </div>
        <div class="col-md-4">
            <div class="card card-body bg-ligh" style="background-color: #EFEFEF; padding:10px;">
                <dl class="dl-horizontal">
                    <dt>Utworzono:</dt>
                    <dd>{{ date('j-m-Y H:i', strtotime( $media->created_at)) }}</dd>
                </dl>
                <dl class="dl-horizontal">
                    <dt>Ostatnia edycja:</dt>
                    <dd>{{ date('j-m-Y H:i', strtotime( $media->updated_at)) }}</dd>
                </dl>
                <hr>
                <div class="row">
                    <div class="col-md-6">
                    {!! Html::linkRoute('media.show', 'Anuluj', array($media->id), array('class' => 'btn btn-danger btn-block'))!!}
                    </div>
                    <div class="col-md-6">
                    {!! Form::submit('Zapisz zmiany', ['class'=>('btn btn-success btn-block')]) !!}
                    </div>
                </div>
                <div class="row">
          					<div class="col-md-12" style="padding:10px;">
          						{{ Html::linkRoute('media.index', '<< Wróć do wszystkie media', array(), ['class' => 'btn btn-default btn-block btn-h1-spacing']) }}
          					</div>
          			</div>
            </div>
        </div>

</div>
{!! Form::close() !!}
@endsection
