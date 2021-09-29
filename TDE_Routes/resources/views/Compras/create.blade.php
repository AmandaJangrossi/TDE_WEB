@extends ('layout')

@section('cabecalho')
Adicionar Fornecedores
@endsection

@section('conteudo')
                
                <form method="POST">
                @csrf
                    <div class="form-group">
                        <label for="nome_fornecedor" class="">Nome Funcionario</label>
                        <input type="text" clas="form-control" name="nome_fornecedor">
                    </div>

                    <button class="btn btn-primary">Adicionar</button> 
                </form>
@endsection
                