@extends('layouts.navbar')

@section('title', '| View Media')

@section('content')

    <div class="row">
        <div class="col-md-8">
          <div class="col-md-4">
            <img src="{{asset('medias/'. $media->image)}}" alt="">
          </div>
          <div class="col-md-6">
            <h3>{{ $media->title }}</h3>
                <p class='lead'>{{ $media->link }}</p>
          </div>
        </div>
        <div class="col-md-4">
            <div class="card card-body bg-ligh" style="background-color: #EFEFEF; padding:20px;">
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
                    {!! Form::submit('Usuń', ['class' => 'btn btn-danger btn-block']) !!}
                    {!! Form::close() !!}
                    </div>
                </div>
                <div class="row">
          					<div class="col-md-12" style="padding:10px;">
          						{{ Html::linkRoute('media.index', '<< Wróć do wszystkie media', array(), ['class' => 'btn btn-default btn-block btn-h1-spacing']) }}
          					</div>
          			</div>
                </div>
                {{-- <div class="row">
                  <a href="{{ route('media.index') }}" class="btn btn-primary btn-lg"  role="button">Wróć do Panelu Admina</a>
                </div> --}}
            </div>
        </div>


@endsection
