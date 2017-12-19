@extends('layouts.navbar')

@section('title', '| Edit discography')

@section('content')
{!! Form::model($discography, ['route' => ['discography.update', $discography->id], 'method' => 'PUT' ]) !!}
<div class="row">

    <div class="col-md-8">
            {!! Form::label('title', 'Tytul:') !!}
            {!! Form::text('title', null, ['class' => 'form-control input-lg'])!!}
    </div>
        <div class="col-md-4">
            <div class="card card-body bg-ligh" style="background-color: #EFEFEF; padding:10px;">
                <dl class="dl-horizontal">
                    <dt>Utworzono:</dt>
                    <dd>{{ date('j-m-Y H:i', strtotime( $discography->created_at)) }}</dd>
                </dl>
                <dl class="dl-horizontal">
                    <dt>Ostatnia edycja:</dt>
                    <dd>{{ date('j-m-Y H:i', strtotime( $discography->updated_at)) }}</dd>
                </dl>
                <hr>
                <div class="row">
                    <div class="col-md-6">
                    {!! Html::linkRoute('discography.show', 'Anuluj', array($discography->id), array('class' => 'btn btn-danger btn-block'))!!}
                    </div>
                    <div class="col-md-6">
                    {!! Form::submit('Zapisz zmiany', ['class'=>('btn btn-success btn-block')]) !!}
                    </div>
                </div>
            </div>
        </div>

</div>
{!! Form::close() !!}
@endsection
