<div class="p-20">
	@if(isset($enlace->path))
	<div class="form-group row">
		<label class="col-sm-2 control-label">Imagen actual:</label>
		<div class="col-sm-10">
			@if($enlace->path != '')
			<img src="{{ asset('assets/images/logos/'.$enlace->path) }}" alt="" class="img img-thumbnail" width="300px" height="auto" id="fotoActual" data-folder="{{ asset('assets/images/logos/') }}">
			@elseif($enlace->path == '')
			<img src="{{ asset('assets/images/placeholder.jpg') }}" alt="" class="img img-thumbnail" width="300px" height="auto" id="fotoActual" data-folder="{{ asset('assets/images/logos/') }}">
			@endif
		</div>
	</div>
	@endif
	<div class="form-group row">
		<label for="nombre" class="col-sm-2 form-control-label">Nombre <span class="text-danger">*</span></label>
		<div class="col-sm-4">
			{!! Form::text('nombre', null, ['placeholder' => 'Nombre', 'class' => 'form-control', 'id' => 'nombre', 'required' => true]) !!}
		</div>
		<label for="nombre" class="col-sm-1 form-control-label">Imagen <span class="text-danger">*</span></label>
		<div class="col-sm-5">
			{!! Form::file('file', $attributes = array('class' => 'form-control file-styled', 'id' => 'file', 'accept' => 'image/jpg,image/png,image/jpeg,image/gif')) !!}
		</div>
	</div>
	<div class="form-group row">
		<label for="url" class="col-sm-2 form-control-label">URL <span class="text-danger">*</span></label>
		<div class="col-sm-10">
			{!! Form::url('url', null, ['placeholder' => 'http://www.example.com', 'class' => 'form-control', 'id' => 'url', 'required' => true]) !!}
		</div>
	</div>
</div>