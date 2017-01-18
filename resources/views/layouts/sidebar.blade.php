@section('title', 'Admin')

<section class="p-wrapper">
	<article class="p-primary">
		<h2> @yield('title')</h2>
			<ul class="m-admin-ul">
					<hr>
					<li><a href="/admin/users">Update User Data </a></li>
					<hr>
					<li><a href="/admin/roles/create">Create User Roles</a></li>
					<hr>
					<li><a href="/admin/posts/">All Posts</a></li>
					<hr>
					<li><a href="/admin/posts/create">Create a Post</a></li>
					<hr>
					<li><a href="/admin/categories">All Categories</a></li>
					<hr>
					<li> <a href="/admin/categories/create">New Category</a></li>
					<hr>
					<li> <button class = "a-moviepicker__button--red-admin"><a href="/logout">logout</a></button></li>
			</ul>
	</article>
	<aside class="p-secondary">

			<h2>{{ Auth::user()->name }}</h2>
			<form class = "admin-form" action="#">
			<div>

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
					<button type="submit" value="submit" class="a-button__large--full-width" >Save
					</button>
					<button type="reset" value="reset" class="a-button__large--full-width" >Cancel
					</button>
				</p>
			</form>
		</div>
	</aside>
</section>
