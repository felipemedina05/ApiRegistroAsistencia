<?php

namespace App\Http\Controllers;

use App\Models\Matricula;
use Illuminate\Http\Request;

class MatriculaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Matricula::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $id)
    {
        $matricula = new Matricula();

        $matricula->curso_id = $request->curso_id;
        $matricula->alumno_id = $id;
        $matricula->fecha_matricula = $request->fecha_matricula;
        
        $matricula->save();

        return "matricula registrada correctamente";
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return Matricula::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Matricula $matricula)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $matricula = Matricula::find($id);

        $matricula->curso_id = $request->curso_id;
        $matricula->alumno_id = $id;
        $matricula->fecha_matricula = $request->fecha_matricula;
        
        
        $matricula->save();

        return "matricula actualizada correctamente";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $matricula = Matricula::find($id);
        $matricula->delete();

        return "matricula eliminada correctamente";
    }
}