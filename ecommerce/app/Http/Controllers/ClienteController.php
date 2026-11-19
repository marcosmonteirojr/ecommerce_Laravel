<?php

namespace App\Http\Controllers;
use App\Models\Cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clientes = Cliente::all();
        return view('clientesIndex', compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('clientesCreate');
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
        $cliente = Cliente::find($id);
        return view('clienteShow', compact('cliente'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $cliente = Cliente::findOrFail($id);
        return view('clientesEdit', compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $cliente = Cliente::findOrFail($id);
        $validacao = Validator::make($request->all(), [
            'nome'=> 'required|max:30|min:3',
            'cpf'=>'required|min:11|max:11',
            'endereco'=>'nullable',
            'telefone'=>'nullable'
        ],
        [
            'nome.required'=>'O nome deve ser preenchido',
            'nome.max'=>'O nome nao pode ultrapassar 30 caracteres'
        ]
        );
        if ($validacao->fails()) {
            return redirect()->back()->withErrors($validacao)->withInput();
        }
        $cliente->update($request->all());
        return redirect()->route('clientes.index')->with('success', 'Cliente atualizado');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $cliente = Cliente::findOrFail($id);
        $cliente->delete();
        return redirect()->route('clientes.index')->with('success', 'Cliente removido');
    }
}
