<x-guest-layout>

    <div class="min-h-screen flex items-center justify-center">
        <!-- Card -->
        <div class="w-full max-w-xl bg-white shadow-xl rounded-xl p-8">
            <!-- Logo -->
            <div class="flex justify-center mb-4">
                <img src="{{ asset('images/logo.jpg') }}" class="w-24" alt="Logo">
            </div>

            <!-- Title -->
            <h2 class="text-center text-lg font-semibold mb-6">
                Login to your account
            </h2>

            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <!-- Form -->
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email -->
                <div>
                    <x-input-label for="email" :value="__('Email')" />
                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" required autofocus />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <x-input-label for="password" :value="__('Password')" />
                    <x-text-input id="password" class="block mt-1 w-full"
                        type="password"
                        name="password"
                        required autocomplete="current-password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Remember Me + Forgot -->
                <div class="mt-4 flex items-center justify-between">
                    <label for="remember_me" class="flex items-center">
                        <input id="remember_me" type="checkbox" name="remember"
                            class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500">
                        <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                    </label>

                    <a class="text-sm text-indigo-600 hover:underline" href="{{ route('password.request') }}">
                        {{ __('Forgot password?') }}
                    </a>
                </div>

                <!-- Login Button -->
                <div class="mt-6">
                    <x-primary-button class="w-full justify-center">
                        {{ __('Log in') }}
                    </x-primary-button>
                </div>

                <!-- Register -->
                <p class="mt-4 text-center text-sm">
                    Don't have an account?
                    <a href="{{ route('register') }}" class="text-indigo-600 hover:underline">Register</a>
                </p>
            </form>

        </div>
    </div>

</x-guest-layout>
