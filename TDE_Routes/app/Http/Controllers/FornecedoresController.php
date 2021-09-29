<?php

namespace App\Http\Controllers;


use \App\fornecedor;

use Illuminate\Http\Request;


class FornecedoresController extends Controller
{
    

    public function index() {
        $fornecedores = fornecedor::all();
       
        return view('Fornecedores.index',compact('fornecedores'));
    }

    public function create() {
       
        return view('Fornecedores.create');
    }

    public function store(Request $request) {
        $nome_fornecedor =  $request->nome_fornecedor;
        $fornecedor = new Fornecedor();
        $fornecedor->nome_fornecedor = $nome_fornecedor;

        echo "Fornecedor com id {$fornecedor -> id} criado: {$fornecedor->nome_fornecedor}";

    }

    
}
