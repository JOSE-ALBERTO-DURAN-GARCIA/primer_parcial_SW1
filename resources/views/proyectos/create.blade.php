@extends('layouts.app')

@section('header')
    <x-shared.header-page title="Nuevo proyecto" path="proyectos.index" button="volver"
         description="crea un nuevo proyectos"/>
@endsection

@section('contenido')
    <form enctype="multipart/form-data" method="POST" action="{{ route('proyectos.store')}}" class="max-w-md mx-auto space-y-4">
        @csrf
        <div class="form-control">
            <label for="name">Nombre: </label>
            <input type="text" name="name" placeholder="Agrega un nombre al proyecto">
        </div>
        
        <div class="form-control">
            <label for="image">Nombre: </label>
            <input type="file" name="image">
        </div>
        
        <button class="btn-primary w-full">Guardar</button>
    </form>
    
@endsection