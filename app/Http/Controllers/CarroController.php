<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Carro;


class CarroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $carros = Carro::all();

        return view('carros.index', compact('carros'));


    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('carros.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'modelo' => 'required',
            'placa' => 'nullable',
        ]);
        Carro::create($request->all());

        return redirect()->route('carros.index')->with('sucess', 'Carro cadastrado com sucesso');
    }

    /**
     * Display the specified resource.
     */
    public function show(Carro $carro)
    {
        return view('carros.show', compact('carro'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('carros.edit',compact('carro'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'modelo' => 'required',
            'placa' => 'nullable',
        ]);
         $carro->update($request->all());

        return redirect()->route('carros.index')->with('success', 'Carro atualizado!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
         $carro->delete();

        return redirect()->route('carros.index')->with('success', 'Carro deletado!');

    }
}
