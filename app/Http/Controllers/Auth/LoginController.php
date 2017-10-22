<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
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
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }

    public function showLoginForm() {
        return view('back.usuarios.login');
    }

    public function login(LoginRequest $request) {
        if($request->ajax())
        {
            if(Auth::attempt(['username' => $request['username'], 'password' => $request['password']] ))
                return Redirect::route('dashboard');
            else
                return response()->json(['message' => 'error']);
        }
    }

    public function logout() {
        Auth::logout();
        return Redirect::route('login');
    }
}
