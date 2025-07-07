<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Painel da Distribuidora</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { margin: 0; }
        .sidebar {
            height: 100vh;
            background-color: #2f343a;
            color: #fff;
            padding-top: 20px;
        }
        .sidebar a {
            color: #ccc;
            text-decoration: none;
            display: block;
            padding: 10px 20px;
        }
        .sidebar a:hover {
            background-color: #444;
            color: #fff;
        }
    </style>
</head>
<body>
    <div class="d-flex">
        <div class="sidebar">
            <h4 class="text-center mb-4">Painel Admin 🍻</h4>
            <a href="{{ route('dashboard') }}">🏠 Dashboard</a>
            <a href="{{ route('produtos.create') }}">➕ Cadastrar Produto</a>
            <a href="{{ route('produtos.index') }}">📦 Ver Produtos</a>
            <a href="{{ route('clientes.index') }}">👥 Clientes</a>
            <a href="{{ route('pedidos.index') }}">🧾 Pedidos</a>
            <form method="POST" action="{{ route('logout') }}" class="d-grid mt-4 px-3">
                @csrf
                <button type="submit" class="btn btn-sm btn-outline-light">Sair</button>
            </form>
        </div>

        <div class="flex-grow-1 p-4">
            @yield('content')
        </div>
    </div>
</body>
</html>

      
