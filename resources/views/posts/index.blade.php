@extends('layouts.navbar')

@section('title', '| All Posts')

@section('content')

<div class="row">
    <div class="col-md-9">
        <h2>Wszystkie Newsy</h2>
    </div>
    <div class="col-md-3" >
        <a href="{{ route('posts.create') }}" class="btn btn-lg btn-block btn-primary" role="button">Dodaj Newsa</a>
    </div>
    <br>
</div>
<div class="row">
    <div class="col-md-12">
        <table class="table">
            <thead>
                <tr>
                    <th></th>
                    <th>Zdjęcie</th>
                    <th>Tytuł</th>
                    <th>Treść</th>
                    <th>Utworzono</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
            @foreach($posts as $post)
                <tr>
                    <td scope="row"></td>
                    <td><img src="{{ asset('images/'. $post->image) }}" alt="" style="width:70px; heigh:70px;"></td>
                    <td>{{ $post->title }}</td>
                    <td>{{ substr( $post->body, 0, 50) }}{{ strlen($post->body)>50 ? "...":"" }}</td>
                    <td>{{ date('j-m-Y H:i', strtotime($post->created_at)) }}</td>
                    <td><a href="{{route('posts.show', $post->id)}}" class="btn btn-default">Zobacz</a><a href="{{route('posts.edit', $post->id)}}" class="btn btn-default">Edytuj</a></td>
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
        {!! $posts->links(); !!}
    </div>
</div>

@stop
