@extends('layouts.navbar')

@section('title', '| View Post')

@section('content')

<div class="row">
    <div class="col-md-8">
      <img src="{{asset('images/'. $post->image)}}" alt="">
        <h1>{{ $post->title }}</h1>
            <p class='lead'>{{ $post->body }}</p>
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
                {!! Html::linkRoute('posts.edit', 'Edytuj', array($post->id), array('class' => 'btn btn-primary btn-block'))!!}
                </div>
                <div class="col-md-6">
                {!! Form::open(['route' =>['posts.destroy', $post->id], 'method' => 'DELETE']) !!}
                {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-block']) !!}
                {!! Form::close() !!}
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


@endsection
