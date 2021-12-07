<?php

namespace App\Http\Controllers;
use App\Models\Project;
use Illuminate\Http\Request;
use App\Http\Requests\SaveProjectRequest;
use Illuminate\Support\Facades\Storage;
use App\Events\ProjectSaved;
use App\Models\Category;

class ProjectController extends Controller{
    
    public function __construct(){

        $this -> middleware('auth')->except('index','show');

    }
    public function index() {
        
        return view('projects.index', [

            'projects' => Project::with('category')->latest()->paginate()

        ]);
        
    }
    public function show(Project $project){

        return view('projects.show',[

            'project'=> $project
        ]);

    }
    public function create(){

        return view('projects.create',[

            'project'=> new Project,
            'categories' => Category::pluck('name','id')

        ]);


    }
    public function store(SaveProjectRequest $request){

        $project = new Project  ( $request->validated() );

        $project->img = $request->file('img')->store('imagenes');
        
        $project->save();

        ProjectSaved::dispatch($project);

        return redirect()->route('projects.index')->with('status','El proyecto fue creado correctamente.');
    }
    public function edit(Project $project){

        return view('projects.edit',[

            'project'=> $project,
            'categories' => Category::pluck('name','id')

        ]);
    }
    public function update(Project $project, SaveProjectRequest $request){

      if($request->hasFile('img')){

        Storage::delete([$project->img]);

        $project-> fill( $request->validated() );

        $project->img = $request->file('img')->store('imagenes');
        
        $project->save();

        ProjectSaved::dispatch($project);

      }else {
          
        $project->update(array_filter($request->validated()) );

      }
        return redirect()->route('projects.show', $project)->with('status','El proyecto fue actualizado correctamente.');
    }




    public function destroy(Project $project){

        Storage::delete([$project->img]);

        $project -> delete();

        return redirect()->route('projects.index')->with('status','El proyecto fue eliminado correctamente.');
        
    }
 
}
