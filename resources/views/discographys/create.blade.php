@extends('layouts.navbar')
@section('content')


<div class="row">
	<div class="col-md-8 col-md-offset-2">
		<h2>Dodaj Dyskografie</h2>
		<br>
		{!! Form::open(array('route' => 'discography.store')) !!}

		{!! Form::label('title', 'Title:') !!}
		{!! Form::text('title', null, array('class' => 'form-control')) !!}

		{!! Form::submit('Dodaj dyskografię') !!}

		{!! Form::close() !!}
	</div>

</div>

@endsection