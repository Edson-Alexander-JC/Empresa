<?php

namespace App\Http\Controllers;

use App\Models\personal;
use Illuminate\Http\Request;
use App\Http\Requests\personal_requests;
use Illuminate\Support\Facades\Redirect;
use PhpParser\Node\Stmt\Return_;

class PersonalController extends Controller
{
    /*MUESTRA TODOS LOS ELEMENTOS EN LA BDD*/
    public function index(){
        $personal = personal::orderBy('id','desc')->paginate(10);
        return view('personal.index', compact('personal'));
     }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $p = new personal();
        return view('personal.create', compact('p'));
    }

    /**
     * Store a newly created resource in storage.
     */ 
    public function store(Request $request)
    {
        $nuevo_personal = new personal();
        $nuevo_personal ->nombre = $request -> nombre;
        $nuevo_personal ->app = $request -> app;
        $nuevo_personal ->apm = $request -> apm;
        $nuevo_personal ->dni = $request -> dni;
        $nuevo_personal ->id_cargo = $request ->id_cargo;
        $nuevo_personal ->sueldo = $request ->sueldo;

        $nuevo_personal->save();
        return Redirect('personal');
    }

    /*MUESTRA LOS DATOS DE UN ELEMENTO EN LA BDD*/
    public function show($id_personal){
        $p =personal::find($id_personal);
        return view('personal.show', compact('p'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id_personal)
    {
        $p = personal::find($id_personal);
        return view('personal.edit', compact('p'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id_personal)
    {
            $personal = personal::find($id_personal);

            $personal ->nombre = $request -> nombre;
            $personal ->app = $request -> app;
            $personal ->apm = $request -> apm;
            $personal ->dni = $request -> dni;
            $personal ->id_cargo = $request ->id_cargo;
            $personal ->sueldo = $request ->sueldo;
    
            $personal->save();
            return Redirect(url('personal/'.$id_personal));
    }
    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id_personal)
    {
        $personal = personal::find($id_personal);
        $personal->delete();
        
        return Redirect(url('personal'));
    }
}
