@extends('back.layouts.base')

@section('titulo')
    <title>Enlace de interés "{{ $enlace->nombre }}" - Sicdeudo</title>
@stop

@section('content')
@include('back.layouts.content-title', ['titulo' => 'Información del enlace de interés'])
<div class="row">
	<div class="col-xs-12">
		<div class="card-box table-responsive">
			{!! Form::open(['route' => ['enlaces-interes.destroy', $enlace->id], 'method' =>'DELETE', 'id' => 'form-eliminar-enlace']) !!}
			<table id="datatable" class="table table-striped table-bordered">
				<tr>
					<th>Nombre: </th>
					<td>{{ $enlace->nombre }}</td>
				</tr>
				<tr>
					<th>Url: </th>
					<td>{{ $enlace->url }}</td>
				</tr>
				<tr>
					<th>Imagen: </th>
					<td>
						<img src="{{ asset('assets/images/logos/'.$enlace->path) }}" class="img-responsive img-thumbnail">
					</td>
				</tr>
				<tr>
					<th>Acciones</th>
					<td>
						<a href="{{ URL::route('enlaces-interes.edit', $enlace->id) }}" class="btn btn-warning btn-icon" title="Editar {{ $enlace->nombre }}">
                            <i class="zmdi zmdi-edit"></i> Editar
                        </a>
                        <a href="javascript:{}" data-id="{{ $enlace->id }}" class="btn btn-danger btn-icon tooltip-error borrar" data-rel="tooltip" title="Eliminar {{ $enlace->nombre }}" objeto="{{ $enlace->id }}">
                            <i class="zmdi zmdi-delete"></i> Eliminar
                        </a>
					</td>
				</tr>
			</table>
			{!! Form::close() !!}
		</div>
	</div><!-- end col-->
</div>
<!-- end row -->
@stop

@section('javascripts')
<script type="text/javascript">
	$(function () {
		$('.borrar').click(function (e) {
			e.preventDefault();
			var message = "¿Está realmente seguro(a) de eliminar este enlace?";
			var form = $('#form-eliminar-enlace');
			swal({
				title: message,
                type: "warning",
                showCancelButton: true,
                cancelButtonClass: 'btn-secondary waves-effect',
                confirmButtonClass: 'btn-warning',
                confirmButtonText: "Si",
                cancelButtonText: "No",
                closeOnConfirm: false
            }, function () {
            	form.submit();
	        });
		});
	});
</script>
@stop