<?php

namespace App\Http\Controllers\back;

use App\EnlacesInteres;
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

class EnlacesInteresController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function find(Route $route){
        $this->enlace = EnlacesInteres::find($route->getParameter('enlaces-interes'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->rol == 6) {
            $enlaces = EnlacesInteres::All();
            return view('back.enlacesInteres.index', compact('enlaces'));
        }
        else {
            Session::flash('message', 'Sin privilegios');
            return Redirect::route('dashboard');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(Auth::user()->rol == 6) {
            return view('back.enlacesInteres.new');
        }
        else {
            Session::flash('message', 'Sin privilegios');
            return Redirect::route('dashboard');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(Auth::user()->rol == 6) {
            if($request->ajax())
            {
                if(!empty($request->file('file'))) {
                    $file = $request->file('file');
                    $nombre = str_replace(':', '_', Carbon::now()->toDateTimeString().$file->getClientOriginalName());
                    $nombre = str_replace(' ', '_', $nombre);
                    \Storage::disk('enlaces')->put($nombre,  \File::get($file));
                }
                else {
                    $nombre = '';
                }
                EnlacesInteres::create([
                    'nombre'    => $request['nombre'], 
                    'url'       => $request['url'],
                    'path'      => $nombre
                ]);
                
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

    /**
     * Display the specified resource.
     *
     * @param  \App\EnlacesInteres  $enlacesInteres
     * @return \Illuminate\Http\Response
     */
    public function show(EnlacesInteres $enlacesInteres, $id)
    {
        if(Auth::user()->rol == 6) {
            $this->enlace = EnlacesInteres::find($id);
            return view('back.enlacesInteres.show', ['enlace' => $this->enlace]);
        }
        else {
            Session::flash('message', 'Sin privilegios');
            return Redirect::route('dashboard');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\EnlacesInteres  $enlacesInteres
     * @return \Illuminate\Http\Response
     */
    public function edit(EnlacesInteres $enlacesInteres, $id)
    {
        if(Auth::user()->rol == 6) {
            $this->enlace = EnlacesInteres::find($id);
            return view('back.enlacesInteres.edit', ['enlace' => $this->enlace]);
        }
        else {
            Session::flash('message', 'Sin privilegios');
            return Redirect::route('dashboard');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\EnlacesInteres  $enlacesInteres
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EnlacesInteres $enlacesInteres, $id)
    {
        if($request->ajax())
        {
            if(Auth::user()->rol == 6) {
                $this->enlace = EnlacesInteres::find($id);
                if(!empty($request->file('file'))) {
                    $file = $request->file('file');
                    $nombre = str_replace(':', '_', Carbon::now()->toDateTimeString().$file->getClientOriginalName());
                    $nombre = str_replace(' ', '_', $nombre);
                    \Storage::disk('enlaces')->put($nombre,  \File::get($file));
                    \File::delete('assets/images/logos/'.$this->enlace->path);
                }
                else {
                    $nombre = $this->enlace->path;
                }
                $campos = [
                    'nombre'    => $request['nombre'], 
                    'url'       => $request['url'],
                    'path'      => $nombre
                ];
                $this->enlace->fill($campos);
                $this->enlace->save();
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\EnlacesInteres  $enlacesInteres
     * @return \Illuminate\Http\Response
     */
    public function destroy(EnlacesInteres $enlacesInteres, $id)
    {
        $this->enlace = EnlacesInteres::find($id);
        if(Auth::user()->rol == 6)
        {
            if (is_null ($this->enlace)) {
                \App::abort(404);
            }

            $this->enlace->delete();

            if (\Request::ajax()) {
                \File::delete('assets/images/logos/'.$this->enlace->path);
                return Response::json(array (
                    'success' => true,
                    'msg'     => 'Enlace "' . $this->enlace->nombre . '" eliminado satisfactoriamente',
                    'id'      => $this->enlace->id,
                ));
            }
            else {
                Session::flash('message', 'Enlace "' . $this->enlace->nombre . '" eliminado satisfactoriamente');
                return Redirect::route('enlaces-interes.index');
            }   
        }
        else
        {
            Session::flash('message', 'Sin privilegios');
            return Redirect::route('dashboard');
        }
    }
}
