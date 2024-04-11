<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }
    // crea la sesion
    public function store(LoginRequest $request )
    {
        $credentials =$request->validated();
    //    dd($request);
        if( !Auth::attempt($credentials) )  // si los datos son ingresados correctamente nos va a direcionar en las tareas.index
        {
            return back()->with('message', 'Credenciales incorrectas');
        }
       return redirect()->route('tareas.index');
    }
}
