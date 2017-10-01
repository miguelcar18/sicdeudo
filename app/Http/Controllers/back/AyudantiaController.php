<?php

namespace App\Http\Controllers\back;

use App\DatosPersonales;
use App\DatosAcademicos;
use App\DatosInteresAyudantias;
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

class AyudantiaController extends Controller
{
    public function solicitudOrdinaria() {
        if(Auth::user()->rol == 1) {
            return view("back.estudiantes.ayudantias.ordinarias.solicitud");
        }
        else {
            Session::flash('message', 'Sin privilegios');
            return Redirect::route('dashboard');
        }
    }

    public function solicitudTecnica() {
        if(Auth::user()->rol == 1) {
            return view("back.estudiantes.ayudantias.tecnicas.solicitud");
        }
        else {
            Session::flash('message', 'Sin privilegios');
            return Redirect::route('dashboard');
        }
    }

    public function registrarSolicitud(Request $request) {
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
                    'estudiante'    => $idEstudiante, 
                    'lugar'         => $request['lugar'], 
                    'habilidades'   => $request['habilidades'], 
                    'observaciones' => $request['observaciones']
                ];
                $camposPeticiones = [
                    'status'        => 'Pendiente', 
                    'observaciones' => '', 
                    'estudiante'    => $idEstudiante, 
                    'peticion'      => $request['peticion']
                ];
                DatosAcademicos::create($camposAcademicos);
                DatosInteresAyudantias::create($camposInteres);
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

    public function renovacionOrdinaria() {
        if(Auth::user()->rol == 1) {
            return view("back.estudiantes.ayudantias.ordinarias.renovacion");
        }
        else {
            Session::flash('message', 'Sin privilegios');
            return Redirect::route('dashboard');
        }
    }

    public function renovacionTecnica() {
        if(Auth::user()->rol == 1) {
            return view("back.estudiantes.ayudantias.tecnicas.renovacion");
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
                $camposSupervisor = [
                    'estudiante'            => $idEstudiante, 
                    'nombre'                => $request['nombre'], 
                    'dependencia'           => $request['dependencia'], 
                    'extensionTelefono'     => $request['extensionTelefono'], 
                    'relacion'              => $request['relacion'], 
                    'tareasAyudante'        => $request['tareasAyudante'], 
                    'permanecerSitio'       => $request['permanecerSitio'], 
                    'detallesPermanencia'   => $request['detallesPermanencia'], 
                    'reubicacion'           => $request['reubicacion']
                ];
                $camposPeticiones = [
                    'status'        => 'Pendiente', 
                    'observaciones' => '', 
                    'estudiante'    => $idEstudiante, 
                    'peticion'      => $request['peticion']
                ];
                DatosAcademicos::create($camposAcademicos);
                PeticionesEstudiantes::create($camposPeticiones);
                Supervisor::create($camposSupervisor);
                $idSupervisor = \DB::getPdo()->lastInsertId();
                $this->estudiante = DatosPersonales::find($idEstudiante);
                $this->estudiante->supervisor = $idSupervisor;
                $this->estudiante->save();
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

    public function listadoSolicitudesOrdinarias() {
        if(Auth::user()->rol == 2) {
            $solicitudes = PeticionesEstudiantes::where('peticion', 1)->get();
            return view("back.secretaria.ayudantias.ordinarias.solicitudesAyudantiasOrdinarias", compact('solicitudes'));
        }
        else {
            Session::flash('message', 'Sin privilegios');
            return Redirect::route('dashboard');
        }
    }

    public function listadoRenovacionesOrdinarias() {
        if(Auth::user()->rol == 2) {
            $solicitudes = PeticionesEstudiantes::where('peticion', 2)->get();
            return view("back.secretaria.ayudantias.ordinarias.renovacionesAyudantiasOrdinarias", compact('solicitudes'));
        }
        else {
            Session::flash('message', 'Sin privilegios');
            return Redirect::route('dashboard');
        }
    }

    public function listadoSolicitudesTecnicas() {
        if(Auth::user()->rol == 2) {
            $solicitudes = PeticionesEstudiantes::where('peticion', 3)->get();
            return view("back.secretaria.ayudantias.tecnicas.solicitudesAyudantiasTecnicas", compact('solicitudes'));
        }
        else {
            Session::flash('message', 'Sin privilegios');
            return Redirect::route('dashboard');
        }
    }

    public function listadoRenovacionesTecnicas() {
        if(Auth::user()->rol == 2) {
            $solicitudes = PeticionesEstudiantes::where('peticion', 4)->get();
            return view("back.secretaria.ayudantias.tecnicas.renovacionesAyudantiasTecnicas", compact('solicitudes'));
        }
        else {
            Session::flash('message', 'Sin privilegios');
            return Redirect::route('dashboard');
        }
    }

    public function formularioRequisitosAO($id) {
        if(Auth::user()->rol == 2) {
            $peticion = PeticionesEstudiantes::find($id);
            $estudiante = DatosPersonales::find($peticion->estudiante);
            return view("back.secretaria.ayudantias.ordinarias.registrarRequisitosAyudantiasOrdinarias", compact('estudiante', 'peticion'));
        }
        else {
            Session::flash('message', 'Sin privilegios');
            return Redirect::route('dashboard');
        }
    }

    public function formularioRequisitosRenovacionAO($id) {
        if(Auth::user()->rol == 2) {
            $peticion = PeticionesEstudiantes::find($id);
            $estudiante = DatosPersonales::find($peticion->estudiante);
            return view("back.secretaria.ayudantias.ordinarias.registrarRequisitosRenovacionAyudantiasOrdinarias", compact('estudiante', 'peticion'));
        }
        else {
            Session::flash('message', 'Sin privilegios');
            return Redirect::route('dashboard');
        }
    }

    public function formularioRequisitosAT($id) {
        if(Auth::user()->rol == 2) {
            $peticion = PeticionesEstudiantes::find($id);
            $estudiante = DatosPersonales::find($peticion->estudiante);
            return view("back.secretaria.ayudantias.tecnicas.registrarRequisitosAyudantiasTecnicas", compact('estudiante', 'peticion'));
        }
        else {
            Session::flash('message', 'Sin privilegios');
            return Redirect::route('dashboard');
        }
    }

    public function formularioRequisitosRenovacionAT($id) {
        if(Auth::user()->rol == 2) {
            $peticion = PeticionesEstudiantes::find($id);
            $estudiante = DatosPersonales::find($peticion->estudiante);
            return view("back.secretaria.ayudantias.tecnicas.registrarRequisitosRenovacionAyudantiasTecnicas", compact('estudiante', 'peticion'));
        }
        else {
            Session::flash('message', 'Sin privilegios');
            return Redirect::route('dashboard');
        }
    }

    public function registrarRequisitosAO(Request $request){
        if(Auth::user()->rol == 2) {
            $this->peticion = PeticionesEstudiantes::find($request["peticion"]);
            $campos = [
                'status' => 'Revisado por secretaría'
            ];
            $this->peticion->fill($campos);
            $this->peticion->save();
            Session::flash('message', 'Verificación realizada satisfactoriamente');
            return Redirect::route('solicitudesAyudantiasOrdinarias');
        }
        else {
            Session::flash('message', 'Sin privilegios');
            return Redirect::route('dashboard');
        }
    }

    public function registrarRequisitosRenovacionAO(Request $request){
        if(Auth::user()->rol == 2) {
            $this->peticion = PeticionesEstudiantes::find($request["peticion"]);
            $campos = [
                'status' => 'Revisado por secretaría'
            ];
            $this->peticion->fill($campos);
            $this->peticion->save();
            Session::flash('message', 'Verificación realizada satisfactoriamente');
            return Redirect::route('renovacionesAyudantiasOrdinarias');
        }
        else {
            Session::flash('message', 'Sin privilegios');
            return Redirect::route('dashboard');
        }
    }

    public function registrarRequisitosAT(Request $request){
        if(Auth::user()->rol == 2) {
            $this->peticion = PeticionesEstudiantes::find($request["peticion"]);
            $campos = [
                'status' => 'Revisado por secretaría'
            ];
            $this->peticion->fill($campos);
            $this->peticion->save();
            Session::flash('message', 'Verificación realizada satisfactoriamente');
            return Redirect::route('solicitudesAyudantiasTecnicas');
        }
        else {
            Session::flash('message', 'Sin privilegios');
            return Redirect::route('dashboard');
        }
    }

    public function registrarRequisitosRenovacionAT(Request $request){
        if(Auth::user()->rol == 2) {
            $this->peticion = PeticionesEstudiantes::find($request["peticion"]);
            $campos = [
                'status' => 'Revisado por secretaría'
            ];
            $this->peticion->fill($campos);
            $this->peticion->save();
            Session::flash('message', 'Verificación realizada satisfactoriamente');
            return Redirect::route('renovacionesAyudantiasTecnicas');
        }
        else {
            Session::flash('message', 'Sin privilegios');
            return Redirect::route('dashboard');
        }
    }

    public function listadoSolicitudesOrdinariasEs() {
        if(Auth::user()->rol == 3) {
            $solicitudes = PeticionesEstudiantes::where('peticion', 1)->get();
            return view("back.trabajador.ayudantias.ordinarias.solicitudesAyudantiasOrdinarias", compact('solicitudes'));
        }
        else {
            Session::flash('message', 'Sin privilegios');
            return Redirect::route('dashboard');
        }
    }

    public function listadoRenovacionesOrdinariasEs() {
        if(Auth::user()->rol == 3) {
            $solicitudes = PeticionesEstudiantes::where('peticion', 2)->get();
            return view("back.trabajador.ayudantias.ordinarias.renovacionesAyudantiasOrdinarias", compact('solicitudes'));
        }
        else {
            Session::flash('message', 'Sin privilegios');
            return Redirect::route('dashboard');
        }
    }

    public function listadoSolicitudesTecnicasEs() {
        if(Auth::user()->rol == 3) {
            $solicitudes = PeticionesEstudiantes::where('peticion', 3)->get();
            return view("back.trabajador.ayudantias.tecnicas.solicitudesAyudantiasTecnicas", compact('solicitudes'));
        }
        else {
            Session::flash('message', 'Sin privilegios');
            return Redirect::route('dashboard');
        }
    }

    public function listadoRenovacionesTecnicasEs() {
        if(Auth::user()->rol == 3) {
            $solicitudes = PeticionesEstudiantes::where('peticion', 4)->get();
            return view("back.trabajador.ayudantias.tecnicas.renovacionesAyudantiasTecnicas", compact('solicitudes'));
        }
        else {
            Session::flash('message', 'Sin privilegios');
            return Redirect::route('dashboard');
        }
    }

    public function listadoSolicitudesOrdinariasAprobar() {
        if(Auth::user()->rol == 4) {
            $solicitudes = PeticionesEstudiantes::where('peticion', 1)->get();
            $numero = 1;
            return view("back.jefe.form.solicitudes", compact('solicitudes', 'numero'));
        }
        else {
            Session::flash('message', 'Sin privilegios');
            return Redirect::route('dashboard');
        }
    }

    public function listadoRenovacionesOrdinariasAprobar() {
        if(Auth::user()->rol == 4) {
            $solicitudes = PeticionesEstudiantes::where('peticion', 2)->get();
            $numero = 2;
            return view("back.jefe.form.solicitudes", compact('solicitudes', 'numero'));
        }
        else {
            Session::flash('message', 'Sin privilegios');
            return Redirect::route('dashboard');
        }
    }

    public function listadoSolicitudesTecnicasAprobar() {
        if(Auth::user()->rol == 4) {
            $solicitudes = PeticionesEstudiantes::where('peticion', 3)->get();
            $numero = 3;
            return view("back.jefe.form.solicitudes", compact('solicitudes', 'numero'));
        }
        else {
            Session::flash('message', 'Sin privilegios');
            return Redirect::route('dashboard');
        }
    }

    public function listadoRenovacionesTecnicasAprobar() {
        if(Auth::user()->rol == 4) {
            $solicitudes = PeticionesEstudiantes::where('peticion', 4)->get();
            $numero = 4;
            return view("back.jefe.form.solicitudes", compact('solicitudes', 'numero'));
        }
        else {
            Session::flash('message', 'Sin privilegios');
            return Redirect::route('dashboard');
        }
    }
}
