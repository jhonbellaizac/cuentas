@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-6">

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
            <a href="{{ route('dashboard') }}" class="btn btn-info">Volver al Dashboard</a>

        </form>

    </div>
</div>

@endsection