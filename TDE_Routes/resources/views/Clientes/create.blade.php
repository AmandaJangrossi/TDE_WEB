@extends ('layout')

@section('cabecalho')
Adicionar Clientes
@endsection

@section('conteudo')
                
                <form method="POST">
                @csrf
                    <div class="form-group">
                        <label for="nome_cliente" class="">Nome Cliente</label>
                        <input type="text" clas="form-control" name="nome_cliente">
                    </div>

                    <button class="btn btn-primary">Adicionar</button> 
                </form>
@endsection
                