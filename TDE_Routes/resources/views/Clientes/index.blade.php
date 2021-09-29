@extends('layout')

@section('cabecalho')
Fornecedores
@endsection

@section('conteudo')
            <ul class="list-group">


                @foreach ($clientes as $cliente)
                    <li class="list-group-item">{{$cliente->nome_cliente }}</li>
                @endforeach
            </ul>
            <a class="btn btn-dark mb-3" href="/fornecedores/adicionar">Adicionar Fornecedores<a>

@endsection('cabecalho')