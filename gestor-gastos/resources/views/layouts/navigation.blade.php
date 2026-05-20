<x-app-layout>

    <div class="py-10 bg-gray-100 min-h-screen">

        <div class="max-w-7xl mx-auto px-4">

            <h1 class="text-4xl font-bold text-gray-800 mb-10">
                 Financiero
            </h1>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">

                <!-- Categorías -->
                <a href="{{ route('categorias.index') }}"
                    class="bg-white rounded-2xl shadow p-6 hover:shadow-xl transition">

                    <div class="text-5xl mb-4">
                        
                    </div>

                    <h2 class="text-2xl font-bold text-green-600">
                        Categorías
                    </h2>

                    <p class="text-gray-600 mt-2">
                        Gestiona ingresos y gastos.
                    </p>

                </a>

                <!-- Cuentas -->
                <a href="{{ route('cuentas.index') }}"
                    class="bg-white rounded-2xl shadow p-6 hover:shadow-xl transition">

                    <div class="text-5xl mb-4">
                        
                    </div>

                    <h2 class="text-2xl font-bold text-blue-600">
                        Cuentas
                    </h2>

                    <p class="text-gray-600 mt-2">
                        Consulta saldos disponibles.
                    </p>

                </a>

                <!-- Transacciones -->
                <a href="{{ route('transacciones.index') }}"
                    class="bg-white rounded-2xl shadow p-6 hover:shadow-xl transition">

                    <div class="text-5xl mb-4">
                        
                    </div>

                    <h2 class="text-2xl font-bold text-red-600">
                        Transacciones
                    </h2>

                    <p class="text-gray-600 mt-2">
                        Registra movimientos financieros.
                    </p>

                </a>


                </div>

            </div>

        </div>

    </div>

</x-app-layout>