<?php

namespace App\Http\Controllers;
use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clientes = Cliente::all();
        return view('clientes.index', compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('clientes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nome'=>'required|string|max:100',
            'cpf'=>'nullable|string|max:11',
            'telefone'=>'nullable|string|max:20',
            'endereco'=>'nullable|string|max:256'
        ]);
        Cliente::create($request->all());
        return redirect()->route('clientes.index')->with('success','Cliente cadastrado com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('cliente.show', compact('cliente'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('clientes.edit', compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cliente $clientes)
    {
         $request->validate([
            'nome'=>'required|string|max:100',
            'cpf'=>'nullable|string|max:11',
            'telefone'=>'nullable|string|max:20',
            'endereco'=>'nullable|string|max:256'
        ]);
        $clientes->update($request->all());
        return redirect()->route('clientes.index')->with('success', 'Cliente atualizado');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cliente $clientes)
    {
        $clientes->delete();
        return redirect()->route('clientes.index')->with('success', 'Cliente removido');
    }
}
