@extends('layouts.navbar')

@section('title', '| All Posts')

@section('content')

<div class="row">
    <div class="col-md-9">
        <h2>Dyskografia</h2>
    </div>
    <div class="col-md-3" >
        <a href="{{ route('discography.create') }}" class="btn btn-lg btn-block btn-primary" role="button">Dodaj Dyskografie</a>
    </div>
    <hr>
</div>
<div class="row">
    <div class="col-md-12">
        <table class="table">
            <thead>
                <tr>
                    <th></th>
                    <th>Tytuł</th>
                    <th>Utworzono</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
            @foreach($discographys as $discography)


                <tr>
                    <td scope="row"></td>
                    <td>{{ $discography->title }}</td>
                    <td>{{ date('j-m-Y H:i', strtotime($discography->created_at)) }}</td>
                    <td><a href="{{route('discography.show', $discography->id)}}" class="btn btn-default">Zobacz</a><a href="{{route('discography.edit', $discography->id)}}" class="btn btn-default">Edytuj</a></td>
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
        {!! $discographys->links(); !!}
    </div>
</div>

@stop
