<?php

namespace App\Http\Controllers\back;

use App\Citas;
use App\User;
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
        if(Auth::user()->rol == 1) {
            $fechas = Citas::select('fechaCita', \DB::raw('COUNT(fechaCita) as total'))
                    ->groupBy('fechaCita')
                    ->havingRaw('COUNT(fechaCita) > 6')->get();
            return view("back.estudiantes.cambioEspecialidad.solicitud", compact("fechas"));
        }
        else {
            Session::flash('message', 'Sin privilegios');
            return Redirect::route('dashboard');
        }
    }

    public function registrarCita(Request $request) {
        if(Auth::user()->rol == 1) {
            if($request->ajax()) {
                $consulta = Citas::where('fechaCita', '>=', Carbon::now()->toDateString())->where('usuario', $request['usuario'])->firstOrFail();
                if(count($consulta) == 0)
                {
                    $separarFecha = explode('/', $request['fechaCita']);
                    $fechaSql = $separarFecha[2].'-'.$separarFecha[1].'-'.$separarFecha[0];
                    $campos = [
                        'fechaCita' => $fechaSql, 
                        'usuario'   => $request['usuario'],
                        'status'    => 'Pendiente'
                    ];
                    Citas::create($campos);
                    return response()->json([
                        'nuevoContenido' => $request->all(),
                        'existente' => false
                    ]);
                }
                else{
                    $separarFecha = explode('-', $consulta->fechaCita);
                    $fechaSql = $separarFecha[2].'/'.$separarFecha[1].'/'.$separarFecha[0];
                    return response()->json([
                        'existente' => true,
                        'fecha' => $fechaSql
                    ]);
                }
            }
        }
        else {
            Session::flash('message', 'Sin privilegios');
            return Redirect::route('dashboard');
        }
    }

    public function listadoSolicitudesCambioEspecialidad() {
        if(Auth::user()->rol == 2) {
            $solicitudes = Citas::all();
            return view("back.secretaria.cambioEspecialidad.solicitudesCambioEspecialidad", compact('solicitudes'));
        }
        else {
            Session::flash('message', 'Sin privilegios');
            return Redirect::route('dashboard');
        }
    }

    public function formularioRequisitosCambioEspecialidad($id) {
        if(Auth::user()->rol == 2) {
            $peticion = Citas::find($id);
            $estudiante = User::find($peticion->usuario);
            return view("back.secretaria.cambioEspecialidad.registrarRequisitosCambioEspecialidad", compact('estudiante', 'peticion'));
        }
        else {
            Session::flash('message', 'Sin privilegios');
            return Redirect::route('dashboard');
        }
    }

    public function registrarRequisitosCambioEspecialidad(Request $request) {
        if(Auth::user()->rol == 2) {
            $this->cita = Citas::find($request["peticion"]);
            $campos = [
                'status' => 'Revisado por secretaría'
            ];
            $this->cita->fill($campos);
            $this->cita->save();
            Session::flash('message', 'Verificación realizada satisfactoriamente');
            return Redirect::route('solicitudesCambioEspecialidad');
        }
        else {
            Session::flash('message', 'Sin privilegios');
            return Redirect::route('dashboard');
        }
    }

    public function listadoSolicitudesCambioAprobar() {
        if(Auth::user()->rol == 4) {
            $solicitudes = Citas::all();
            return view("back.jefe.form.solicitudesCambioEspecialidad", compact('solicitudes'));
        }
        else {
            Session::flash('message', 'Sin privilegios');
            return Redirect::route('dashboard');
        }
    }

    public function formularioCambioStatusCE($id) {
        if(Auth::user()->rol == 4) {
            $peticion = Citas::find($id);
            $estudiante = User::find($peticion->usuario);
            return view("back.jefe.form.formularioCambioStatusCE", compact('peticion', 'estudiante'));
        }
        else {
            Session::flash('message', 'Sin privilegios');
            return Redirect::route('dashboard');
        }
    }

    public function registrarCambioStatus(Request $request, $id) {
        if($request->ajax()) {
            if(Auth::user()->rol == 4) {
                $this->peticion = Citas::find($id);
                $campos = [
                    'status'    => $request['status'], 
                ];
                $this->peticion->fill($campos);
                $this->peticion->save();
                return response()->json([
                    'nuevoContenido' => $campos           
                ]);
            }
            else {
                Session::flash('message', 'Sin privilegios');
                return Redirect::route('dashboard');
            }
        }
    }
}
