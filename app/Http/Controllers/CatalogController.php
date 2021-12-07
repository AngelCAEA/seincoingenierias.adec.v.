<?php

namespace App\Http\Controllers;
use App\Http\Requests\SaveCatalogRequest;
use App\Models\Catalog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Events\CatalogoSaved;

class CatalogController extends Controller{
    
    public function __construct(){

        $this -> middleware('auth')->except('index','show');

    }
    public function index(){
    
    
        return view('catalogos.index', [

            'catalogos' => Catalog::latest()->paginate()
             
        ]); 
    }

    public function show(Catalog $catalogo){

        return view('catalogos.show',[

            'catalogo' => $catalogo

        ]);

    }
    public function create(){

        return view('catalogos.create',[

            'catalogo' => new Catalog

        ]);
    }
    public function store(SaveCatalogRequest $request){

        $catalogo = new Catalog ($request->validated());

        $catalogo->img = $request->file('img')->store('imagenes');

        $catalogo->save();

        CatalogoSaved::dispatch($catalogo);
 
        return redirect()->route('catalogos.index')->with('status','Producto agregado correctamente');
    }
    public function edit(Catalog $catalogo){

        return view('catalogos.edit',[

            'catalogo'=> $catalogo
        ]);
    }
    public function update(Catalog $catalogo, SaveCatalogRequest $request){

        if($request->hasFile('img')){

            Storage::delete([$catalogo->img]);

           $catalogo->fill($request->validated());

           $catalogo->img = $request->file('img')->store('imagenes');

           $catalogo->save();

           CatalogoSaved::dispatch($catalogo);
           
        }else {

            $catalogo->update(array_filter($request->validated()) );
        }
        

       return redirect()->route('catalogos.show', $catalogo)->with('status','Producto actualizado correctamente');

    }

    public function destroy(Catalog $catalogo){

        Storage::delete([$catalogo->img]);

        $catalogo ->delete();

        return redirect()->route('catalogos.index')->with('status','Producto eliminado correctamente');
    }
}
