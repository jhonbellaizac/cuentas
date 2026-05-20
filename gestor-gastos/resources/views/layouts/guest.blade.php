<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

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

            <div class="space-x-4">

                <a href="{{ route('login') }}"
                    class="text-white hover:text-gray-200 font-medium">

                    Iniciar Sesión

                </a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}"
                        class="bg-white text-green-600 px-4 py-2 rounded-lg font-semibold hover:bg-gray-200 transition">

                        Registrarse

                    </a>
                @endif

            </div>

        </div>
    </nav>

    <!-- CONTENIDO -->
    <main class="flex items-center justify-center py-16">
        <div class="w-full max-w-md">
            {{ $slot }}
        </div>
    </main>

</body>
</html>