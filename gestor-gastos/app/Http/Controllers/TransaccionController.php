<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cuenta;
use App\Models\Categoria;
use App\Models\Transaccion;

class TransaccionController extends Controller
{
    /**
     * Mostrar listado de transacciones
     */
    public function index()
    {
        $transacciones = Transaccion::with('cuenta', 'categoria')
            ->orderBy('id', 'desc')
            ->get();

        return view('transacciones.index',
            compact('transacciones'));
    }

    /**
     * Mostrar formulario crear
     */
    public function create()
    {
        $cuentas = Cuenta::all();

        $categorias = Categoria::all();

        return view('transacciones.create',
            compact('cuentas', 'categorias'));
    }

    /**
     * Guardar transacción
     */
    public function store(Request $request)
    {
        $request->validate([
            'cuenta_id' => 'required',
            'categoria_id' => 'required',
            'tipo' => 'required',
            'monto' => 'required|numeric|min:1'
        ]);

        // Guardar transacción
        $transaccion = Transaccion::create([
            'cuenta_id' => $request->cuenta_id,
            'categoria_id' => $request->categoria_id,
            'tipo' => $request->tipo,
            'monto' => $request->monto,
            'descripcion' => $request->descripcion,
            'fecha' => now(),
            'creado_por' => auth()->user()->name
        ]);

        // Buscar cuenta
        $cuenta = Cuenta::findOrFail($request->cuenta_id);

        // Actualizar saldo
        if ($request->tipo == 'ingreso')
        {
            $cuenta->saldo += $request->monto;
        }
        else
        {
            $cuenta->saldo -= $request->monto;
        }

        // Guardar saldo actualizado
        $cuenta->save();

        return redirect()->route('transacciones.index')
            ->with('success', 'Transacción registrada correctamente');
    }

    /**
     * Mostrar una transacción
     */
    public function show(string $id)
    {
        $transaccion = Transaccion::with('cuenta', 'categoria')
            ->findOrFail($id);

        return view('transacciones.show',
            compact('transaccion'));
    }

    /**
     * Mostrar formulario editar
     */
    public function edit(string $id)
    {
        $transaccion = Transaccion::findOrFail($id);

        $cuentas = Cuenta::all();

        $categorias = Categoria::all();

        return view('transacciones.edit',
            compact('transaccion', 'cuentas', 'categorias'));
    }

    /**
     * Actualizar transacción
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'cuenta_id' => 'required',
            'categoria_id' => 'required',
            'tipo' => 'required',
            'monto' => 'required|numeric|min:1'
        ]);

        $transaccion = Transaccion::findOrFail($id);

        $transaccion->update([
            'cuenta_id' => $request->cuenta_id,
            'categoria_id' => $request->categoria_id,
            'tipo' => $request->tipo,
            'monto' => $request->monto,
            'descripcion' => $request->descripcion
        ]);

        return redirect()->route('transacciones.index')
            ->with('success', 'Transacción actualizada');
    }

    /**
     * Eliminar transacción
     */
    public function destroy(string $id)
    {
        $transaccion = Transaccion::findOrFail($id);

        $transaccion->delete();

        return redirect()->route('transacciones.index')
            ->with('success', 'Transacción eliminada');
    }
}