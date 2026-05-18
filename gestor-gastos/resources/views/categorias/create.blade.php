<!DOCTYPE html>
<html>
<head>
    <title>Crear Categoría</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
          rel="stylesheet">
</head>

<body>

<div class="container mt-5">

    <h1>Nueva Categoría</h1>

    <form action="{{ route('categorias.store') }}"
          method="POST">

        @csrf

        <div class="mb-3">

            <label>Nombre</label>

            <input type="text"
                   name="nombre"
                   class="form-control">

        </div>

        <div class="mb-3">

    <label>Tipo</label>

    <select name="tipo"
            class="form-control">

        <option value="ingreso">Ingreso</option>
        <option value="gasto">Gasto</option>

    </select>

</div>

<div class="mb-3">

    <label>Descripción</label>

    <textarea name="descripcion"
              class="form-control"></textarea>

</div>

        <button type="submit"
                class="btn btn-success">

            Guardar

        </button>

    </form>

</div>

</body>
</html>