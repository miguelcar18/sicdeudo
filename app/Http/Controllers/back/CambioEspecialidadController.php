<?php

namespace App\Http\Controllers\back;

use App\Citas;
use App\DatosPersonales;
use App\DatosAcademicos;
use App\PeticionesEstudiantes;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use Session;
use App;
use Auth;
use Carbon\Carbon;
use Illuminate\Routing\Route;
use Input;
use Redirect;
use Response;

class CambioEspecialidadController extends Controller
{
    public function formularioCita() {
    	return view("back.estudiantes.cambioEspecialidad.solicitud");
    }

    public function registrarCita(Request $request) {
    	if($request->ajax()) {
    		$separarFecha = explode('/', $request['fechaNacimiento']);
            $fechaSql = $separarFecha[2].'-'.$separarFecha[1].'-'.$separarFecha[0];
            $campos = [
                'fechaCita' => $fechaSql, 
                'usuario'   => $request['usuario']
            ];
            Citas::create($campos);
            return response()->json([
                'nuevoContenido' => $request->all()
            ]);
        }
    }

    public function listadoSolicitudesCambioEspecialidad() {
        $solicitudes = PeticionesEstudiantes::where('peticion', 5)->get();
        return view("back.secretaria.solicitudesCambioEspecialidad", compact('solicitudes'));
    }

    public function listadoRenovacionesCambioEspecialidad() {
        $solicitudes = PeticionesEstudiantes::where('peticion', 6)->get();
        return view("back.secretaria.renovacionesCambioEspecialidad", compact('solicitudes'));
    }

    public function formularioRequisitosCambioEspecialidad($id) {
        $estudiante = DatosPersonales::find($id);
        return view("back.secretaria.registrarRequisitosCambioEspecialidad", compact('estudiante'));
    }

    public function formularioRequisitosRenovacionCambioEspecialidad($id) {
        $estudiante = DatosPersonales::find($id);
        return view("back.secretaria.registrarRequisitosRenovacionCambioEspecialidad", compact('estudiante'));
    }

    public function listadoSolicitudesCambioEspecialidadAprobar() {
        $solicitudes = PeticionesEstudiantes::where('peticion', 1)->get();
        return view("back.jefe.solicitudesCambioEspecialidad", compact('solicitudes'));
    }

    public function formularioAprobarCambioESpecialidad($id) {
        $estudiante = DatosPersonales::find($id);
        return view("back.jefe.registrarCambioEspecialidad", compact('estudiante'));
    }
}
