<?php

namespace App\Http\Controllers\back;

use App\DatosPersonales;
use App\DatosAcademicos;
use App\DatosInteresAyudantias;
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

    public function registrarOrdinaria(Request $request) {
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
            DatosAcademicos::create($camposAcademicos);
            DatosInteresAyudantias::create($camposInteres);
            return response()->json([
                'nuevoContenido' => $request->all()
            ]);
        }
    }

    public function renovacionOrdinaria() {
        return view("back.estudiantes.ayudantias.ordinarias.renovacion");
    }

    public function registrarRenovacionOrdinaria(Request $request) {
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
            DatosAcademicos::create($camposAcademicos);
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

    public function solicitudTecnica() {
        return view("back.estudiantes.ayudantias.tecnicas.solicitud");
    }

    public function registrarTecnica(Request $request) {
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
                'habilidades'   => $request['habilidades'], 
                'observaciones' => $request['observaciones']
            ];
            DatosAcademicos::create($camposAcademicos);
            DatosInteresAyudantias::create($camposInteres);
            return response()->json([
                'nuevoContenido' => $request->all()
            ]);
        }
    }

    public function renovacionTecnica() {
        return view("back.estudiantes.ayudantias.tecnicas.renovacion");
    }

    public function registrarRenovacionTecnica(Request $request) {
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
            DatosAcademicos::create($camposAcademicos);
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
        return view("back.secretaria.solicitudesAyudantiasOrdinarias");
    }
}
