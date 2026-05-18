@extends('layouts.app')

@section('content')

<h1>Lista de Cuentas</h1>

<a href="{{ route('cuentas.create') }}"
   class="btn btn-primary mb-3">

    Nueva Cuenta

</a>

@if(session('success'))

    <div class="alert alert-success">
        {{ session('success') }}
    </div>

@endif

<table class="table table-bordered">

    <thead class="table-dark">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Saldo</th>
            <th>Moneda</th>
            <th>Descripción</th>
            <th>Acciones</th>
        </tr>
    </thead>

    <tbody>

        @foreach($cuentas as $cuenta)

        <tr>

            <td>{{ $cuenta->id }}</td>

            <td>{{ $cuenta->nombre }}</td>

            <td>
                ${{ number_format($cuenta->saldo, 2) }}
            </td>

            <td>{{ $cuenta->moneda }}</td>

            <td>{{ $cuenta->descripcion }}</td>

            <td>

                <a href="{{ route('cuentas.edit', $cuenta->id) }}"
                   class="btn btn-warning btn-sm">

                    Editar

                </a>

                <form action="{{ route('cuentas.destroy', $cuenta->id) }}"
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