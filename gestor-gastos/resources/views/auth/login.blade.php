<x-guest-layout>
    <div class="bg-white rounded-lg shadow-md p-8">
        <div class="mb-8">
            <h2 class="text-3xl font-bold text-gray-900 text-center">Iniciar Sesión</h2>
            <p class="text-center text-gray-600 mt-2">Bienvenido a Gestor Financiero</p>
        </div>

        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Correo Electrónico</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="username" class="mt-2 w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent" placeholder="tu@email.com" />
                <x-input-error :messages="$errors->get('email')" class="mt-1 text-red-600 text-sm" />
            </div>

            <div class="mt-5">
                <label for="password" class="block text-sm font-medium text-gray-700">Contraseña</label>
                <input id="password" type="password" name="password" required autocomplete="current-password" class="mt-2 w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent" placeholder="Tu contraseña" />
                <x-input-error :messages="$errors->get('password')" class="mt-1 text-red-600 text-sm" />
            </div>

            <div class="flex items-center mt-5">
                <input id="remember_me" type="checkbox" name="remember" class="w-4 h-4 border-gray-300 rounded text-green-600 focus:ring-green-500 cursor-pointer" />
                <label for="remember_me" class="ms-2 text-sm text-gray-600 cursor-pointer">Recuérdame</label>
            </div>

            <button type="submit" class="w-full mt-6 bg-green-600 text-white font-semibold py-3 px-4 rounded-lg hover:bg-green-700 transition duration-200">Iniciar Sesión</button>

            @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}" class="block text-center text-sm text-gray-600 hover:text-green-600 mt-4 underline">
                    ¿Olvidaste tu contraseña?
                </a>
            @endif

            <p class="text-center text-sm text-gray-600 mt-6">
                ¿No tienes cuenta? <a href="{{ route('register') }}" class="text-green-600 font-semibold hover:text-green-700">Regístrate aquí</a>
            </p>
        </form>
    </div>
</x-guest-layout>