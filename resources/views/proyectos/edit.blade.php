@extends('layouts.app')}

@section('header')
    <x-shared.header-page title="Edita tu Proyectos" path="proyectos.index" button="volver"
       description="Edita el proyecto {{ $project->name}}"
    />
    {{-- podemos usar las propiedades que declaramos en HeaderPage.php --}}
@endsection

@section('contenido')
    <form action="{{ route('proyectos.update', $project->id) }}" method="POST" class="max-w-md mx-auto space-y-4" enctype="multipart/form-data">

        @method('PUT')
        @csrf
        <div class="form-control">
            <label for="name">Nombre: </label>
            <input type="text" name="name" value="{{ $project->name }}">
        </div>
        
        <div class="form-control">
            <label for="image">Nombre: </label>
            <input value="{{ $project->image }}" type="file" name="image">
        </div>
        
        <button class="btn-primary w-full">Guardar</button>

    </form>
@endsection