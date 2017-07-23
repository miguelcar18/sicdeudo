<h4 class="header-title m-t-0">REQUISITOS PARA SOLICITUD DE CAMBIO DE ESPECIALIDAD</h4>
<div class="">
    <div class="form-group row">
        <div class="col-sm-6">
            <div class="checkbox checkbox-primary">
                <input id="checkbox1" type="checkbox">
                <label for="checkbox1">1. Tener el primer semestre cursado.</label>
            </div>
            <div class="checkbox checkbox-primary">
                <input id="checkbox2" type="checkbox">
                <label for="checkbox2">2. Planilla de cambio de especialidad.</label>
            </div>
            <div class="checkbox checkbox-primary">
                <input id="checkbox3" type="checkbox">
                <label for="checkbox3">3. Constancia de estudio actializada.</label>
            </div>
            <div class="checkbox checkbox-primary">
                <input id="checkbox1" type="checkbox">
                <label for="checkbox1">4. Record académico actualizado.</label>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="checkbox checkbox-primary">
                <input id="checkbox2" type="checkbox">
                <label for="checkbox2">5. Copia de cédula de identidad (legible y ampliada).</label>
            </div>
            <div class="checkbox checkbox-primary">
                <input id="checkbox3" type="checkbox">
                <label for="checkbox3">6. Pago de arancel por la cantidad de 0.45 U.T.</label>
            </div>
            <div class="checkbox checkbox-primary">
                <input id="checkbox1" type="checkbox">
                <label for="checkbox1">7. Constancia de solicitud de cambio de especialidad realizada a través de SICDE-UDO.</label>
            </div>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-6">
            {!! Form::button('Enviar', ['class'=> 'btn btn-primary waves-effect waves-light pull-right', 'id' => 'renovacionAOSubmit', 'type' => 'submit', 'data' => 1]) !!}
        </div>
        <div class="col-sm-6">
            {!! Form::button('Cancelar', ['class'=> 'btn btn-secondary waves-effect m-l-5', 'id' => 'cancelar', 'type' => 'reset']) !!}
        </div>
    </div>
</div>