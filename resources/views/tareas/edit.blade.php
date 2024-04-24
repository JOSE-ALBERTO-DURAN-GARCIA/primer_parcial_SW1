@extends('layouts.app')}

@section('header')
    <x-shared.header-page title="Edita tu Proyectos" path="tareas.index" button="volver"
       description="Edita tu tarea{{ $task->name}}"
    />
    {{-- podemos usar las propiedades que declaramos en HeaderPage.php --}}
@endsection

@section('contenido')
<form action="{{ route('tareas.update', $task->id) }}" method="POST" class="max-w-md mx-auto space-y-4" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <div class="form-control">
        <label for="name">Nombre: </label>
        <input type="text" id= "name" value="{{ $task->name }}" name="name">
    </div>

    

    <div class="form-control">
       <label for="description">Descripcion: </label>
       <input type="text" id= "description" value="{{ $task->description }}" name="description" >
    </div>

   {{-- falta hacer que funcione el id --}}
    {{-- <div class="form-control">
        <label for="project_id">Proyecto:</label>
        <input type="text" value="{{ $task->project->name }}" name="project" >
    </div> --}}
  
  <button class="btn-primary w-full" type="submit">Guardar</button>

</form>
@endsection