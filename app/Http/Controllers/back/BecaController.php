<?php

namespace App\Http\Controllers\back;

use App\DatosPersonales;
use App\DatosAcademicos;
use App\DatosInteresBecas;
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
    	return view("back.estudiantes.becas.solicitud");
    }

    public function registrar(Request $request) {
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
            	'estudiante'               => $idEstudiante, 
                'alquilaSolo'              => $request['alquilaSolo'], 
                'observacionesResidencia'  => $request['observacionesResidencia'], 
                'observaciones'            => $request['observaciones']
            ];
            DatosAcademicos::create($camposAcademicos);
            DatosInteresBecas::create($camposInteres);
            return response()->json([
                'nuevoContenido' => $request->all()
            ]);
        }
    }

    public function renovacion() {
        return view("back.estudiantes.becas.renovacion");
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
            $camposInteres = [
                'estudiante'                => $idEstudiante, 
                'mismaResidencia'           => $request['mismaResidencia'], 
                'detallesMismaResidencia'   => $request['detallesMismaResidencia'], 
                'direccionNuevaResidencia'  => $request['direccionNuevaResidencia']
            ];
            DatosAcademicos::create($camposAcademicos);
            Supervisor::create($camposInteres);
            return response()->json([
                'nuevoContenido' => $request->all()
            ]);
        }
    }
}
