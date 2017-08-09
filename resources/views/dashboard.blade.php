@extends('app')

@section('content')
<div id="crud" class="row">
	<div class="col-xs-12">
		<h1 class="page-header">CRUD Laravel y Vue</h1>
	</div>
	<div class="col-sm-7">
		<a href="#" class="btn btn-primary pull-right">Nueva tarea</a>
		<table class="table table-striped table-hover">
		  <thead>
		    <tr>
		      <th>#</th>
		      <th>Tarea</th>
		      <th colspan="2">Acciones</th>
		    </tr>
		  </thead>
		  <tbody>
		    <tr v-for="keep in keeps">
		      <th scope="row">@{{keep.id}}</th>
		      <td>@{{keep.keep}}</td>
		      <td width="10px"><a href="#" class="btn btn-warning btn-xs">Editar</a></td>
		      <td width="10px"><a href="#" v-on:click.prevent="deleteKeep(keep)" class="btn btn-danger btn-xs">Eliminar</a></td>
		    </tr>
		  </tbody>
		</table>
	</div>
	<div class="col-sm-5">
		<pre>
			@{{ $data }}
		</pre>
	</div>
</div>
@endsection