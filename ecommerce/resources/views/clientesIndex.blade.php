@extends('layout')
@section('conteudo')
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nome</th>
      <th scope="col">CPF</th>
      <th scope="col">Endereço</th>
      <th scope="col">Telefone</th>
    </tr>
  </thead>
  <tbody>
    
        @foreach ($clientes as $cli)
        <tr>
            <th scope="row">{{ $cli->cod }}</th>
            <th scope="row">{{ $cli->nome }}</th>
            <th scope="row">{{ $cli->cpf }}</th>
            <th scope="row">{{ $cli->endereco }}</th>
            <th scope="row">{{ $cli->telefone }}</th>
        </tr>
        @endforeach
      
    
   
   
    
  </tbody>
</table>
@endsection