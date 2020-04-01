<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Catalogo;
use App\Categoria;
use App\Joya;
use App\News;
use File;

class SuperAdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function catalogos()
    {

    	$catalogos = Catalogo::orderBY('id','desc')->get();

        return view('admin.catalogo', ['catalogos' => $catalogos]);
    }

    public function categorys($id){

        $categorys = Categoria::find($id);
        return view('admin.categorys', 
            ['categorys' => $categorys] );
    }

     public function joyas(){  

        $joyas = Joya::orderBY('id','desc')->paginate(18);
        $categorys = Categoria::orderBY('id','desc')->get();
        return view('admin.joyas', 
            ['joyas' => $joyas], 
            ['categorys' => $categorys] );
    }

     public function boletin(){ 

        $news = News::orderBY('id','desc')->get();
        return view('admin.boletin', 
            ['news' => $news] );
    }
 
    public function crearJoya(Request $request){
        //Validar
         $name = $request->input('name');
         $description = $request->input('description');
         $category = $request->input('category_id');
         $precio = $request->input('precio');
         $tags = $request->input('tags');


            $joya = new Joya();
            $joya->name = $name;
            $joya->description = $description;
            $joya->categoria_id = $category;
            $joya->precio = $precio;
            $joya->tags = $tags;

            //Subir la imagen 
        $image_path = $request->file('image_path');
        if ($image_path) {
            //Poner nombre unico
            $image_path_name = time().$image_path->getClientOriginalName();

            //Guardar en la carpeta storage (storage/app/users)
            Storage::disk('joyas')->put($image_path_name, File::get($image_path));

            //Seteo el nombre de la imagen en el objeto

            $joya->image_path= $image_path_name;
        }
        

        $joya->save();

        return redirect()->route('joyas')->with('message','Joya creada éxitosamente');
    }
 
    public function updateJoya(Request $request) {

        //Validar usuairo
        $id = $request->input('id');
        $joya = Joya::findOrFail($id);


        //Validar formulario
        $validate = $this->validate($request, [
            'name' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string', 'max:255'],
            'category_id' => ['required', 'string', 'max:255'],
            'precio' => ['required', 'string', 'max:255'],
           
            
        ]);


        //recoger datos del formulario
         $name = $request->input('name');
         $description = $request->input('description');
         $category = $request->input('category_id');
         $precio = $request->input('precio');
         $tags = $request->input('tags');

        //asignar nuevos valores al objeto del usuario
        $joya->name = $name;
            $joya->description = $description;
            $joya->categoria_id = $category;
            $joya->precio = $precio;
            $joya->tags = $tags;

        //Subir la imagen 
        $image_path = $request->file('image_path');
        if ($image_path) {
            //Poner nombre unico
            $image_path_name = time().$image_path->getClientOriginalName();

            //Guardar en la carpeta storage (storage/app/users)
            Storage::disk('joyas')->put($image_path_name, File::get($image_path));

            //Seteo el nombre de la imagen en el objeto

            $joya->image_path= $image_path_name;
        }

        $joya->save();
 
    return redirect()->route('joyas')->with('message','Joya Actualizada éxitosamente');

    }


    public function deleteJoya($id){ 

        $user = \Auth::user();
        $joya = Joya::find($id);


        $joya->delete();


        return redirect()->route('joyas')->with('message','Joya Borrada éxitosamente');
    }






    
}
