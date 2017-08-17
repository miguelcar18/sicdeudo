<h4 class="header-title m-t-0">REQUISITOS PARA INGRESAR AL PROGRAMA DE AYUDANTÍA ORDINARIA</h4>
<div class="p-20">
    <div class="form-group row">
        <div class="col-sm-6">
            <div class="checkbox checkbox-primary">
                <input id="checkbox1" name="checkbox1" type="checkbox">
                <label for="checkbox1">1. Fotocopia de la cédula de identidad ampliada.</label>
            </div>
            <div class="checkbox checkbox-primary">
                <input id="checkbox2" name="checkbox2" type="checkbox">
                <label for="checkbox2">2. Foto tipo carnet.</label>
            </div>
            <div class="checkbox checkbox-primary">
                <input id="checkbox3" name="checkbox3" type="checkbox">
                <label for="checkbox3">3. Record académico actualizado.</label>
            </div>
            <div class="checkbox checkbox-primary">
                <input id="checkbox4" name="checkbox4" type="checkbox">
                <label for="checkbox4">4. Constancia de estudio actualizada</label>
            </div>
            <div class="checkbox checkbox-primary">
                <input id="checkbox5" name="checkbox5" type="checkbox">
                <label for="checkbox5">5. Carga académica actualizada.</label>
            </div>
            <div class="checkbox checkbox-primary">
                <input id="checkbox6" name="checkbox6" type="checkbox">
                <label for="checkbox6">6. Constancia de trabajo del principal proveedor especificando sueldo.</label>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="checkbox checkbox-primary">
                <input id="checkbox7" name="checkbox7" type="checkbox">
                <label for="checkbox7">7. Fotocopia de recibo de luz, agua o teléfono.</label>
            </div>
            <div class="checkbox checkbox-primary">
                <input id="checkbox8" name="checkbox8" type="checkbox">
                <label for="checkbox8">8. Copia de libreta cuenta de ahorro banco mercantil.</label>
            </div>
            <div class="checkbox checkbox-primary">
                <input id="checkbox9" name="checkbox9" type="checkbox">
                <label for="checkbox9">9. Planilla de solicitud impresa</label>
            </div>
            <div class="checkbox checkbox-primary">
                <input id="checkbox10" name="checkbox10" type="checkbox">
                <label for="checkbox10">10. Copia de notas certificadad de quinto año (Estudiantes nuevo ingreso).</label>
            </div>
            <div class="checkbox checkbox-primary">
                <input id="checkbox11" name="checkbox11" type="checkbox">
                <label for="checkbox11">11. Consignar todos los documentos en carpeta marrón.</label>
            </div>
        </div>
    </div>
    <div class="form-group row" id="botones" style="display: none">
        <div class="col-sm-6">
            {!! Form::button('Enviar', ['class'=> 'btn btn-primary waves-effect waves-light pull-right', 'id' => 'renovacionAOSubmit', 'type' => 'submit', 'data' => 1]) !!}
        </div>
        <div class="col-sm-6">
            {!! Form::button('Regresar', ['class'=> 'btn btn-secondary waves-effect m-l-5', 'id' => 'cancelar', 'type' => 'button', 'onclick' => "document.location.href = '".URL::route('solicitudesAyudantiasOrdinarias')."'"]) !!}
        </div>
    </div>
</div>