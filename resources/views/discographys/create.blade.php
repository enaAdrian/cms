@extends('layouts.navbar')

@section('title', '| Create New Discograpy')

@section('content')


<div class="row">
	<div class="col-md-8 col-md-offset-2">
		<h2>Dodaj Dyskografie</h2>
		<br>
		{!! Form::open(array('route' => 'discography.store')) !!}

		{!! Form::label('title', 'Title:') !!}
		{!! Form::text('title', null, array('class' => 'form-control')) !!}

		{{Form::submit('Dodaj dyskografię', array('class' => 'btn btn-success btn-lg btn-block', 'style' => 'margin-top:5%;'))}}
		<div class="row">
				<div class="col-md-12" style="padding:10px;">
					{{ Html::linkRoute('discography.index', '<< Wróć do wszystkie dyskografia', array(), ['class' => 'btn btn-default btn-block btn-h1-spacing']) }}
				</div>
		</div>

		{!! Form::close() !!}
	</div>

</div>

@endsection
