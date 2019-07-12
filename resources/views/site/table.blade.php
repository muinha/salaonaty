@extends('site.template')

@section('title', 'Tabela de Preços')

@section('content')

<!-- Inicio da tabela -->
<div class="index">
	<div class="container">
		<div class="col-md-12 col-sm-12">
			<h1>Tabela de Preços</h1>
		</div>
		<table class="table">
			<thead>
				<tr>
					<th>#</th>
					<th>Nome</th>
					<th>Preço</th>
				</tr>
			</thead>
			<tbody>
			@foreach($table as $tables)
				<tr>
					<td>{{ $tables->id }}</td>
					<td><a href="{{url('services/'.$tables->name_service)}}">{{ $tables->name_service }}</a></td>
					<td>{{ number_format($tables->price, 2, ',', ' ')}}</td>
				</tr>
			@endforeach
			</tbody>
		</table>
	</div>
</div>

@endsection