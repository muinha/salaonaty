@extends('site.template')

@section('title', 'Salao De Beleza Natalia Rodrigues')

@section('content')

<!-- Inicio Descriçao info-topo -->
<div class="index">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<h1>O que é Lorem Ipsum?</h1>
			</div>
			<div class="col-md-4 col-sm-12">
				<img class="img-thumbnail" src="{{ asset('image/image1.jpg') }}">
			</div>
			<div class="col-md-8 col-sm-12">
				<p>
					Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração eletrônica, permanecendo essencialmente inalterado. Se popularizou na década de 60, quando a Letraset lançou decalques contendo passagens de Lorem Ipsum, e mais recentemente quando passou a ser integrado a softwares de editoração eletrônica como Aldus PageMaker.
				</p>
			</div>
		</div>
	</div>
</div>
<!-- Fim Descriçao info-topo -->

<!-- Inicio Categorias Penteados -->
<div class="index">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<h1>Categorias de penteados</h1>
			</div>
			<div class="index-image mb-2 mt-2 col-md-4 col-sm-12">
				<a href="">
					<h3>Categoria 1</h3>
					<img width="300px" class="img-thumbnail rounded mx-auto d-block" src="{{ asset('image/image2.jpg') }}">
				</a>
			</div>
			<div class="index-image mb-2 mt-2 col-md-4 col-sm-12">
				<a href="">
					<h3>Categoria 1</h3>
					<img width="300px" class="img-thumbnail rounded mx-auto d-block" src="{{ asset('image/image2.jpg') }}">
				</a>
			</div>
			<div class="index-image mb-2 mt-2 col-md-4 col-sm-12">
				<a href="">
					<h3>Categoria 1</h3>
					<img width="300px" class="img-thumbnail rounded mx-auto d-block" src="{{ asset('image/image2.jpg') }}">
				</a>
			</div>
			<div class="index-image mb-2 mt-2 col-md-4 col-sm-12">
				<a href="">
					<h3>Categoria 1</h3>
					<img width="300px" class="img-thumbnail rounded mx-auto d-block" src="{{ asset('image/image2.jpg') }}">
				</a>
			</div>
			<div class="index-image mb-2 mt-2 col-md-4 col-sm-12">
				<a href="">
					<h3>Categoria 1</h3>
					<img width="300px" class="img-thumbnail rounded mx-auto d-block" src="{{ asset('image/image2.jpg') }}">
				</a>
			</div>
			<div class="index-image mb-2 mt-2 col-md-4 col-sm-12">
				<a href="">
					<h3>Categoria 1</h3>
					<img width="300px" class="img-thumbnail rounded mx-auto d-block" src="{{ asset('image/image2.jpg') }}">
				</a>
			</div>
		</div>
	</div>
</div>
<!-- Fim Categorias Penteados -->

<!-- Inicio Blog -->
<div class="index">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<h1>Ultimas publicações do Blog</h1>
				<hr>
			</div>
			<div class="col-md-6 col-sm-12">
				<a href="">
					<h2>O que é Lorem Ipsum?</h2>
					<p>
						Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos.
					</p>
				</a>
				<hr>
			</div>
			<div class="col-md-6 col-sm-12">
				<a href="">
					<h2>O que é Lorem Ipsum?</h2>
					<p>
						Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos.
					</p>
				</a>
				<hr>
			</div>
			<div class="col-md-6 col-sm-12">
				<a href="">
					<h2>O que é Lorem Ipsum?</h2>
					<p>
						Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos.
					</p>
				</a>
				<hr>
			</div>
			<div class="col-md-6 col-sm-12">
				<a href="">
					<h2>O que é Lorem Ipsum?</h2>
					<p>
						Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos.
					</p>
				</a>
				<hr>
			</div>
		</div>
	</div>
</div>
<!-- Fim Blog -->

@endsection