<?php

namespace App\Http\Controllers\back;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\back\LoginRequest;
use App\User;
use Auth;
use Carbon\Carbon;
use Input;
use Redirect;
use Response;
use Session;
use Validator;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('back.usuarios.login');
    }

    public function store(LoginRequest $request)
    {
        if($request->ajax())
        {
            if(Auth::attempt(['username' => $request['username'], 'password' => $request['password']] ))
            {
                return Redirect::route('dashboard');
            }
            else
            {
                return response()->json([
                    'message' => 'error'
                ]);
            }
        }
    }

    public function changePassword()
    {
        return view('back.usuarios.change_password');
    }

    public function postChangePassword(Request $request)
    {
        if($request->ajax())
        {
            if(Auth::attempt(['password' => $request['password_actual']]))
            {
                $user = User::find(Auth::user()->id);
                $user->fill([
                'password'   => bcrypt($request['password'])
                ]);
                $user->save();

                return response()->json([
                    'message' => 'correcto'
                ]);
            }
            else
            {
                return response()->json([
                    'message' => 'error'
                ]);
            }
        }

    }

    public function logout()
    {
        Auth::logout();
        return Redirect::route('front');
    }
}
