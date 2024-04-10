@extends('layouts.app')

@section('header')
<x-shared.header-page :title="$task->name" path="tareas.index" button="Volver"
:description="'detalles de: ' .$task->description"/>   {{-- lo hicimo de forma dinamica toda esta fila --}}
@endsection


@section('contenido')
  <div class= "md:grid md:grid-cols-2">

      <div class="max-w-lg w-full mx-auto space-y-4">
          <div class="form-control">
              <label for="name">Nombre: </label>
              <input disabled type="text" id= "name" value="{{ $task->name }}" name="name">
          </div>

          <div class="form-control">
             <label for="description">Descripcion: </label>
             <textarea disabled type="text" id= "description"  name="description" > {{ $task->description }}"</textarea>
          </div>

          <div class="form-control">
              <label for="project_id">Proyecto:</label>
              <input disabled type="text" value="{{ $task->project->name }}" name="project" >
          </div>

      </div>
  </div>  
@endsection