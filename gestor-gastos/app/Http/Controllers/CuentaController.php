<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cuenta;

class CuentaController extends Controller
{
    public function index()
    {
        $cuentas = Cuenta::all();

        return view('cuentas.index', compact('cuentas'));
    }

    public function create()
    {
        return view('cuentas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'nullable',
            'saldo' => 'required|numeric',
            'moneda' => 'required'
        ]);

        Cuenta::create([
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion,
            'saldo' => $request->saldo,
            'moneda' => $request->moneda
        ]);

        return redirect()->route('cuentas.index')
            ->with('success', 'Cuenta creada correctamente');
    }

    public function edit($id)
    {
        $cuenta = Cuenta::findOrFail($id);

        return view('cuentas.edit', compact('cuenta'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'nullable',
            'moneda' => 'required'
        ]);

        $cuenta = Cuenta::findOrFail($id);

        // ❗ NO actualizamos saldo aquí (lo manejan transacciones)

        $cuenta->update([
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion,
            'moneda' => $request->moneda
        ]);

        return redirect()->route('cuentas.index')
            ->with('success', 'Cuenta actualizada');
    }

    public function destroy($id)
    {
        Cuenta::destroy($id);

        return redirect()->route('cuentas.index')
            ->with('success', 'Cuenta eliminada');
    }
}