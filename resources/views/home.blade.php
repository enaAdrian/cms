@extends('layouts.navbar')
@section('title', '| Admin Panel')
@section('content')
<div id="background">
  <div class="row">
    <div class="col-md-5 col-md-offset-4" style="padding: 50px; color: white;">
      <h2>Panel Administracyjny</h2>
    </div>
  </div>
  <div class="row">
    <div class="col-md-5 col-md-offset-4" >
      <a href="{{ route('posts.index') }}" class="btn btn-primary btn-lg"  role="button">Newsy</a>
      <a href="" class="btn btn-primary btn-lg"  role="button">Multimedia</a>
      <a href="" class="btn btn-primary btn-lg"  role="button">Dyskografia</a>
    </div>
  </div>
</div>
@endsection
