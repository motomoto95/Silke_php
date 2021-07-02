<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorias=DB::select("select * from categoria");
        $subcategoria=DB::select("SELECT E.nombre as 'nombre' ,E.descripcion as 'descripcion',D.nombre as 'subnombre',D.descripcion as 'subdescripcion' 
        FROM categoria E
        LEFT OUTER JOIN sub_categoria D
        ON E.id = D.id");

    
        return view('/categoria.index', ['categorias' => $categorias,'subcategoria' => $subcategoria]);
    }


/**
     * Show the form for creating a new resource.
     *  @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $name_categoria=$request->input('categoria');
        $detalles_catego=$request->input('detalles');
        $data=array('nombre'=>$name_categoria,'descripcion'=>$detalles_catego);
        DB::table('categoria')->insert($data);
        return redirect('/ccategoria')->with('edit','La categoria se agrego con exito');
    }

 /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $name_subcategoria=$request->input('subcategoria');
        $detalles_catego=$request->input('detalles');
        $seleccionar=$request->input('seleccionar');
        $categorias_ID=DB::select("select * from categoria where nombre='$seleccionar' ");
        $categorias_ID=$categorias_ID[0]->id;
        $data=array('nombre'=>$name_subcategoria,'descripcion'=>$detalles_catego,'categoria_id'=>$categorias_ID);
        DB::table('sub_categoria')->insert($data);
        return redirect('/ccategoria')->with('edit','Se agrego con exito');
    }
 /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        print_r("hola");
        die();
    }
    /**
     * Display the specified resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        print_r("hola");
        die();
    }

}
