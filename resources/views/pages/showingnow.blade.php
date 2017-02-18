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
			<div class="images-wrapper"></div>
				<div class="side-image-content">
					<h4>movies showing now</h4>
					<h2 class="b-side-image__heading">Showing Now</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam assumenda nihil suscipit obcaecati sit, cum quod corporis adipisci ipsam, fugiat, quae error. Eaque commodi, dicta quidem explicabo mollitia inventore quibusdam.
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam assumenda nihil suscipit obcaecati sit, cum quod corporis adipisci ipsam, fugiat, quae error. Eaque commodi, dicta quidem explicabo mollitia inventore quibusdam.</p>
	</div>
		</div>
		@include('includes.footer')


@stop
