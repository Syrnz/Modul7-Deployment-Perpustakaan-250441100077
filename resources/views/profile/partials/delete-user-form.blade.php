<section class="space-y-6">

    <header>
        <h2 class="text-lg font-bold text-red-700">
            Hapus Akun
        </h2>

        <p class="mt-2 text-sm leading-relaxed text-gray-500">
            Jika akun dihapus, seluruh data dan informasi yang terkait dengan akun ini akan dihapus secara permanen.
            Tindakan ini tidak dapat dibatalkan.
        </p>
    </header>

    <x-danger-button x-data="" x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')">
        Hapus Akun Saya
    </x-danger-button>

    <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
        <form method="post" action="{{ route('profile.destroy') }}" class="p-6">
            @csrf
            @method('delete')

            <div class="mb-5">
                <h2 class="text-lg font-bold text-gray-800">
                    Konfirmasi Penghapusan Akun
                </h2>

                <p class="mt-2 text-sm leading-relaxed text-gray-500">
                    Apakah kamu yakin ingin menghapus akun? Seluruh data akan dihapus secara permanen. Masukkan password
                    untuk mengonfirmasi tindakan ini.
                </p>
            </div>

            <!-- Password -->
            <div>
                <x-input-label for="password" value="Password" class="sr-only" />

                <x-text-input id="password" name="password" type="password" class="mt-1 block w-full"
                    placeholder="Masukkan password untuk konfirmasi" />

                <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
            </div>

            <!-- Actions -->
            <div class="mt-7 flex flex-wrap justify-end gap-3">

                <x-secondary-button x-on:click="$dispatch('close')">
                    Batal
                </x-secondary-button>

                <x-danger-button>
                    Ya, Hapus Akun
                </x-danger-button>

            </div>
        </form>
    </x-modal>

</section>
