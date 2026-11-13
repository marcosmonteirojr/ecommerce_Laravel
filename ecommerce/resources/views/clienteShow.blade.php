@extends('layout')
@section('conteudo')
<form action="{{ route('clientes.destroy', $cliente->cod) }}" method="POST">
@csrf
@method('DELETE')
<div>
  <label for="sizesInputSmall" class="form-label">Nome</label>
  <input class="form-control form-control-sm" type="text" id="nome" value="{{ $cliente->nome }}" placeholder="" name="nome" aria-label="Small input example">

  <label for="sizesInputSmall" class="form-label">CPF</label>
  <input class="form-control form-control-sm" type="text" id="cpf" value="{{ $cliente->cpf }}" placeholder="" name="cpf" aria-label="Small input example">

   <label for="sizesInputSmall" class="form-label">Endereco</label>
  <input class="form-control form-control-sm" type="text" id="endereco" placeholder="" value="{{ $cliente->endereco }}"name="endereco" aria-label="Small input example">

   <label for="sizesInputSmall" class="form-label">telefone</label>
  <input class="form-control form-control-sm" type="text" id="telefone" placeholder=""value="{{ $cliente->telefone }} "name="telefone" aria-label="Small input example">  
</div>
<button type="submit" class="btn btn-primary">Excluir</button>
</form>

@endsection