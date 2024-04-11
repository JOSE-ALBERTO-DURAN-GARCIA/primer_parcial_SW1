@extends('layouts.auth')

@section('header')
    <h1>Inicia Sesion</h1>
    <p>comienza a gestionar tu proyecto</p>
@endsection

@section('content')
    <form novalidate action="{{ route('login.store') }}" method="POST" class="auth__login--form">
        @csrf

        @if(session('message'))      {{-- lo que hace este @if es mostrar si las credenciales o datos son correctos --}}
            <p class="alert"> {{ session('message') }}</p>
            
        @endif

        <div class="form-control">
            <label>Correo electronico: </label>
            <input 
                 type="email" 
                 name="email"
                 placeholder="correo@example.com"
                 class="@error('email') input-error @enderror"       {{-- lo que hace es mostrar marcar de rojo todo el imput si esta mal el correo --}}

            >
             @error('email')
                 <p class="alert"> {{$message}} </p>
             @enderror
        </div>


        <div class="form-control">
            <label>Contraseña: </label>
            <input 
                 type="password" 
                 name="password"
                 placeholder="Ingresa tu Contraseña"
                 class="@error('password') input-error @enderror"      {{--lo que hace es mostrar marcar de rojo todo el imput si esta mal la contraseña  --}}
            >
              @error('password')
                  <p class="alert"> {{$message}} </
              @enderror
        </div>
        <button class="btn-primary w-full">Iniciar Session</button>
    </form>
@endsection