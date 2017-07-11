<?php

namespace App\Http\Controllers\back;

use App\Citas;
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
}
