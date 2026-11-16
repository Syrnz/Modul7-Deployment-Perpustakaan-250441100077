<x-guest-layout>

    <!-- Heading -->
    <div class="mb-7 text-center">
        <h2 class="text-2xl font-bold text-gray-800">
            Selamat Datang Kembali
        </h2>
        <p class="mt-2 text-sm text-gray-500">
            Silakan masuk untuk mengakses perpustakaan.
        </p>
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" class="font-semibold text-gray-700" />

            <x-text-input id="email"
                class="mt-2 block w-full rounded-lg border-gray-300 px-4 py-3 shadow-sm focus:border-[#a82a2a] focus:ring-[#a82a2a]"
                type="email" name="email" :value="old('email')" required autofocus autocomplete="username"
                placeholder="Masukkan email" />

            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-5">
            <x-input-label for="password" :value="__('Password')" class="font-semibold text-gray-700" />

            <x-text-input id="password"
                class="mt-2 block w-full rounded-lg border-gray-300 px-4 py-3 shadow-sm focus:border-[#a82a2a] focus:ring-[#a82a2a]"
                type="password" name="password" required autocomplete="current-password"
                placeholder="Masukkan password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="mt-5 flex items-center justify-between">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox"
                    class="rounded border-gray-300 text-[#a82a2a] shadow-sm focus:ring-[#a82a2a]" name="remember">
                <span class="ms-2 text-sm text-gray-600">
                    {{ __('Remember me') }}
                </span>
            </label>

            @if (Route::has('password.request'))
                <a class="text-sm font-medium text-[#a82a2a] transition hover:text-[#801f1f] hover:underline"
                    href="{{ route('password.request') }}">
                    Lupa password?
                </a>
            @endif
        </div>

        <!-- Login Button -->
        <div class="mt-7">
            <button type="submit"
                class="w-full rounded-lg bg-[#a82a2a] px-4 py-3 text-sm font-bold text-white shadow-md transition duration-200 hover:bg-[#801f1f] focus:outline-none focus:ring-2 focus:ring-[#a82a2a] focus:ring-offset-2">
                Masuk
            </button>
        </div>
    </form>

    <!-- Register Link -->
    @if (Route::has('register'))
        <div class="mt-6 border-t border-gray-200 pt-5 text-center">
            <p class="text-sm text-gray-600">
                Belum memiliki akun?
                <a href="{{ route('register') }}"
                    class="font-semibold text-[#a82a2a] transition hover:text-[#801f1f] hover:underline">
                    Daftar sekarang
                </a>
            </p>
        </div>
    @endif

</x-guest-layout>
