@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-6">

        <h1>Editar Transacción</h1>

        <form action="{{ route('transacciones.update', $transaccion->id) }}"
              method="POST">

            @csrf
            @method('PUT')

            <div class="mb-3">

                <label>Cuenta</label>

                <select name="cuenta_id"
                        class="form-control">

                    @foreach($cuentas as $cuenta)

                        <option value="{{ $cuenta->id }}"
                            {{ $transaccion->cuenta_id == $cuenta->id ? 'selected' : '' }}>

                            {{ $cuenta->nombre }}

                        </option>

                    @endforeach

                </select>

            </div>

            <div class="mb-3">

                <label>Categoría</label>

                <select name="categoria_id"
                        class="form-control">

                    @foreach($categorias as $categoria)

                        <option value="{{ $categoria->id }}"
                            {{ $transaccion->categoria_id == $categoria->id ? 'selected' : '' }}>

                            {{ $categoria->nombre }}

                        </option>

                    @endforeach

                </select>

            </div>

            <div class="mb-3">

                <label>Tipo</label>

                <select name="tipo"
                        class="form-control">

                    <option value="ingreso"
                        {{ $transaccion->tipo == 'ingreso' ? 'selected' : '' }}>

                        Ingreso

                    </option>

                    <option value="gasto"
                        {{ $transaccion->tipo == 'gasto' ? 'selected' : '' }}>

                        Gasto

                    </option>

                </select>

            </div>

            <div class="mb-3">

                <label>Monto</label>

                <input type="number"
                       step="0.01"
                       name="monto"
                       value="{{ $transaccion->monto }}"
                       class="form-control">

            </div>

            <div class="mb-3">

                <label>Descripción</label>

                <textarea name="descripcion"
                          class="form-control">{{ $transaccion->descripcion }}</textarea>

            </div>

            <button type="submit" class="btn btn-primary">Actualizar</button>
            <a href="{{ route('dashboard') }}" class="btn btn-info">Volver al Dashboard</a>

        </form>

    </div>
</div>

@endsection