@extends('layout')

@section('content')
	@if (!Auth::check())
		@include('includes.header')
	@endif
	@if (Auth::check())
		@role('Manager')
			@include('includes.header')
		@endrole
		@role('Member')
			@include('includes.header')
		@endrole
		@role('Junior')
				@include('includes.header-alt')
		@endrole
	@endif
	<div class="side-image">
		<div class="images-wrapper__junior"></div>
			<div class="side-image-content">
				<h4>Junior movie showing</h4>
				<h2 class="b-side-image__heading">This weeks junior movie showing</h2>
				<p>Bucky O'Hare is a fictional character and the hero of an eponymous comic book series as well as spin-off media including an animated TV series and various toys and video games. He was created by comic book writer Larry Hama and Michael Golden[1] between 1978 and 1979[citation needed] and debuted to the public in Echo of Futurepast #1 in May 1984.</p>
			</div>
	</div>
		@include('includes.footer-alt')


@stop
