@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-6">

        <h1>Editar Categoría</h1>

        <form action="{{ route('categorias.update', ['categoria' => $categoria->id]) }}" method="POST" class="mt-4">

            @csrf
            @method('PUT')

            <div class="mb-3">
                <label>Nombre</label>
                <input type="text" name="nombre" value="{{ $categoria->nombre }}" class="form-control" required>
            </div>

            <div class="mb-3">
                <label>Tipo</label>
                <select name="tipo" class="form-control" required>
                    <option value="ingreso" {{ $categoria->tipo == 'ingreso' ? 'selected' : '' }}>Ingreso</option>
                    <option value="gasto" {{ $categoria->tipo == 'gasto' ? 'selected' : '' }}>Gasto</option>
                </select>
            </div>

            <div class="mb-3">
                <label>Descripción</label>
                <textarea name="descripcion" class="form-control">{{ $categoria->descripcion }}</textarea>
            </div>

            <button type="submit" class="btn btn-primary">Actualizar</button>
            <a href="{{ route('dashboard') }}" class="btn btn-info">Volver al Dashboard</a>

        </form>

    </div>
</div>

@endsection