@extends ('adminlte::page')

@section ('title', 'Lista Item da Tabela')

@section ('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
	<section class="content-header">
	  <h1>Lista Item da Tabela</h1>
		<ol class="breadcrumb">
		    <li><a href="admin"><i class="fa fa-dashboard"></i> Home</a></li>
		    <li class="active"><a href="admin/table">Tabela de Preço</a></li>
		</ol>
	</section>
	<!-- Main content -->
	<section class="content">
	  	<div class="row">
	  		<div class="col-md-12">
	  			<div class="box box-primary">
	            	<div class="box-header">
	              		<a href="table/create" class="btn btn-success">Cadastrar novo Item Tabela</a>
	            	</div>
	            	<div class="box-body no-padding">
	              		<table class="table table-striped">
	                		<thead>
	                  			<tr>
	                    			<th style="width: 10px">#</th>
	                    			<th>Título</th>
                                    <th>Preço</th>
	                  			</tr>
	                		</thead>
	                		<tbody>
							@foreach($table as $tables)
			                	<tr>
			                    	<td>{{ $tables->id }}</td>
			                    	<td>{{ $tables->name_service }}</td>
                                    <td>{{ number_format($tables->price, 2, ',', ' ')}}</td>
			                    	<td>
			                      		<a href="table/{{ $tables->id }}/edit" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i> Editar</a>
			                      		<a href="table/{{ $tables->id }}/delete" onclick="return confirm('Deseja realmente excluir este registro?')" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Excluir</a>
			                    	</td>
			                	</tr>
							@endforeach
	               			</tbody>
	              		</table>
	            	</div>
	           	<!-- /.box-body -->
				</div>
	        </div>
		</div>
	</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->


@stop