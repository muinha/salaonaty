@extends('site.template')
@section('title', 'Blog')
@section('content')

<section>
	<div class="index">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-12 mt-2 mb-2">
					<h1>Blog</h1>
				</div>
				<div class="col-md-6 col-sm-12 mt-2 mb-2 border">
					<a href="">
						<h2 class="text-center">Primeira notícia</h2>
						<img width="350px" class="img-thumbnail rounded mx-auto d-block" src="{{ asset('image/noticia.jpg') }}" alt="Primeira Notícia">
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus fugiat 
							facilis quos adipisci voluptates, quaerat praesentium, eum quae 
							voluptas possimus rem ea exercitationem officia dicta reprehenderit 
							delectus laboriosam et excepturi.
						</p>
					</a>
				</div>
				<div class="col-md-6 col-sm-12 mt-2 mb-2 border">
					<a href="">
						<h2 class="text-center">Primeira notícia</h2>
						<img width="350px" class="img-thumbnail rounded mx-auto d-block" src="{{ asset('image/noticia.jpg') }}" alt="Primeira Notícia">
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus fugiat 
							facilis quos adipisci voluptates, quaerat praesentium, eum quae 
							voluptas possimus rem ea exercitationem officia dicta reprehenderit 
							delectus laboriosam et excepturi.
						</p>
					</a>
				</div>
				<div class="col-md-6 col-sm-12 mt-2 mb-2 border">
					<a href="">
						<h2 class="text-center">Primeira notícia</h2>
						<img width="350px" class="img-thumbnail rounded mx-auto d-block" src="{{ asset('image/noticia.jpg') }}" alt="Primeira Notícia">
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus fugiat 
							facilis quos adipisci voluptates, quaerat praesentium, eum quae 
							voluptas possimus rem ea exercitationem officia dicta reprehenderit 
							delectus laboriosam et excepturi.
						</p>
					</a>
				</div>
				<div class="col-md-6 col-sm-12 mt-2 mb-2 border">
					<a href="">
						<h2 class="text-center">Primeira notícia</h2>
						<img width="350px" class="img-thumbnail rounded mx-auto d-block" src="{{ asset('image/noticia.jpg') }}" alt="Primeira Notícia">
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus fugiat 
							facilis quos adipisci voluptates, quaerat praesentium, eum quae 
							voluptas possimus rem ea exercitationem officia dicta reprehenderit 
							delectus laboriosam et excepturi.
						</p>
					</a>
				</div>
			</div>
			<nav>
				<ul class="pagination">
					<li class="page-item">
						<a class="page-link" href="#">Anterior</a>
					</li>
					<li class="page-item"><a class="page-link" href="#">1</a></li>
					<li class="page-item active">
						<span class="page-link">2<span class="sr-only">(atual)</span></span>
					</li>
					<li class="page-item"><a class="page-link" href="#">3</a></li>
					<li class="page-item">
						<a class="page-link" href="#">Próximo</a>
					</li>
				</ul>
			</nav>
		</div>
	</div>
</section>

@stop