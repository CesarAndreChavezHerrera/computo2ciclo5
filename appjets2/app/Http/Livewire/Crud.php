<?php

namespace App\Http\Livewire;
use Illuminate\Support\Facades\Route;

use Livewire\Component;
use App\Models\Pet;
class Crud extends Component
{
    public $pets , $name , $age, $color,$pet_id;
    public function index()
    {
        $pets = Pet::all();
        return view('livewire.crud',compact('pets'));
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
