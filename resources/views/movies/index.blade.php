@extends('layout');
@section('content')
	  @include('includes.header')

@section('content')
		<div></div>
		@foreach ($movies as $movie)
			<div>
					<h2>{{ $movie->id ." " . $movie->title }}</h2>
						<p>{{ $movie->description }}</p>
							<p>{{ $movie->rating }}</p>
			</div>
		@endforeach
		@include('includes.footer')


@stop
