<?php

namespace App\Http\Controllers\back;

use App\RedesSociales;
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

class RedesSocialesController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function find(Route $route){
        $this->redes = RedesSociales::find($route->getParameter('redes-sociales'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->rol == 6) {
            $redes = RedesSociales::All();
        	return view('back.redesSociales.index', compact('redes'));
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
        return Redirect::route('dashboard');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return Redirect::route('dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\RedesSociales  $redesSociales
     * @return \Illuminate\Http\Response
     */
    public function show(RedesSociales $redesSociales, $id)
    {
        return Redirect::route('dashboard');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\RedesSociales $redesSociales
     * @return \Illuminate\Http\Response
     */
    public function edit(RedesSociales $redesSociales, $id)
    {
        if(Auth::user()->rol == 6) {
            $this->red = RedesSociales::find($id);
            return view('back.redesSociales.edit', ['red' => $this->red]);
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
     * @param  \App\RedesSociales $redesSociales
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RedesSociales $redesSociales, $id)
    {
        if($request->ajax())
        {
            if(Auth::user()->rol == 6) {
                $this->red = RedesSociales::find($id);
                $campos = [
                'url' => $request['url'] 
                ];
                $this->red->fill($campos);
                $this->red->save();
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
     * @param  \App\RedesSociales  $redesSociales
     * @return \Illuminate\Http\Response
     */
    public function destroy(RedesSociales $redesSociales, $id)
    {
        return Redirect::route('dashboard');
    }
}
