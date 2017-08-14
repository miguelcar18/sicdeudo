<div class="form-group row">
	<div class="col-sm-6">
		{!! Form::button($titulo, ['class'=> 'btn btn-primary waves-effect waves-light pull-right', 'id' => $id, 'type' => 'submit', 'data' => $data]) !!}
	</div>
	<div class="col-sm-6">
		{!! Form::button('Cancelar', ['class'=> 'btn btn-secondary waves-effect m-l-5', 'id' => 'cancelar', 'type' => 'button', 'onclick' => "document.location.href = '".$cancelar."'"]) !!}
	</div>
</div>