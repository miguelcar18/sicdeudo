<?php

namespace App\Http\Controllers\front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FrontController extends Controller
{   
    public function index()
    {
    	return view ('front.layouts.base');
    }

    public function desarrolloSocial()
    {
    	return view ('front.desarrolloSocial');
    }

    public function salud()
    {
    	return view ('front.salud');
    }

    public function orientacion()
    {
        return view ('front.orientacion');
    }

    public function orientacionCambioEspecialidad()
    {
        return view ('front.orientacionCambioEspecialidad');
    }

    public function socioEducativa()
    {
        return view ('front.socioEducativa');
    }

    public function desarrolloEstudiantil()
    {
        return view ('front.desarrolloEstudiantil');
    }

    public function contactos()
    {
        return view ('front.contactos');
    }
}
