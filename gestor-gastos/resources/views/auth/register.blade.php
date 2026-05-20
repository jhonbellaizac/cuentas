<x-guest-layout>
    <div class="bg-white rounded-lg shadow-md p-8">
        <div class="mb-8">
            <h2 class="text-3xl font-bold text-gray-900 text-center">Crear Cuenta</h2>
            <p class="text-center text-gray-600 mt-2">Regístrate en Gestor Financiero</p>
        </div>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <label for="name" class="block text-sm font-medium text-gray-700">Nombre Completo</label>
                <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus autocomplete="name" class="mt-2 w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent" placeholder="Tu nombre" />
                <x-input-error :messages="$errors->get('name')" class="mt-1 text-red-600 text-sm" />
            </div>

            <div class="mt-5">
                <label for="email" class="block text-sm font-medium text-gray-700">Correo Electrónico</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="username" class="mt-2 w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent" placeholder="tu@email.com" />
                <x-input-error :messages="$errors->get('email')" class="mt-1 text-red-600 text-sm" />
            </div>

            <div class="mt-5">
                <label for="password" class="block text-sm font-medium text-gray-700">Contraseña</label>
                <input id="password" type="password" name="password" required autocomplete="new-password" class="mt-2 w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent" placeholder="Tu contraseña" />
                <x-input-error :messages="$errors->get('password')" class="mt-1 text-red-600 text-sm" />
            </div>

            <div class="mt-5">
                <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Confirmar Contraseña</label>
                <input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password" class="mt-2 w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent" placeholder="Confirma tu contraseña" />
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-1 text-red-600 text-sm" />
            </div>

            <button type="submit" class="w-full mt-6 bg-green-600 text-white font-semibold py-3 px-4 rounded-lg hover:bg-green-700 transition duration-200">Registrarse</button>

            <p class="text-center text-sm text-gray-600 mt-6">
                ¿Ya tienes cuenta? <a href="{{ route('login') }}" class="text-green-600 font-semibold hover:text-green-700">Inicia sesión aquí</a>
            </p>
        </form>
    </div>
</x-guest-layout>