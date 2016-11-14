@section('title', 'Admin')

<section class="p-wrapper">
	<article class="p-primary">
		<h2> @yield('title')</h2>
			<ul class="admin">
				<li>option 1</li>
					<hr>
				<li>option2</li>
					<hr>
				<li>option3</li>
					<hr>
				<li>option5</li>
					<hr>
				<li>option6</li>
					<hr>
					<li> <button class = "a-moviepicker__button--red-admin"><a href="#">logout</a></button></li>
			</ul>
	</article>
	<aside class="p-secondary">
			<h2> @yield('title')</h2>
			<form class = "admin-form" action="#">
			<div>
					<p>Your details</p>
					<p>
							<label for="name">Email Address</label>
							<input type="text" id="name" autofocus>
					</p>
					<p>
							<label for="last-name">First Name </label>
							<input type="prenom" id="prenom">
					</p>
					<p>
							<label for="last-name">Last Name</label>
							<input type="email" id="email">
					</p>

					<p>
							<label for="last-name">Last Name</label>
							<input type="email" id="email">
					</p>
					<p>
							<label for="last-name">Last Name</label>
							<input type="email" id="email">
					</p>

				<p>
					<button class="a-moviepicker__button--red-admin" >Save
					</button>
				</p>
			</form>
		</div>
	</aside>
</section>
