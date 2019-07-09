@extends ('adminlte::page')

@section ('title', 'Editar Item tabela de preço')

@section ('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>Editar Item tabela de preço</h1>
		  <ol class="breadcrumb">
		    <li><a href="admin"><i class="fa fa-dashboard"></i> Home</a></li>
		    <li><a href="admin/table">Tabela de preços</a></li>
		    <li class="active"><a href="/admin/table/create">Editar</a></li>
		</ol>
	</section>
<!-- Main content -->
	<section class="content">
	  	<div class="row">
		  	<div class="col-md-12">
		  		<div class="box box-success">
			        <div class="box-header with-border">
			            <h3 class="box-title">Editar item</h3>
			        </div>
			        <!-- /.box-header -->
			        <!-- form start -->
			        <form role="form" action="" method="post">
			        	@csrf
			          	<div class="box-body">
				            <div class="form-group">
					            <label for="table">Nome Tabela</label>
					            <input type="text" class="form-control" id="table" name="table" value="{{ $tab->name_service }}">
				            </div>
				            <div class="form-group">
				                <label for="price">Preço</label>
				                <input type="number" class="form-control" id="price" name="price" value="{{ $tab->price }}">
				            </div>
			          	</div>
			          	<!-- /.box-body -->
			          	<div class="box-footer">
			            <button type="submit" class="btn btn-success">Editar</button>
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
