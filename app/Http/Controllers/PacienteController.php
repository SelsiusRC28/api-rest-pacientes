<?php

namespace App\Http\Controllers;

use App\Http\Requests\ActualizarPacienteRequest;
use App\Http\Requests\GuardarPacienteRequest;
use Illuminate\Http\Request;
use App\Models\Paciente;

class PacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Paciente::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GuardarPacienteRequest $request)
    {

        Paciente::create($request->all());

        return response()->json([
            'res' => true,
            'msg' => 'Paciente guardado correctamente'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Paciente $paciente)
    {
        return response()->json([
            'res' => true,
            'paciente' => $paciente
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ActualizarPacienteRequest $request, Paciente $paciente)
    {
        $paciente->update($request->all());

        return response()->json([
            'res' => true,
            'paciente' => 'Paciente Actualizado'
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Paciente $paciente)
    {
        $paciente->delete();

        return response()->json([
            'res' => true,
            'paciente' => 'Paciente Eliminado'
        ], 200);
    }
}
