<x-guest-layout>

    <!-- Heading -->
    <div class="mb-7 text-center">
        <div class="mx-auto mb-4 flex h-16 w-16 items-center justify-center rounded-full bg-red-50">
            <svg class="h-8 w-8 text-[#a82a2a]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                    d="M12 15v2m-6.5 4h13a2 2 0 002-2v-7a2 2 0 00-2-2h-13a2 2 0 00-2 2v7a2 2 0 002 2zm2.5-9V7a4 4 0 118 0v3" />
            </svg>
        </div>

        <h2 class="text-2xl font-bold text-gray-800">
            Lupa Password?
        </h2>

        <p class="mt-2 text-sm leading-relaxed text-gray-500">
            Tidak perlu khawatir. Masukkan alamat email akun kamu, dan kami akan mengirimkan tautan untuk mengatur ulang
            password.
        </p>
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-5" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />

            <x-text-input id="email" class="mt-2 block w-full" type="email" name="email" :value="old('email')"
                required autofocus autocomplete="username" placeholder="Masukkan alamat email" />

            <x-input-error :messages="$errors->get('email')" />
        </div>

        <!-- Submit -->
        <div class="mt-7">
            <x-primary-button class="w-full justify-center py-3">
                Kirim Tautan Reset Password
            </x-primary-button>
        </div>

        <div class="mt-6 border-t border-gray-200 pt-5 text-center">
            <a href="{{ route('login') }}"
                class="text-sm font-semibold text-[#a82a2a] transition hover:text-[#801f1f] hover:underline">
                Kembali ke halaman Login
            </a>
        </div>
    </form>

</x-guest-layout>
