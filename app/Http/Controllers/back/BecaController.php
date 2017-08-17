<?php

namespace App\Http\Controllers\back;

use App\DatosPersonales;
use App\DatosAcademicos;
use App\DatosInteresBecas;
use App\PeticionesEstudiantes;
use App\Supervisor;
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

class BecaController extends Controller
{
    public function solicitud() {
        if(Auth::user()->rol == 1) {
            return view("back.estudiantes.becas.solicitud");
        }
        else {
            Session::flash('message', 'Sin privilegios');
            return Redirect::route('dashboard');
        }
    }

    public function renovacion() {
        if(Auth::user()->rol == 1) {
            return view("back.estudiantes.becas.renovacion");
        }
        else {
            Session::flash('message', 'Sin privilegios');
            return Redirect::route('dashboard');
        }
    }

    public function registrar(Request $request) {
        if(Auth::user()->rol == 1) {
            if($request->ajax()) {
                $separarFecha = explode('/', $request['fechaNacimiento']);
                $fechaSql = $separarFecha[2].'-'.$separarFecha[1].'-'.$separarFecha[0];
                $camposGenerales = [
                    'apellidosNombres'      => $request['apellidosNombres'], 
                    'cedula'                => $request['cedula'], 
                    'edad'                  => $request['edad'], 
                    'fechaNacimiento'       => $fechaSql, 
                    'estadoCivil'           => $request['estadoCivil'], 
                    'lugarNacimiento'       => $request['lugarNacimiento'], 
                    'direccionPermanente'   => $request['direccionPermanente'], 
                    'direccionLocal'        => $request['direccionLocal'], 
                    'telefonoCelular'       => $request['telefonoCelular'], 
                    'telefonoReferencia'    => $request['telefonoReferencia'], 
                    'email'                 => $request['email'], 
                    'supervisor'            => 1, 
                    'usuario'               => $request['usuario']
                ];
                DatosPersonales::create($camposGenerales);
                $idEstudiante = \DB::getPdo()->lastInsertId();
                $camposAcademicos = [
                    'estudiante'                => $idEstudiante, 
                    'especialidad'              => $request['especialidad'], 
                    'escuela'                   => $request['escuela'], 
                    'anioIngresoUdo'            => $request['anioIngresoUdo'], 
                    'anioIngresoPrograma'       => $request['anioIngresoPrograma'], 
                    'semestreActual'            => $request['semestreActual'], 
                    'creditosSemestreAnterior'  => $request['creditosSemestreAnterior'], 
                    'creditosAprobadosCarrera'  => $request['creditosAprobadosCarrera'],
                    'promedioSemestreAnterior'  => $request['promedioSemestreAnterior'], 
                    'numeroMateriasInscritas'    => $request['numeroMateriasInscritas'], 
                    'numeroCreditosInscritos'    => $request['numeroCreditosInscritos']
                ];
                $camposInteres = [
                    'estudiante'               => $idEstudiante, 
                    'alquilaSolo'              => $request['alquilaSolo'], 
                    'observacionesResidencia'  => $request['observacionesResidencia'], 
                    'observaciones'            => $request['observaciones']
                ];
                $camposPeticiones = [
                    'status'        => 'Pendiente', 
                    'observaciones' => '', 
                    'estudiante'    => $idEstudiante, 
                    'peticion'      => $request['peticion']
                ];
                DatosAcademicos::create($camposAcademicos);
                DatosInteresBecas::create($camposInteres);
                PeticionesEstudiantes::create($camposPeticiones);
                return response()->json([
                    'nuevoContenido' => $request->all()
                ]);
            }
        }
        else {
            Session::flash('message', 'Sin privilegios');
            return Redirect::route('dashboard');
        }
    }

    public function registrarRenovacion(Request $request) {
        if(Auth::user()->rol == 1) {
            if($request->ajax()) {
                $camposGenerales = [
                    'apellidosNombres'      => $request['apellidosNombres'], 
                    'cedula'                => $request['cedula'], 
                    'edad'                  => $request['edad'], 
                    'estadoCivil'           => $request['estadoCivil'], 
                    'estado'                => $request['estado'], 
                    'direccionPermanente'   => $request['direccionPermanente'], 
                    'direccionLocal'        => $request['direccionLocal'], 
                    'telefonoCelular'       => $request['telefonoCelular'], 
                    'telefonoReferencia'    => $request['telefonoReferencia'], 
                    'email'                 => $request['email'], 
                    'supervisor'            => 1, 
                    'usuario'               => $request['usuario']
                ];
                DatosPersonales::create($camposGenerales);
                $idEstudiante = \DB::getPdo()->lastInsertId();
                $camposAcademicos = [
                    'estudiante'                        => $idEstudiante, 
                    'especialidad'                      => $request['especialidad'], 
                    'escuela'                           => $request['escuela'], 
                    'anioIngresoUdo'                    => $request['anioIngresoUdo'], 
                    'anioIngresoPrograma'               => $request['anioIngresoPrograma'], 
                    'semestreActual'                    => $request['semestreActual'], 
                    'promedioSemestreAnterior'          => $request['promedioSemestreAnterior'], 
                    'materiasInscritasSemestreAnterior' => $request['materiasInscritasSemestreAnterior'], 
                    'materiasCursadasSemestreAnterior'  => $request['materiasCursadasSemestreAnterior'], 
                    'materiasAprobadasSemestreAnterior' => $request['materiasAprobadasSemestreAnterior'], 
                    'materiasRetiradasSemestreAnterior' => $request['materiasRetiradasSemestreAnterior']
                ];
                $camposInteres = [
                    'estudiante'                => $idEstudiante, 
                    'mismaResidencia'           => $request['mismaResidencia'], 
                    'detallesMismaResidencia'   => $request['detallesMismaResidencia'], 
                    'direccionNuevaResidencia'  => $request['direccionNuevaResidencia']
                ];
                $camposPeticiones = [
                    'status'        => 'Pendiente', 
                    'observaciones' => '', 
                    'estudiante'    => $idEstudiante, 
                    'peticion'      => $request['peticion']
                ];
                DatosAcademicos::create($camposAcademicos);
                DatosInteresBecas::create($camposInteres);
                PeticionesEstudiantes::create($camposPeticiones);
                return response()->json([
                    'nuevoContenido' => $request->all()
                ]);
            }
        }
        else {
            Session::flash('message', 'Sin privilegios');
            return Redirect::route('dashboard');
        }
    }

    public function listadoSolicitudesBecas() {
        if(Auth::user()->rol == 2) {
            $solicitudes = PeticionesEstudiantes::where('peticion', 5)->get();
            return view("back.secretaria.becas.solicitudesBecas", compact('solicitudes'));
        }
        else {
            Session::flash('message', 'Sin privilegios');
            return Redirect::route('dashboard');
        }
    }

    public function listadoRenovacionesBecas() {
        if(Auth::user()->rol == 2) {
            $solicitudes = PeticionesEstudiantes::where('peticion', 6)->get();
            return view("back.secretaria.becas.renovacionesBecas", compact('solicitudes'));
        }
        else {
            Session::flash('message', 'Sin privilegios');
            return Redirect::route('dashboard');
        }
    }

    public function formularioRequisitosBeca($id) {
        if(Auth::user()->rol == 2) {
            $peticion = PeticionesEstudiantes::find($id);
            $estudiante = DatosPersonales::find($peticion->estudiante);
            return view("back.secretaria.becas.registrarRequisitosBecas", compact('estudiante', 'peticion'));
        }
        else {
            Session::flash('message', 'Sin privilegios');
            return Redirect::route('dashboard');
        }
    }

    public function formularioRequisitosRenovacionBeca($id) {
        if(Auth::user()->rol == 2) {
            $peticion = PeticionesEstudiantes::find($id);
            $estudiante = DatosPersonales::find($peticion->estudiante);
            return view("back.secretaria.becas.registrarRequisitosRenovacionBecas", compact('estudiante', 'peticion'));
        }
        else {
            Session::flash('message', 'Sin privilegios');
            return Redirect::route('dashboard');
        }
    }

    public function registrarRequisitosBeca(Request $request){
        if(Auth::user()->rol == 2) {
            $this->peticion = PeticionesEstudiantes::find($request["peticion"]);
            $campos = [
                'status' => 'Revisado por secretaría'
            ];
            $this->peticion->fill($campos);
            $this->peticion->save();
            Session::flash('message', 'Verificación realizada satisfactoriamente');
            return Redirect::route('solicitudesBecasResidencia');
        }
        else {
            Session::flash('message', 'Sin privilegios');
            return Redirect::route('dashboard');
        }
    }

    public function registrarRequisitosRenovacionBeca(Request $request){
        if(Auth::user()->rol == 2) {
            $this->peticion = PeticionesEstudiantes::find($request["peticion"]);
            $campos = [
                'status' => 'Revisado por secretaría'
            ];
            $this->peticion->fill($campos);
            $this->peticion->save();
            Session::flash('message', 'Verificación realizada satisfactoriamente');
            return Redirect::route('renovacionesBecasResidencia');
        }
        else {
            Session::flash('message', 'Sin privilegios');
            return Redirect::route('dashboard');
        }
    }
}
