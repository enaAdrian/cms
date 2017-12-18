@extends('main')

@section('title', '| View Media')

@section('content')

<div class="row">
    <div class="col-md-8">
      <img src="{{asset('medias/'. $media->image)}}" alt="">
        <h1>{{ $media->title }}</h1>
            <p class='lead'>{{ $media->body }}</p>
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
                {!! Html::linkRoute('media.edit', 'Edytuj', array($media->id), array('class' => 'btn btn-primary btn-block'))!!}
                </div>
                <div class="col-md-6">
                {!! Form::open(['route' =>['media.destroy', $media->id], 'method' => 'DELETE']) !!}
                {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-block']) !!}
                {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
