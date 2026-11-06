@extends('layout')
@section('conteudo')
<form action="{{route("clientes.store") }}" method="POST">
@csrf
<div>
  <label for="sizesInputSmall" class="form-label">Nome</label>
  <input class="form-control form-control-sm" type="text" id="nome" placeholder="" name="nome" aria-label="Small input example">
  <label for="sizesInputSmall" class="form-label">CPF</label>
  <input class="form-control form-control-sm" type="text" id="cpf" placeholder="" name="cpf" aria-label="Small input example">
   <label for="sizesInputSmall" class="form-label">Endereco</label>
  <input class="form-control form-control-sm" type="text" id="endereco" placeholder="" name="endereco" aria-label="Small input example">
   <label for="sizesInputSmall" class="form-label">telefone</label>
  <input class="form-control form-control-sm" type="text" id="telefone" placeholder="" name="telefone" aria-label="Small input example">  
</div>
<button type="submit" class="btn btn-primary">Salvar</button>
</form>
@endsection