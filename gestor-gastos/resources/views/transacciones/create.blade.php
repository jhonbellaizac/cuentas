@extends('layouts.app')

@section('content')

<div class="container">

    <h2>Nueva Transacción</h2>

    <form action="{{ route('transacciones.store') }}"
          method="POST">

        @csrf

        <div class="mb-3">
            <label>Cuenta</label>

            <select name="cuenta_id"
                    class="form-control">

                @foreach($cuentas as $cuenta)

                    <option value="{{ $cuenta->id_cuenta }}">
                        {{ $cuenta->nombre }}
                        - Saldo: ${{ $cuenta->saldo }}
                    </option>

                @endforeach

            </select>
        </div>

        <div class="mb-3">
            <label>Categoría</label>

            <select name="categoria_id"
                    class="form-control">

                @foreach($categorias as $categoria)

                    <option value="{{ $categoria->id_categoria }}">
                        {{ $categoria->nombre }}
                    </option>

                @endforeach

            </select>
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

            <label>Monto</label>

            <input type="number"
                   step="0.01"
                   name="monto"
                   class="form-control">

        </div>

        <div class="mb-3">

            <label>Descripción</label>

            <textarea name="descripcion"
                      class="form-control">
            </textarea>

        </div>

        <button type="submit"
                class="btn btn-success">

            Guardar

        </button>

    </form>

</div>

@endsection