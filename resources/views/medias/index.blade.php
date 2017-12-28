@extends('layouts.navbar')

@section('title', '| All Media')

@section('content')
<div class="container">
  <div class="row">
      <div class="col-md-9">
          <h2>Wszystkie Multimedia</h2>
      </div>
      <div class="col-md-3">
          <a href="{{ route('media.create') }}" class="btn btn-lg btn-block btn-primary"  role="button">Dodaj Multimedia</a>
      </div>
      <hr>
  </div>
  <div class="row">
      <div class="col-md-12">
          <table class="table">
              <thead>
                  <tr>
                      <th></th>
                      <th>Zdjęcie</th>
                      <th>Tytuł</th>
                      <th>Link</th>
                      <th>Utworzono</th>
                      <th></th>
                  </tr>
              </thead>
              <tbody>
              @foreach($medias as $media)
                  <tr>
                      <td scope="row"></td>
                      <td><img src="{{ asset('medias/'. $media->image) }}" alt="" style="width:70px; heigh:70px;"></td>
                      <td>{{ $media->title }}</td>
                      <td>{{ ($media->body) }}</td>
                      <td>{{ date('j-m-Y H:i', strtotime($media->created_at)) }}</td>
                      <td><a href="{{route('media.show', $media->id)}}" class="btn btn-default">Zobacz</a><a href="{{route('media.edit', $media->id)}}" class="btn btn-default">Edytuj</a></td>
                  </tr>
                  <tr>
                      <td scope="row"></td>
                      <td></td>
                      <td></td>
                  </tr>
              @endforeach
              </tbody>
          </table>
      </div>
      <div class="col-md-8 offset-md-4">
          {!! $medias->links(); !!}
      </div>
  </div>
</div>
@stop
