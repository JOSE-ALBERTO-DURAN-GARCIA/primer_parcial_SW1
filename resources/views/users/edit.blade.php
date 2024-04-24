@extends('layouts.app')}

@section('header')
    <x-shared.header-page title="Edita tu Proyectos" path="users.index" button="volver"
       description="Edita usuario{{ $user->name}}"
    />
    {{-- podemos usar las propiedades que declaramos en HeaderPage.php --}}
@endsection

@section('contenido')
<form action="{{ route('users.update', $user->id) }}" method="POST" class="max-w-md mx-auto space-y-4" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <div class="form-control">
        <label for="name">Nombre: </label>
        <input type="text" id= "name" value="{{ $user->name }}" name="name">
    </div>

    

    <div class="form-control">
       <label for="email">Correo electronico: </label>
       <input type="email" id= "email" value="{{ $user->email }}" name="email" >
    </div>

   {{-- falta hacer que funcione el id --}}
    {{-- <div class="form-control">
        <label for="project_id">Proyecto:</label>
        <input type="text" value="{{ $task->project->name }}" name="project" >
    </div> --}}
  
  <button class="btn-primary w-full" type="submit">Guardar</button>

</form>
@endsection