<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" type="text/css" href="css/site/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/site/estilo.css">
	<link rel="stylesheet" type="text/css" href="css/site/bootstrap-social.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<title>@yield('title')</title>
</head>
<body>

<!-- INICIO DO MENU DE NAVEGAÇÃO -->
<header>
	<div class="menu-navegacao">
		<div class="container">
			<nav class="navbar navbar-expand-lg navbar-light">
				<a class="navbar-brand h1" href="/"><img width="190px" src="{{ asset('image/logo.png') }}"></a>
		        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
		            <span class="navbar-toggler-icon"></span>
		        </button>
		       	<div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
		            <ul class="navbar-nav mr-auto">
		                <li class="nav-item active">
		                    <a class="nav-link mr-1" href="/">Inicio</a>
		                </li>
		                <li class="nav-item">
		                    <a class="nav-link mr-1" href="blog">Blog</a>
		                </li>
		                <li class="nav-item">
		                    <a class="nav-link mr-1" href="photo">Fotos Cabelos</a>
						</li>
						<li class="nav-item">
		                    <a class="nav-link mr-1" href="table">Tabela de Preços</a>
		                </li>
		                <li class="nav-item">
		                    <a class="nav-link mr-1" href="contact">Contato</a>
		                </li>
		            </ul>
		            <form class="form-inline my-2 my-lg-0">
		                <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
		                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
		            </form>
		        </div>
	    	</nav>
    	</div>
	</div>
</header>
<!-- FIM DO MENU DE NAVEGAÇÃO -->

@yield('content')

<!-- INICIO DO RODAPE -->
<footer>
	<div class="rodape">
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-sm-12 text-center mb-2 mt-1">
					<h1 class="h1-rodape">Rede Social</h1>
					<a class="btn btn-social-icon btn-facebook" href="#">
						<span class="fa fa-facebook"></span>
					</a>
					<a class="btn btn-social-icon btn-twitter" href="#">
						<span class="fa fa-twitter"></span>
					</a>
					<a class="btn btn-social-icon btn-google" href="#">
						<span class="fa fa-google"></span>
					</a>
					<hr>
				</div>
				<div class="col-md-4 col-sm-12 text-center mb-2 mt-1">
					<h1 class="h1-rodape">Categorias</h1>
                        <ul class="list-group">                                    
                            <a class="text-dark" href=""><li class="list-group-item">Categoria 1</li></a>
                            <a class="text-dark" href=""><li class="list-group-item">Categoria 2</li></a>
                            <a class="text-dark" href=""><li class="list-group-item">Categoria 3</li></a>
                            <a class="text-dark" href=""><li class="list-group-item">Categoria 4</li></a>
                            <a class="text-dark" href=""><li class="list-group-item">Categoria 5</li></a>
                        </ul>  
				</div>
				<div class="col-md-4 col-sm-12 mb-2 mt-5 text-center">
					<p class="p-rodape">&reg; copyright 2019 By <a class="nav-link text-info" href="">Samuel Sanches</a> </p>
					<h1 class="h1-rodape">Rede Social</h1>
					<a class="btn btn-social-icon btn-facebook" href="#">
						<span class="fa fa-facebook"></span>
					</a>
					<a class="btn btn-social-icon btn-twitter" href="#">
						<span class="fa fa-twitter"></span>
					</a>
					<a class="btn btn-social-icon btn-google" href="#">
						<span class="fa fa-google"></span>
					</a>
					<hr>
				</div>
			</div>
		</div>
	</div>
</footer>
<!-- FIM DO RODAPE -->



	<!-- Inicio java Script -->
	<script type="text/javascript" href="js/site/app.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<!-- Inicio java Script -->

</body>
</html>