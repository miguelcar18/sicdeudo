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
    	return view("back.estudiantes.ayudantias.ordinarias.solicitud");
    }

    public function solicitudTecnica() {
        return view("back.estudiantes.ayudantias.tecnicas.solicitud");
    }

    public function registrarSolicitud(Request $request) {
    	if($request->ajax()) {
    		$separarFecha = explode('/', $request['fechaNacimiento']);
            $fechaSql = $separarFecha[2].'-'.$separarFecha[1].'-'.$separarFecha[0];
            $camposGenerales = [
                'apellidosNombres'      => $request['apellidosNombres'], 
                'cedula'   				=> $request['cedula'], 
                'edad'        			=> $request['edad'], 
                'fechaNacimiento'   	=> $fechaSql, 
                'estadoCivil'        	=> $request['estadoCivil'], 
                'lugarNacimiento'   	=> $request['lugarNacimiento'], 
                'direccionPermanente'   => $request['direccionPermanente'], 
                'direccionLocal' 		=> $request['direccionLocal'], 
                'telefonoCelular'       => $request['telefonoCelular'], 
                'telefonoReferencia'   	=> $request['telefonoReferencia'], 
                'email'        			=> $request['email'], 
                'supervisor'   			=> 1, 
                'usuario'   			=> $request['usuario']
            ];
            DatosPersonales::create($camposGenerales);
            $idEstudiante = \DB::getPdo()->lastInsertId();
            $camposAcademicos = [
            	'estudiante'    			=> $idEstudiante, 
                'especialidad'        		=> $request['especialidad'], 
                'escuela'   				=> $request['escuela'], 
                'anioIngresoUdo'        	=> $request['anioIngresoUdo'], 
                'anioIngresoPrograma'   	=> $request['anioIngresoPrograma'], 
                'semestreActual' 			=> $request['semestreActual'], 
                'creditosSemestreAnterior'  => $request['creditosSemestreAnterior'], 
                'creditosAprobadosCarrera'  => $request['creditosAprobadosCarrera'],
                'promedioSemestreAnterior'  => $request['promedioSemestreAnterior'], 
                'numeroMateriasInscritas'    => $request['numeroMateriasInscritas'], 
                'numeroCreditosInscritos'    => $request['numeroCreditosInscritos']
            ];
            $camposInteres = [
            	'estudiante'    => $idEstudiante, 
                'lugar'        	=> $request['lugar'], 
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

    public function renovacionOrdinaria() {
        return view("back.estudiantes.ayudantias.ordinarias.renovacion");
    }

    public function renovacionTecnica() {
        return view("back.estudiantes.ayudantias.tecnicas.renovacion");
    }

    public function registrarRenovacion(Request $request) {
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

    public function listadoSolicitudesOrdinarias() {
        $solicitudes = PeticionesEstudiantes::where('peticion', 1)->get();
        return view("back.secretaria.solicitudesAyudantiasOrdinarias", compact('solicitudes'));
    }

    public function listadoRenovacionesOrdinarias() {
        $solicitudes = PeticionesEstudiantes::where('peticion', 2)->get();
        return view("back.secretaria.renovacionesAyudantiasOrdinarias", compact('solicitudes'));
    }

    public function listadoSolicitudesTecnicas() {
        $solicitudes = PeticionesEstudiantes::where('peticion', 3)->get();
        return view("back.secretaria.solicitudesAyudantiasTecnicas", compact('solicitudes'));
    }

    public function listadoRenovacionesTecnicas() {
        $solicitudes = PeticionesEstudiantes::where('peticion', 4)->get();
        return view("back.secretaria.renovacionesAyudantiasTecnicas", compact('solicitudes'));
    }

    public function formularioRequisitosAO($id) {
        $estudiante = DatosPersonales::find($id);
        return view("back.secretaria.registrarRequisitosAyudantiasOrdinarias", compact('estudiante'));
    }

    public function formularioRequisitosRenovacionAO($id) {
        $estudiante = DatosPersonales::find($id);
        return view("back.secretaria.registrarRequisitosRenovacionAyudantiasOrdinarias", compact('estudiante'));
    }

    public function formularioRequisitosAT($id) {
        $estudiante = DatosPersonales::find($id);
        return view("back.secretaria.registrarRequisitosAyudantiasTecnicas", compact('estudiante'));
    }

    public function formularioRequisitosRenovacionAT($id) {
        $estudiante = DatosPersonales::find($id);
        return view("back.secretaria.registrarRequisitosRenovacionAyudantiasTecnicas", compact('estudiante'));
    }

    public function listadoSolicitudesOrdinariasEs() {
        $solicitudes = PeticionesEstudiantes::where('peticion', 1)->get();
        return view("back.trabajador.solicitudesAyudantiasOrdinarias", compact('solicitudes'));
    }

    public function formularioEstudioSEAO($id) {
        $estudiante = DatosPersonales::find($id);
        return view("back.trabajador.registrarAyudantiasOrdinarias", compact('estudiante'));
    }

    public function listadoSolicitudesOrdinariasAprobar() {
        $solicitudes = PeticionesEstudiantes::where('peticion', 1)->get();
        return view("back.jefe.solicitudesAyudantiasOrdinarias", compact('solicitudes'));
    }

    public function formularioAprobarAO($id) {
        $estudiante = DatosPersonales::find($id);
        return view("back.jefe.registrarAyudantiasOrdinarias", compact('estudiante'));
    }
}
