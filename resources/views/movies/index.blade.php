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
			<section class="b-heading--section">
				 <div class="flash-success"> <span>This is a success message <button class="flash-success--will-close" href="#" @click="$emit('close')"></button></span></div>

				<h1 class='b-h1--left'>movies showing now</h1>
			</section>
		@foreach ($movies as $movie)
				<section class="m-featured-background">
	  			<article class="m-featured-background__content">
						<h2>{{ $movie->title }}</h2>
							<p>{{ $movie->description }}</p>
								<h4 class="b-red-highlight--round">{{ $movie->rating }}</h4>

									<form id="will-increment" class="m-button--will-increment" method='POST' action='#'>

										<div class="dropdown">
											<div class="dropdown-container">
												<p class="dropdown-description">Cinema</p>
												<p class="dropdown-button">Click to Select</p>
												<ul class="dropdown-menu dropdown-select">
													<li>Edinburgh</li>
													<li>Midlothian</li>
													<li>East Lothian</li>
													<li>West Lothian</li>
												</ul>
											</div>
										</div>


					    				<input type='button' value='-' class='qtyminus' field='quantity' />
					    				<input type='text' name='quantity' value='0' class='qty' />
					      			<input type='button' value='+' class='qtyplus' field='quantity' />
											<button class ="a-button__large--full-width-dark">BOOK NOW</button>
									</form>

			</section>
		@endforeach
	@include('includes.footer')
@stop
