<x-guest-layout>

    <!-- Heading -->
    <div class="mb-7 text-center">
        <h2 class="text-2xl font-bold text-gray-800">
            Buat Akun Baru
        </h2>
        <p class="mt-2 text-sm text-gray-500">
            Bergabunglah dengan Perpustakaan Ribuan Kata.
        </p>
    </div>

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Nama Lengkap')" />

            <x-text-input id="name" class="mt-2 block w-full" type="text" name="name" :value="old('name')" required
                autofocus autocomplete="name" placeholder="Masukkan nama lengkap" />

            <x-input-error :messages="$errors->get('name')" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />

            <x-text-input id="email" class="mt-2 block w-full" type="email" name="email" :value="old('email')"
                required autocomplete="username" placeholder="Masukkan alamat email" />

            <x-input-error :messages="$errors->get('email')" />
        </div>

        <!-- Nomor Telepon -->
        <div class="mt-4">
            <x-input-label for="no_telepon" value="Nomor Telepon" />

            <x-text-input id="no_telepon" class="mt-2 block w-full" type="tel" name="no_telepon" :value="old('no_telepon')"
                required autocomplete="tel" placeholder="Masukkan nomor telepon" />

            <x-input-error :messages="$errors->get('no_telepon')" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="mt-2 block w-full" type="password" name="password" required
                autocomplete="new-password" placeholder="Masukkan password" />

            <x-input-error :messages="$errors->get('password')" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Konfirmasi Password')" />

            <x-text-input id="password_confirmation" class="mt-2 block w-full" type="password"
                name="password_confirmation" required autocomplete="new-password"
                placeholder="Masukkan ulang password" />

            <x-input-error :messages="$errors->get('password_confirmation')" />
        </div>

        <!-- Actions -->
        <div class="mt-7">
            <x-primary-button class="w-full justify-center py-3">
                Daftar Sekarang
            </x-primary-button>
        </div>

        <div class="mt-6 border-t border-gray-200 pt-5 text-center">
            <p class="text-sm text-gray-600">
                Sudah memiliki akun?
                <a href="{{ route('login') }}"
                    class="font-semibold text-[#a82a2a] transition hover:text-[#801f1f] hover:underline">
                    Masuk sekarang
                </a>
            </p>
        </div>
    </form>

</x-guest-layout>
