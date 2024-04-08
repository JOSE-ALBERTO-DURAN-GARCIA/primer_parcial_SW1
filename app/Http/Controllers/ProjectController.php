<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $proyectos = Project::all();
        return view('proyectos.index', compact('proyectos'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('proyectos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request); me muestra todos los datos
        // dd($request->name); me muestra solo los nombre que se esta enviando
        $project = new Project();

        $project->name = $request->name;
        $project->image = $request->image->store("images", "public");

        $project->save();
        return redirect('/proyectos');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // dd($id);es para hacer pruebas si funciona o no
        $project = Project::find($id);
        return view('proyectos.edit', ["project"=>$project]);
        ///return view('proyectos.edit', ["clave"=>valor que tener esa clave]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // dd($request);
        $project = Project::find($id); //lo que hara sera buscar en la base de datos atraves de id
        $project->name = $request->name; //lo que va a modificar sera el nombre
       //le vamos a reasignar un nuevo valor al formulario $request->name   es el nombre que estamos enviando desde el 
         if($request->hasFile('image')) // si existe una imagen en la variable request
         {
            $project->image = $request->image->store("images", "public");
         }

         $project->save();
         return redirect('/proyectos');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // dd($id);
        $project = Project::find($id);

        $project->delete();
        return redirect('/proyectos'); // una vez eliminado nos va direccionar a la pagina /proyectos
    }
}
