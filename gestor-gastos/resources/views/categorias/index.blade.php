@extends('layouts.app')

@section('content')

<h1>Lista de Categorías</h1>

<div class="mb-3">
    <a href="{{ route('categorias.create') }}"
       class="btn btn-primary">

       Nueva Categoría

    </a>
    <a href="{{ route('dashboard') }}"
       class="btn btn-secondary">

       Volver

    </a>
</div>

@if(session('success'))

    <div class="alert alert-success">
        {{ session('success') }}
    </div>

@endif

<table class="table table-bordered">

    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Tipo</th>
            <th>Descripción</th>
            <th>Acciones</th>
        </tr>
    </thead>

    <tbody>

        @foreach($categorias as $categoria)

        <tr>

            <td>{{ $categoria->id }}</td>
            <td>{{ $categoria->nombre }}</td>
            <td>{{ $categoria->tipo }}</td>
            <td>{{ $categoria->descripcion }}</td>

            <td>

                <a href="{{ route('categorias.edit', $categoria->id) }}"
                   class="btn btn-warning btn-sm">

                    Editar

                </a>

                <form action="{{ route('categorias.destroy', $categoria->id) }}"
                      method="POST"
                      style="display:inline;">

                    @csrf
                    @method('DELETE')

                    <button type="submit"
                            class="btn btn-danger btn-sm">

                        Eliminar

                    </button>

                </form>

            </td>

        </tr>

        @endforeach

    </tbody>

</table>

@endsection