<?php

namespace App\Http\Controllers;
/* Agregar el modelo para poder trabajar con el controlador */
use App\Models\Pet;
use Illuminate\Http\Request;

class PetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['pets'] = Pet::paginate(5); /* 5 es el numero de datos a mostrar */
        return view('pet.index', $data);
        /* es para ir a traer los datos que se han almacenado */
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    
    public function create()
    {
        return view('pet.create');
    }




    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //todos los datos que se envien, se guardaran aqui que se envian en el metodo POST

        /* PARA ENVIAR TODOS LOS PARAMETROS       $petData = request() ->all(); */
        $petData = request() ->except('_token'); /* para enviar todos los campos excepto el token */
        Pet::insert($petData); /* usamos el modelo y le pasamos la data que se envia del formulario */
        return response() -> json($petData);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //recuperar los datos
        $pet=Pet::findOrFail($id);
        return view('pet.edit', compact('pet'));

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
        $petData = request()->except(['_token','_method']);
        Pet::where('id','=',$id)->update($petData);
        return redirect('pet');
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
        Pet::destroy($id);
        return redirect('pet');
    }
}
