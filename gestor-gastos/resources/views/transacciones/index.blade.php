@extends('layouts.app')

@section('content')

<h1>Lista de Transacciones</h1>

<div class="mb-3">
    <a href="{{ route('transacciones.create') }}"
       class="btn btn-primary">

        Nueva Transacción

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

    <thead class="table-dark">
        <tr>
            <th>ID</th>
            <th>Cuenta</th>
            <th>Categoría</th>
            <th>Tipo</th>
            <th>Monto</th>
            <th>Fecha</th>
            <th>Descripción</th>
            <th>Acciones</th>
        </tr>
    </thead>

    <tbody>

        @foreach($transacciones as $transaccion)

        <tr>

            <td>{{ $transaccion->id }}</td>

            <td>
                {{ $transaccion->cuenta->nombre }}
            </td>

            <td>
                {{ $transaccion->categoria->nombre }}
            </td>

            <td>

                @if($transaccion->tipo == 'ingreso')

                    <span class="badge bg-success">
                        Ingreso
                    </span>

                @else

                    <span class="badge bg-danger">
                        Gasto
                    </span>

                @endif

            </td>

            <td>
                ${{ number_format($transaccion->monto, 2) }}
            </td>

            <td>
                {{ $transaccion->fecha }}
            </td>

            <td>
                {{ $transaccion->descripcion }}
            </td>

            <td>

                <a href="{{ route('transacciones.edit', $transaccion->id) }}"
                   class="btn btn-warning btn-sm">

                    Editar

                </a>

                <form action="{{ route('transacciones.destroy', $transaccion->id) }}"
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