@extends('layouts.app')

@section('header')
    <x-shared.header-page title="Nueva Tarea" path="tareas.index" button="volver"
         description="agrega una nueva tarea"/>
@endsection

@section('contenido')
  <div class= "md:grid md:grid-cols-2">

      <form method="POST" action="{{ route('tareas.store') }}" class="max-w-lg w-full mx-auto space-y-4">
          @csrf
          <div class="form-control">
              <label for="name">Nombre: </label>
              <input type="text" id= "name" name="name">
          </div>

          <div class="form-control">
             <label for="description">Descripcion: </label>
             <input type="text" id= "description" name="description" >
          </div>

          <div>
              <label for="project_id"> Seleccione un proyecto: </label>
              <select class="bg-secondary w-full py-3 px-2 rounded-md" required name="project_id" id="project">
                @forelse ($proyectos as $project)
                     <option value="{{ $project->id }}">{{ $project->name }}</option>
                @empty
                    <option>No hay proyectos</option>
                    
                @endforelse
              </select>
          </div>
        
        <button class="btn-primary w-full" type="submit">Guardar</button>

      </form>
  </div>  
@endsection