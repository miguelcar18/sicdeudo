<?php

namespace App\Http\Controllers\front;

use App\RedesSociales;
use App\EnlacesInteres;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FrontController extends Controller
{   
    public function index()
    {
        $redes = RedesSociales::All();
        $enlaces = EnlacesInteres::All();
    	return view ('front.layouts.base', compact('redes', 'enlaces'));
    }

    public function desarrolloEstudiantil()
    {
        $redes = RedesSociales::All();
        $enlaces = EnlacesInteres::All();
        return view ('front.desarrolloEstudiantil', compact('redes', 'enlaces'));
    }

    public function desarrolloSocial()
    {
    	$redes = RedesSociales::All();
        $enlaces = EnlacesInteres::All();
        return view ('front.desarrolloSocial', compact('redes', 'enlaces'));
    }

    public function salud()
    {
    	$redes = RedesSociales::All();
        $enlaces = EnlacesInteres::All();
        return view ('front.salud', compact('redes', 'enlaces'));
    }

    public function orientacion()
    {
        $redes = RedesSociales::All();
        $enlaces = EnlacesInteres::All();
        return view ('front.orientacion', compact('redes', 'enlaces'));
    }

    public function orientacionCambioEspecialidad()
    {
        $redes = RedesSociales::All();
        $enlaces = EnlacesInteres::All();
        return view ('front.orientacionCambioEspecialidad', compact('redes', 'enlaces'));
    }

    public function socioEducativa()
    {
        $redes = RedesSociales::All();
        $enlaces = EnlacesInteres::All();
        return view ('front.socioEducativa', compact('redes', 'enlaces'));
    }

    public function contactos()
    {
        $redes = RedesSociales::All();
        $enlaces = EnlacesInteres::All();
        return view ('front.contactos', compact('redes', 'enlaces'));
    }
}
