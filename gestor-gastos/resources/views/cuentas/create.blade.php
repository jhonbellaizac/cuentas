@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-6">

        <h1>Nueva Cuenta</h1>

        <form action="{{ route('cuentas.store') }}"
              method="POST">

            @csrf

            <div class="mb-3">

                <label>Nombre</label>

                <input type="text"
                       name="nombre"
                       class="form-control"
                       required>

            </div>

            <div class="mb-3">

                <label>Descripción</label>

                <textarea name="descripcion"
                          class="form-control"></textarea>

            </div>

            <div class="mb-3">

                <label>Saldo</label>

                <input type="number"
                       step="0.01"
                       name="saldo"
                       class="form-control"
                       required>

            </div>

            <div class="mb-3">

                <label>Moneda</label>

                <input type="text"
                       name="moneda"
                       value="COP"
                       class="form-control"
                       required>

            </div>

            <button type="submit"
                    class="btn btn-success">

                Guardar

            </button>
            <a href="{{ route('dashboard') }}" class="btn btn-primary">Volver al Dashboard</a>

        </form>

    </div>
</div>

@endsection