@extends('layouts.app')

@section('header')
<x-shared.header-page title="Tareas" path="tareas.create" button="crear tareas"
description="lista de tareas "/>
@endsection

@section('contenido')
    <div class="table">
        <div class="min-wmin">
           <div class="grid grid-cols-5">
              <h4>ID</h4>
              <h4>Nombre</h4>
              <h4>Descripcion</h4>
              <h4>Acciones</h4>
           </div>

           <div class="divider"></div>
         <div class="space-y-4">
              @forelse ($tareas as $task)
                    <form method="POST" action="{{ route('tareas.destroy', $task->id) }}" class="grid grid-cols-5 items-center">

                      @method('DELETE')
                      @csrf
                      <p>#{{ $task->id }}</p>
                      <p>{{ $task->name }}</p>
                      <p class="line-clamp-1">{{ $task->description }}</p>

                      <div class="flex items-center gap-4">
                           <a href="{{ route('tareas.show', $task->id) }}" class="btn-primary-icon">
                                <i class="uil uil-eye"></i> {{--esa class poner el icono de ver  --}}
                           </a>
                           <a href="{{ route('tareas.edit', $task->id) }}" class="btn-primary-icon">
                                <i class="uil uil-pen"></i> {{--esa class poner el icono de editar  --}}
                           </a>

                           <button type= "submit" class="btn-danger-icon">{{-- de la estilo a los botones de color rojo --}}
                                <i class="uil uil-trash-alt"></i> {{-- es el icono de borrar --}}
                           </button>
                      </div>

                    </form>

              @empty
                  <p class="text-center">no hay tareas</p>
                  @endforelse
            </div>  
        </div>
    </div>
@endsection
