<?php

namespace App\Http\Controllers\back;

use App\DatosPersonales;
use App\DatosSocioeconomicos;
use App\EconomiaFamiliar;
use App\GrupoFamiliar;
use App\Psicodinamica;
use App\PeticionesEstudiantes;
use App\Citas;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Http\Requests;
use Redirect;
use Session;

class BackController extends Controller
{
    public function __construct(){
        $this->middleware('auth', ['except' => ['reporte']]);
    }
    
    public function index()
    {
    	return view ('back.layouts.base');
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

    public function verDatosAprobar($id) {
        if(Auth::user()->rol == 4) {
            $peticion = PeticionesEstudiantes::find($id);
            $estudiante = DatosPersonales::find($peticion->estudiante);
            $datosSocioEconomicos = DatosSocioeconomicos::where('peticion', $id)->where('estudiante', $peticion->estudiante)->first();
            $economiaFamiliar = EconomiaFamiliar::where('peticion', $id)->where('estudiante', $peticion->estudiante)->first();
            $grupoFamiliar = GrupoFamiliar::where('peticion', $id)->where('estudiante', $peticion->estudiante)->get();
            $psicodinamica = Psicodinamica::where('peticion', $id)->where('estudiante', $peticion->estudiante)->first();
            return view("back.jefe.form.verDatosAprobar", compact('peticion', 'estudiante', 'datosSocioEconomicos', 'economiaFamiliar', 'grupoFamiliar','psicodinamica'));
        }
        else {
            Session::flash('message', 'Sin privilegios');
            return Redirect::route('dashboard');
        }
    }

    public function formularioCambioStatus($id) {
        if(Auth::user()->rol == 4) {
            $peticion = PeticionesEstudiantes::find($id);
            $estudiante = DatosPersonales::find($peticion->estudiante);
            return view("back.jefe.form.formularioCambioStatus", compact('peticion', 'estudiante'));
        }
        else {
            Session::flash('message', 'Sin privilegios');
            return Redirect::route('dashboard');
        }
    }

    public function registrarCambioStatus(Request $request, $id) {
        if($request->ajax()) {
            if(Auth::user()->rol == 4) {
                $this->peticion = PeticionesEstudiantes::find($id);
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

    public function formularioReportes()
    {
        if(Auth::user()->rol == 4) {
            return view ('back.jefe.reportes.reportes');
        }
        else {
            Session::flash('message', 'Sin privilegios');
            return Redirect::route('dashboard');
        }
    }

    public function formularioReporteCita()
    {
        if(Auth::user()->rol == 4) {
            return view ('back.jefe.reportes.reporteCita');
        }
        else {
            Session::flash('message', 'Sin privilegios');
            return Redirect::route('dashboard');
        }
    }

    public function resultadosReportes($criterio, $periodo)
    {
        if($criterio == "0" && $periodo == "0"){
            $resultados = \DB::select("SELECT * FROM peticiones_estudiantes INNER JOIN datos_personales ON peticiones_estudiantes.estudiante = datos_personales.id INNER JOIN datos_academicos ON datos_academicos.estudiante = datos_personales.id");
        }
        elseif($criterio == "0" && $periodo != "0"){
            $resultados = \DB::select("SELECT * FROM peticiones_estudiantes INNER JOIN datos_personales ON peticiones_estudiantes.estudiante = datos_personales.id INNER JOIN datos_academicos ON datos_academicos.estudiante = datos_personales.id WHERE datos_academicos.anioIngresoUdo = '".$periodo."'");
        }
        elseif($periodo == "0" && $criterio != "0"){
            $resultados = \DB::select("SELECT * FROM peticiones_estudiantes INNER JOIN datos_personales ON peticiones_estudiantes.estudiante = datos_personales.id INNER JOIN datos_academicos ON datos_academicos.estudiante = datos_personales.id WHERE peticiones_estudiantes.peticion = ".$criterio."");
        }
        else{
            $resultados = \DB::select("SELECT * FROM peticiones_estudiantes INNER JOIN datos_personales ON peticiones_estudiantes.estudiante = datos_personales.id INNER JOIN datos_academicos ON datos_academicos.estudiante = datos_personales.id WHERE peticiones_estudiantes.peticion = ".$criterio." and datos_academicos.anioIngresoUdo = '".$periodo."'");
        }

        return response()->json([
            'respuesta' => $resultados
        ]);
    }

    public function reportePdf($criterio, $periodo)
    {
        if($criterio == "0" && $periodo == "0"){
            $resultados = \DB::select("SELECT * FROM peticiones_estudiantes INNER JOIN datos_personales ON peticiones_estudiantes.estudiante = datos_personales.id INNER JOIN datos_academicos ON datos_academicos.estudiante = datos_personales.id");
        }
        elseif($criterio == "0" && $periodo != "0"){
            $resultados = \DB::select("SELECT * FROM peticiones_estudiantes INNER JOIN datos_personales ON peticiones_estudiantes.estudiante = datos_personales.id INNER JOIN datos_academicos ON datos_academicos.estudiante = datos_personales.id WHERE datos_academicos.anioIngresoUdo = '".$periodo."'");
        }
        elseif($periodo == "0" && $criterio != "0"){
            $resultados = \DB::select("SELECT * FROM peticiones_estudiantes INNER JOIN datos_personales ON peticiones_estudiantes.estudiante = datos_personales.id INNER JOIN datos_academicos ON datos_academicos.estudiante = datos_personales.id WHERE peticiones_estudiantes.peticion = ".$criterio."");
        }
        else{
            $resultados = \DB::select("SELECT * FROM peticiones_estudiantes INNER JOIN datos_personales ON peticiones_estudiantes.estudiante = datos_personales.id INNER JOIN datos_academicos ON datos_academicos.estudiante = datos_personales.id WHERE peticiones_estudiantes.peticion = ".$criterio." and datos_academicos.anioIngresoUdo = '".$periodo."'");
        }

        $pdf = \PDF::loadView('back.jefe.reportes.reporteConsulta', compact('resultados'));
        return $pdf->stream('reporteConsulta.pdf');
    }

    public function resultadosReporteCita($periodo)
    {
        if($periodo == "0"){
            $resultados = \DB::select("SELECT * FROM citas INNER JOIN usuarios ON citas.usuario = usuarios.id");
        }
        else{
            $arr = explode("-", $periodo);
            $pa = $arr[0];
            $anioinicio = $arr[1];
            $aniofin = $arr[0] == 1 ? $arr[1] : $arr[1] + 1;

            if($pa == 1){
                $fechaInicio = $anioinicio."-04-01";
                $fechaFin = $aniofin."-07-31";
            }
            else if($pa != 1){
                $fechaInicio = $anioinicio."-10-01";
                $fechaFin = $aniofin."-03-31";
            }
            $resultados = \DB::select("SELECT * FROM citas INNER JOIN usuarios ON citas.usuario = usuarios.id WHERE fechaCita BETWEEN '".$fechaInicio."' AND '".$fechaFin."'");
        }

        return response()->json([
            'respuesta' => $resultados
        ]);
    }

    public function reporteCitaPdf($periodo)
    {
        if($periodo == "0"){
            $resultados = \DB::select("SELECT * FROM citas INNER JOIN usuarios ON citas.usuario = usuarios.id");
        }
        else{
            $arr = explode("-", $periodo);
            $pa = $arr[0];
            $anioinicio = $arr[1];
            $aniofin = $arr[0] == 1 ? $arr[1] : $arr[1] + 1;

            if($pa == 1){
                $fechaInicio = $anioinicio."-04-01";
                $fechaFin = $aniofin."-07-31";
            }
            else if($pa != 1){
                $fechaInicio = $anioinicio."-10-01";
                $fechaFin = $aniofin."-03-31";
            }
            $resultados = \DB::select("SELECT * FROM citas INNER JOIN usuarios ON citas.usuario = usuarios.id WHERE fechaCita BETWEEN '".$fechaInicio."' AND '".$fechaFin."'");
        }

        $pdf = \PDF::loadView('back.jefe.reportes.reporteConsultaCita', compact('resultados'));
        return $pdf->stream('reporteConsultaCita.pdf');
    }

    public function reporte($id){
        setlocale(LC_ALL, "es_VE.UTF-8");
        $fechaHoy = date('d/m/Y');
        $peticion = PeticionesEstudiantes::find($id);
        $estudiante = DatosPersonales::find($peticion->estudiante);
        $pdf = \PDF::loadView('back.estudiantes.reportes.comprobante', compact('peticion', 'estudiante', 'fechaHoy'));
        return $pdf->stream('comprobante.pdf');
    }

    public function reporteCita($id){
        setlocale(LC_ALL, "es_VE.UTF-8");
        $fechaHoy = date('d/m/Y');
        $peticion = Citas::find($id);
        $estudiante = User::find($peticion->usuario);
        $pdf = \PDF::loadView('back.estudiantes.reportes.comprobanteCita', compact('peticion', 'estudiante', 'fechaHoy'));
        return $pdf->stream('comprobante.pdf');
    }
}
