<h4 class="header-title m-t-0">REQUISITOS PARA SOLICITUD DE CAMBIO DE ESPECIALIDAD</h4>
<div class="">
    <div class="form-group row">
        <div class="col-sm-6">
            <div class="checkbox checkbox-primary">
                <input id="chk1" name="chk1" type="checkbox">
                <label for="chk1">1. Tener el primer semestre cursado.</label>
            </div>
            <div class="checkbox checkbox-primary">
                <input id="chk2" name="chk2" type="checkbox">
                <label for="chk2">2. Planilla de cambio de especialidad.</label>
            </div>
            <div class="checkbox checkbox-primary">
                <input id="chk3" name="chk3" type="checkbox">
                <label for="chk3">3. Constancia de estudio actializada.</label>
            </div>
            <div class="checkbox checkbox-primary">
                <input id="chk4" name="chk4" type="checkbox">
                <label for="chk4">4. Record académico actualizado.</label>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="checkbox checkbox-primary">
                <input id="chk5" name="chk5" type="checkbox">
                <label for="chk5">5. Copia de cédula de identidad (legible y ampliada).</label>
            </div>
            <div class="checkbox checkbox-primary">
                <input id="chk6" name="chk6" type="checkbox">
                <label for="chk6">6. Pago de arancel por la cantidad de 0.45 U.T.</label>
            </div>
            <div class="checkbox checkbox-primary">
                <input id="chk7" name="chk7" type="checkbox">
                <label for="chk7">7. Constancia de solicitud de cambio de especialidad realizada a través de SICDE-UDO.</label>
            </div>
        </div>
    </div>
    <div class="form-group row" id="botones" style="display: none">
        <div class="col-sm-6">
            {!! Form::button('Enviar', ['class'=> 'btn btn-primary waves-effect waves-light pull-right', 'id' => 'renovacionAOSubmit', 'type' => 'submit', 'data' => 1]) !!}
        </div>
        <div class="col-sm-6">
            {!! Form::button('Regresar', ['class'=> 'btn btn-secondary waves-effect m-l-5', 'id' => 'cancelar', 'type' => 'button', 'onclick' => "document.location.href = '".URL::route('renovacionesAyudantiasOrdinarias')."'"]) !!}
        </div>
    </div>
</div>