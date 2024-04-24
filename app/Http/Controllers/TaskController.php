<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $tareas = Task::all();  // este all() nos trae todos los proyectos
        return view('tareas.index', compact('tareas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $proyectos = Project::all();
        return view('tareas.create', compact('proyectos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $task = new Task();
        $task->name = $request->name;
        $task->description = $request->description;
        $task->project_id = $request->project_id;
        $task->save();

        return redirect('/tareas');
    //   dd($request);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $task = Task::find($id);
        return view('tareas.show', compact('task'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // $tareas = Task::all(); 
        $task = Task::find($id);
        return view('tareas.edit', compact('task'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // dd($request);
        $task = Task::find($id); 
        $task->name = $request->name;
        $task->description = $request->description;
        // $task->project_id = $request->project_id; //ver como hacer que deje editar el id project
        $task->save();

        return redirect('/tareas');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $task = Task::find($id);
        $task->delete();

        return redirect()->back();
    }
}
