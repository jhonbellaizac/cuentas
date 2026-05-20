@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-6">

        <h1>Nueva Categoría</h1>

        <form action="{{ route('categorias.store') }}" method="POST" class="mt-4">

            @csrf

            <div class="mb-3">
                <label>Nombre</label>
                <input type="text" name="nombre" class="form-control" required>
            </div>

            <div class="mb-3">
                <label>Tipo</label>
                <select name="tipo" class="form-control" required>
                    <option value="ingreso">Ingreso</option>
                    <option value="gasto">Gasto</option>
                </select>
            </div>

            <div class="mb-3">
                <label>Descripción</label>
                <textarea name="descripcion" class="form-control"></textarea>
            </div>

            <button type="submit" class="btn btn-success">Guardar</button>
            <a href="{{ route('dashboard') }}" class="btn btn-primary">Volver al Dashboard</a>

        </form>

    </div>
</div>

@endsection