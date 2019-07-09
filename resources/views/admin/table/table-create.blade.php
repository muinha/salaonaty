@extends ('adminlte::page')

@section ('title', 'Criar um item tabela preços')

@section ('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>Criar um item tabela preços</h1>
		  <ol class="breadcrumb">
		    <li><a href="admin"><i class="fa fa-dashboard"></i> Home</a></li>
		    <li><a href="admin/table">Tabela de preços</a></li>
		    <li class="active"><a href="/admin/table/create">Cadastrar</a></li>
		</ol>
	</section>
<!-- Main content -->
	<section class="content">
	  	<div class="row">
		  	<div class="col-md-12">
		  		<div class="box box-success">
			        <div class="box-header with-border">
			            <h3 class="box-title">Novo item Tabela de Preço</h3>
			        </div>
			        <!-- /.box-header -->
			        <!-- form start -->
			        <form role="form" action="" method="post">
			        	@csrf
			          	<div class="box-body">
				            <div class="form-group">
					            <label for="table">Nome Tabela</label>
					            <input type="text" class="form-control" id="table" name="table" placeholder="Digite o nome">
				            </div>
				            <div class="form-group">
				                <label for="price">Preço</label>
				                <input type="number" class="form-control" id="price" name="price" placeholder="Digite o valor">
				            </div>
			          	</div>
			          	<!-- /.box-body -->
			          	<div class="box-footer">
			            <button type="submit" class="btn btn-success">Cadastrar</button>
			          	</div>
			        </form>
		      	</div>
	  		</div>
	  	</div>
	</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->

@stop
