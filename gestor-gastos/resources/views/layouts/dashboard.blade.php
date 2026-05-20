<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestor Financiero</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100 min-h-screen">

    <!-- NAVBAR -->
    <nav class="bg-green-600 shadow-lg">

        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">

            <h1 class="text-2xl font-bold text-white">
                Gestor Financiero
            </h1>

            <div class="flex gap-6 text-white font-medium">

                <a href="{{ route('dashboard') }}" class="hover:text-green-200">
                    Inicio
                </a>

                <a href="{{ route('categorias.index') }}" class="hover:text-green-200">
                    Categorías
                </a>

                <a href="{{ route('cuentas.index') }}" class="hover:text-green-200">
                    Cuentas
                </a>

                <a href="{{ route('transacciones.index') }}" class="hover:text-green-200">
                    Transacciones
                </a>

            </div>

        </div>

    </nav>

    <!-- CONTENIDO -->
    <main class="max-w-7xl mx-auto py-10 px-4">

        @yield('content')

    </main>

</body>

</html>