<?php

namespace App\Http\Controllers;

use App\Models\Juegos;
use Illuminate\Http\Request;

class   videojuegosController extends Controller
{
    //GET listar registro
    public function index(Request $request)
    {
        if($request->has('txtBuscar'))
        {
            $videojuegos =Juegos::where('nombre', 'like', '%'. $request->txtBuscar.'%')
                            ->orWhere('categoria', $request->txtBuscar)
                            ->get();
        }
        else
        {
            $videojuegos= Juegos::all();
        }
        return $videojuegos;
    }

    //POST insertar datos
    public function store(Request $request)
    {
        $input = $request->all();
        Juegos::create($input);
        return response()->json([
            'res' => true,
            'message' => 'categoria creada correctamente'
        ], 200 );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(categoria $categoria)
    {
        return $categoria;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
