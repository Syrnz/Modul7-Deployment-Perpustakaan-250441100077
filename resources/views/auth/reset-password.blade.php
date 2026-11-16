<x-guest-layout>

    <!-- Heading -->
    <div class="mb-7 text-center">
        <h2 class="text-2xl font-bold text-gray-800">
            Atur Ulang Password
        </h2>
        <p class="mt-2 text-sm text-gray-500">
            Silakan masukkan password baru untuk akun kamu.
        </p>
    </div>

    <form method="POST" action="{{ route('password.store') }}">
        @csrf

        <!-- Password Reset Token -->
        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />

            <x-text-input id="email" class="mt-2 block w-full" type="email" name="email" :value="old('email', $request->email)"
                required autofocus autocomplete="username" placeholder="Masukkan alamat email" />

            <x-input-error :messages="$errors->get('email')" />
        </div>

        <!-- Password -->
        <div class="mt-5">
            <x-input-label for="password" :value="__('Password Baru')" />

            <x-text-input id="password" class="mt-2 block w-full" type="password" name="password" required
                autocomplete="new-password" placeholder="Masukkan password baru" />

            <x-input-error :messages="$errors->get('password')" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-5">
            <x-input-label for="password_confirmation" :value="__('Konfirmasi Password')" />

            <x-text-input id="password_confirmation" class="mt-2 block w-full" type="password"
                name="password_confirmation" required autocomplete="new-password"
                placeholder="Masukkan ulang password baru" />

            <x-input-error :messages="$errors->get('password_confirmation')" />
        </div>

        <!-- Submit -->
        <div class="mt-7">
            <x-primary-button class="w-full justify-center py-3">
                Simpan Password Baru
            </x-primary-button>
        </div>
    </form>

</x-guest-layout>
