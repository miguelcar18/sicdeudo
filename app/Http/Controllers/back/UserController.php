<?php

namespace App\Http\Controllers\back;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\back\UserCreateRequest;
use App\Http\Requests\back\UserUpdateRequest;
use App\User;
use Auth;
use Carbon\Carbon;
use Illuminate\Routing\Route;
use Redirect;
use Response;
use Session;

class UserController extends Controller
{

    public function __construct(){
        //middleware para autorizar acciones
        $this->middleware('auth', ['except' => ['register', 'store']]);
        //$this->beforeFilter('@find', ['only' => ['show', 'edit', 'update', 'destroy']]);
    }

    /*
    public function find(Route $route){
        $this->user = User::find($route->getParameter('users'));
    }
    */

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->rol == 4)
        {
            $users = User::All();
            return view('back.usuarios.index', compact('users'));    
        }
        else
        {
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
        return view('back.usuarios.new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserCreateRequest $request)
    {
        if(!Auth::check())
        {
            if($request->ajax())
            {
                if(!empty($request->file('file')))
                {
                    //obtenemos el campo file definido en el formulario
                    $file = $request->file('file');

                    //obtenemos el nombre del archivo
                    $nombre = str_replace(':', '_', Carbon::now()->toDateTimeString().$file->getClientOriginalName());

                    //indicamos que queremos guardar un nuevo archivo en el disco local
                    \Storage::disk('users')->put($nombre,  \File::get($file));
                }
                else
                {
                    $nombre = '';
                }
                //User::create($request->all());
                User::create([
                    'username'  => $request['username'], 
                    'name'      => $request['name'],
                    'cedula'    => $request['cedula'],
                    'email'     => $request['email'], 
                    'password'  => bcrypt($request['password']), 
                    'rol'       => 1, 
                    'details'   => $request['details'],
                    'path'      => $nombre
                ]);
                
                return response()->json([
                    'nuevoContenido' => $request->all()
                ]);
            }    
        }
        else if(Auth::user()->rol == 4)
        {
            if($request->ajax())
            {
                if(!empty($request->file('file')))
                {
                    //obtenemos el campo file definido en el formulario
                    $file = $request->file('file');

                    //obtenemos el nombre del archivo
                    $nombre = str_replace(':', '_', Carbon::now()->toDateTimeString().$file->getClientOriginalName());

                    //indicamos que queremos guardar un nuevo archivo en el disco local
                    \Storage::disk('users')->put($nombre,  \File::get($file));
                }
                else
                {
                    $nombre = '';
                }
                //User::create($request->all());
                User::create([
                    'username'  => $request['username'], 
                    'name'      => $request['name'],
                    'cedula'    => $request['cedula'],
                    'email'     => $request['email'], 
                    'password'  => bcrypt($request['password']), 
                    'rol'       => $request['rol'], 
                    'details'   => $request['details'],
                    'path'      => $nombre
                ]);
                
                return response()->json([
                    'nuevoContenido' => $request->all()
                ]);
            }    
        }
        else
        {
            Session::flash('message', 'Sin privilegios');
            return Redirect::route('dashboard');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    	$this->user = User::find($id);
        if(Auth::user()->rol == 4)
        {
            return view('back.usuarios.show', ['user' => $this->user]);
        }
        else if(Auth::user()->id == $id)
        {
            return view('back.usuarios.show', ['user' => $this->user]);
        }
        else
        {
            Session::flash('message', 'Sin privilegios');
            return Redirect::route('dashboard');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    	$this->user = User::find($id);
        if(Auth::user()->rol == 4 || Auth::user()->id == $id)
        {
            return view('back.usuarios.edit', ['user' => $this->user]);    
        }
        else
        {
            Session::flash('message', 'Sin privilegios');
            return Redirect::route('dashboard');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserUpdateRequest $request, $id)
    {
    	$this->user = User::find($id);
        if(Auth::user()->rol == 4 || Auth::user()->id == $id)
        {
            if($request->ajax())
            {
                if(!empty($request->file('file')) and $request->file('file') != '')
                {
                    \File::delete('uploads/users/'.$this->user->path);

                    //obtenemos el campo file definido en el formulario
                    $file = $request->file('file');

                    //obtenemos el nombre del archivo
                    $nombre = str_replace(':', '_', Carbon::now()->toDateTimeString().$file->getClientOriginalName());

                    //indicamos que queremos guardar un nuevo archivo en el disco local
                    \Storage::disk('users')->put($nombre,  \File::get($file));
                }   

                else
                {
                    $nombre = $this->user->path;
                }

                $this->user->fill([
                    'username'  => $request['username'], 
                    'name'      => $request['name'],
                    'cedula'    => $request['cedula'],
                    'email'     => $request['email'], 
                    'rol'       => $request['rol'], 
                    'details'   => $request['details'],
                    'path'      => $nombre
                    ]);
                $this->user->save();

                return Response::json([
                    'nuevoContenido' => $this->user
                ]);
            }
        }
        else
        {
            Session::flash('message', 'Sin privilegios');
            return Redirect::route('dashboard');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    	$this->user = User::find($id);
        if(Auth::user()->rol == 4)
        {
            if (is_null ($this->user))
            {
                \App::abort(404);
            }

            $this->user->delete();

            if (\Request::ajax())
            {
                \File::delete('uploads/users/'.$this->user->path);
                return Response::json(array (
                    'success' => true,
                    'msg'     => 'Usuario "' . $this->user->username . '" eliminado satisfactoriamente',
                    'id'      => $this->user->id,
                ));
            }
            else
            {
                Session::flash('message', 'Usuario "' . $this->user->username . '" eliminado satisfactoriamente');
                return Redirect::route('usuarios.index');
            }   
        }
        else
        {
            Session::flash('message', 'Sin privilegios');
            return Redirect::route('dashboard');
        }
    }

    public function register()
    {
        return view('back.usuarios.otherNew');
    }
}
