<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserLoginRequest;
use App\Models\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

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
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(UserLoginRequest $request)
    {
        $field = 'email';
        if (filter_var($request->input('email'), FILTER_VALIDATE_EMAIL)) {
            $field = 'email';
        } elseif (is_numeric($request->input('email'))) {
            $field = 'phone';
        }

        $request->merge([$field => $request->input('email')]);
        $credentials = $request->only($field, 'password');
        $remember = request('remember');

        if (!Auth::attempt($credentials, $remember)) {
            return redirect("login")->with('error',  __('Username or password is incorrect'));
        }

        if (auth()->check()) {
            $user = User::where($field, $request->email)->first();
            if ($user->status == USER_STATUS_ACTIVE && $user->type == USER_TYPE_SUPER_ADMIN) {
                return redirect()->route('super-admin.dashboard');
            } elseif ($user->status == USER_STATUS_ACTIVE && $user->type == USER_TYPE_ADMIN) {
                return redirect()->route('admin.dashboard');
            } else {
                Auth::logout();
                return redirect("login")->with('error', __('Something Went Wrong'));
            }
        } else {
            return redirect()->route('login');
        }
    }
}
