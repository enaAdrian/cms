@extends('layouts.navbar')

@section('title', '| View Discography')

@section('content')

<div class="row">
    <div class="col-md-8">
        <h1>{{ $discography->title }}</h1>
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
                {!! Html::linkRoute('discography.edit', 'Edytuj', array($discography->id), array('class' => 'btn btn-primary btn-block'))!!}
                </div>
                <div class="col-md-6">
                {!! Form::open(['route' =>['discography.destroy', $discography->id], 'method' => 'DELETE']) !!}
                {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-block']) !!}
                {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
