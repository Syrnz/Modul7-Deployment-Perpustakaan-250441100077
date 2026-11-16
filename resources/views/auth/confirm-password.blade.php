<x-guest-layout>

    <!-- Heading -->
    <div class="mb-7 text-center">
        <h2 class="text-2xl font-bold text-gray-800">
            Konfirmasi Password
        </h2>

        <p class="mt-2 text-sm leading-relaxed text-gray-500">
            Ini adalah area yang aman. Silakan konfirmasi password kamu sebelum melanjutkan.
        </p>
    </div>

    <form method="POST" action="{{ route('password.confirm') }}">
        @csrf

        <!-- Password -->
        <div>
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="mt-2 block w-full" type="password" name="password" required
                autocomplete="current-password" autofocus placeholder="Masukkan password kamu" />

            <x-input-error :messages="$errors->get('password')" />
        </div>

        <!-- Submit -->
        <div class="mt-7">
            <x-primary-button class="w-full justify-center py-3">
                Konfirmasi
            </x-primary-button>
        </div>
    </form>

</x-guest-layout>
