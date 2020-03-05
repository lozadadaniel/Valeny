<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\News;
use App\Categoria;
use App\Joya;
use App\Catalogo;
use Mail;
use Redirect;


class InicioController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }
     public function getImage($filename){
        $file = Storage::disk('joyas')->get($filename);
        return new response($file, 200);
    }
    public function index()
    {
        $categorias = Categoria::orderBY('id','desc')->get();
        $joyas = Joya::orderBY('id','desc')->get();
        $anillos = Joya::where('categoria_id',1)->get();
        $pulseras = Joya::where('categoria_id',2)->get();
        $dijes = Joya::where('categoria_id',4)->get();

        return view('inicio', compact('categorias', 'joyas', 'anillos', 'pulseras', 'dijes'));
    }
    public function joyasOroPlata(){

        $joyas = Joya::orderBY('id','desc')->paginate(30);
        $categorys = Categoria::orderBY('id','asc')->get();
        return view('web.joyasOroPlata', 
            ['joyas' => $joyas], 
            ['categorys' => $categorys] );
       
    }
    public function joyasProfile($nombre){
        $nombre = str_replace("-", " ", $nombre);
       
        $joyas = Joya::where('name' ,$nombre)->first();
        $categorys = Categoria::orderBY('id','asc')->get();
        $anillos = Joya::where('categoria_id',1)->get();
        // dd($company);
        return view('web.joyasProfile', compact('joyas', 'categorys', 'anillos') );
    } 


    //Enlaces SEO

    public function joyasAceroPorMAyor(){
       
        return view('web.joyasAceroPorMayor');
    }

     public function contacto()
    {
        return view('web.contacto');
    }
     public function politicas()
    {
        return view('web.politicas');
    }
    public function garantia()
    {
        return view('web.garantia');
    }
    public function comoComprar()
    {
        return view('web.comoComprar');
    }
    public function devoluciones()
    {
        return view('web.devoluciones');
    }
     public function catalogo()
    {
        $categorias = Categoria::orderBY('id','desc')->get();
        return view('web.catalogo', ['categorias' => $categorias]);
    }
    public function enviarCatalogo(Request $request){
        $this->validate($request,[ 'name'=>'required', 'email'=>'required', 'city'=>'required', 'phone'=>'required', 'categoria_id'=>'required' ]);

        Mail::send('email.catalogo',$request->all() , function($message){
            $message->from('info@valeny.com','Valeny Joyeria');
            $message->to('info@valeny.com')->subject('Nuevo catalogo enviado');
        });

        Catalogo::create($request->all());

        return redirect()->route('catalogo')->with('message','Solicitud enviada exitosamente');
    }

     public function enviarNew(Request $request){
        $this->validate($request,[ 'email'=>'required']);

        News::create($request->all()); 

        return redirect()->route('home')->with('message','Solicitud enviada exitosamente');
    }

    public function joyasMiamiOroPlata(){

        return view('web.joyasMiamiOroPlata');
    }

    public function joyasCali(){

        return view('web.joyasCali');
    }

    public function joyasBogota(){

        return view('web.joyasBogota');
    }

     public function joyasMayorMedellin(){

        return view('web.joyasMayorMedellin');
    }

    public function joyasBarranquilla(){

        return view('web.joyasBarranquilla');
    }

    public function joyasNw(){

        return view('web.joyasNw');
    }

    public function joyasWashington(){

        return view('web.joyasWashington');
    }

    public function joyasOrlando(){

        return view('web.joyasOrlando');
    }

    public function joyasAtlanta(){

        return view('web.joyasAtlanta');
    }

    //Categorias

    public function anillosColombia(){
        $anillosColombia = Categoria::find(1);
        $aaa = Joya::where('categoria_id', '1')->paginate(20);

        return view('categorias.anillosColombia', ['anillosColombia' => $anillosColombia], ['aaa' => $aaa]);
    }

    public function pulserasColombia(){ 
        $pulserasColombia = Categoria::find(2);
        $aaa = Joya::where('categoria_id', '2')->paginate(20);

        return view('categorias.pulserasColombia', ['pulserasColombia' => $pulserasColombia] , ['aaa' => $aaa]);
    }

    public function setsColombia(){ 
        $setsColombia = Categoria::find(3);
        $aaa = Joya::where('categoria_id', '3')->paginate(20);

        return view('categorias.setsColombia', ['setsColombia' => $setsColombia], ['aaa' => $aaa]);
    }

    public function dijesColombia(){ 
        $dijesColombia = Categoria::find(4);
        $aaa = Joya::where('categoria_id', '4')->paginate(20);

        return view('categorias.dijesColombia', ['dijesColombia' => $dijesColombia], ['aaa' => $aaa]);
    }

     public function collaresColombia(){ 
        $collaresColombia = Categoria::find(5);
        $aaa = Joya::where('categoria_id', '5')->paginate(20);

        return view('categorias.collaresColombia', ['collaresColombia' => $collaresColombia], ['aaa' => $aaa]);
    }

    public function bodaColombia(){ 
        $bodaColombia = Categoria::find(6);
        $aaa = Joya::where('categoria_id', '6')->paginate(20);

         return view('categorias.bodaColombia', ['bodaColombia' => $bodaColombia], ['aaa' => $aaa]);
    }  
}
