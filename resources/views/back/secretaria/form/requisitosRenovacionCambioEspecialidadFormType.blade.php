<h4 class="header-title m-t-0">REQUISITOS PARA RENOVACIÓN DEL PROGRAMA DE BECAS DE RESIDENCIA</h4>
<div class="p-20">
    <div class="form-group row">
        <div class="col-sm-6">
            <div class="checkbox checkbox-primary">
                <input id="checkbox3" type="checkbox">
                <label for="checkbox3">1. Record académico actualizado.</label>
            </div>
            <div class="checkbox checkbox-primary">
                <input id="checkbox1" type="checkbox">
                <label for="checkbox1">2. Constancia de estudio actualizada</label>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="checkbox checkbox-primary">
                <input id="checkbox2" type="checkbox">
                <label for="checkbox2">3. Carga académica actualizada.</label>
            </div>
            <div class="checkbox checkbox-primary">
                <input id="checkbox3" type="checkbox">
                <label for="checkbox3">4. Planilla de renovación impresa</label>
            </div>
        </div>
    </div>
    <div class="form-group row" id="botones" style="display: none">
        <div class="col-sm-6">
            {!! Form::button('Enviar', ['class'=> 'btn btn-primary waves-effect waves-light pull-right', 'id' => 'renovacionAOSubmit', 'type' => 'submit', 'data' => 1]) !!}
        </div>
        <div class="col-sm-6">
            {!! Form::button('Regresar', ['class'=> 'btn btn-secondary waves-effect m-l-5', 'id' => 'cancelar', 'type' => 'button', 'onclick' => "document.location.href = '".URL::route('renovacionesBecasResidencia')."'"]) !!}
        </div>
    </div>
</div>