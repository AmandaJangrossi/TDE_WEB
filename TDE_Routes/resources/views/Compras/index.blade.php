@extends('layout')

@section('cabecalho')
Fornecedores
@endsection

@section('conteudo')
            <ul class="list-group">


                @foreach ($fornecedores as $fornecedor)
                    <li class="list-group-item">{{$fornecedor->nome_fornecedor }}</li>
                @endforeach
            </ul>
            <a class="btn btn-dark mb-3" href="/fornecedores/adicionar">Adicionar Fornecedores<a>

@endsection('cabecalho')