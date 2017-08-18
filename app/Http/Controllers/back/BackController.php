<?php

namespace App\Http\Controllers\back;

use App\DatosPersonales;
use App\DatosSocioeconomicos;
use App\EconomiaFamiliar;
use App\GrupoFamiliar;
use App\Psicodinamica;
use App\PeticionesEstudiantes;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Http\Requests;
use Redirect;
use Session;

class BackController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    
    public function index()
    {
    	return view ('back.layouts.base');
    }

    public function formularioReportes()
    {
    	return view ('back.jefe.reportes');
    }
    public function formularioReporteEstadistico()
    {
        return view ('back.jefe.reportes');
    }

    public function formularioEstudioSE($id, $peticion) {
        if(Auth::user()->rol == 3) {
            $estudiante = DatosPersonales::find($id);
            return view("back.trabajador.form.registrar", compact('estudiante', 'id', 'peticion'));
        }
        else {
            Session::flash('message', 'Sin privilegios');
            return Redirect::route('dashboard');
        }
    }

    public function registrarEstudioSE(Request $request){
        if(Auth::user()->rol == 3) {
            $this->estudiante = DatosPersonales::find($request["estudiante"]);
            $this->peticion = PeticionesEstudiantes::find($request["peticion"]);

            $camposDatosSocioeconomicos = [
                'ingresosPadres'                => $request['ingresosPadres'],
                'ingresosFamiliares'            => $request['ingresosFamiliares'],
                'ingresosBecas'                 => $request['ingresosBecas'],
                'ingresosAyudantias'            => $request['ingresosAyudantias'],
                'ingresosPreparadurias'         => $request['ingresosPreparadurias'],
                'ingresosTrabajo'               => $request['ingresosTrabajo'],
                'ingresosAhorros'               => $request['ingresosAhorros'],
                'ingresosOtros'                 => $request['ingresosOtros'],
                'alojamientoLocalidad'          => $request['alojamientoLocalidad'],
                'alojamientoRegiones'           => $request['alojamientoRegiones'],
                'condicionesEstudio'            => $request['condicionesEstudio'],
                'camasHabitacion'               => $request['camasHabitacion'],
                'condicionesHigienicas'         => $request['condicionesHigienicas'],
                'ventilacion'                   => $request['ventilacion'],
                'iluminacion'                   => $request['iluminacion'],
                'otros'                         => $request['otros'],
                'desayunoLugar'                 => $request['desayunoLugar'],
                'almuerzoLugar'                 => $request['almuerzoLugar'],
                'cenaLugar'                     => $request['cenaLugar'],
                'desayunoCosto'                 => $request['desayunoCosto'],
                'almuerzoCosto'                 => $request['almuerzoCosto'],
                'cenaCosto'                     => $request['cenaCosto'],
                'estudiante'                    => $request['estudiante'],
                'peticion'                      => $request['peticion']
            ];

            $camposEconomiaFamiliar = [
                'sueldo'                        => $request['sueldo'],
                'ayudaFamiliar'                 => $request['ayudaFamiliar'],
                'negocio'                       => $request['negocio'],
                'rentas'                        => $request['rentas'],
                'becasCreditos'                 => $request['becasCreditos'],
                'pensionJubilacion'             => $request['pensionJubilacion'],
                'alimentacion'                  => $request['alimentacion'],
                'vivienda'                      => $request['vivienda'],
                'serviciosPublicos'             => $request['serviciosPublicos'],
                'transporte'                    => $request['transporte'],
                'salud'                         => $request['salud'],
                'hijos'                         => $request['hijos'],
                'utiles'                        => $request['utiles'],
                'capitalMensual'                => $request['capitalMensual'],
                'observaciones'                 => $request['observaciones'],
                'estudiante'                    => $request['estudiante'],
                'peticion'                      => $request['peticion']
            ];

            $camposPsicodinamica = [
                'problemasFamiliares'           => $request['problemasFamiliares'],
                'problemasProfesores'           => $request['problemasProfesores'],
                'problemasEstudiantes'          => $request['problemasEstudiantes'],
                'problemasDuenoResidencia'      => $request['problemasDuenoResidencia'],
                'desintegracionFamiliar'        => $request['desintegracionFamiliar'],
                'desorganizacionFamiliar'       => $request['desorganizacionFamiliar'],
                'madreSoltera'                  => $request['madreSoltera'],
                'cuidadoHijos'                  => $request['cuidadoHijos'],
                'obsproblemasFamiliares'        => $request['obsproblemasFamiliares'],
                'obsproblemasProfesores'        => $request['obsproblemasProfesores'],
                'obsproblemasEstudiantes'       => $request['obsproblemasEstudiantes'],
                'obsproblemasDuenoResidencia'   => $request['obsproblemasDuenoResidencia'],
                'obsdesintegracionFamiliar'     => $request['obsdesintegracionFamiliar'],
                'obsdesorganizacionFamiliar'    => $request['obsdesorganizacionFamiliar'],
                'obsmadreSoltera'               => $request['obsmadreSoltera'],
                'obscuidadoHijos'               => $request['obscuidadoHijos'],
                'comportamiento'                => $request['comportamiento'],
                'observacionesGenerales'        => $request['observacionesGenerales'],
                'estudiante'                    => $request['estudiante'],
                'peticion'                      => $request['peticion']
            ];

            for($i = 0; $i < count($request['nombreCarga']); $i++){
                $camposGrupoFamiliar = [
                    'nombreCarga'                   => $request['nombreCarga'][$i],
                    'parentesco'                    => $request['parentesco'][$i],
                    'edad'                          => $request['edad'][$i],
                    'oficio'                        => $request['oficio'][$i],
                    'institucion'                   => $request['institucion'][$i],
                    'sueldoCarga'                   => $request['sueldoCarga'][$i],
                    'estudiante'                    => $request['estudiante'],
                    'peticion'                      => $request['peticion']
                ];
                GrupoFamiliar::create($camposGrupoFamiliar);
            }

            DatosSocioeconomicos::create($camposDatosSocioeconomicos);
            EconomiaFamiliar::create($camposEconomiaFamiliar);
            Psicodinamica::create($camposPsicodinamica);

            $campos = [
                'status' => 'Estudio socioeconomico realizado'
            ];
            $this->peticion->fill($campos);
            $this->peticion->save();
            Session::flash('message', 'Estudio socio-económico registrado satisfactoriamente');
            if($request['peticion'] == 1) {
                return Redirect::route('solicitudesAyudantiasOrdinariasEs');
            }
            else if($request['peticion'] == 2){
                return Redirect::route('renovacionesAyudantiasOrdinariasEs');
            }
            else if($request['peticion'] == 3){
                return Redirect::route('solicitudesAyudantiasTecnicasEs');
            }
            else if($request['peticion'] == 4){
                return Redirect::route('renovacionesAyudantiasTecnicasEs');
            }
            else if($request['peticion'] == 5){
                return Redirect::route('solicitudesBecasResidenciaEs');
            }
            else if($request['peticion'] == 6){
                return Redirect::route('renovacionesBecasResidenciaEs');
            }
        }
        else {
            Session::flash('message', 'Sin privilegios');
            return Redirect::route('dashboard');
        }
    }
}
