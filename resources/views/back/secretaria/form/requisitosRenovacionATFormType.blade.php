<h4 class="header-title m-t-0">REQUISITOS PARA RENOVACIÓN DEL PROGRAMA DE AYUDANTÍA TÉCNICA</h4>
<div class="p-20">
    <div class="form-group row">
        <div class="col-sm-6">
            <div class="checkbox checkbox-primary">
                <input id="check1" id="check1" type="checkbox">
                <label for="check1">1. Record académico actualizado.</label>
            </div>
            <div class="checkbox checkbox-primary">
                <input id="check2" id="check2" type="checkbox">
                <label for="check2">2. Constancia de estudio actualizada</label>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="checkbox checkbox-primary">
                <input id="check3" id="check3" type="checkbox">
                <label for="check3">3. Carga académica actualizada.</label>
            </div>
            <div class="checkbox checkbox-primary">
                <input id="check4" id="check4" type="checkbox">
                <label for="check4">4. Planilla de renovación impresa</label>
            </div>
        </div>
    </div>
    <div class="form-group row" id="botones" style="display: none">
        <div class="col-sm-6">
            {!! Form::button('Enviar', ['class'=> 'btn btn-primary waves-effect waves-light pull-right', 'id' => 'renovacionAOSubmit', 'type' => 'submit', 'data' => 1]) !!}
        </div>
        <div class="col-sm-6">
            {!! Form::button('Regresar', ['class'=> 'btn btn-secondary waves-effect m-l-5', 'id' => 'cancelar', 'type' => 'button', 'onclick' => "document.location.href = '".URL::route('renovacionesAyudantiasTecnicas')."'"]) !!}
        </div>
    </div>
</div>