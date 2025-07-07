@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-center">
    <div class="col-md-8">
        <h2 class="mb-4">➕ Cadastrar Produto</h2>
        <form action="{{ route('produtos.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" required>
            </div>
            <div class="mb-3">
                <label for="descricao" class="form-label">Descrição</label>
                <textarea class="form-control" id="descricao" name="descricao" rows="3"></textarea>
            </div>
            <div class="mb-3">
                <label for="preco" class="form-label">Preço</label>
                <input type="number" step="0.01" class="form-control" id="preco" name="preco" required>
            </div>
            <div class="mb-3">
                <label for="quantidade_estoque" class="form-label">Quantidade em Estoque</label>
                <input type="number" class="form-control" id="quantidade_estoque" name="quantidade_estoque" required>
            </div>
            <button type="submit" class="btn btn-success">Cadastrar</button>
        </form>
    </div>
</div>
@endsection
