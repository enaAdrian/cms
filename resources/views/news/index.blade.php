@extends('main')

@section('title', '| News')

@section('content')

<div class="row">
    <div class="col-md-12">
        <h1>Newsy</h1>
    </div>
</div>
@foreach($posts as $post)
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <h2>{{$post->title}}</h2>
        <h5>Opublikowano: {{date('j-M-Y', strtotime($post->created_at))}}</h5>
        <p>{{ substr($post->body, 0, 250) }} {{ strlen($post->body) > 250 ? '...' : "" }}</p>
        {{-- <a href="{{ route('news.single', $post->id) }}">Czytaj całość</a> --}}
    </div>
</div>
@endforeach
@endsection