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
			@include('includes.whack-a-mole')
		@include('includes.footer-alt')


@stop
