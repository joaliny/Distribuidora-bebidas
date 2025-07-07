@extends('layouts.app')

@section('content')
<h2>📦 Produtos Cadastrados</h2>

<table class="table table-striped table-bordered mt-4">
    <thead class="table-dark">
        <tr>
            <th>#</th>
            <th>Nome</th>
            <th>Categoria</th>
            <th>Preço</th>
            <th>Estoque</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($produtos as $produto)
        <tr>
            <td>{{ $produto->id }}</td>
            <td>{{ $produto->nome }}</td>
            <td>{{ $produto->categoria }}</td>
            <td>R$ {{ number_format($produto->preco, 2, ',', '.') }}</td>
            <td>{{ $produto->estoque }}</td>
            <td>
                <a href="{{ route('produtos.edit', $produto->id) }}" class="btn btn-sm btn-warning">✏️ Editar</a>
                <form action="{{ route('produtos.destroy', $produto->id) }}" method="POST" style="display:inline">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-sm btn-danger">🗑️ Excluir</button>
                </form>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="6" class="text-center">Nenhum produto cadastrado 😕</td>
        </tr>
        @endforelse
    </tbody>
</table>
@endsection
