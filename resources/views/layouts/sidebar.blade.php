@section('title', 'Admin')

<section class="p-wrapper">
	<article class="p-primary">
		<h2> @yield('title')</h2>
			<ul class="m-admin-ul">
				<li>Update Movies</li>
					<hr>
				<li>Update User Data</li>
					<hr>
				<li>Manage Homepage </li>
					<hr>
				<li>Security Settings</li>
					<hr>
				<li>Account Settings</li>
					<hr>
					<li> <button class = "a-moviepicker__button--red-admin"><a href="/logout">logout</a></button></li>
			</ul>
	</article>
	<aside class="p-secondary">
			<h2> User Name</h2>
			<form class = "admin-form" action="#">
			<div>
					<p>Movie entry</p>
					<p>
							<label for="name">Movie Title</label>
							<input type="text" id="name" autofocus>
					</p>
					<p>
							<label for="last-name">Movie Blurb</label>
							<input type="prenom" id="prenom">
					</p>
					<p>
							<label for="last-name">Movie Description</label>
							<input type="email" id="email">
					</p>

					<p>
							<label for="last-name">Age Rating</label>
							<input type="email" id="email">
					</p>
					<p>
							<label for="last-name">Location</label>
							<input type="email" id="email">
					</p>
					<p><div class="m-upload-area">
  			  			<div class="m-dropZone">Drag Image Files Here</div>
						</div>
					</p>

				<p>
					<button type="submit" value="submit" class="a-button__large--full-width " >Save
					</button>
				</p>
			</form>
		</div>
	</aside>
</section>
