<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Gestor Financiero</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

    <div class="container">

        <a class="navbar-brand" href="#">
            Gestor Financiero
        </a>

        <div class="navbar-nav">

            <a class="nav-link"
               href="{{ route('categorias.index') }}">
               Categorías
            </a>

            <a class="nav-link"
               href="{{ route('cuentas.index') }}">
               Cuentas
            </a>

            <a class="nav-link"
               href="{{ route('transacciones.index') }}">
               Transacciones
            </a>

            <a class="nav-link"
               href="{{ route('transacciones.create') }}">
               Nueva Transacción
            </a>

        </div>

    </div>

</nav>

<div class="container mt-4">

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @yield('content')

</div>

</body>
</html>