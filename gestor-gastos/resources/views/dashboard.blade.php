<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | Gestor Financiero</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100 min-h-screen">

    <!-- NAVBAR -->
    <nav class="bg-green-600 shadow-lg">

        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">

            <h1 class="text-2xl font-bold text-white">
                 Gestor Financiero
            </h1>

            <div class="flex items-center gap-4">

                <span class="text-white font-medium">
                    {{ Auth::user()->name }}
                </span>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <button
                        class="bg-white text-green-600 px-4 py-2 rounded-lg font-semibold hover:bg-gray-200 transition">

                        Cerrar Sesión

                    </button>
                </form>

            </div>

        </div>

    </nav>

    <!-- CONTENIDO -->
    <div class="max-w-7xl mx-auto py-10 px-4">

        <h2 class="text-4xl font-bold text-gray-800 mb-10">
            Panel Principal
        </h2>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">

            <!-- Categorías -->
            <a href="{{ route('categorias.index') }}"
                class="bg-white p-6 rounded-2xl shadow hover:shadow-xl transition">

                <div class="text-5xl mb-4">
                    
                </div>

                <h3 class="text-2xl font-bold text-green-600">
                    Categorías
                </h3>

                <p class="text-gray-600 mt-2">
                    Administra ingresos y gastos.
                </p>

            </a>

            <!-- Cuentas -->
            <a href="{{ route('cuentas.index') }}"
                class="bg-white p-6 rounded-2xl shadow hover:shadow-xl transition">

                <div class="text-5xl mb-4">
                    
                </div>

                <h3 class="text-2xl font-bold text-blue-600">
                    Cuentas
                </h3>

                <p class="text-gray-600 mt-2">
                    Consulta saldos disponibles.
                </p>

            </a>

            <!-- Transacciones -->
            <a href="{{ route('transacciones.index') }}"
                class="bg-white p-6 rounded-2xl shadow hover:shadow-xl transition">

                <div class="text-5xl mb-4">
                    
                </div>

                <h3 class="text-2xl font-bold text-red-600">
                    Transacciones
                </h3>

                <p class="text-gray-600 mt-2">
                    Registra movimientos financieros.
                </p>

            </a>

                

            </div>

        </div>

    </div>

</body>

</html>