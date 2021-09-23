<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Cookie;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     *
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(LoginRequest $request)
    {
        $request->authenticate();

        $request->session()->regenerate();

        //Obtener nombre de usuario y rol
        //Borrar cookies anteriores
        $cookie = Cookie::forget('usuario');
        $cookie = Cookie::forget('rol');
        $usuario="";
        $rol="";
        $role="";
        //Controla si no tiene rol asignado
        $usuario = auth()->user()->name;
        $role = Auth::user()->roles;
        $tam = sizeof($role);
        if ($tam == 0){
            $rol="guest";
            //$rol = "XX";
        } else {
            //$rol = "nn";
            $rol = Auth::user()->roles[0]->name;
            $rol = $rol;
        }
        $tmpCookie = 120;

        //guardando la cookie...
        Cookie::queue(Cookie::make('usuario', $usuario, $tmpCookie));
        Cookie::queue(Cookie::make('rol', $rol, $tmpCookie));

        return redirect()->intended(RouteServiceProvider::HOME);
    }

    /**
     * Destroy an authenticated session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
