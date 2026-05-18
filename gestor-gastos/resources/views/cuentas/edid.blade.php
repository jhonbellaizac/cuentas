<!DOCTYPE html>
<html>
<head>
    <title>Editar Cuenta</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
          rel="stylesheet">
</head>

<body>

<div class="container mt-5">

    <h1>Editar Cuenta</h1>

    <form action="{{ route('cuentas.update', ['cuenta' => $cuenta->id]) }}"
          method="POST">

        @csrf
        @method('PUT')

        <div class="mb-3">

            <label>Nombre</label>

            <input type="text"
                   name="nombre"
                   value="{{ $cuenta->nombre }}"
                   class="form-control">

        </div>

        <div class="mb-3">

            <label>Saldo</label>

            <input type="number"
                   step="0.01"
                   name="saldo"
                   value="{{ $cuenta->saldo }}"
                   class="form-control">

        </div>

        <button type="submit"
                class="btn btn-primary">

            Actualizar

        </button>

    </form>

</div>

</body>
</html>