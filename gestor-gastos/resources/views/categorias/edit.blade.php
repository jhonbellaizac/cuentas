<!DOCTYPE html>
<html>
<head>
    <title>Editar Categoría</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
          rel="stylesheet">
</head>

<body>

<div class="container mt-5">

    <h1>Editar Categoría</h1>

    <form action="{{ route('categorias.update', ['categoria' => $categoria->id]) }}"
          method="POST">

        @csrf
        @method('PUT')

        <div class="mb-3">

            <label>Nombre</label>

            <input type="text"
                   name="nombre"
                   value="{{ $categoria->nombre }}"
                   class="form-control">

        </div>

        <div class="mb-3">

            <label>Tipo</label>

            <select name="tipo"
                    class="form-control">

                <option value="ingreso"
                    {{ $categoria->tipo == 'ingreso' ? 'selected' : '' }}>
                    Ingreso
                </option>

                <option value="gasto"
                    {{ $categoria->tipo == 'gasto' ? 'selected' : '' }}>
                    Gasto
                </option>

            </select>

        </div>

        <div class="mb-3">

            <label>Descripción</label>

            <textarea name="descripcion"
                      class="form-control">{{ $categoria->descripcion }}</textarea>

        </div>

        <button type="submit"
                class="btn btn-primary">

            Actualizar

        </button>

    </form>

</div>

</body>
</html>