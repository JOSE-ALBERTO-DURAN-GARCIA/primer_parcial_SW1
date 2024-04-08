@extends('layouts.app')

@section('header')
    <x-shared.header-page title="Proyectos" path="proyectos.create" button="Nuevo proyecto"
       description="Listado y gestion de proyectos del sistema"
    />
    {{-- podemos usar las propiedades que declaramos en HeaderPage.php --}}
@endsection

@section('contenido')
      <div class="table">
        {{-- Header de la Tabla --}}
        <div class="grid grid-cols-5 gap-8 mb-8">
            <h4>ID</h4>
            <h4>Imagen</h4>
            <h4>Nombre</h4>
            <h4 class="col-span-2">Acciones</h4>
        </div>

        <div class="divider"></div>

        {{-- {{ dd($proyectos) }} --}}
        {{-- Body de la Tabla --}}
        <div class="space-y-4">
            @forelse ($proyectos as $project )    {{-- {{ por el lado verdadero}} --}}
                <form method="POST" action="{{ route('proyectos.destroy', $project->id ) }}" class="grid grid-cols-5 gap-8 items-center">  {{--lo que hace centrar todo lo que esta dentro de id  --}}
                    @method('DELETE') {{-- nos ayuda a saber cual es el metodo que se esta ocupando en html muchas veces no lo reconoce por eso lo estamos ocupando --}}
                    @csrf
                    <p>#{{ $project->id }}</p>
                    <img src="{{ $project->image }}" alt="{{ $project->name }}" width="100">
                    <p>{{ $project->name }}</p>

                    <div class="col-span-2 flex items-center gap-4">
                        <a href="{{ route('proyectos.edit', $project->id)}}" class="btn-primary-icon">
                            <i class="uil uil-pen"></i> {{--esa class poner el icono de editar  --}}
                        </a>
    
                        <button type= "submit" class="btn-danger-icon">{{-- de la estilo a los botones de color rojo --}}
                            <i class="uil uil-trash-alt"></i> {{-- es el icono de borrar --}}
                        </button>
                    </div>
                </form>

            @empty
              <p>No hay Proyectos</p>  {{-- {{ por el lado falso}} --}}

            @endforelse
        </div>
      </div>
    
@endsection