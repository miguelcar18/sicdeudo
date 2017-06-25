<?php

namespace App\Http\Controllers\back;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BackController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    
    public function index()
    {
    	return view ('back.layouts.base');
    }
}
