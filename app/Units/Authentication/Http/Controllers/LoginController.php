<?php

namespace App\Units\Authentication\Http\Controllers;

use App\Support\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class LoginController extends Controller
{
  use AuthenticatesUsers;

  /**
   * Where to redirect users after login.
   *
   * @var string
   */
  protected $redirectTo = '/admin';

  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
    $this->middleware('guest', ['except' => 'logout']);
  }

  public function index()
  {
    return $this->view('auth::index');
  }

  public function login(Request $request)
  {
    $this->validateLogin($request);

    if ($this->hasTooManyLoginAttempts($request)) {
      $this->fireLockoutEvent($request);

      return $this->sendLockoutResponse($request);
    }

    $credentials = $this->credentials($request);

    if ($this->guard()->attempt($credentials, $request->has('remember'))) {
      return $this->sendLoginResponse($request);
    }

    $this->incrementLoginAttempts($request);

    Log::notice('Login failed - ' . $request->get('email') . ':' . $request->get('password'));

    return $this->sendFailedLoginResponse($request);
  }
}
