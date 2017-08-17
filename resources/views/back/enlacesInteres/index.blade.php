@extends('back.layouts.base')

@section('titulo')
<title>Enlaces de interés - Sicdeudo</title>
@stop

@section('content')
@include('back.layouts.content-title', ['titulo' => 'Redes sociales'])
<div class="row">
	<div class="col-sm-12">
		<div class="card-box table-responsive">
			<table id="datatable" class="table table-striped table-bordered">
				<thead>
					<tr>
						<th>Nombre</th>
						<th>Url</th>
						<th>Acciones</th>
					</tr>
				</thead>
				<tbody>
					@foreach($enlaces as $enlace)
					<tr>
						<td>{{ $enlace->nombre }}</td>
						<td>{{ $enlace->url }}</td>
						<td class="text-center" style="padding: 1px">
	                        <a href="{{ URL::route('enlaces-interes.show', $enlace->id) }}" class="btn btn-primary btn-icon" title="Ver {{ $enlace->nombre }}">
	                            <i class="zmdi zmdi-eye"></i>
	                        </a>
	                        <a href="{{ URL::route('enlaces-interes.edit', $enlace->id) }}" class="btn btn-warning btn-icon" title="Editar {{ $enlace->nombre }}">
	                            <i class="zmdi zmdi-edit"></i>
	                        </a>
	                        <a href="#" data-id="{{ $enlace->id }}" class="btn btn-danger btn-icon tooltip-error borrar-red-social" data-rel="tooltip" title="Eliminar {{ $enlace->nombre }}" objeto="{{ $enlace->id }}">
	                            <i class="zmdi zmdi-delete"></i>
	                        </a>
	                    </td>
					</tr>
					@endforeach
				</tbody>
			</table>
			{!! Form::open(array('route' => array('enlaces-interes.destroy', 'USER_ID'), 'method' => 'DELETE', 'role' => 'form', 'id' => 'form-delete')) !!}
            {!! Form::close() !!}
		</div>
	</div>
</div> <!-- end row -->
@stop

@section('javascripts')
<script type="text/javascript">
	$(function () {
		$('#datatable').DataTable({
			"language": {
				"lengthMenu": "Mostrar _MENU_ resultados por página",
				"zeroRecords": "Sin resultados",
				"info": "Mostrando página _PAGE_ de _PAGES_",
				"infoEmpty": "Sin ninguna información",
				"infoFiltered": "(Filtrado de _MAX_ resultados totales)",
				"search":         "Buscar:",
				"paginate": {
					"first":      "Primero",
					"last":       "Último",
					"next":       "Siguiente",
					"previous":   "Anterior"
				},
			}
		});

		@if(Session::has('message'))
			setTimeout(function () {
				var mensaje1 = "{{ Session::get('message') }}";
				swal("¡Eliminado!", mensaje1, "success");
			}, 10);
		@endif

        if ($('.tooltip-error').length) {
           $('.tooltip-error').click(function (e) {
                e.preventDefault();
                var message = "¿Está realmente seguro(a) de eliminar este enlace?";
                var id = $(this).data('id');
                var form = $('#form-delete');
                var action = form.attr('action').replace('USER_ID', id);
                var row =  $(this).parents('tr');
                swal({
                    title: message,
                    //text: "You will not be able to recover this imaginary file!",
                    type: "warning",
                    showCancelButton: true,
                    cancelButtonClass: 'btn-secondary waves-effect',
                    confirmButtonClass: 'btn-warning',
                    confirmButtonText: "Si",
                    cancelButtonText: "No",
                    closeOnConfirm: false
                }, function () {
                    row.fadeOut(1000);
                    $.post(action, form.serialize(), function(result) {
                        if (result.success) {
                            row.delay(1000).remove();
                            swal("¡Eliminado!", result.msg, "success");                
                        } 
                        else 
                            row.show();
                    }, 'json');
                });
            });
        }
	});
</script>
@stop