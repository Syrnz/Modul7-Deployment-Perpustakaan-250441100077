<section class="space-y-6">

    <header>
        <h2 class="text-lg font-bold text-gray-800">
            Informasi Akun
        </h2>

        <p class="mt-1 text-sm text-gray-500">
            Perbarui nama dan alamat email yang terhubung dengan akun kamu.
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="space-y-5">
        @csrf
        @method('patch')

        <!-- Name -->
        <div>
            <x-input-label for="name" value="Nama Lengkap" />

            <x-text-input id="name" name="name" type="text" class="mt-2 block w-full" :value="old('name', $user->name)"
                required autofocus autocomplete="name" placeholder="Masukkan nama lengkap" />

            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>

        <!-- Email -->
        <div>
            <x-input-label for="email" value="Alamat Email" />

            <x-text-input id="email" name="email" type="email" class="mt-2 block w-full" :value="old('email', $user->email)"
                required autocomplete="username" placeholder="Masukkan alamat email" />

            <x-input-error class="mt-2" :messages="$errors->get('email')" />

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && !$user->hasVerifiedEmail())
                <div class="mt-3 rounded-lg border border-yellow-200 bg-yellow-50 p-4">
                    <p class="text-sm text-yellow-800">
                        Alamat email kamu belum diverifikasi.
                    </p>

                    <button form="send-verification" class="mt-2 text-sm font-semibold text-[#a82a2a] hover:underline">
                        Kirim ulang email verifikasi
                    </button>

                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 text-sm font-medium text-green-700">
                            Tautan verifikasi baru telah dikirim ke email kamu.
                        </p>
                    @endif
                </div>
            @endif
        </div>

        <!-- Actions -->
        <div class="flex flex-wrap items-center gap-4">
            <x-primary-button>
                Simpan Perubahan
            </x-primary-button>

            @if (session('status') === 'profile-updated')
                <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm font-medium text-green-600">
                    Perubahan berhasil disimpan.
                </p>
            @endif
        </div>
    </form>

</section>
