<section class="space-y-6">

    <header>
        <h2 class="text-lg font-bold text-gray-800">
            Ubah Password
        </h2>

        <p class="mt-1 text-sm text-gray-500">
            Gunakan password yang kuat untuk menjaga keamanan akun kamu.
        </p>
    </header>

    <form method="post" action="{{ route('password.update') }}" class="space-y-5">
        @csrf
        @method('put')

        <!-- Current Password -->
        <div>
            <x-input-label for="update_password_current_password" value="Password Saat Ini" />

            <x-text-input id="update_password_current_password" name="current_password" type="password"
                class="mt-2 block w-full" autocomplete="current-password" placeholder="Masukkan password saat ini" />

            <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
        </div>

        <!-- New Password -->
        <div>
            <x-input-label for="update_password_password" value="Password Baru" />

            <x-text-input id="update_password_password" name="password" type="password" class="mt-2 block w-full"
                autocomplete="new-password" placeholder="Masukkan password baru" />

            <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div>
            <x-input-label for="update_password_password_confirmation" value="Konfirmasi Password Baru" />

            <x-text-input id="update_password_password_confirmation" name="password_confirmation" type="password"
                class="mt-2 block w-full" autocomplete="new-password" placeholder="Masukkan ulang password baru" />

            <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
        </div>

        <!-- Actions -->
        <div class="flex flex-wrap items-center gap-4">
            <x-primary-button>
                Simpan Password
            </x-primary-button>

            @if (session('status') === 'password-updated')
                <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm font-medium text-green-600">
                    Password berhasil diperbarui.
                </p>
            @endif
        </div>
    </form>

</section>
