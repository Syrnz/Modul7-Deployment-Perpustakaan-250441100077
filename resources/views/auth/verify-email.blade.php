<x-guest-layout>

    <!-- Heading -->
    <div class="mb-6 text-center">
        <div class="mx-auto mb-4 flex h-16 w-16 items-center justify-center rounded-full bg-red-50">
            <svg class="h-8 w-8 text-[#a82a2a]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                    d="M3 8l8.2 5.5a1.5 1.5 0 001.6 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
            </svg>
        </div>

        <h2 class="text-2xl font-bold text-gray-800">
            Verifikasi Email
        </h2>

        <p class="mt-2 text-sm leading-relaxed text-gray-500">
            Terima kasih sudah mendaftar! Sebelum memulai, silakan verifikasi alamat email kamu melalui tautan yang
            telah kami kirimkan.
        </p>
    </div>

    @if (session('status') == 'verification-link-sent')
        <div class="mb-5 rounded-lg border border-green-200 bg-green-50 px-4 py-3 text-sm font-medium text-green-700">
            Tautan verifikasi baru telah dikirim ke alamat email yang kamu gunakan saat mendaftar.
        </div>
    @endif

    <div class="space-y-4">

        <!-- Resend Verification -->
        <form method="POST" action="{{ route('verification.send') }}">
            @csrf

            <x-primary-button class="w-full justify-center py-3">
                Kirim Ulang Email Verifikasi
            </x-primary-button>
        </form>

        <!-- Logout -->
        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <button type="submit"
                class="w-full rounded-lg border border-gray-300 bg-white px-4 py-3 text-sm font-semibold text-gray-600 transition hover:border-[#a82a2a] hover:bg-red-50 hover:text-[#a82a2a] focus:outline-none focus:ring-2 focus:ring-[#a82a2a] focus:ring-offset-2">
                Keluar dari Akun
            </button>
        </form>

    </div>

</x-guest-layout>
