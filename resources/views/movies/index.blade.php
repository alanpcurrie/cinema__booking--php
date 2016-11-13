@extends('layout');


@section('content')
		<div><h1>All Content</h1>	</div>
		@foreach ($movies as $movie)
			<div>
						{{ $movie->id ." " . $movie->title }}


			</div>
		@endforeach
@stop
